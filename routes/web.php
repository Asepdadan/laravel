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

Route::get('/baru dari local',function(){
return "hello baru";
});

Route::get('/baru lagi dari local',function(){
return "hello baru lagi";
});

Route::get('/baru lagi dari local',function(){
return "hello baru lagi update 1 direktori";
});

Route::get('/baru lagi dari local',function(){
return "hello baru lagi update 1 direktori lagi";
});

Route::get('/baru lagi dari local',function(){
return "hello baru lagi update 1 direktori lagi dan lagi";
});
