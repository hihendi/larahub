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
    return view('tables');
});

Route::get('/data-tables', function () {
    return view('datatables');
});
<<<<<<< HEAD

Route::resource('answer', 'AnswerController')->except(['index','create']);
Route::resource('question', 'QuestionController')->except(['create','edit']);


=======
>>>>>>> parent of 21d608e... commit crud_laravel_1
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
