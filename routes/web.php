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

Route::group(['middleware' => ['auth']], function(){

    Route::group(['middleware' => ['adminas']], function(){
        Route::get('/SEO-optimizacija/admin', 'SeoPostController@index')->name('SEO-optimizacija.admin.index');
        Route::get('/SEO-optimizacija/add', 'SeoPostController@add')->name('SEO-optimizacija.admin.add');
        Route::post('/SEO-optimizacija/insert', 'SeoPostController@insert')->name('SEO-optimizacija.admin.insert');
        Route::get('/SEO-optimizacija/edit/{id}', 'SeoPostController@edit')->name('SEO-optimizacija.admin.edit');
        Route::post('/SEO-optimizacija/edit/{id}', 'SeoPostController@update')->name('SEO-optimizacija.admin.update');
        Route::get('/SEO-optimizacija/delete/{id}', 'SeoPostController@delete')->name('SEO-optimizacija.admin.delete');
        Route::get('/SEO-optimizacija/admin/comments/{id}', 'SeoPostController@seoPostComment')->name('SEO-optimizacija.comments.list');

        Route::get('/SEO-optimizacija/admin/comments/', 'SeoPostController@seoPostCommentsAll')->name('SEO-optimizacija.comments.list.all');
        Route::get('/SEO-optimizacija/comments/delete/{id}', 'SeoPostController@seoPostCommentDelete')->name('SEO-optimizacija.comment.delete');
        Route::get('/SEO-optimizacija/comments/edit/{id}', 'SeoPostController@CommentEdit')->name('SEO-optimizacija.comment.edit');
        Route::post('/SEO-optimizacija/comments/edit/{id}', 'SeoPostController@CommentUpdate')->name('SEO-optimizacija.comment.update');

        //Mail to admin on post comment
        Route::post('/SEO-optimizacija/{id}', 'SentMailFromPostComment@PostCommentMail')->name('SEO-optimizacija.comment.insert');
        //Logo dizaineriai Admin
        Route::get('/admin/logotipu-dizaineriai', 'LogoDisainerController@LogoDisainersAdminView')->name('logotipu-kurimas.admin.disainer.view');
        Route::get('admin/logotipu-dizaineriai/edit/{id}', 'LogoDisainerController@DisainerEdit')->name('admin.logotipu-dizaineriai.edit');
        Route::post('admin/logotipu-dizaineriai/edit/{id}', 'LogoDisainerController@DisainerUpdate')->name('logotipu-dizaineriai.admin.update');
        Route::get('/SEO-admin/logotipu-dizaineriai/add', 'LogoDisainerController@addDisainer')->name('logotipu-dizaineriai.admin.add');
        Route::post('/admin/logotipu-dizaineriai/insert', 'LogoDisainerController@insertDisainer')->name('logotipu-dizaineriai.admin.insert');
        Route::get('/admin/logotipu-dizaineriai/delete/{id}', 'LogoDisainerController@deleteDisainer')->name('logotipu-dizaineriai.admin.delete');
        //Logo portfolio CRUD CONTROLER: LogoDisainerController.php MODEL disainerslogo_img
        Route::get('/admin/logotipu-dizaineriai/logos/{id}', 'LogoDisainerController@LogoAdminListView')->name('logo.admin.list.view');



//        Route::get('/laravel-filemanager', '\Unisharp\Laravelfilemanager\controllers\LfmController@show');
//        Route::post('/laravel-filemanager/upload', '\Unisharp\Laravelfilemanager\controllers\LfmController@upload');
//        Route::post('/laravel-filemanager/upload', '\Unisharp\Laravelfilemanager\controllers\UploadController@upload');
        // list all lfm routes here...
    });

    //Logo portfolio CRUD
    Route::get('/admin/logotipu-dizaineriai/logos/{id}', 'LogoDisainerController@LogoAdminListView')->name('logo.admin.list.view');
    //for user the same copy
    Route::get('/admin/logotipu-dizaineriai', 'LogoDisainerController@LogoDisainersAdminView')->name('logotipu-kurimas.admin.disainer.view');
    Route::get('admin/logotipu-dizaineriai/edit/{id}', 'LogoDisainerController@DisainerEdit')->name('admin.logotipu-dizaineriai.edit');
    Route::post('admin/logotipu-dizaineriai/edit/{id}', 'LogoDisainerController@DisainerUpdate')->name('logotipu-dizaineriai.admin.update');
    Route::get('/SEO-admin/logotipu-dizaineriai/add', 'LogoDisainerController@addDisainer')->name('logotipu-dizaineriai.admin.add');
    Route::post('/admin/logotipu-dizaineriai/insert', 'LogoDisainerController@insertDisainer')->name('logotipu-dizaineriai.admin.insert');
    Route::get('/admin/logotipu-dizaineriai/delete/{id}', 'LogoDisainerController@deleteDisainer')->name('logotipu-dizaineriai.admin.delete');

    //IMAGE gallery routes START
    Route::get('/admin/logotipu-dizaineriai/logotipai/{id}', 'ImageGalleryController@index')->name('logotipu-dizaineriai.admin.ImgGalleryCRUD');
    Route::post('/admin/logotipu-dizaineriai/logotipai/{id}', 'ImageGalleryController@upload')->name('logotipu-dizaineriai.admin.ImgGalleryCRUDupload');
    Route::delete('image-gallery/logo/{id}', 'ImageGalleryController@destroy')->name('LogoDelete');
    //IMAGE gallery routes END

    //Atlikti darbai routes START
    Route::get('/admin/atlikti-darbai', 'DarbaiGalleryController@index')->name('AtliktiDarbaiCRUD');
    Route::post('/admin/atlikti-darbai', 'DarbaiGalleryController@upload')->name('AtliktiDarbaiCRUDupload');
    Route::delete('image-gallery/{id}', 'DarbaiGalleryController@destroy');
    //Atlikti darbai routes END
});

//For comments
Route::post('/SEO-optimizacija/{id}', 'SeoPostController@insertComent')->name('SEO-optimizacija.comment.insert');
//Logo disainers list view
Route::get('/logotipu-kurimas.php', 'LogoDisainerController@LogoDisainersView')->name('logotipu-kurimas.list.view');
//Logo disainers Profiles
//Route::get('/logotipu-kurimas/{id}', 'LogoDisainerController@LogoDisainersViewPortfolio')->name('logotipu-kurimas.disainer.view'); //veikiantis buvo slug pagal id
Route::get('/logotipu-kurimas/{slug}', 'LogoDisainerController@LogoDisainersViewPortfolio')->name('logotipu-kurimas.disainer.view')->where('slug', '[\w\d\-\_]+');

//public routes:
Route::get('/SEO-optimizacija.php', 'MainController@index')->name('SEO-optimizacija');


//Route::get('/SEO-optimizacija/{id}', 'MainController@seoPostView');
Route::get('SEO-optimizacija/{slug}', 'MainController@seoPostView')->name('blog.single')->where('slug', '[\w\d\-\_]+');



//Static Pages
//HOME PAGE
Route::get('/', 'MainController@HomePage')->name('home');

//Contacts page
Route::get('/kontaktai.php', 'MainController@contacts')->name('kontaktai');
Route::post('/kontaktai.php', 'SentMailFromContactForm@ContactFormMail');
//Porfolio page
Route::get('/atlikti-darbai.php', 'MainController@AtliktiDarbai')->name('atlikti-darbai');
Route::get('/elektronines-parduotuves-kurimas.php', 'MainController@ElektroninesParduotuvesKurimas')->name('elektronines-parduotuves-kurimas');







Auth::routes();