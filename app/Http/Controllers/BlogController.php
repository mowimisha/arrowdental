<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Page;
use App\Tender;
use App\Grant;
use App\Publication;
use App\User;
use App\Appointment;
use Response;
use ZipArchive;
use Redirect;
use Image;
use Zipper;
use DB;
use File;
use Illuminate\Support\Facades\Input;
use App\Comment;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostFormRequest;

class BlogController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {   
        $user = $request->user();

        if ($user->role == 'admin') {
          return View('administrator.index')
              ->with('posts', Post::orderBy('created_at','desc')->paginate(3))
              ->with('users', User::orderBy('created_at', 'desc')->paginate(3));
        } else {
          return View('administrator.index')
              ->with('posts', Post::where('author_id',$user->id)->where('active','1')->orderBy('created_at','desc')->paginate(3))
              ->with('tenders', Tender::orderBy('created_at', 'desc')->paginate(3))
              ->with('users', User::orderBy('created_at', 'desc')->paginate(3));
        }
        

    }

    public function page()
    {
        return View('pages.blog')
            ->with('posts', Post::where('active','1')->orderBy('created_at', 'desc')->paginate(5))
            ->with('tenders', Tender::orderBy('created_at', 'desc')->paginate(5));

        // $posts = Post::where('active','1')->orderBy('created_at','desc')->paginate(5);
        // $title = 'Latest Posts';
        // return view('pages.blog', compact('posts'));
    }

    public function homepage()
    {
        return View('pages.home')
            ->with('posts', Post::orderBy('created_at', 'desc')->paginate(3))
            ->with('tenders', Tender::orderBy('created_at', 'desc')->paginate(3));



        // $posts = Post::where('active','1')->orderBy('created_at','desc')->paginate(3);
        // $title = 'Latest Posts';
        // return view('pages.home', compact('posts'));

    }





//  --------------------------------------------------BLOG POSTS FUNCTIONS -----------------------------------------------------------------------------------------------------
      /**
       * Show the form for creating a new resource.
       *
       * @return Response
       */
      public function create(Request $request)
      {
          // 
          if($request->user()->can_post())
          {   

              return view('posts.create');
          }   
          else 
          {
              return redirect('/')->withErrors('You have not sufficient permissions for writing post');
          }
      }

      /**
       * Store a newly created resource in storage.
       *
       * @return Response
       */
      public function store(PostFormRequest $request)
      {
          $post = new Post();
          $post->title = $request->get('title');
          $post->image = $request->get('image');
          $post->body = $request->get('body');
          $post->slug = str_slug($post->title);
          
          $duplicate = Post::where('slug',$post->slug)->first();
          if($duplicate)
          {
              return redirect('new-post')->withErrors('Title already exists.')->withInput();
          }   
          
          $post->author_id = $request->user()->id;
          if($request->has('save'))
          {
              $post->active = 0;
              \Session::flash('flash_message','Post Saved Successfully.');            
          }           
          else 
          {
              $post->active = 1;
              \Session::flash('flash_message','Post Published Successfully.');    
          }

          if ($request->file('image') != '') {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $filename = preg_replace("/[^a-zA-Z0-9_.]/", "", $filename);

            Image::make($image->getRealPath())->resize(600, 400)->save('uploads/blog/thumbnail_images/' . $filename);
            $post->image = $filename;

            Image::make($image->getRealPath())->resize(700, 400)->save('uploads/blog/post_images/' . $filename);
            $post->image = $filename;


            $post->save();
            \Session::flash('flash_message','Post Saved Successfully.');
            return redirect('/new-post');
          } else {
            $post->save();
            \Session::flash('flash_message','Post Saved Successfully.');
            return redirect('/new-post');
          }

          // return redirect('edit/'.$post->slug)->withMessage($message);
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($slug)
    {
        $post = Post::where('slug',$slug)->first();

        if($post)
        {
            if($post->active == false)
                return redirect('/admin-dash')->withErrors('requested page not found');   
        }
        else 
        {
            return redirect('/admin-dash')->withErrors('requested page not found');
        }
        return view('pages.post', compact('post'));
    }


    /**
     * Display the specified resource in the BACKEND.
     *
     * @param  int  $id
     * @return Response
     */
    public function show_backend($slug)
    {
        $post = Post::where('slug',$slug)->first();

        if($post)
        {
            if($post->active == false)
                return view('posts.show', compact('post'));   
        }
        else 
        {
            return redirect('/admin-dash')->withErrors('requested page not found');
        }
        return view('posts.show', compact('post'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($slug){
            //get post data by id
            $post = Post::findorFail($slug);
            
            //load form view
            return view('posts.edit', compact('post'));
        }

    
    public function update(Request $request)
      {
        //
        $post_id = $request->input('post_id');
        $post = Post::find($post_id);
        if($post && ($post->author_id == $request->user()->id || $request->user()->is_admin()))
        {
          $title = $request->input('title');
          $slug = str_slug($title);
          $duplicate = Post::where('slug',$slug)->first();
          if($duplicate)
          {
            if($duplicate->id != $post_id)
            {
              return redirect('edit/'.$post->slug)->withErrors('Title already exists.')->withInput();
            }
            else 
            {
              $post->slug = $slug;
            }
          }
          $post->title = $title;
          $post->body = $request->input('body');
          if($request->has('save'))
          {
            $post->active = 0;
            \Session::flash('flash_message','Post Saved Successfully.');    
            $landing = '/my-all-posts';
          }            
          else {
            $post->active = 1;
            \Session::flash('flash_message','Post Updated Successfully.');  
            $landing = '/my-all-posts';
          }
          $post->save();
               return redirect($landing);
        }
        else
        {
          return redirect('/my-all-posts')->withErrors('you have not sufficient permissions');
        }
      }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Request $request, $id)
    {
        //
        $post = Post::find($id);
        if($post && ($post->author_id == $request->user()->id || $request->user()->is_admin()))
        {
            $post->delete();
            $data['message'] = 'Post deleted Successfully';
        }
        else 
        {
            $data['errors'] = 'Invalid Operation. You have not sufficient permissions';
        }

        \Session::flash('flash_message','Post Deleted Successfully.');
        return redirect('/my-all-posts')->with($data);
    }







//------------------------------------------  TENDER FUNCTIONS --------------------------------------------------------------------------/



    public function tender()
    {
        $tenders = Tender::paginate(10);
        $title = 'Latest Tenders';
        return view('pages.tenders', compact('tenders'));

        
    }

    public function all_appointments(Request $request)
    {
        //
        return View('posts.show_tender')
            ->with('appointments', Appointment::orderBy('created_at', 'desc')->paginate(10));
    }



    

    

    /**
     * Show the form for creating a new tender.
     *
     * @return Response
     */
    public function create_appointment(Request $request)
    {
        // 
        if($request->user()->can_post())
        {   

            return view('posts.tender');
        }   
        else 
        {
            return redirect('/')->withErrors('You have not sufficient permissions for writing post');
        }
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store_appointment(Request $request)
    {
        $appointment = new Appointment();           
        
        $appointment->procedure = $request['procedure'];
        $appointment->name = $request['name'];
        $appointment->phone = $request['phone'];
        $appointment->email = $request['email'];
        $appointment->date = $request['date'];
        $appointment->notes = $request['notes'];
        $appointment->save();


        \Session::flash('flash_message','Appointment Booked Successfully.'); //<--FLASH MESSAGE

            return back();
    }


    public function download_tender($newname){
      $path = public_path()."/uploads/tenders/".$newname;
      return Response::download($path, $newname);
    }


    public function destroy_tender(Request $request, $id)
    {

        $tender = Tender::find($id);

        unlink(public_path() .  '/uploads/tenders/' . $tender->filename );
            
        $tender->delete();

        \Session::flash('flash_message','Tender Deleted Successfully.');
        return redirect('/all-tenders');

        
    }





    //------------------------------------------------- PUBLICATIONS FUNCTIONS ---------------------------------------------------------------------------------/


    public function publications()
    {
        
        $publications = Publication::paginate(3);
        $title = 'Latest Publications';
        return view('pages.publications', compact('publications'));
    }


    public function all_publications(Request $request)
    {
        //
        return View('posts.show_publications')
            ->with('publications', Publication::orderBy('created_at', 'desc')->paginate(10));
    }

    


     /**
     * Show the form for creating a new tender.
     *
     * @return Response
     */
    public function create_publication(Request $request)
    {
        // 
        if($request->user()->can_post())
        {   

            return view('posts.publications');
        }   
        else 
        {
            return redirect('/')->withErrors('You have not sufficient permissions for writing post');
        }
    }



    public function store_publication(Request $request) {

      $publications = new Publication();

      $file = Input::file('filename');
      $file_name = $file->getClientOriginalName();
      $file_size = round($file->getSize() / 1024);
      $file_ex = $file->getClientOriginalExtension();
      $file_mime = $file->getMimeType();

      if (!in_array($file_ex, array('pdf', 'doc', 'docx'))) return Redirect::to('/')->withErrors('Invalid image extension we just allow ZIP, RAR, TAR');

       $newname = $file_name;
       $file->move(public_path(). '/uploads/publications/', $newname);        
       $publications->filename = $file_name;
       $publications->mime = $file_mime;


      $publications->save();
      \Session::flash('flash_message','Publication Posted Successfully.');
      return back();
      
    }


    public function download_publication($newname){
      $path = public_path()."/uploads/publications/".$newname;
      return Response::download($path, $newname);
    }


    public function destroy_publication(Request $request, $id)
    {

        $publication = Publication::find($id);

        unlink(public_path() .  '/uploads/publications/' . $publication->filename );
            
        $publication->delete();

        \Session::flash('flash_message','Publication Deleted Successfully.');
        return redirect('/show_publications');

        
    }



//-------------------------------------------------  GRANTS PUBLICATIONS -------------------------------------------------------------------------------/




    public function grants()
    {
        
        $grants = Grant::paginate(3);
        $title = 'Latest Grants';
        return view('pages.grants', compact('grants'));
    }


    public function all_grants(Request $request)
    {
        //
        return View('posts.show_grants')
            ->with('grants', Grant::orderBy('created_at', 'desc')->paginate(10));
    }

     /**
     * Show the form for creating a new tender.
     *
     * @return Response
     */
    public function create_grant(Request $request)
    {
        // 
        if($request->user()->can_post())
        {   

            return view('posts.grants');
        }   
        else 
        {
            return redirect('/')->withErrors('You have not sufficient permissions for writing post');
        }
    }



    public function store_grant(Request $request) {

      $publications = new Grant();

      $file = Input::file('filename');
      $file_name = $file->getClientOriginalName();
      $file_size = round($file->getSize() / 1024);
      $file_ex = $file->getClientOriginalExtension();
      $file_mime = $file->getMimeType();

      if (!in_array($file_ex, array('pdf', 'doc', 'docx'))) return Redirect::to('/')->withErrors('Invalid image extension we just allow ZIP, RAR, TAR');

       $newname = $file_name;
       $file->move(public_path(). '/uploads/grants/', $newname);        
       $publications->filename = $file_name;
       $publications->mime = $file_mime;


      $publications->save();
      \Session::flash('flash_message','Grants Posted Successfully.');
      return back();
      
    }


    public function download_grant($newname){
      $path = public_path()."/uploads/grants/".$newname;
      return Response::download($path, $newname);
    }


    public function destroy_grant(Request $request, $id)
    {

        $publication = Grant::find($id);

        unlink(public_path() .  '/uploads/grants/' . $publication->filename );
            
        $publication->delete();

        \Session::flash('flash_message','Grant Deleted Successfully.');
        return redirect('/show_grants');

        
    }


    
}
