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

//Website Routes
Route::get('/', [App\Http\Controllers\FrontendController::class, 'index']);
Route::get('/about',[App\Http\Controllers\FrontendController::class, 'about']);
Route::get('/contact',[App\Http\Controllers\FrontendController::class, 'contact']);
Route::get('/signup',[App\Http\Controllers\FrontendController::class, 'signup']);
Route::get('/user-login',[App\Http\Controllers\FrontendController::class, 'login']);
Route::get('/package',[App\Http\Controllers\FrontendController::class, 'package']);
Route::get('/package-details',[App\Http\Controllers\FrontendController::class, 'packageDetails']);
Route::get('/why-choose-us',[App\Http\Controllers\FrontendController::class, 'whyUs']);

Auth::routes();

//User Panel Routes
Route::group(['prefix'=>'user','as'=>'user'], function() {
    Route::get('/profile',[App\Http\Controllers\UserController::class, 'profile']);
});

Route::group(['prefix'=>'admin','as'=>'admin'], function() {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/plans/add',[App\Http\Controllers\PlansController::class, 'show']);
});



