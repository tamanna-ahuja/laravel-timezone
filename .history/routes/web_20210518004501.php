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

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'admin'], function () {
    Route::get('login', 'AdminControllers\LoginController@initContent');
    Route::post('login', 'AdminControllers\LoginController@login')->name('post.adminlogin');
    Route::get('logout', 'AdminControllers\LoginController@logout');
 });
 Route::group(['prefix' => 'authority'], function () {
            Route::group(['middleware' => ['admins']], function () {
                 Route::get('dashboard', 'AdminControllers\DashboardController@initContent');
           });

          
});
 
