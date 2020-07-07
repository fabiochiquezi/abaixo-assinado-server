<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/login', 'LoginController@index')->name('login');


Route::get('/login', 'LoginController@index')->name('dashboard.login');
Route::post('/login/action', 'LoginController@loginAction')->name('dashboard.login.action');
Route::post('/logout/action', 'LoginController@logoutAction')->name('dashboard.logout.action');

Route::get('/', 'EditSystemController@index')->name('dashboard.home');
Route::post('/edit-form-site', 'EditSystemController@editFormSite')->name('dashboard.editFormSite.action');
