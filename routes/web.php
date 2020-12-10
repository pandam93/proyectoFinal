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


Route::prefix('/home')->group(function () {
    Route::resource('tasks', 'TaskController');
});


