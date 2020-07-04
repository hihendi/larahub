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

Route::get('/', 'AnswerController@index')->name('answer.index');

Route::get('/data-tables', function () {
    return view('datatables');
});

Route::resource('answer', 'AnswerController')->except(['index','create']);
Route::resource('question', 'QuestionController')->except(['create']);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
