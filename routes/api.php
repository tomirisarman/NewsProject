<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Models\Author;
use App\Http\Models\Rubric;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/publish', 'ArticleController@publish')->name('publish');
Route::post('/create_author', 'ArticleController@create_author')->name('create_author');
Route::post('/add_rubric', 'ArticleController@create_rubric')->name('create_rubric');

Route::get('/authors', 'ArticleController@show_authors')->name('authors');
Route::get('/articles', 'ArticleController@show_articles')->name('articles');

Route::get('/rubrics/{id}', 'ArticleController@show_rubrics')->name('rubric_article');
Route::get('/search_by_authors/{id}', 'ArticleController@search_authors')->name('author_article');
