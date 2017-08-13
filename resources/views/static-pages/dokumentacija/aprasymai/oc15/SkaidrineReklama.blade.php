<!DOCTYPE html>
<html xmlns:fb="http://www.w3.org/1999/xhtml">
<head>
    <?php $active = 'meniuDokumentacija';?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Modulis: Skaidrinė reklama</title>
    <meta content="Modulis: Skaidrinė reklama" property="og:title"/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <meta name="description" content="Modulis: Skaidrinė reklama">
    <meta content="Modulis: Skaidrinė reklama" property="og:description"/>
    <meta property="og:type" content="website"/>
    <meta content="{{ route('SkaidrineReklamaOC15') }}" property="og:url"/>
    <meta content="{{ url('assets/img/misc/logo.png') }}" property="og:image"/>
    <link rel="canonical" href="{{ route('SkaidrineReklamaOC15') }}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="author" content="Gediminas">
    <!-- Twiter-->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@elparduotuve">
    <meta name="twitter:creator" content="@elparduotuve">
    <meta name="twitter:title" content="Modulis: Skaidrinė reklama">

    <meta name="twitter:description" content="Modulis: Skaidrinė reklama">

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
                            class="active"><a itemprop="item" href="{{ route('SkaidrineReklamaOC15') }}"><span
                                        itemprop="name">Modulis: Skaidrinė reklama</span></a>
                            <meta itemprop="position" content="4"/>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>Modulis: Skaidrinė reklama</h1>
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
                            <h2 class="heading-primary" itemprop="name"><strong>Modulis: Skaidrinė reklama</strong></h2>
                            <div class="post-meta">
                                <span><i class="fa fa-user"></i> Parengė <a target="_blank" rel="nofollow" href="https://plus.google.com/u/0/117284839973334834336?rel=author"><span itemprop="author">Gediminas</span></a> </span>
                            </div>

                            <div class="heading heading-border heading-bottom-border">
                                <h4><strong>Modulis: Skaidrinė reklama</strong></h4>
                            </div>

                            <h4><strong>Kaip valdyti modulį: Besikeičianti skaidrinė reklama?</strong></h4>

                            <ul>
                                <li>
                                    <p>Skaidrinė reklama &ndash; tai toks modulis, kuris jums leis reklamuoti norimus produktus ar prekes arba tiesiog bet kokia kita informacija i&scaron;reik&scaron;ta nuotraukų/paveiksliukų pavidalu ir įdedama bet kurioje Jūsų <a href="{{route('home')}}" title="internetines parduotuves">internetinės parduotuvės</a> vietoje.</p>

                                    <p><strong>Pagrindinės modulio fukcijos ir galimybės:</strong></p>

                                    <ul>
                                        <li>Automatinė nuotraukų paveiksliukų kaita.</li>
                                        <li>I&scaron;dėstoma bet kurioje internetinės parduotuvės vietoje.</li>
                                        <li>Lengvai keičiamas paveiksliukų/nuotraukų dydis per internetinės parduotuvės TVS.</li>
                                        <li>Galima kiekvienai nuotraukai/paveiksliukui priskirti bet kokią nuorodą (t.y. paspaudžius ant nuotraukos jus nukreips į nurodytą puslapį).</li>
                                    </ul>

                                    <p><strong>Besikeičianti skaidrinė reklama - pavyzdys (apibrėžtas punktyrine linija):</strong></p>
                                </li>
                            </ul>

                            <p><img class="img-responsive" alt="reklama opencart" src="{{ url('assets/img/dokumentacija15/reklama-pvz.png') }}" /></p>

                            <p><strong>Skaidrinės reklamos nustatymai ir valdymas:</strong></p>

                            <ul>
                                <li>Eikite į savo internetinės parduotuvės TVS:</li>
                                <li>www.jusuparduotuve.lt/admin</li>
                                <li>Prisijunkite prie internetinės parduotuvės TVS.</li>
                                <li>Prie&scaron; einant į besikeičiančios skaidrinės reklamos modulį Jums visų pirma reikia įkelti paveikslėlius/nuotraukas:</li>
                                <li>Eikite į <strong><em><u>Sistema &ndash; Dizainas &ndash; Baneriai</u></em></strong></li>
                            </ul>

                            <p><img class="img-responsive" alt="reklama opencart" src="{{ url('assets/img/dokumentacija15/reklama1.png') }}" /></p>

                            <ul>
                                <li><strong>Banerio pavadinimas:</strong> įra&scaron;ykite pavadinimą (&scaron;is pavadinimas bus matomas tik Jums).</li>
                                <li><strong>Būsena:</strong> Aktyvuota arba Deaktyvuota. Pasirinkite Aktyvuota.</li>
                                <li><strong>Antra&scaron;tė:</strong> Nuotraukos arba paveikslėlio alternatyvus tekstas. T.y. įra&scaron;ykite kas pavaizduota paveiksliuke.</li>
                                <li><strong>Nuoroda:</strong> jeigu norite, kad parduotuvės lankytojai paspaudę ant &scaron;ios nuotraukos būtų nukreipti į kitą puslapį tuomet įra&scaron;ykite norimą nuotodą (galite palikti ir tu&scaron;čią langelį).</li>
                                <li><strong>Paveikslėlis:</strong> pridėkite norimą paveikslėlį ar nuotrauką i&scaron; serverio arba i&scaron; jūsų kompiuterio.</li>
                                <li>Spauskite <strong><em><u>I&scaron;saugoti</u></em></strong>.</li>
                            </ul>

                            <p>Toliau eikite į <strong><em>Plėtiniai --- Moduliai.</em></strong></p>

                            <ul>
                                <li>Susiraskite modulį <strong><em><u>Besikeičianti skaidrinė reklama</u></em></strong> ir paspauskite <strong><em><u>Redaguoti</u>.</em></strong></li>
                            </ul>

                            <p><img class="img-responsive" alt="reklama opencart" src="{{ url('assets/img/dokumentacija15/reklama2.png') }}" /></p>

                            <ul>
                                <li><strong>Baneris:</strong> Pasirinkite Jau sukūrtą banerį (t.y. nuotraukų grupę, kurią sukūrėte čia <strong><em><u>Sistema &ndash; Dizainas &ndash; Baneriai)</u></em></strong></li>
                                <li><strong>I&scaron;matavimai (P x A):</strong> nuotraukų dydžio keitimas pikseliais P-plotis, A-auk&scaron;tis. Jei nežinote kokio dydžio i&scaron;matavimus reikia pasirinkti, tuomet siūlau parinkti 700x200, o kai i&scaron;saugosite galėsite pažiūrėti kaip atrodo skaidrinė reklama ir bet kada galėsite sugrįžti ir nustatyti reikiamą dydį.</li>
                                <li><strong>I&scaron;dėstymas:</strong> pasirinkite kuriame puslapyje norėtumėte pridėti skaidrinę reklamą. Jeigu norite pridėti tą pačią skaidrinę reklamą keliuose puslapiuose tuomet spauskite mygtuką <strong><em><u>Pridėti modulį</u></em></strong> ir visus pasirinkimus galite palikti tuos pačius, bet i&scaron;dėstyme pasirinkite kitą vietą internetinėje parduotuvėje.</li>
                                <li><strong>Pozicija:</strong> Nusatykite skaidrinės reklamos vietą Jūsų internetinėje parduotuvėje. Jūs galite pasirinkti: Vir&scaron;uje, Apačioje, Kairėje arba De&scaron;inėje puslapio vietose.</li>
                                <li><strong>Būsena:</strong> norėdami aktyvuoti skaidrinę reklamą pasirinkite <u>aktyvuota</u>.</li>
                                <li><strong>Rikiavimo eili&scaron;kumas:</strong> Papildoma funkcija, kuri suteikia galimybę parinkti skaidrinės reklamos rū&scaron;iavimo eili&scaron;kumą. Čia ra&scaron;omas skaičius, bet jeigu jums neaktulau galite ir nepidyti &scaron;ios vietos.</li>
                                <li><strong>Atlikus visus auk&scaron;čiau i&scaron;dėstytus veiksmus spauskite i&scaron;saugoti ir Jūsų skaidrinė reklama bus nurodytoje vietoje.</strong></li>
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