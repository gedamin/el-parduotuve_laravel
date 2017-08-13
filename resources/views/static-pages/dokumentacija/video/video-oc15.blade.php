<!DOCTYPE html>
<html>
<head>
    <?php $active = 'meniuDokumentacija';?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Internetinės parduotuvės video mokomoji medžiaga</title>
    <meta content="Internetinės parduotuvės video mokomoji medžiaga" property="og:title"/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <meta name="description"
          content="Internetinės parduotuvės video mokomoji medžiaga. Vaizdžiai ir paprastai išmok valdyti e-parduotuvę.">
    <meta content="Internetinės parduotuvės video mokomoji medžiaga. Vaizdžiai ir paprastai išmok valdyti e-parduotuvę."
          property="og:description"/>
    <meta property="og:type" content="website"/>
    <meta content="{{ route ('VideoDokOC15') }}" property="og:url"/>
    <meta content="{{ url('assets/img/misc/logo.png') }}" property="og:image"/>
    <link rel="canonical" href="{{ route ('VideoDokOC15') }}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="author" content="Gediminas">
    <!-- Twiter-->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@elparduotuve">
    <meta name="twitter:creator" content="@elparduotuve">
    <meta name="twitter:title" content="Internetinės parduotuvės video mokomoji medžiaga">
    <meta name="twitter:description"
          content="Internetinės parduotuvės video mokomoji medžiaga. Vaizdžiai ir paprastai išmok valdyti e-parduotuvę.">
    <meta name="twitter:image" content="{{ url('assets/img/misc/logo.png') }}" title="www.el-parduotuve.lt">
    <!-- END of Twiter-->
    @include('__include/head-no-seo')
</head>
<body itemscope itemtype="http://schema.org/WebPage">
<div class="body">
    @include('__include/header')
    <div role="main" class="main">
        <section class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="breadcrumb" itemtype="http://schema.org/BreadcrumbList">
                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{ url('/') }}"><span itemprop="name">Pradžia</span></a>
                                <meta itemprop="position" content="1"/>
                            </li>
                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"
                                class="active"><a itemprop="item" href="{{ route ('dokumentacija15') }}"><span itemprop="name"> E-parduotuvėms kurtoms iki 2015-04-01</span></a>
                                <meta itemprop="position" content="2"/>
                            </li>
                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"
                                class="active"><a itemprop="item" href="{{ route ('VideoDokOC15') }}"><span itemprop="name">Video</span></a>
                                <meta itemprop="position" content="3"/>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h1>Internetinės parduotuvės mokomoji video dokumentacija</h1>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="mb-sm">Mokomoji video dokumentacija</h2>
                            <p class="lead justify">Internetinės parduotuvės valdymo ir administravimo mokomoji dokumentacija. Priklausomai nuo turimų parduotuvės funkcijų, administracinė aplinka gali šiek tiek skirtis nuo video, tačiau valdymo principas praktiškai vienodas.</p>
                        </div>
                        <div class="col-md-12">
                            <h4><strong>Kaip sukurti prekių kategoriją</strong></h4>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://www.youtube.com/embed/X8gunLgQ58Q" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <p class="lead justify">Elektroninės parduotuvės kategorijų valdymas. Trumpas video reportažas, kuriame parodoma kaip kuriamos ir valdomos prekių kategorijos.</p>
                            <hr class="tall">
                            <h4><strong>Kaip sukurti prekių subkategoriją</strong></h4>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://www.youtube.com/embed/r0fH5qMr2a0" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <p class="lead justify">Elektroninės parduotuvės subkategorijų valdymas. Trumpas video reportažas, kuriame parodoma kaip kuriamos ir valdomos prekių subkategorijos.</p>
                            <hr class="tall">
                            <h4><strong>Kaip pridėti prekę į elektroninę parduotuvę</strong></h4>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://www.youtube.com/embed/qa8SBcWn_4E" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <p class="lead justify">Elektroninės parduotuvės prekių valdymas. Trumpas video reportažas, kuriame parodoma kaip kuriamos ir valdomos prekės.</p>
                            <hr class="tall">
                            <h4><strong>Prekių pristatymo funkcijos</strong></h4>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://www.youtube.com/embed/2zUHHH7uR5c" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <p class="lead justify">Opencart video pamoka: kaip valdyti prekių pristatymo funkcijas . Peržiūrėję išmoksite valdyti prekių pristatymus.</p>
                            <hr class="tall">
                            <h4><strong>Kaip pridėti ar pakeisti logotipą</strong></h4>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://www.youtube.com/embed/1CXdxJiJ-E8" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <p class="lead justify">Video reportažas parodantis, kaip pridėti ar pakeisti logotipą per parduotuvės TVS (turinio valdymo sistemą). Atkreipiame dėmesį, kad logotipo dydis turi būti atitinkamas pagal el-parduotuvės dizainą.</p>
                            <hr class="tall">
                            <h4><strong>Kinfo@ .... .lt paštą gaukite ir siųskite per Gmail</strong></h4>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://www.youtube.com/embed/iKy0_eh5q9I" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <p class="lead justify">Opencart video pamoka: kaip info@ .... .lt paštą gauti ir siųsti laiškus per Gmail paskyrą. Tai labai patogu ir praktiška, nes nereikės didelio hostingo plano paštui, nes visą paštą galėsite valdyti per Gmail.</p>
                            <hr class="tall">
                            <h4><strong>Kaip įkelti video iš youtube?</strong></h4>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://www.youtube.com/embed/4w1iOeNfS_4" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <p class="lead justify">EVideo reportažas parodantis, kaip labai lengvai ir paprastai galima įkelti bet kokį video filmuką tiesiai iš youtube...</p>
                            <hr class="tall">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('__include/footer')
</div>
@include('__include/scriptsFooter')
</body>
</html>