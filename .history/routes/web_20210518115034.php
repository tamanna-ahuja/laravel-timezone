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

Auth::routes();
Route::resource('users', UserController::class);


Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'admin'], function () {
    Route::get('login', 'AdminControllers\LoginController@initContent');
    Route::post('postlogin', 'AdminControllers\LoginController@login')->name('post.adminlogin');
    Route::get('logout', 'AdminControllers\LoginController@logout');
    Route::get('dashboard', 'AdminControllers\LoginController@dashboard');
 });


          

 
