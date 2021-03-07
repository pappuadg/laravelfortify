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


Route::view('/home','home')->middleware('auth','verified');
Route::view('/profile/edit','profile.edit')->name('profile.edit')->middleware('auth');
Route::view('/profile/password','profile.password')->name('profile.password')->middleware('auth');