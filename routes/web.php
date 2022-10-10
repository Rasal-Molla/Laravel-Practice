<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
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

Route::name('frontend.')->namespace('Frontend')->group(function(){

    Route::get('/', [HomeController::class,'welcome']);
    Route::get('/contact', [HomeController::class,'contact'])->name('contact');

});

Route::name('backend.')->prefix('admin')->namespace('Backend')->group(function(){

    Route::get('/create', [HomeController::class,'welcome'])->name('create');
    Route::get('/lists', [HomeController::class,'welcome'])->name('lists');
    Route::get('/contact', [HomeController::class,'contact'])->name('contact');
    Route::get('/users', [HomeController::class,'welcome'])->name('users');

});





