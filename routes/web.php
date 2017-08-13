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

        //user list view
        Route::get('/admin/users', 'UsersListController@view')->name('admin.users.view');
    });

    //logo static pages
    Route::get('/logotipu-kurimas/logotipo-spalva.php', 'MainController@LogotipoSpalva')->name('LogotipoSpalva');
    Route::get('/logotipu-kurimas/grafinis-dizainas.php', 'MainController@GrafinisDizainas')->name('GrafinisDizainas');
    Route::get('/logotipu-kurimas/kompiuterine-grafika.php', 'MainController@KompiuterineGrafika')->name('KompiuterineGrafika');

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
Route::get('/logotipu-kurimas/{slug}.php', 'LogoDisainerController@LogoDisainersViewPortfolio')->name('logotipu-kurimas.disainer.view')->where('slug', '[\w\d\-\_]+');

//public routes:
Route::get('/SEO-optimizacija.php', 'MainController@index')->name('SEO-optimizacija');

//Route::get('/SEO-optimizacija/{id}', 'MainController@seoPostView');
Route::get('SEO-optimizacija/{slug}.php', 'MainController@seoPostView')->name('blog.single')->where('slug', '[\w\d\-\_]+');

//Static Pages
//HOME PAGE
Route::get('/', 'MainController@HomePage')->name('home');
Route::get('/kontaktai.php', 'MainController@contacts')->name('kontaktai');
Route::post('/kontaktai.php', 'SentMailFromContactForm@ContactFormMail');

Route::get('/atsiliepimai-apie-el-parduotuve.lt.php', 'MainController@atsiliepimai')->name('atsiliepimai');
Route::post('/atsiliepimai.php', 'SentMailFromAtsiliepimaiForm@AtsiliepimaiFormMail');


Route::get('/atlikti-darbai.php', 'MainController@AtliktiDarbai')->name('atlikti-darbai');
Route::get('/elektronines-parduotuves-kurimas.php', 'MainController@ElektroninesParduotuvesKurimas')->name('elektronines-parduotuves-kurimas');
Route::get('/elektronines-parduotuves-kurimas/elektronines-parduotuves-kaina.php', 'MainController@ElektroninesParduotuvesKaina')->name('elektronines-parduotuves-kaina');
//sent mail in Journal page koment
Route::post('/elektronines-parduotuves-kaina', 'SentMailFromJournalForm@JournalFormMail')->name('JournalFormMail');
Route::get('/elektronines-parduotuves-kurimas/elektronines-parduotuves-galimybes.php', 'MainController@ElektroninesParduotuvesGalimybes')->name('elektronines-parduotuves-galimybes');
Route::get('/elektronines-parduotuves-kurimas/elektronines-parduotuves-dizainas.php', 'MainController@ElektroninesParduotuvesDizainas')->name('elektronines-parduotuves-dizainas');
Route::get('/elektronines-parduotuves-kurimas/el-parduotuves-kurimo-etapai.php', 'MainController@ElektroninesParduotuvesKurimoEtapai')->name('elektronines-parduotuves-kurimo-etapai');
Route::get('/elektronines-parduotuves-kurimas/demonstracija.php', 'MainController@ElektroninesParduotuvesDemonstracija')->name('demonstracija');
Route::get('/elektronines-parduotuves-kurimas/paruosta-internetine-parduotuve.php', 'MainController@ElektroninesParduotuvesParuostaParduotuve')->name('paruostaJournalParduotuve');

Route::get('/dokumentacija.php', 'MainController@dokumentacija')->name('dokumentacija');
Route::get('/dokumentacija/video-dokumentacija.php', 'MainController@VideoDokumentacijaOC20')->name('VideoDokOC20');
Route::get('/dokumentacija/aprasymai.php', 'MainController@aprasymaiOC20')->name('AprasymaiOC20');
Route::get('/dokumentacija/el-parduotuve-nuo-ko-pradeti.php', 'MainController@NuoKoPradetiOC20')->name('NuoKoPradetiOC20');
Route::get('/dokumentacija/kategorija.php', 'MainController@KategorijaOC20')->name('KategorijaOC20');
Route::get('/opencart-valdymas/kategoriju-kurimo-rekomendacijos.php', 'MainController@KategorijuRekomendacijos')->name('KategorijuRekomendacijos');
Route::get('/dokumentacija/preke.php', 'MainController@PrekeOC20')->name('PrekeOC20');
Route::get('/dokumentacija/gamintoja.php', 'MainController@GamintojasOC20')->name('GamintojasOC20');
Route::get('/dokumentacija/logotipas.php', 'MainController@LogotipasOC20')->name('LogotipasOC20');
Route::get('/dokumentacija/paysera.php', 'MainController@PayseraOC20')->name('PayseraOC20');
Route::get('/opencart-valdymas.php', 'MainController@dokumentacija15')->name('dokumentacija15');

Route::get('/opencart-valdymas/opencart-video-tvs.php', 'MainController@VideoDokumentacijaOC15')->name('VideoDokOC15');
Route::get('/opencart-valdymas/opencart-aprasymai.php', 'MainController@aprasymaiOC15')->name('AprasymaiOC15');
Route::get('/opencart-valdymas/opencart-el-parduotuve-nuo-ko-pradeti.php', 'MainController@NuoKoPradetiOC15')->name('NuoKoPradetiOC15');
Route::get('/opencart-valdymas/kaip-prideti-kategorija.php', 'MainController@KategorijaOC15')->name('KategorijaOC15');
Route::get('/opencart-valdymas/kaip-prideti-preke.php', 'MainController@PrekeOC15')->name('PrekeOC15');
Route::get('/opencart-valdymas/kaip-prideti-gamintoja.php', 'MainController@GamintojasOC15')->name('GamintojasOC15');
Route::get('/opencart-valdymas/pakeisti-logo.php', 'MainController@LogotipasOC15')->name('LogotipasOC15');
Route::get('/opencart-valdymas/nemokamas-pristatymas.php', 'MainController@NemokamasPristatymasOC15')->name('NemokamasPristatymasOC15');
Route::get('/opencart-valdymas/pervedimas-per-banka.php', 'MainController@PervedimasPerBankaOC15')->name('PervedimasPerBankaOC15');
Route::get('/opencart-valdymas/skaidrine-reklama.php', 'MainController@SkaidrineReklamaOC15')->name('SkaidrineReklamaOC15');
Route::get('/opencart-valdymas/akcija.php', 'MainController@AkcijosOC15')->name('AkcijosOC15');
Route::get('/opencart-valdymas/filtras.php', 'MainController@FiltrasOC15')->name('FiltrasOC15');
Route::get('/opencart-valdymas/valiutos.php', 'MainController@ValiutaOC15')->name('ValiutaOC15');

Route::get('/hostingas-svetaines-talpinimas.php', 'MainController@Hostingas')->name('Hostingas');
Route::get('/moduliai.php', 'MainController@Moduliai')->name('Moduliai');

Route::get('/moduliai/pdf-saskaita.php', 'MainController@pdfModulis')->name('pdfModulis');
Route::get('/moduliai/mokejimai.lt-paysera.php', 'MainController@payseraModulis')->name('payseraModulis');


Auth::routes();
//EMAIL verify before register
Route::get('verifyEmailFirst.php', 'Auth\RegisterController@verifyEmailFirst')->name('verifyEmailFirst');
Route::get('verify/{email}/{verifyToken}', 'Auth\RegisterController@sendEmailDone')->name('sendEmailDone');