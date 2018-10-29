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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','Home@index');

Route::get('/login','Login@loginindex');

Route::get('/register','Login@registerindex');

Route::get('/profile','userprofile@index');

Route::post('/setusers','login@setusers');

Route::post('/emailexist','login@emailexist');

Route::post('/setlogin','login@setlogin');

Route::get('/logout','login@logout');

Route::get('/test','login@emailexist');
