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
Route::get('/customcss', 'StyleController@css');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');



Route::prefix('admin')->middleware('permission:read-dashboard')->group(function () {
	Route::get('/', 'AdminController@dashboard')->name('admin.dashboard');
	Route::resource('/users', 'UserController')->middleware('permission:create-users, read-users, update-users, delete-users');
	Route::resource('/permissions', 'PermissionController', ['except' => 'destroy'])->middleware('permission:create-acl, read-acl, update-acl, delete-acl');
	Route::resource('/roles', 'RoleController', ['except' => 'destroy'])->middleware('permission:create-acl, read-acl, update-acl, delete-acl');
	Route::resource('/posts', 'PostController')->middleware('permission:update-posts');
	Route::resource('/styles', 'StyleController')->middleware('permission:update-styles');
});

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');



Route::get('/{slug}', 'PostController@slugPage');
