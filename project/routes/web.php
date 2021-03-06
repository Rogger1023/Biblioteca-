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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('books','BookController')->except('destroy');
Route::get('books/destroy/{book}', 'BookController@destroy')->name('books.destroy');

Route::resource('users','UserController')->except('destroy');
Route::get('users/destroy/{user}', 'UserController@destroy')->name('users.destroy');

Route::resource('lends','LendController')->only(['index','create','store']);
Route::get('lends/{lend}/unlink','LendController@unlink')->name('lends.unlink');
