<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Hash;

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

Route::get('/register', function () {
    return view('auth.register');
})->middleware(['auth'])->name('register');

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth'])->name('login');

Route::get('/profile', 'App\Http\Controllers\UserController@profile')->middleware(['auth'])->name('profile');;
Route::post('/profile', [UserController::class, 'updateAvatar']);
Route::post('/profile/delete', 'App\Http\Controllers\UserController@destroy')->name('destroy.user');

Route::get('/', 'App\Http\Controllers\DashboardController@index')->middleware(['auth'])->name('home');;

Route::get('/logout', 'App\Http\Controllers\LogoutController@perform')->name('logout.perform');

Route::get('/change-password','App\Http\Controllers\UserController@change_password')->name('change_password');
Route::post('/update-password','App\Http\Controllers\UserController@update_password')->name('update_password');	

require __DIR__.'/auth.php';



 