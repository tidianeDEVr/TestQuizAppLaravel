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

// Static Routes
Route::get('/', [\App\Http\Controllers\AppController::class, 'index'])->name('index');
Route::get('/dashboard', [\App\Http\Controllers\AppController::class, 'dashboard'])->name('dashboard');
Route::get('/quizz', [\App\Http\Controllers\AppController::class, 'quizz'])->name('app_quizz');
Route::post('/quizz', [\App\Http\Controllers\AppController::class, 'quizzSubmit'])->name('app_quizz_submit');
Route::get('/result', [\App\Http\Controllers\AppController::class, 'result'])->name('result');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Google Login
Route::get('login/google', [\App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle']
)->name('login.google');
Route::get('login/google/callback', [\App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);

// // Facebook Login
Route::get('login/facebook', [\App\Http\Controllers\Auth\LoginController::class, 'redirectToFacebook']
)->name('login.facebook');
Route::get('login/facebook/callback', [\App\Http\Controllers\Auth\LoginController::class, 'handleFacebookCallback']);
