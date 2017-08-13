<!DOCTYPE html>
<html xmlns:fb="http://www.w3.org/1999/xhtml">
<head>
    <?php $active = 'meniuDokumentacija';?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kaip pakeisti logotipą?</title>
    <meta content="Kaip pakeisti logotipą?" property="og:title"/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <meta name="description" content="Kaip pakeisti logotipą?">
    <meta content="Kaip pakeisti logotipą?" property="og:description"/>
    <meta property="og:type" content="website"/>
    <meta content="{{ route('LogotipasOC20') }}" property="og:url"/>
    <meta content="{{ url('assets/img/misc/logo.png') }}" property="og:image"/>
    <link rel="canonical" href="{{ route('LogotipasOC20') }}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="author" content="Gediminas">
    <!-- Twiter-->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@elparduotuve">
    <meta name="twitter:creator" content="@elparduotuve">
    <meta name="twitter:title" content="Kaip pakeisti logotipą?">

    <meta name="twitter:description" content="Kaip pakeisti logotipą?">

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
                            class="active"><a itemprop="item"  href="{{ url('dokumentacija.php') }}"><span itemprop="name">Dokumentacija</span></a>
                            <meta itemprop="position" content="2"/>
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"
                            class="active"><a itemprop="item" href="{{ route('AprasymaiOC20') }}"><span itemprop="name">Aprašymai</span></a>
                            <meta itemprop="position" content="3"/>
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"
                            class="active"><a itemprop="item" href="{{ route('LogotipasOC20') }}"><span itemprop="name">Kaip pakeisti logotipą?</span></a>
                            <meta itemprop="position" content="4"/>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>Kaip pakeisti logotipą?</h1>
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
                            <h2 class="heading-primary" itemprop="name"><strong>Kaip pakeisti logotipą?</strong></h2>
                            <div class="post-meta">
                                <span><i class="fa fa-user"></i> Parengė <a target="_blank" rel="nofollow" href="https://plus.google.com/u/0/117284839973334834336?rel=author"><span itemprop="author">Gediminas</span></a> </span>
                            </div>

                            <div class="heading heading-border heading-bottom-border">
                                <h3>Kaip pakeosti logotipą elektroninėje parduotuvėje?</h3>
                            </div>

                            <p>Logotipas Opencart turinio valdymo sistemoje įkeliamas ar pakeičiamas labai paprastai. Tačiau reikia atkreipti dėmesį į logotipo dydį ir į pasirinką elektroninės parduotuvės dizainą. Elektroninių parduotuvių dizainai logotipui gali skirti ir didesnį ir mažesnį plotą, todėl prie&scaron; užsakant paslaugą <a href="{{route('logotipu-kurimas.list.view')}}" target="_blank"><strong>logotipų kūrimas</strong></a>, rekomenduojame parodyti pasirinktą dizainą logotipo kūrėjui t.y. grafikos dizaineriui.</p>

                            <h4><strong>Logotipo pakeitimo / įkėlimo etapai</strong></h4>

                            <ul>
                                <li>Eikite &nbsp;į &nbsp;http://www.jusuPuslapis.lt/admin</li>
                                <li>Eikite į <strong><em><u>SISTEMA</u></em></strong> &ndash; <strong><em><u>NUSTATYMAI</u></em></strong>.</li>
                                <li>Spauskite mygtuką <strong><em><u>REDAGUOTI</u></em></strong>.</li>
                            </ul>

                            <p><img class="img-responsive" alt="kaip pakeisti logotipą" src="{{ url('assets/img/dokumentacija/logotipas1.png') }}"/></p>

                            <p><strong>Pasirinkite langą: Atvaizdai ir spaudžiame ant logotipo:</strong></p>

                            <p><img class="img-responsive" alt="kaip pakeisti logotipą" src="{{ url('assets/img/dokumentacija/logotipas2.png') }}"/></p>

                            <ul>
                                <li>Įkelkite nuotrauką/logotipą i&scaron; savo kompiuterio: Spauskite Įkelti ir pasirinkite nuotrauką i&scaron; kompiuterio.</li>
                                <li>Pasirinkite norimą nuotrauką/logotipą spaudžiame du kartus kairiu pelės mygtuku.</li>
                                <li>Spauskite i&scaron;saugoti ir Jūsų logotipas bus i&scaron;saugotas.</li>
                            </ul>

                            <h4><strong>Svarbi informacija</strong></h4>

                            <ul>
                                <li>Jeigu įkėlėte logotipą ir jis uždengia jūsų meniu juostą ar kitas puslapio dalis tuomet rei&scaron;kia Jūsų logotipo dydis yra netinkamas (per didelis).</li>
                                <li>Dažniausiai logotipo auk&scaron;tis bus apie 70px, o ilgis apie 150px (tačiau kiekvienam dizainui gali būti skirtingai, todėl jei kils problemų pasirenkant logotipo dydį tuomet kreipkitės į puslapio kūrėją).</li>
                            </ul>

                            <h4><strong>Logotipas:</strong></h4>
                            <ul>
                                <li>Tai jūsų prekinis ženklas.</li>
                                <li>Individualaus logotipo kainos nuo 30 iki 300 EUR ir pan. (logotipo dizaino paslaugų neteikiame).</li>
                                <li>NEMOKAMĄ logotipą galite pasidaryti ir patys čia: http://cooltext.com/</li>
                                <li>NEMOKAMAI galite gana lengvai susikruti ir patys čia: http://www.logoease.com</li>
                                <li>Taip pat rekomenduojame NEMOKAMĄ nuotraukų (tame tarpe i logotipų) kūrimo/redagavimo programą - GIMP - atsisiųsti čia (http://www.gimp.org/downloads/)</li>
                            </ul>

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