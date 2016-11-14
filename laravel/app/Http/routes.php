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

Route::get('/', function () {
     return view('index');
    //return['1'=>'hello','2'=>'world'];
});

Route::get('links', 'LinksController@index');
Route::get('index', 'UserController@index');
Route::post('add', 'UserController@add');
Route::any('show', 'UserController@show');
Route::get('/del/{id}','UserController@del');
Route::get('up/{id}','UserController@up');
Route::post('update', 'UserController@update');
Route::get('work', 'WorkController@work');
Route::get('index', 'IndexController@index');
Route::get('blog', 'BlogController@blog');
Route::get('blog-info', 'BlogInfoController@BlogInfo');
Route::get('process_info', 'ProcessInfoController@ProcessInfo');
Route::get('process', 'ProcessController@process');
Route::get('login', 'LoginController@login');
Route::get('register', 'RegisterController@register');
Route::get('user-info', 'UserInfoController@userinfo');
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
