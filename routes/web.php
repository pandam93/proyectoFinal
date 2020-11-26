<?php
use App\Article;
use App\Tag;

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


/*
Route::get('/', function () {
$articles = Article::all();
$tags = Tag::all();
return view('welcome', ['articles' => $articles, 'tags' => $tags]);
});
*/

Auth::routes();
Route::get('/home', 'ArticleController@main')->name('home');
Route::resources([
  'users' => 'UserController',
  'profiles' => 'ProfileController',
  'articles' => 'ArticleController',
  'comments' => 'CommentController'
]);
Route::get('/users/{id}/articles', 'ArticleController@articles');
Route::get('/', 'WelcomeController@index');

//Route::resource('tasks', 'TaskController');
