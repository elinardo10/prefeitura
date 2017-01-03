<?php

Route::get('/', function () {
    return view('site.index');
});

Route::group(['prefix' =>'site'], function () {
    Route::get('inicial',      ['as' => 'site.index', 'uses' => 'SiteController@index']);
    Route::get('sobre',      ['as' => 'site.sobre', 'uses' => 'SiteController@sobre']);
});
