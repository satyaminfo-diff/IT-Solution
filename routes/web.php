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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::resource('languages', App\Http\Controllers\languageController::class);




Route::resource('questionTypes', App\Http\Controllers\questionTypeController::class);


Route::resource('questions', App\Http\Controllers\QuestionController::class);


Route::resource('answers', App\Http\Controllers\AnswerController::class);
