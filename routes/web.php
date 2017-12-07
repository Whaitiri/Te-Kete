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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::prefix('admin')->middleware('role:superadministrator|administrator|editor|author|contributor')->group(function () {
	Route::get('/', 'AdminController@dashboard')->name('admin.dashboard');
	Route::resource('/users', 'UserController');
	Route::resource('/permissions', 'PermissionController', ['except' => 'destroy']);
	Route::resource('/roles', 'RoleController', ['except' => 'destroy']);
});

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
