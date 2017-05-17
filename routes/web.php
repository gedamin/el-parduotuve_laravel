<?php

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
    return view('home');
});


Route::group(['middleware' => ['auth', 'adminas']], function(){
    Route::get('/SEO-optimizacija/admin', 'SeoPostController@index')->name('SEO-optimizacija.admin.index');

    Route::get('/SEO-optimizacija/add', 'SeoPostController@add')->name('SEO-optimizacija.admin.add');
    Route::post('/SEO-optimizacija/insert', 'SeoPostController@insert')->name('SEO-optimizacija.admin.insert');

    Route::get('/SEO-optimizacija/edit/{id}', 'SeoPostController@edit')->name('SEO-optimizacija.admin.edit');

    Route::post('/SEO-optimizacija/edit/{id}', 'SeoPostController@update')->name('SEO-optimizacija.admin.update');
    Route::get('/SEO-optimizacija/delete/{id}', 'SeoPostController@delete')->name('SEO-optimizacija.admin.delete');

    Route::get('/SEO-optimizacija/admin/comments/{id}', 'SeoPostController@seoPostComment')->name('SEO-optimizacija.comments.list');
    Route::get('/SEO-optimizacija/comments/', 'SeoPostController@seoPostCommentsAll')->name('SEO-optimizacija.comments.list.all');
    Route::get('/SEO-optimizacija/comments/delete/{id}', 'SeoPostController@seoPostCommentDelete')->name('SEO-optimizacija.comment.delete');
});

Route::get('/SEO-optimizacija.php', 'MainController@index');

Route::get('/SEO-optimizacija/seo-efektyviausia-reklama-internete.php', 'MainController@post');
Route::get('/SEO-optimizacija/{id}', 'MainController@seoPostView');


//Komentarams
Route::post('/SEO-optimizacija/{id}', 'SeoPostController@insertComent')->name('SEO-optimizacija.comment.insert');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
