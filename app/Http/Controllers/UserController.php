<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Post;
use DB;
use Auth;

use App\Comment;
use Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
        /*
     * Display the posts of a particular user
     * 
     * @param int $id
     * @return Response
     */
    public function user_posts($id)
    {
        //
        $posts = Post::where('author_id',$id)->where('active','1')->orderBy('created_at','desc')->paginate(5);
        $title = User::find($id)->name;
        return view('home')->withPosts($posts)->withTitle($title);
    }

    public function user_posts_all(Request $request)
    {
        //
        $user = $request->user();
        $author_id = $user->author_id;

        if ($user->role == 'admin') {
          $posts = Post::orderBy('created_at','desc')->paginate(5);
          $title = $user->name;
          return view('posts.single')->withPosts($posts)->withTitle($title)
                  ->with('users', User::orderBy('created_at', 'desc')->paginate(3));
        } else {
          $posts = Post::where('author_id',$user->id)->where('active','1')->orderBy('created_at','desc')->paginate(5);
          $title = $user->name;
          return view('posts.single')->withPosts($posts)->withTitle($title)
                  ->with('users', User::orderBy('created_at', 'desc')->paginate(3));
        }
        
    }
    
    public function user_posts_draft(Request $request)
    {
        //
        $user = $request->user();
        $posts = Post::where('author_id',$user->id)->where('active','0')->orderBy('created_at','desc')->paginate(5);
        $title = $user->name;
        return view('posts.singlepost')->withPosts($posts)->withTitle($title);
    }


    //USER MANAGEMENT
    public function users(Request $request)
    {   
        $user = $request->user();

        if ($user->role == 'admin') {
          return View('administrator.users.single')
              ->with('users', User::orderBy('created_at','desc')->paginate(5));
        } else {
          return View('administrator.users.single')
              ->with('users', User::where('id',$user->id)->orderBy('created_at','desc')->paginate(5));
        }
        
    }

    public function create(Request $request)
    {
        // 
        if($request->user()->can_post())
        {   

            return view('administrator.users.create');
        }   
        else 
        {
            return redirect('/')->withErrors('You have not sufficient permissions for writing post');
        }
    }

    public function create_user(Request $request) {
       $user = new User();
       $user->name = $request->get('name');
       $user->firstname = $request->get('firstname');
       $user->lastname = $request->get('lastname');
       $user->email = $request->get('email');
       $user->password = Hash::make($request->get('password'));
       $user->role = $request->get('role');

       $user->save();
       \Session::flash('flash_message','User Created Successfully.');
       return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id){
            //get post data by id
            $user = User::findorFail($id);
            
            //load form view
            return view('administrator.users.edit')
               ->with('users', User::where('role', 'author')->paginate(3));
        }

    public function update(Request $request)
      {
           $rules = [
           'name_first'            =>  'required',
           'name_last'             =>  'required',
           'email'                 =>  'unique:users,email,'.$id.'|required|email',
           'username'              =>  'unique:users,username,'.$id.'|required'
       ];

       $messages = [
           'name_first.required'   =>  'Your first name is required.',
           'name_last.required'    =>  'Your last name is required.',
           'email.required'        =>  'Your emails address is required.',
           'email.unique'          =>  'That email address is already in use.',
           'username.required'     =>  'Your username is required.',
           'username.unique'       =>  'That username is already in use.'
       ];

       $validator = Validator::make($request->all(), $rules, $messages);

       if($validator->fails())
       {
           return Redirect::to('admin/profile')
               ->withErrors($validator)
               ->withInput();
       }else{
           $user = User::find($id);
           $user->name_first = $request->input('name_first');
           $user->name_last = $request->input('name_last');
           if($user->email !== $request->input('email'))
           {
               $user->email = $request->input('email');
           }
           if($user->username !== $request->input('username'))
           {
               $user->username = $request->input('username');
           }
           $user->save();

           Session::flash('success', 'Your profile was updated.');
           return Redirect::to('admin/profile');
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
        $user = User::find($id);
        if($user->role == 'author')
        {
            $user->delete();
            \Session::flash('flash_message','User Deleted Successfully.');
        }
        else 
        {
            \Session::flash('flash_message','Ensure you are admin to Delete Users.');
        }

        return redirect('/all-users');
    }

}
