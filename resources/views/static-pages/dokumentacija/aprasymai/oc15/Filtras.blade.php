<!DOCTYPE html>
<html xmlns:fb="http://www.w3.org/1999/xhtml">
<head>
    <?php $active = 'meniuDokumentacija';?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Modulis: Standartinis filtras</title>
    <meta content="Modulis: Standartinis filtras" property="og:title"/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <meta name="description" content="Modulis: Standartinis filtras">
    <meta content="Modulis: Standartinis filtras" property="og:description"/>
    <meta property="og:type" content="website"/>
    <meta content="{{ route('FiltrasOC15') }}" property="og:url"/>
    <meta content="{{ url('assets/img/misc/logo.png') }}" property="og:image"/>
    <link rel="canonical" href="{{ route('FiltrasOC15') }}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="author" content="Gediminas">
    <!-- Twiter-->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@elparduotuve">
    <meta name="twitter:creator" content="@elparduotuve">
    <meta name="twitter:title" content="Modulis: Standartinis filtras">

    <meta name="twitter:description" content="Modulis: Standartinis filtras">

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
                            class="active"><a itemprop="item" href="{{ route('FiltrasOC15') }}"><span
                                        itemprop="name">Modulis: Standartinis filtras</span></a>
                            <meta itemprop="position" content="4"/>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>Modulis: Standartinis filtras</h1>
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
                            <h2 class="heading-primary" itemprop="name"><strong>Modulis: Standartinis filtras</strong></h2>
                            <div class="post-meta">
                                <span><i class="fa fa-user"></i> Parengė <a target="_blank" rel="nofollow" href="https://plus.google.com/u/0/117284839973334834336?rel=author"><span itemprop="author">Gediminas</span></a> </span>
                            </div>

                            <div class="heading heading-border heading-bottom-border">
                                <h4><strong>Modulis: Standartinis filtras</strong></h4>
                            </div>

                            <h4><strong>Kaip valdyti modulį: Standartinis filtras?</strong></h4>

                            <p>Kad aktyvuoti standartinį filtrą reikia atlikti &scaron;iuos veiksmus:</p>

                            <ol>
                                <li>Pridėti filtro parametrus. Tai yra nustatyti pagal ką norėsite filtruoti prekes.</li>
                                <li>Pridėti prie prekės (-ių) Jūsų sukurtus filtro parametrus (pavadinimus). Filtruos tik tas prekes prie kurių bus pridėtas filtravimas.</li>
                                <li>Pridėti prie norimos prekių kategorijos (-jų)&nbsp; Jūsų sukurtus filtro parametrus (pavadinimus). Prie kiekvienos kategorijos ar subkategorijos gali būti priskirti skirtingi filtro parametrai (pavadinimai). Filtras bus rodomas tik tuose kategorijose, kuriuose priskirsite filtro parametrus (pavadinimus).</li>
                                <li>Nustatykite kuriuose parduotuvės puslapiuose bus rodomas filtras.</li>
                            </ol>

                            <h3>1. Pridėti filtro parametrus.</h3>

                            <ul>
                                <li>Eikite į http://www.jusuPuslapis.lt/admin</li>
                                <li>Eikite į <strong><em><u>Katalogas</u></em></strong> &ndash; <strong><em><u>Filtrai</u></em></strong>.</li>
                                <li>Spauskite mygtuką <strong><em><u>Pridėti</u></em></strong>.</li>
                            </ul>

                            <p><img class="img-responsive" alt="prekių filtras" src="{{ url('assets/img/dokumentacija15/filtras.png') }}" /></p>

                            <ul>
                                <li>Įra&scaron;ykite Filtrų grupės pavadinimą (pavyzdyje: Tipas)</li>
                                <li>Įra&scaron;ykite Filtro pavadinimus (pavyzdyje: Stalinis, Ne&scaron;iojamas. Tačiau galite suvesti visus reikiamus.)</li>
                                <li>I&scaron;saugokite.</li>
                            </ul>

                            <p><img class="img-responsive" alt="prekių filtravimas" src="{{ url('assets/img/dokumentacija15/filtras2.png') }}" /></p>

                            <h3>2. Pridėti prie prekės (-ių) Jūsų sukurtus filtro parametrus (pavadinimus).</h3>

                            <ul>
                                <li>Eikite į <strong><em><u>Katalogas</u></em></strong> &ndash; <strong><em><u>Produktai</u></em></strong></li>
                                <li><strong><em><u>Redaguoti</u></em></strong> prekes, kurios turi būti filtruojamos</li>
                                <li>Eikite į lentelę <strong><em><u>Nuorodos</u></em></strong></li>
                                <li>Eilutėje Filtrai įveskite filtro parametrą (pavadinimą) pagal kurį prekė bus filtruojama. Automatinis užbaigimas &ndash; rei&scaron;kia, kad Jums reikia pradėti ra&scaron;yti jau suvestus filtro parametrus ir Jums automati&scaron;kai pateiks sąra&scaron;ą (žr. paveikslėlį)</li>
                                <li><strong><em><u>I&scaron;saugoti</u></em></strong>.</li>
                                <li><em>Bet filtro dar nematysite, kol neatliksite 3 ir 4 punkto.</em></li>
                            </ul>

                            <p><img class="img-responsive" alt="prekių filtravimas" src="{{ url('assets/img/dokumentacija15/filtras3.png') }}" /></p>

                            <h3>3. Pridėti prie norimos prekių kategorijos (-jų) Jūsų sukurtus filtro parametrus (pavadinimus).</h3>

                            <ul>
                                <li>Eikite į <strong><em><u>Katalogas</u></em></strong> &ndash; <strong><em><u>Kategorijos</u></em></strong></li>
                                <li><strong><em><u>Redaguoti</u></em></strong> kategoriją, kurioje norite, kad matytųsi filtras</li>
                                <li>Eikite į lentelę <strong><em><u>Duomenys</u></em></strong></li>
                                <li>Eilutėje Filtrai įveskite filtro parametrą (pavadinimą) pagal kurį kategorija bus filtruojama. Automatinis užbaigimas &ndash; rei&scaron;kia, kad Jums reikia pradėti ra&scaron;yti jau suvestus filtro parametrus ir Jums automati&scaron;kai pateiks sąra&scaron;ą (žr. paveikslėlį).</li>
                                <li><strong>DĖMESIO:</strong> būtina įvesti visus filtro parametrus (pavadinimus) pagal kuriuos norite filtruoti. Tai yra jeigu konkrečioje kategorijoje bus prekių turinčių 5 filtro pavadinimus tuomet &scaron;ioje kategorijoje ir suveskite visus 5 filtro pavadinimus.</li>
                                <li><strong>PASTABA:</strong> kiekvienoje kategorijai ar subkategorijai būtina priskirti filtrus atskirai, nes priskyrus vienai kategorijai kituose neprisidės.</li>
                                <li><strong><em><u>I&scaron;saugoti</u></em></strong>.</li>
                            </ul>

                            <p><img class="img-responsive" alt="prekių filtravimas" src="{{ url('assets/img/dokumentacija15/filtras4.png') }}" /></p>

                            <h3>4. Nustatykite kuriuose parduotuvės puslapiuose bus rodomas filtras.</h3>

                            <ul>
                                <li>Eikite į <strong><em><u>Plėtiniai</u></em></strong> &ndash; <strong><em><u>Moduliai</u></em></strong></li>
                                <li>Susiraskite modulį &bdquo;Filtrai&ldquo; ir spauskite <strong><em><u>Redaguoti</u></em></strong></li>
                                <li>Nustatykite i&scaron;dėstymą &bdquo;Kategorijų puslapis&ldquo;.</li>
                                <li>Spauskite I&scaron;saugoti.</li>
                            </ul>

                            <p><img class="img-responsive" alt="prekių filtravimas" src="{{ url('assets/img/dokumentacija15/filtras5.png') }}" /></p>



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