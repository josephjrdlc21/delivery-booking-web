<?php

Route::group(['prefix' => "admin", 'as' => "portal", 'namespace' => "Portal", 'middleware' => ["web"]], function(){
    Route::get('/', ['as' => 'index', 'uses' => "MainController@index"]);
});