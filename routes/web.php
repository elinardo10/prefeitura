<?php

Route::get('/', function () {
    return redirect()->route('site.index');
});

Route::group(['prefix' =>'site'], function () {
    Route::get('',      ['as' => 'site.index', 'uses' => 'SiteController@index']);
    Route::get('sobre',      ['as' => 'site.historia', 'uses' => 'SiteController@sobre']);
});

Auth::routes();
Route::group(['prefix' =>'admin', 'middleware' => 'auth'], function () {
    Route::get('',      ['as' => 'admin.index', 'uses' => 'AdminController@index']);
    Route::get('lista',      ['as' => 'admin.listar', 'uses' => 'AdminController@listar']);
    Route::get('create',      ['as' => 'admin.create', 'uses' => 'AdminController@novo']);
    Route::post('adiciona', ['as' => 'admin.store', 'uses' => 'AdminController@store']);
});
Route::get('/home', 'HomeController@index');
