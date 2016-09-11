<?php

Route::get('/{view?}', 'TripController@view');

Auth::routes();

//Route::get('/home', 'HomeController@index');

Route::group(['prefix'=>'session'],function(){
	Route::get('{session_method?}/{key?}/{value?}','SessionController@runMethod');
});

Route::group(['prefix'=>'config'],function(){
	Route::get('{key?}/{value?}','ConfigController@runMethod');
});

//Route::get('react','ReactController@index');
//Route::group(['prefix'=>'react'],function(){
//
//});
////vue
//Route::get('vue','VueController@index');
//Route::group(['prefix'=>'vue'],function(){
//
//});
