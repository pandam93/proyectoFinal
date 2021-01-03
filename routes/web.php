<?php
use App\Article;
use App\Tag;
use App\User;

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

Auth::routes();

Route::get('/', 'WelcomeController@index')->name('/');

Route::get('/home', 'UserController@index')->name('home');


Route::prefix('{subject}')->group(function () {
    Route::resource('tasks', 'TaskController')->only(['index','show']);
    Route::resource('student', 'StudentController')->only(['index', 'show']);
    Route::resource('temary', 'TemaryController')->only(['index','show']);
    Route::prefix('students/{id}')->group(function () {
        Route::resource('tasks', 'StudentTaskController')->only(['index','show']);
    });
});

