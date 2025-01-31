<?php

Route::group(['prefix' => "admin", 'as' => "portal.", 'namespace' => "Portal", 'middleware' => ["web"]], function(){
    Route::group(['as' => "auth."], function(){
        Route::group(['middleware' => "portal.guest"], function(){
            Route::get('/login/{uri?}', ['as' => 'login', 'uses' => "AuthenticationController@login"]);
            Route::post('/login/{uri?}', ['uses' => "AuthenticationController@authenticate"]);
        });

        Route::get('/logout', ['as' => 'logout', 'uses' => "AuthenticationController@logout"]);
    });
    
    Route::group(['middleware' => "portal.auth"], function(){
        Route::get('/', ['as' => 'index', 'uses' => "MainController@index"]);
    });
});