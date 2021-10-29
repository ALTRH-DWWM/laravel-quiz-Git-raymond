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

Route::post('/signup', 'App\Http\Controllers\UserController@signupPostAction')->name('signup_post');

Route::get('/tags', 'App\Http\Controllers\TagController@tagsAction')->name('tags');

Route::get('/tags/{tagId}/quiz', 'App\Http\Controllers\TagController@quizzesAction')->name('tag_quizzes');

Route::post('/signin', 'App\Http\Controllers\UserController@signinPostAction')->name('signin_post');

Route::get('/profile', 'App\Http\Controllers\UserController@profileAction')->name('profile');

Route::post('/signout', 'App\Http\Controllers\UserController@signoutAction')->name('signout');

Route::post('/quiz/{id}', 'App\Http\Controllers\QuizController@quizPostAction')->name('quiz_post');
