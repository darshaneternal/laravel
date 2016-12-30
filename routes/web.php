<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    
    return view('welcome');
});

Route::resource('productCRUD','ProductCRUDController');
Route::resource('userRegistration','UserRegistrationController');
Route::resource('userRegistrationAdmin','UserRegistrationAdminController');
Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('linkedin', function () {

    return view('linkedinAuth');

});

Route::get('auth/linkedin', 'Auth\AuthController@redirectToLinkedin');

Route::get('auth/linkedin/callback', 'Auth\AuthController@handleLinkedinCallback');


Route::get('image-upload-with-validation',['as'=>'getimage','uses'=>'ImageController@getImage']);
Route::post('image-upload-with-validation',['as'=>'postimage','uses'=>'ImageController@postImage']);

Route::get('/booksInfo', function(){

    $books =  \App\Book::all();

    return view('booksinfo', compact('books'));
});

Route::get('/author/{name}', function($name){
	$author =  \App\Author::where('name', $name)->firstOrFail();
	

    return view('authors.author', compact('author'));
});

Route::get('/userAssociatedRole/{username}', function($username){
    // Looking for name = john according to above demo url from users table
    $user = App\User::where('name', $username)->with('roles')->first();
    return view('user', compact('user'));
});

// http://localhost/userAssociatedRole/administrator
Route::get('/roleAssociatedUser/{rolename}', function($rolename){
    // Looking for name = administrator according to above demo url from roles table  
    $role = App\Role::where('name', $rolename)->with('users')->first();
    return view('role', compact('role'));
});

Route::get('account/login', function() {
  return View::make('login');
});

//Route::resource('userRegistration','UserRegistrationController@login');
//Route::resource('account/login', 'UserRegistrationController@login');

