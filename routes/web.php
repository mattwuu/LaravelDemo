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


Route::get('/', function () {
    return view('welcome');
});

//Route::get('/phpinfo', function () {
//    return dd(phpinfo());
//});

//Route::get('hello', function (){
//    return 'This is a request from get method.';
//});

//Route::match(['get', 'post'], 'foo', function () {
//    return 'this is a request from get or post methods.';
//});
//
//Route::any('bar', function () {
//    return '<form method="post" action="/foo">' . csrf_field() . '<button type="submit">提交</button></form>';
//});
//
//Route::view('hello', 'hello', ['title' => 'Laravel', 'content' => '您好，欢迎来到Laravel的世界！']);

/*Route::get('user/{id}/name/{name?}', function ($id, $name = 'JamesBond') {
    return 'USER_ID : ' . $id . ' -- USER_NAME : ' . $name;
});*/

//Route::get('user/{id}/{name}', function ($id, $name) {
//    return 'user id => ' . $id . ' --- ' . 'user_name => ' . $name;
//})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);
//
//Route::get('user/{id}', 'UserController@show');
//
//Route::get('biz', function (){
//
//});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::any('/upload', 'UploadController@make');
Route::any('/upload-simditor', 'UploadController@uploadSimditor');

