<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'PageController@home');

Route::get('/about', 'PageController@about');

Route::get('/services', 'PageController@services');

Route::get('/blog', 'PageController@blog');

Route::get('/appointments', 'PageController@appointments');

Route::post('/appointments', 'PageController@create_appointments');

Route::get('/contacts', 'PageController@contacts');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');



// Route::get('/home', 'BlogController@homepage');

// Route::get('/blog','BlogController@page');

// Route::get('/tenders','BlogController@tender');

// Route::get('delete_tender/{id}','BlogController@destroy_tender');

// Route::get('download_tender/{filename}','BlogController@download_tender');

// Route::get('/show_publications','BlogController@all_publications');

// Route::get('/create_publications','BlogController@create_publication');

// Route::post('/create_publications','BlogController@store_publication');

// Route::get('download_publication/{filename}','BlogController@download_publication');

// Route::get('delete_publication/{id}','BlogController@destroy_publication');


// Route::get('/show_grants','BlogController@all_grants');

// Route::get('/create_grant','BlogController@create_grant');

// Route::post('/create_grant','BlogController@store_grant');

// Route::get('download_grant/{filename}','BlogController@download_grant');

// Route::get('delete_grant/{id}','BlogController@destroy_grant');

Route::group(['middleware' => 'auth'], function() {
   Route::get('/admin-dash','BlogController@index');
 });

Route::group(['/middleware' => ['auth', 'web']], function()
{

	//USER ADMIN ROUTES
	Route::get('all-users','UserController@users');

	Route::get('new-user','UserController@create');

	Route::post('new-user','UserController@create_user');

	Route::get('/edit-user/{id}','UserController@edit');

	Route::post('update-user','UserController@update');

	Route::get('/delete-user/{id}','UserController@destroy');


	//PAGES ADMIN ROUTES
	Route::get('all-pages','PageController@pages');

	Route::get('new-page','PageController@create_page');

	Route::post('new-page','PageController@store_page');

	Route::get('/edit-user/{id}','PageController@edit');

	Route::post('update-user','PageController@update');

	Route::get('/delete-user/{id}','PageController@destroy');





















	//BLOG ADMIN ROUTES
	// show new post form
	Route::get('/new-post','BlogController@create');

	// show new tender form
	Route::get('/new-tender','BlogController@create_tender');

	// save new tender
	Route::post('/new-tender','BlogController@store_tender');
	
	// save new post
	Route::post('/new-post','BlogController@store');
	
	// edit post form
	Route::get('/edit/{id}','BlogController@edit');
	
	// update post
	Route::post('update','BlogController@update');
	
	// delete post
	Route::get('delete/{id}','BlogController@destroy');
	
	// display user's all posts
	Route::get('my-all-posts','UserController@user_posts_all');

	// display user's all posts
	Route::get('all-tenders','BlogController@all_tenders');

	// display user's drafts
	Route::get('my-drafts','UserController@user_posts_draft');


	// display single post (backend)
	Route::get('/my-all-posts/{slug}',['as' => 'posts', 'uses' => 'BlogController@show_backend'])->where('slug', '[A-Za-z0-9-_]+');
	
	

	// Route::post('/publish', ['as' => 'publish', 'uses' => 'UserController@postPublish']);
	
	
	// // add comment
	// Route::post('comment/add','CommentController@store');
	
	// // delete comment
	// Route::post('comment/delete/{id}','CommentController@distroy');

	
	
});

//users profile
// Route::get('user/{id}','UserController@profile')->where('id', '[0-9]+');

// // display list of posts
// Route::get('user/{id}/posts','UserController@user_posts')->where('id', '[0-9]+');

// // display single post
// Route::get('blog/{slug}',['as' => 'posts', 'uses' => 'BlogController@show'])->where('slug', '[A-Za-z0-9-_]+');







