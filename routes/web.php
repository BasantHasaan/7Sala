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
// Route::group( function () {

Route::get('/', 'home@main');
Route::get('com', array('as'=>'com','uses' => 'home@dashboard'));
Route::get('com/login', array('as'=>'com','uses' => 'home@showLogin'));
Route::get('com/profile', array('as'=>'new','uses' => 'home@Profile'));

// route to show the login form
Route::get('login', array('as'=>'login','uses' => 'home@showLogin'));
Route::get('register', array('as'=>'register','uses' => 'home@showRegister'));
Route::post('register', 'home@doRegister');

Route::post('login', 'home@doLogin');
Route::get('logout', array('as'=>'logout','uses' => 'home@logout'));
Route::get('refresh', array('as'=>'refresh','uses' => 'home@refresh'));
Route::get('profile',array('as'=>'profile','uses' => 'users@profile'));
// Route::post('dashboard/users/saveProfile', 'users@saveProfile');
// });

