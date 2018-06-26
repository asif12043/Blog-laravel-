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
// */

// Route::get('/', function () {
//     $home_content = view('pages.home');
//     return view('welcome')->with('content',$home_content);
// });


Route::get('/', 'WelcomeController@index');