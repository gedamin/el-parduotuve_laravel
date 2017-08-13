<!DOCTYPE html>
<html xmlns:fb="http://www.w3.org/1999/xhtml">
<head>
    <?php $active = 'meniuDokumentacija';?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Nuo ko pradėti įsigijus El-parduotuvę</title>
    <meta content="Nuo ko pradėti įsigijus El-parduotuvę" property="og:title"/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <meta name="description" content="Nuo ko pradėti įsigijus El-parduotuvę">
    <meta content="Nuo ko pradėti įsigijus El-parduotuvę" property="og:description"/>
    <meta property="og:type" content="website"/>
    <meta content="{{ route('NuoKoPradetiOC15') }}" property="og:url"/>
    <meta content="{{ url('assets/img/misc/logo.png') }}" property="og:image"/>
    <link rel="canonical" href="{{ route('NuoKoPradetiOC15') }}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="author" content="Gediminas">
    <!-- Twiter-->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@elparduotuve">
    <meta name="twitter:creator" content="@elparduotuve">
    <meta name="twitter:title" content="Nuo ko pradėti įsigijus El-parduotuvę">

    <meta name="twitter:description" content="Nuo ko pradėti įsigijus El-parduotuvę">

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
                            class="active"><a itemprop="item" href="{{ route('NuoKoPradetiOC15') }}"><span
                                        itemprop="name">Įsigyjau e-parduotuvę nuo ko pradėti?</span></a>
                            <meta itemprop="position" content="4"/>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>Įsigyjau e-parduotuvę nuo ko pradėti?</h1>
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
                            <h2 class="heading-primary" itemprop="name"><strong>Įsigyjau e-parduotuvę nuo ko
                                    pradėti?</strong></h2>
                            <div class="post-meta">
                                <span><i class="fa fa-user"></i> Parengė <a target="_blank" rel="nofollow" href="https://plus.google.com/u/0/117284839973334834336?rel=author"><span itemprop="author">Gediminas</span></a> </span>
                            </div>

                            <div class="heading heading-border heading-bottom-border">
                                <h4><strong>Patikrinkite el-parduotuvę! Ar ji gerai veikia?</strong></h4>
                            </div>
                            <ul>
                                <li>Įsigijus el-parduotuvę, jūsų parduotuvėje bus įkelta pavyzdinės prekės.</li>
                                <li>Pabandykite įsigyti/užsakyti (kaip pirkėjas) bet kokią prekę. (Pirkdami prekę įra&scaron;ykite
                                    savo el-pa&scaron;tą)
                                </li>
                                <li>Įsigijus pavyzdinę prekę Jūs (kai klientas) turite gauti elektroninį lai&scaron;ką
                                    su informacija apie prekės užsakymą. Taip pat Jūs (kaip parduotuvės
                                    administratorius) turėtumėte gauti elektroninį lai&scaron;ką, kad kažkas užsisakė
                                    prekę. Bet, kad gauti prane&scaron;imą apie užsakymą Jums reikia el-parduotuvėje
                                    pridėti elektroninį pa&scaron;tą į kurį norėtumėte gauti prane&scaron;imus apie
                                    užsakymą, pirkimus ar naujo vartoto užsiregistravimą.
                                    <ul>
                                        <li>NUSTATYTI čia: www.jusudomenas.lt/admin SISTEMA--NUSTATYMAI--REDAGUOTI.
                                            Lentele &bdquo;Bendrieji&ldquo; įveskite pageidaujamą savo el. pa&scaron;to
                                            adresą.
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="heading heading-border heading-bottom-border">
                                <h4><strong>Nustatykite prekių pristatymo modulius:</strong></h4>
                            </div>
                            <ul>
                                <li>Eikite MODULIAI--&gt;&gt;PRISTAYMAS</li>
                                <li>I&scaron;sirinkite norimą pristatymo būdą ir patikrinkite ar teisingai nustatytos
                                    kainos už pristatymą. Bei, jeigu pageidaujate nusistatykite vieną i&scaron; dažnai
                                    naudojamų pristatymo būdų &quot;Nemokamas pristatymas&quot; kai pirkėjai perka už
                                    tam tikrą Jūsų nustatytą sumą prekių, tuomet prekių pristatymas bus nemokamas ir
                                    elektroninė parduotuvė automati&scaron;kai neskaičiuos papildomo mokesčio už prekių
                                    pristatymą. Tiesiog &scaron;iame modulyje nustatykite sumą už kurią perkant bus
                                    aktyvuotas nemokamas pristatymas
                                </li>
                                <li>Dėl specifinio prekių pristatymo modulio kreipkitės ir Jums padėsime.</li>
                            </ul>
                            <div class="heading heading-border heading-bottom-border">
                                <h4><strong>Vėl patikrinkite ar gerai veikia</strong></h4>
                            </div>
                            <ul>
                                <li>Eikite MODULIAI--&gt;&gt;MOKĖJIMAI</li>
                                <li>Patikrinkite ar Jūsų nustatytas prekių pristatymo modulis tinkamai veikai. Tiesiog
                                    pabandykite vėl kažką nusipirkti.
                                </li>
                                <li>Dėl papildomų pristatymo modulių kreipkitės ir Jums padėsime.</li>
                            </ul>
                            <div class="heading heading-border heading-bottom-border">
                                <h4><strong>Nustatykite ir patikrinkite atsiskaitymo už prekes būdus.</strong></h4>
                            </div>
                            <ul>
                                <li>PVZ.: Modulis: &bdquo;Pervedimas per banką&ldquo; reikia įvesti reikiamus
                                    rekvizitus.
                                </li>
                            </ul>
                            <div class="heading heading-border heading-bottom-border">
                                <h4><strong>Toliau i&scaron;trinkite visas demo prekes,kategorijas (arba koreguokite
                                        esamas).</strong></h4>
                                <div class="heading heading-border heading-bottom-border"></div>
                                <h4><strong>Sudėkite savo prekes ir visą kitą reikiamą informaciją.</strong></h4>
                            </div>
                            <p>Užpildykite kitą informaciją (Eiti į: Sistema--Nustatymai--Redaguoti--Bendrieji)</p>
                            <ul>
                                <li>* Parduotuvės pavadinimas:</li>
                                <li>* Parduotuvės savininkas:</li>
                                <li>* Adresas:</li>
                                <li>* El. pa&scaron;tas:</li>
                                <li>* Telefonas:</li>
                                <li>Faksas:</li>
                            </ul>
                            <div class="heading heading-border heading-bottom-border">
                                <h4><strong>Užpildykite informaciją</strong></h4>
                            </div>
                            <p>(Eiti į: Katalogas--&gt;Informaciniai puslapiai):</p>
                            <ul>
                                <li>Apie mus.</li>
                                <li>* Atsiskaitymas už prekes.</li>
                                <li>* Pirkimo sąlygos.</li>
                                <li>* Prekių pristatymas.</li>
                            </ul>
                            <p>*Jeigu Jums kažkurio punkto nereikia tai tiesiog i&scaron;trinkite.</p>
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