<?php

use Illuminate\Http\Request;
use App\Article;
use App\Http\Middleware\News;

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

//Route::get('articles', 'ArticleController@index')->middleware(News::class);
//Route::get('articles/{article}', 'ArticleController@show');
//Route::post('articles', 'ArticleController@store');

Route::middleware(News::class)->group(function() {
    // Route::get("test", "hallo!");
    Route::get('articles', 'ArticleController@index');
    Route::get('articles/{article}', 'ArticleController@show');
    Route::post('articles', 'ArticleController@store');
});



Route::put('articles/{article}', 'ArticleController@update');
Route::delete('articles/{article}', 'ArticleController@delete');
/* if time permits, Also changed {id} to {article}
//OLD VERSION, UPDATED TO CLEANER CODE

//Route::get('articles', function() {
//    return Article::all();
//});
//
//Route::get('articles/{id}', function ($id) {
//    return Article::find($id);
//});
//
//Route::post('articles',  function(Request $request) {
//    return Article::create($request->all);
//});

//Route::put('articles/{id}', function(Request $request, $id) {
//    $article = Article::findOrFail($id);
//    $article->update($request->all());
//
//    return $article;
//});
//
//Route::delete('articles/{id}', function($id) {
//    Article::find($id)->delete();
//
//    return 204;
//});


//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
*/

