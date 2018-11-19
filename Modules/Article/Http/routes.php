<?php

Route::group(['middleware' => ['web', 'auth:admin'], 'prefix' => 'article', 'namespace' => 'Modules\Article\Http\Controllers'], function () {
    Route::resource('category', 'CategoryController');
    Route::get('/', 'ContentController@index');
});


//content-route
Route::group(['middleware' => ['web', 'auth:admin'], 'prefix' => 'article', 'namespace' => "Modules\Article\Http\\Controllers"], function () {
    Route::resource('content', 'ContentController')->middleware("permission:admin,resource");
});