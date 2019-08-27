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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'dashboardcontroller@index')->name('dashboard');
Auth::routes();
// Login Route
Route::get('login', 'logincontroller@getlogin')->name('login');
Route::post('postlogin', 'logincontroller@postLogin')->name('postlogin');
// Logout Route
Route::get('/modal_logout', 'logoutcontroller@getlogout')->name('modal_logout');
Route::get('/logout', 'logoutcontroller@logout')->name('logout');
