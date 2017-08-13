<!DOCTYPE html>
<html xmlns:fb="http://www.w3.org/1999/xhtml">
<head>
    <?php $active = 'meniuDokumentacija';?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Modulis: Akcijos</title>
    <meta content="Modulis: Akcijos" property="og:title"/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <meta name="description" content="Modulis: Akcijos">
    <meta content="Modulis: Akcijos" property="og:description"/>
    <meta property="og:type" content="website"/>
    <meta content="{{ route('AkcijosOC15') }}" property="og:url"/>
    <meta content="{{ url('assets/img/misc/logo.png') }}" property="og:image"/>
    <link rel="canonical" href="{{ route('AkcijosOC15') }}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="author" content="Gediminas">
    <!-- Twiter-->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@elparduotuve">
    <meta name="twitter:creator" content="@elparduotuve">
    <meta name="twitter:title" content="Modulis: Akcijos">

    <meta name="twitter:description" content="Modulis: Akcijos">

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
                            class="active"><a itemprop="item" href="{{ route('AkcijosOC15') }}"><span
                                        itemprop="name">Modulis: Akcijos</span></a>
                            <meta itemprop="position" content="4"/>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>Modulis: Akcijos</h1>
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
                            <h2 class="heading-primary" itemprop="name"><strong>Modulis: Akcijos</strong></h2>
                            <div class="post-meta">
                                <span><i class="fa fa-user"></i> Parengė <a target="_blank" rel="nofollow" href="https://plus.google.com/u/0/117284839973334834336?rel=author"><span itemprop="author">Gediminas</span></a> </span>
                            </div>

                            <div class="heading heading-border heading-bottom-border">
                                <h4><strong>Modulis: Akcijos</strong></h4>
                            </div>

                            <h4><strong>Kaip valdyti modulį: Akcijos?</strong></h4>

                            <p><strong>Akcijos/Specialūs &ndash; </strong>tai toks modulis, kuris Jus suteiks galimybę prekes su nuolaida i&scaron;dėstyti norimoje Jūsų <a href="{{route('home')}}" title="internetines parduotuves"><strong>internetinės parduotuvės</strong></a> vietoje.</p>

                            <p>Pagrindinės funkcijos ir galimybės:</p>

                            <ul>
                                <li>Automati&scaron;kai atrenka visas akcijines prekes.</li>
                                <li>Leidžiama nustatyti kiek akcijinių prekių rodyti norimoje el-parduotuvės vietoje.</li>
                                <li>Galima i&scaron;dėstyti bet kurioje internetinės parduotuvės vietoje (bet kuriame puslapyje ir bet kurioje vietoje: vir&scaron;uje, de&scaron;inėje (stulpelyje), apačioje arba kairėje (stulpelyje).</li>
                            </ul>

                            <p><strong>Akcijinės prekės pavaizdavimo pavyzdys (akcijos atvaizdavimas priklauso nuo dizaino):</strong></p>

                            <p><img class="img-responsive" alt="akcija opencart" src="{{ url('assets/img/dokumentacija15/akcija.png') }}" /></p>

                            <h3><strong>Modulio &bdquo;Akcijos&ldquo; </strong>nustatymai ir valdymas:</h3>

                            <p><strong>Kad aktyvuoti ir nustatyti &scaron;į modulį Jums reikia atlikti du veiksmus:</strong></p>

                            <p>I.&nbsp;&nbsp; I&scaron;sirinkite prekes, kurios bus akcijinės.</p>

                            <p>II.&nbsp; Aktyvuokite modulį Specialūs arba Akcijos. Eikite į Plėtiniai &ndash; Moduliai ir susiraskite modulį Specialūs/Akcijos ir aktyvuokite jį.</p>

                            <h4><strong>I.I&scaron;sirinkite prekes, kurios bus akcijinės</strong>.</h4>

                            <ul>
                                <li>&nbsp;Eikite į savo internetinės parduotuvės TVS: www.jusuParduotuve.lt/admin</li>
                                <li>&nbsp;Eikite į <strong><em><u>Katalogas &ndash; Produktai</u></em></strong> &nbsp;ir i&scaron;sirinkite i&scaron; savo prekių, kurias norite padaryti Akcijines.</li>
                                <li>I&scaron;sirinkę norimą produktą, kuris bus akcijinis spauskite &ndash; <strong><em><u>Redaguoti</u></em></strong>.</li>
                            </ul>

                            <p><img class="img-responsive" alt="akcija opencart" src="{{ url('assets/img/dokumentacija15/akcija2.png') }}" /></p>

                            <p><strong>Atidarytoje prekėje pasirenkame langą/kortelę Akcijos</strong>:</p>

                            <p><img class="img-responsive" alt="akcijos opencart" src="{{ url('assets/img/dokumentacija15/akcija3.png') }}" /></p>

                            <h3><strong>Spauskite: Pridėti ypatingą pasiūlymą.</strong></h3>

                            <ul>
                                <li><strong>Vartotojų grupė:</strong> palikite Numatytąją (angl.: Default).</li>
                                <li><strong>Prioritetas:</strong> nustatykite akcijinės prekės i&scaron;dėstymo poziciją (galite palikti ir tu&scaron;čią, o sistema parinks vietą automati&scaron;kai).</li>
                                <li><strong>Kaina:</strong> įra&scaron;ykite akcijinę kainą (t.y. kaina turi būti mažesnė nei nurodėte lange/kortelėje Duomenys.</li>
                                <li>&nbsp;<strong>Pradžios laikas:</strong> galite nustatyti pageidaujamą Akcijos pradžios laiką.</li>
                                <li><strong>Pabaigos laikas:</strong> galite nustatyti, kada akcija turi baigtis, o sistema automati&scaron;kai nutrauks akcijos galiojimą, kai ateis Jūsų nustatytas laikas.</li>
                                <li>Jeigu norite, kad akcija galiotų nuolat tai tiesiog nieko nepildykite Pradžios laike ir Pabaigos laike.</li>
                            </ul>

                            <p>Jau akcija nustatyta ir klientai matys, kad kaina sumažinta. Tačiau Jeigu norit atrinkti visas ar keletą akcijinių prekių ir i&scaron;dėstyri pirmame (ar kituose) Jūsų internetinės parduotuvės puslapyje Jums ar dreikia aktyvuoti modulį Akcijos.</p>

                            <h4>II. Aktyvuokite modulį Specialūs arba Akcijos</h4>

                            <p>.</p>

                            <p>Eikite į Plėtiniai &ndash; Moduliai ir susiraskite modulį Akcijos ir spauskite <strong><em>Redaguoti.</em></strong></p>

                            <p><img class="img-responsive" alt="akcijos opencart" src="{{ url('assets/img/dokumentacija15/akcija4.png') }}" /></p>

                            <ul>
                                <li>Toliau spauskite Pridėti modulį.</li>
                                <li><strong>Riba: </strong>čia galite nustatyti, kiek akcijinių prekių rodysyte atskiroje dėžutėje/vietoje.</li>
                                <li><strong>Paveikslėlis (P x A): </strong>nurodykite prekės paveiksliuko dydį pikseliais.</li>
                                <li><strong>I&scaron;dėstymas:</strong> Pasirinkite kuriame puslapyje norite atvaizduoti papildomą dėžutę su akcijinėmis prekėmis. Pradžios puslapyje (angl. Home), kategorijų puslapiuose (angl. Category), prekių puslapiuose (angl. Product)&nbsp; ir t.t.</li>
                                <li><strong>Rikiavimo eili&scaron;kumas: </strong>kurioje puslapio vietoje norėsite matyti Akcijų modulį.</li>
                                <li>Spauskite i&scaron;saugoti ir Jūsų akcijos bus rodomos Jūsų nustatytose vietose.</li>
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