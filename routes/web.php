<?php


Route::get('/', function () {
    return view('login.index');
});

Route::get('/',['as'=>'login','uses'=>'Home\LoginController@index']);
Route::post('/login',['as'=>'login.enter','uses'=>'Home\LoginController@login']);
Route::get('/login/logout',['as'=>'logout','uses'=>'Home\LoginController@logout']);

Route::get('/User',['as'=>'users','uses'=>'User\UserController@index']);
Route::post('/User/search',['as'=>'users.search','uses'=>'User\UserController@search']);
Route::get('/User/Dados','User\UserController@buscar');

Route::group(['middleware'=>'auth'],function(){
Route::get('/dashboard',['as'=>'dashboard','uses'=>'Home\DashBoardController@index']);
});
