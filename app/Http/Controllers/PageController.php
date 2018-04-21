<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Page;
use App\Tender;
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

class PageController extends Controller
{

    public function home() {
      return view('pages.home');
    }

    public function about() {
      return view('pages.about');
    }

    public function services() {
      return view('pages.services');
    }

    public function blog() {
      return view('pages.blog');
    }

    public function appointments() {
        return view('pages.appointments');
    }

    public function contacts() {
        return view('pages.contact');
    }

  

    public function submitContact(ContactFormRequest $request) {
        // $this->validate($request, [
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'phone' => 'required',
        //     'subject' => 'required',
        //     'message' => 'required'
        // ]);

        // $data = array(
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'phone' => $request->phone,
        //     'subject' => $request->subject,
        //     'bodyMessage' => $request->message,

        // );

        // Mail::send('pages.mail', $data, function($message) use ($data){
        //     $message->from($data['email']);
        //     $message->to('michaelmagero2@gmail.com', 'LSF');
        //     $message->subject($data['subject']);
        // });

        \Mail::send('pages.mail',
                array(
                    'name' => $request->get('name'),
                    'email' => $request->get('email'),
                    'phone' => $request->get('phone'),
                    'subject' => $request->get('subject'),
                    'bodyMessage' => $request->get('message')
                ), function($message)
            {
                $message->from('info@lsftz.org');
                $message->to('info@lsftz.org', 'Admin')->subject('LSFContact Form Feedback');
        });


        \Session::flash('flash_message','Message sent successfully, We will get back to you'); 

            return redirect('/contact');
     }

     

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {   
        $user = $request->user();

        if ($user->role == 'admin') {
          return View('administrator.pages.single')
              ->with('pages', Page::orderBy('created_at','desc')->paginate(5));
        } else {
          return View('administrator.pages.single')
              ->with('pages', Page::where('id',$user->id)->orderBy('created_at','desc')->paginate(5));
        }
        

    }



    public function create_appointments(Request $request) {
        $appointment = new Appointment();           
        
        $appointment->procedure = $request['procedure'];
        $appointment->name = $request['name'];
        $appointment->phone = $request['phone'];
        $appointment->email = $request['email'];
        $appointment->date = $request['date'];
        $appointment->notes = $request['notes'];
        $appointment->save();


        \Session::flash('flash_message','Appointment Booked Successfully.'); //<--FLASH MESSAGE

            return redirect('/appointments');
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

   //  public function publications()
   //  {
        
   //      $publications = Publication::paginate(3);
   //      $title = 'Latest Publications';
   //      return view('pages.publications', compact('publications'));
   //  }


   //  public function all_publications(Request $request)
   //  {
   //      //
   //      return View('posts.show_publications')
   //          ->with('publications', Publication::orderBy('created_at', 'desc')->paginate(10));
   //  }

   //  public function tender()
   //  {
   //      $tenders = Tender::paginate(10);
   //      $title = 'Latest Tenders';
   //      return view('pages.tenders', compact('tenders'));

        
   //  }

   //  public function all_tenders(Request $request)
   //  {
   //      //
   //      return View('posts.show_tender')
   //          ->with('tenders', Tender::orderBy('created_at', 'desc')->paginate(10));
   //  }

   // public function pages()
   // {
       
   //     $pages = Page::paginate(3);
   //     return view('administrator.pages.single', compact('pages'));
   // }


   // public function all_grants(Request $request)
   // {
   //     //
   //     return View('posts.show_grants')
   //         ->with('grants', Grant::orderBy('created_at', 'desc')->paginate(10));
   // }

    /**
    * Show the form for creating a new tender.
    *
    * @return Response
    */
//    public function create_page(Request $request)
//    {
//        // 
//        if($request->user()->can_post())
//        {   

//            return view('administrator.pages.create');
//        }   
//        else 
//        {
//            return redirect('/')->withErrors('You have not sufficient permissions for writing post');
//        }
//    }



//      /**
//       * Store a newly created resource in storage.
//       *
//       * @return Response
//       */
//      public function store_page(PostFormRequest $request)
//      {
         
//          $page = new Page();
//          $page->title = $request->get('title');
//          $page->image = $request->get('image');
//          $page->content = $request->get('content');
//          $page->meta_title = $request->get('meta_title');
//          $page->meta_keywords = $request->get('meta_keywords');
//          $page->meta_description = $request->get('meta_description');
//          $page->slug = str_slug($page->title);
//          $page->author_id = $request->user()->id;
         
//          // $duplicate = Page::where('slug',$page->slug)->first();
//          // if($duplicate)
//          // {
//          //     return redirect('new-page')->withErrors('Title already exists.')->withInput();
//          // }   
         
//          $page->author_id = $request->user()->id;
//          if($request->has('save'))
//          {
//              $page->active = 0;
//              \Session::flash('flash_message','Page Saved Successfully.');            
//          }           
//          else 
//          {
//              $page->active = 1;
//              \Session::flash('flash_message','Page Published Successfully.');    

//          }

           
//            $page->save();
//            \Session::flash('flash_message','Page Saved Successfully.');
//            return redirect('/new-page');
//    }

    
// }

  }
