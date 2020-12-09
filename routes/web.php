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
Route::get('/home', 'UserController@home')->name('home');
Route::get('/home/classroom/{classroom}','ClassroomController@show')->name('classList');
Route::resource('users', 'UserController');

