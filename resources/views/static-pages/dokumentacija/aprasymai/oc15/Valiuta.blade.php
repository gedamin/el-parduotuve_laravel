<!DOCTYPE html>
<html xmlns:fb="http://www.w3.org/1999/xhtml">
<head>
    <?php $active = 'meniuDokumentacija';?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kaip pridėti papildomą valiutą?</title>
    <meta content="Kaip pridėti papildomą valiutą?" property="og:title"/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <meta name="description" content="Kaip pridėti papildomą valiutą?">
    <meta content="Kaip pridėti papildomą valiutą?" property="og:description"/>
    <meta property="og:type" content="website"/>
    <meta content="{{ route('ValiutaOC15') }}" property="og:url"/>
    <meta content="{{ url('assets/img/misc/logo.png') }}" property="og:image"/>
    <link rel="canonical" href="{{ route('ValiutaOC15') }}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="author" content="Gediminas">
    <!-- Twiter-->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@elparduotuve">
    <meta name="twitter:creator" content="@elparduotuve">
    <meta name="twitter:title" content="Kaip pridėti papildomą valiutą?">

    <meta name="twitter:description" content="Kaip pridėti papildomą valiutą?">

    <meta name="twitter:image" content="{{ url('assets/img/misc/logo.png') }}" title="www.el-parduotuve.lt">
    <!-- END of Twiter-->

    @include('__include/head-no-seo')
</head>
<body itemscope itemtype="http://schema.org/WebPage">
<div class="body">
    @include('__include/header')
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb" itemtype="http://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                    itemprop="item" href="{{ route('home') }}"><span itemprop="name">Pradžia</span></a>
                            <meta itemprop="position" content="1"/>
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"
                            class="active"><a itemprop="item"  href="{{ route('dokumentacija15') }}"><span itemprop="name"> E-parduotuvėms kurtoms iki 2015-04-01</span></a>
                            <meta itemprop="position" content="2"/>
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"
                            class="active"><a itemprop="item" href="{{ route('AprasymaiOC15') }}"><span itemprop="name">Aprašymai</span></a>
                            <meta itemprop="position" content="3"/>
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"
                            class="active"><a itemprop="item" href="{{ route('ValiutaOC15') }}"><span
                                        itemprop="name">Kaip pridėti papildomą valiutą?</span></a>
                            <meta itemprop="position" content="4"/>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>Kaip pridėti papildomą valiutą?</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="blog-posts single-post">
                    <article class="post post-large blog-single-post">
                        <div class="post-content">
                            <h2 class="heading-primary" itemprop="name"><strong>Kaip pridėti papildomą valiutą?</strong></h2>
                            <div class="post-meta">
                                <span><i class="fa fa-user"></i> Parengė <a target="_blank" rel="nofollow" href="https://plus.google.com/u/0/117284839973334834336?rel=author"><span itemprop="author">Gediminas</span></a> </span>
                            </div>

                            <div class="heading heading-border heading-bottom-border">
                                <h4><strong>Kaip pridėti papildomą valiutą?</strong></h4>
                            </div>

                            <h4><strong>Valiutos valdymas</strong></h4>

                            <ul>
                                <li>Eikite &nbsp;į &nbsp;http://www.jusuPuslapis.lt/admin</li>
                                <li>Eikite į <strong><em><u>Sistema</u></em></strong> &ndash; <strong><em><u>Lokalizacija</u></em></strong> &ndash; <strong><em><u>Valiutos</u></em></strong>.</li>
                            </ul>

                            <p><img class="img-responsive" alt="opencart valiutos pridėjimas" src="{{ url('assets/img/dokumentacija15/valiuta1.png') }}" /></p>

                            <h3>Kaip pridėti papildomą valiutą?</h3>

                            <ul>
                                <li>Eikite &nbsp;į &nbsp;http://www.jusuPuslapis.lt/admin</li>
                                <li>Eikite į <strong><em><u>Sistema</u></em></strong> &ndash; <strong><em><u>Lokalizacija</u></em></strong> &ndash; <strong><em><u>Valiutos</u></em></strong>.</li>
                                <li>Spauskite <strong><em><u>Pridėti</u></em></strong>.</li>
                            </ul>

                            <h3>Užpildykite reikiamus laukus ir spauskite i&scaron;saugoti</h3>

                            <ul>
                                <li>Eikite &nbsp;į &nbsp;http://www.jusuPuslapis.lt/admin</li>
                                <li>*Valiutos pavadinimas: <strong><em><u>Euras</u></em></strong></li>
                                <li>*Kodas: <strong><em><u>EUR</u></em></strong></li>
                                <li>Simbolis i&scaron; kairės: <strong><em> - </em></strong></li>
                                <li>Simbolis i&scaron; de&scaron;inės: <strong><em><u>&euro;</u></em></strong></li>
                                <li>Pozicijos po kablelio: <strong><em><u>2</u></em></strong></li>
                                <li>Reik&scaron;mė: <strong><em><u>0.28960001</u></em></strong></li>
                                <li>Būsena: <strong><em><u>Aktyvuota</u></em></strong></li>
                            </ul>

                            <h3>Pateikiu Euro pridėjimo pavyzdį:</h3>

                            <p><img class="img-responsive" alt="opencart kaip pridėti valiutą" src="{{ url('assets/img/dokumentacija15/valiuta2.png') }}" /></p>

                            <p>&nbsp;</p>

                            <h3>Kaip parinkti numatytąją (pagrindinę) valiutą?</h3>

                            <ul>
                                <li>Eikite &nbsp;į &nbsp;http://www.jusuPuslapis.lt/admin</li>
                                <li>Eikite į <strong><em><u>Sistema</u></em></strong> &ndash; <strong><em><u>nustatymai</u></em></strong> &ndash; <strong><em><u>redaguoti</u></em></strong>.</li>
                                <li>Pasitrinkite kortelę <strong><em><u>Vietovė</u></em></strong></li>
                                <li>Pasirinkite norimą valiutą</li>
                            </ul>

                            <h3>Kaip automati&scaron;kai atsinaujina valiuta?</h3>

                            <p>Valiuta gali būti atnaujinima ir automati&scaron;kai, bet tokiu atjeju valiutų kurso duomenys imami i&scaron; čia <a href="http://finance.yahoo.com/" rel="nofollow" target="_blank">www.finance.yahoo.com</a></p>

                            <p><img class="img-responsive" alt="opencart kaip pridėti valiuta" src="{{ url('assets/img/dokumentacija15/valiuta3.png') }}" /></p>

                            <p>&nbsp;</p>

                            <hr />
                            <p>www.el-parduotuve.lt - <strong><a href="{{route('home')}}" title="elektroninių parduotuvių kūrimas">elektroninių parduotuvių kūrimas</a></strong>, nemokami SEO patarimai.</p>



                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
    @include('__include/footer')
</div>
@include('__include/scriptsFooter')
</body>
</html>