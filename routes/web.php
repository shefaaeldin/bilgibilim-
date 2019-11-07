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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard/home', 'DashboardHomeController@index')->name('dashboard_home');
Route::get('admin-login', 'Admin\Auth\LoginController@showLoginForm')->name('admin.login');
Route::post('admin-login', 'Admin\Auth\LoginController@login');
Route::resource('articles', 'ArticleController');
Route::get('ajax/articles', 'Ajax\ArticleAjaxController@index')->name('ajax.articles.index');
Route::resource('category', 'CategoryController');
Route::get('ajax/categories', 'CategoryController@index')->name('ajax.categories.index');
Route::resource('tag', 'TagController');
Route::get('ajax/tags', 'TagController@index')->name('ajax.tags.index');


