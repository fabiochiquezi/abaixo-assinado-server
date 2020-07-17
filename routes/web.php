<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

// Teste
// Route::get('/', function ()  return view('welcome'));
// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/login', 'LoginController@index')->name('login');

// Login
Route::view('/login', 'dashboard.login')->name('dashboard.login');
Route::post('/login/action', 'LoginController@loginAction')->name('dashboard.login.action');
Route::get('/logout/action', 'LoginController@logoutAction')->name('dashboard.logout.action');

// Dashboard - Page tabela de dados
Route::get('/data-table', 'DataTableController@index')->name('dashboard.dataTable');
Route::get('/csv-data-table-generate', 'DataTableController@csvGenerate')->name('dashboard.csvGenerate');
Route::get('/clean-data', 'DataTableController@cleanData')->name('dashboard.cleanData');

// Dashboard - Page abaixo assinado
Route::get('/edit-form', 'EditSystemController@index')->name('dashboard.editForm');
Route::get('/edit-form-site', 'EditSystemController@index')->name('dashboard.editForm-site');
// edit "formulário"
Route::post('/edit-form-site-action', 'EditSystemController@editFormSite')->name('dashboard.editFormSite.action');
// edit "conteúdo geral"
Route::post('/edit-site', 'EditSystemController@editSite')->name('dashboard.editSite');


// Site
Route::get('/', 'SiteController@index')->name('site.home');
Route::post('/site/action-form', 'SiteController@store')->name('site.form.action');
