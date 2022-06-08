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

Route::get('/',[\App\Http\Controllers\Controller::class,'home']);
Route::get('/home',[\App\Http\Controllers\Controller::class,'home'])->name('home');

Route::get('/menu',[\App\Http\Controllers\MenuController::class,'index'])->name('menu');
Route::get('/addmenu',[\App\Http\Controllers\MenuController::class,'create'])->name('add menu');
Route::post('/menu',[\App\Http\Controllers\MenuController::class,'store'])->name('add_menu');

Route::get('/member',[\App\Http\Controllers\Controller::class,'member'])->name('member');

Route::get('/about',[\App\Http\Controllers\Controller::class,'about'])->name('about');

Route::get('/signup',[\App\Http\Controllers\Controller::class,'signup'])->name('signup');
Route::post('/signup',[\App\Http\Controllers\Controller::class,'store'])->name('add_account');
