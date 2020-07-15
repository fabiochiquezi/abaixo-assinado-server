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

Route::get('/data-table', 'DataTableController@index')->name('dashboard.dataTable');
Route::get('/csv-data-table-generate', 'DataTableController@csvGenerate')->name('dashboard.csvGenerate');

Route::get('/', 'EditSystemController@index')->name('dashboard.home');
Route::get('/edit-form-site', 'EditSystemController@editForm')->name('dashboard.editForm');
Route::post('/edit-form-site-action', 'EditSystemController@editFormSite')->name('dashboard.editFormSite.action');


Route::get('/site', 'SiteController@index')->name('site.home');
Route::post('/site/action-form', 'SiteController@store')->name('site.form.action');
