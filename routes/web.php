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

Route::get('/home', 'UserController@index')->name('home');
Route::get('/home/1daw','UserController@clase')->name('1daw');
Route::get('/home/1daw/{id}','UserController@studentFile')->where('id', '[0-9]+');
Route::get('/', 'WelcomeController@index');