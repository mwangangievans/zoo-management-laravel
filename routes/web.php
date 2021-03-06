<?php
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', 'HomeController@index');
//
Route::resource('/bookings','BookingController');

Route::resource('/users', 'UserController');

Route::resource('/categories', 'CategoryController');

Route::resource('/animals','AnimalController');




Route::resource('/roles', 'RoleController');

Route::resource('/permissions', 'PermissionController');

Route::resource('/posts', 'PostController');
