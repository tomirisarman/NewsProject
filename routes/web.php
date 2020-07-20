<?php

use Illuminate\Support\Facades\Route;
use App\Http\Models\Author;
use App\Http\Models\Rubric;

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
})->name('home');


Route::get('/add_article',  function () {
    return view('add_article', ['authors' => Author::all(), 'rubrics' => Rubric::all()]);
})->name('add_article');

Route::get('/add_author',  function () {
    return view('add_author');
})->name('add_author');

Route::get('/add_rubric',  function () {
    return view('add_rubric');
})->name('add_rubric');

Route::post('/publish', 'ArticleController@publish')->name('publish');
Route::post('/create_author', 'ArticleController@create_author')->name('create_author');
Route::post('/add_rubric', 'ArticleController@create_rubric')->name('create_rubric');

Route::get('/authors', 'ArticleController@show_authors')->name('authors');
Route::get('/articles', 'ArticleController@show_articles')->name('articles');

Route::get('/rubrics',  function () {
    return view('rubrics', ['rubrics' => Rubric::all()]);
})->name('search_by_rubrics');

Route::get('/rubrics/{id}', 'ArticleController@show_rubrics')->name('rubric_article');

Route::get('/search_by_authors',  function () {
    return view('/search_by_authors', ['authors' => Author::all()]);
})->name('search_by_authors');

Route::get('/search_by_authors/{id}', 'ArticleController@search_authors')->name('author_article');
