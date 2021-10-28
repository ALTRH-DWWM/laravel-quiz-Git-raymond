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

Route::get('/', 'App\Http\Controllers\MainController@homeAction')->name('home');

Route::get('/signup', 'App\Http\Controllers\UserController@signupAction')->name('signup');

Route::get('/signin', 'App\Http\Controllers\UserController@signinAction')->name('signin');

Route::get('/quiz/{id}', 'App\Http\Controllers\QuizController@quizAction')->name('quiz');
