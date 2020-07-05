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

Route::get('/','SiteController@index');
Route::get('/learn_about_us','SiteController@learn_about_us');
Route::get('/Gallery', 'SiteController@gallery');
Route::get('/what_we_do','SiteController@what_we_do');
Route::get('contact_us','SiteController@contact_us');
Route::post('/contact/SendMessage', 'SiteController@SendMessage');
Route::get('/blog','SiteController@blog');
Route::get('/easyblog','SiteController@easyblog');
Route::get('/news','SiteController@news');

Route::get('/home','AdminController@index')->middleware('auth');

//Admin Routes
Route::get('/admin/myposts/ActionCenter/{post}','PostsController@actions');
Route::get('/admin/Messages',"AdminController@show")->middleware('auth');
Route::delete('admin/MessageRead/{id}',"AdminController@delete")->middleware('auth');
//Profile for Admins
Route::get('/admin/profile/{user}',"ProfileController@index")->middleware('auth');
Route::get('/admin/profile/edit/{user}','ProfileController@edit')->middleware('auth');
Route::patch('/admin/profile/{user}','ProfileController@update')->middleware('auth');

//Blog
Route::get('/admin/blog/newPost/{user}','PostsController@create')->middleware('auth');
Route::post('/admin/BlogPost/new/create', 'PostsController@store')->middleware('auth');
Route::get('/admin/blog/{post}','PostsController@index')->middleware('auth');
Route::get('search','SiteController@search');

//public comments
Route::post('/post_comment/{post}','PublicCommentsController@store');

//public blog
Route::get('/blog/{post}', 'SiteController@blogLinkAvailable');
Route::get('/img/{image}','SiteController@image');

Route::get('/admin/article/edit/{post}','PostsController@edit');
Route::patch('/admin/article/save/{post}','PostsController@save_edit');
Route::delete('/admin/article/delete/{post}', 'PostsController@delete');

Route::get('/admin/chat', 'ChatsController@index');
Route::get('/admin/chats', 'ChatsController@fetchMessages');
Route::post('/admin/chats', 'ChatsController@sendMessage');
Route::get('/admin/newsDesk','NewsController@edit');
Route::post('/admin/newsDesk/Write/{user}','NewsController@store');

Auth::routes();
Broadcast::routes(['middleware'=>['auth:api']]);

Route::get('/worldTutorialsCentre/requestTutorial','PublicTutorialsController@index');
Route::post('/worldTutorialsCentre/requestTutorial','PublicTutorialsController@store');
Route::get('/editPhoto/{user}','ImageController@index');
Route::post('/editPhoto/savephoto/{user}','ImageController@store');



//students
Route::get('/students/all','PublicTutorialsController@show')->name('students.all');




//privacy policy
Route::get('/policies/privacy/security/privacy_policy',
function(){
	return view('policies.policy');
});