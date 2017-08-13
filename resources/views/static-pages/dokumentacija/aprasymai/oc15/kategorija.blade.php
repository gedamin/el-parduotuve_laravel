<!DOCTYPE html>
<html xmlns:fb="http://www.w3.org/1999/xhtml">
<head>
    <?php $active = 'meniuDokumentacija';?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kaip pridėti kategoriją?</title>
    <meta content="Kaip pridėti kategoriją?" property="og:title"/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <meta name="description" content="Kaip pridėti kategoriją?">
    <meta content="Kaip pridėti kategoriją?" property="og:description"/>
    <meta property="og:type" content="website"/>
    <meta content="{{ route('KategorijaOC15') }}" property="og:url"/>
    <meta content="{{ url('assets/img/misc/logo.png') }}" property="og:image"/>
    <link rel="canonical" href="{{ route('KategorijaOC15') }}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="author" content="Gediminas">
    <!-- Twiter-->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@elparduotuve">
    <meta name="twitter:creator" content="@elparduotuve">
    <meta name="twitter:title" content="Kaip pridėti kategoriją?">

    <meta name="twitter:description" content="Kaip pridėti kategoriją?">

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
                            class="active"><a itemprop="item" href="{{ route('KategorijaOC15') }}"><span
                                        itemprop="name">Kaip pridėti kategoriją?</span></a>
                            <meta itemprop="position" content="4"/>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>Kaip pridėti kategoriją?</h1>
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
                            <h2 class="heading-primary" itemprop="name"><strong>Kaip pridėti kategoriją?</strong></h2>
                            <div class="post-meta">
                                <span><i class="fa fa-user"></i> Parengė <a target="_blank" rel="nofollow" href="https://plus.google.com/u/0/117284839973334834336?rel=author"><span itemprop="author">Gediminas</span></a> </span>
                            </div>

                            <div class="heading heading-border heading-bottom-border">
                                <h4><strong>Kaip pridėti naują prekių kategoriją?</strong></h4>
                            </div>
                            <ul>
                                <li>Eikite &nbsp;į &nbsp;http://www.jusuPuslapis.lt/admin</li>
                                <li>Eikite į <strong><em><u>Katalogas</u></em></strong> &ndash; <strong><em><u>Kategorijos</u></em></strong>.</li>
                                <li>Spauskite mygtuką <strong><em><u>Pridėti</u></em></strong>.</li>
                            </ul>

                            <p><img class="img-responsive" alt="kaip prideti kategorija opencart" src="{{ url('assets/img/dokumentacija15/katalogas-kategorijos.PNG') }}"/></p>

                            <h4>Matote kategorijos valdymo langą: Bendrieji:</h4>

                            <p><img class="img-responsive" alt="kaip prideti kategorija opencart" src="{{ url('assets/img/dokumentacija15/kategorija-bendrieji.PNG') }}"/></p>

                            <ul>
                                <li>Atkreipkite dėmesį ar Jūsų elektroninė parduotuvė turi vieną ar kelias kalbas.
                                    <ul>
                                        <li>Jeigu turi kelias kalbas, o naudosite tik vieną &ndash; vistiek privaloma užpildyti kategorijos pavadinimą abiejose kalbose.</li>
                                    </ul>
                                </li>
                                <li><strong>Kategorijos pavadinimas:</strong> Įveskite prekių ar paslaugų kategoriją.</li>
                                <li><strong>Meta žymos apra&scaron;ymas:</strong> Trumpas kategorijos apra&scaron;ymas (keli sakiniai). Jei pastebėjote, kai ie&scaron;kote per google jums i&scaron;meta ilgą rezultatų sąra&scaron;ą, o po kiekvienu rezultatu matomas trumpas tekstas. &Scaron;tai &scaron;is tekstas ir yra Meta žymos apra&scaron;ymas.</li>
                                <li><strong>Meta žymos raktažodžiai:</strong> matomi tik paie&scaron;kos sistemų, o jūsų elektroninės parduotuvės vartotojai fizi&scaron;kai nematys &scaron;ių raktažodžių. Sura&scaron;ykite &scaron;iai kategorijai artimus raktažodžius. Galite palikti ir tu&scaron;čią, nes &scaron;i vieta skirta tiems kurie nori optimizuoti el-parduotuvę paie&scaron;kos sistemoms.</li>
                                <li><strong>Apra&scaron;ymas:</strong> Vieta skirta kategorijos apra&scaron;ymui (tekstas, video, foto).</li>
                            </ul>

                            <h4>Matote elektroninės parduotuvės kategorijos valdymo langą: Duomenys:</h4>

                            <p><img class="img-responsive" alt="kaip prideti kategorija opencart" src="{{ url('assets/img/dokumentacija15/kategorija-duomenys.png') }}"/></p>

                            <ul>
                                <li><strong>Pagrindinė kategorija:</strong> Jeigu tai bus pagrindinė kategorija tuomet palikite tu&scaron;čią. O jeigu kūrsite subkategoriją tuomet pradėkite ra&scaron;yti pagrindinės kategorijos pavadinimą ir i&scaron;&scaron;oks kategorijų sąra&scaron;as, o tuomet galėsite priskirti norimai kategorijai.</li>
                                <li><strong>Parduotuvės: </strong>Palikite Standarinę parinktį.</li>
                                <li><strong>URL galūnė (senesniose el-parduotuvėse dar vadinama: SEO raktažodžiai): </strong>
                                    <ul>
                                        <li>Galimybė rankiniu būdu pakeisti kategorijos URL adresą i&scaron; dinaminio (http://jusudomenas.lt/index.php?route=product/category&amp;path=18) į statinį (pvz.: http://jusudomanas.lt/nesiojamu-kompiuteriu-priedai)</li>
                                        <li>Jeigu turite SEO modulį, tuomet palikite tu&scaron;čią ir naudokite tik SEO modulį, kuris automati&scaron;kai konvertuos URL pagal kategorijos pavadinimą.</li>
                                        <li>Galite palikti ir tu&scaron;čią &ndash; sistema automati&scaron;kai priskirs (bet URL adresas bus dinaminis ir &bdquo;nedraugi&scaron;kas SEO t.y. paie&scaron;kos sistemoms).</li>
                                        <li>Galite ir patys pildyti, tačiau kiekviena kategorija privalo turėti skirtingą URL galūnę (SEO raktažodžius) (atskiriami bruk&scaron;neliu -&nbsp;ir be tarpų, bei nenaudoti lietuvi&scaron;kų raidžių. Neteisingai užpildžius gali ir nerodyti Jūsų&nbsp; kategorijos. Pildymo pvz.: <em>nesiojamu-kompiuteriu-priedai.</em></li>
                                    </ul>
                                </li>
                                <li><strong>Paveikslėlis:</strong> Spauskite nar&scaron;yti ir i&scaron;okusiame lange pasirinkite norimą paveiksliuką i&scaron; savo serverio (nuotraukas į serverį lengavai įkelsite paspaudę mygtulą įkelti).</li>
                                <li><strong>Vir&scaron;us:</strong> Uždėjus varnelę kategorija bus rodoma ne tik &scaron;oniniame stulpelyje (Kategorijos), bet ir vir&scaron;utiniame meniu. Tačiau &scaron;i funkcija gali neveikti jeigu turėsite specifinį dizainą su atskiru meniu valdymo moduliu, kuris pateikia daug daugiau funkcijų ar galimybių.</li>
                                <li><strong>Stulpeliai:</strong> Stulpelių skaičius trijų apatinių kategorijų naudojimui. Veikia tik su pagrindinėmis kategorijoms.</li>
                                <li><strong>Rū&scaron;iavimo eili&scaron;kumas:</strong> kurioje vietoje bus i&scaron;dėstyta kategorija.</li>
                                <li><strong>Būsena:</strong> Jei norite aktyvuoti ir kad el-parduotuvės lankytojai matytų &scaron;ią kategoriją pasirinkite <em>Aktyvuota</em>, kitu atveju <em>Deaktyvuota.</em></li>
                            </ul>

                            <h4>Matote internetinės parduotuvės kategorijos valdymo langą: Dizainas:</h4>

                            <p><img class="img-responsive" alt="kategorija opencart" src="{{ url('assets/img/dokumentacija15/kategorija-dizainas.png') }}"/></p>

                            <p><strong>I&scaron;dėstymo perra&scaron;ymas:</strong> Kuriant kategoriją pasirinkite kategorijų pusapis. Reikia tam, kad jeigu Jūs norėsite pridėti papildomą modulį, na pavyzdžiui Skaidrinę reklamą, tuomet nuėję į plėtiniai &ndash; moduliai &ndash; skaidrinės reklamos ir ten galėsite pasirinkti, kur norėtumėte, kad Jūsų skaidrinė reklama būtų i&scaron;dėstyta.</p>

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