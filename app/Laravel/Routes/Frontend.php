<?php

Route::group(['as' => "frontend.", 'namespace' => "Frontend", 'middleware' => ["web"]], function(){
    Route::get('/', ['as' => 'index', 'uses' => "MainController@index"]);
});