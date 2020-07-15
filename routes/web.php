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

// Login
Route::get('/login', 'LoginController@index')->name('dashboard.login');
Route::post('/login/action', 'LoginController@loginAction')->name('dashboard.login.action');
Route::get('/logout/action', 'LoginController@logoutAction')->name('dashboard.logout.action');

// Dashboard - Page tabela de dados
Route::get('/data-table', 'DataTableController@index')->name('dashboard.dataTable');
Route::get('/csv-data-table-generate', 'DataTableController@csvGenerate')->name('dashboard.csvGenerate');
Route::get('/clean-data', 'DataTableController@cleanData')->name('dashboard.cleanData');

// Dashboard - Page abaixo assinado
Route::get('/edit-form', 'EditSystemController@index')->name('dashboard.editForm');
Route::get('/edit-form-site', 'EditSystemController@editForm')->name('dashboard.editForm-site');
Route::post('/edit-form-site-action', 'EditSystemController@editFormSite')->name('dashboard.editFormSite.action');

// Site
Route::get('/', 'SiteController@index')->name('site.home');
Route::post('/site/action-form', 'SiteController@store')->name('site.form.action');
