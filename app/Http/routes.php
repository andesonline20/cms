<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('admin/post/example/{id}',function($id){
//
//    return "sample ID " . $id;
//});
//
//Route::get('admin/post/',array('as'=>'admin.home', function() {
//
//    $url = route('admin.home');
//
//    return "This is URL ". $url;
//
//}));
//
//
//Route::get('/post','PostController@index');

//Route::resource('/post','PostController');

Route::get('/post/contact','PostController@contact');


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
