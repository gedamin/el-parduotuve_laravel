<!DOCTYPE html>
<html xmlns:fb="http://www.w3.org/1999/xhtml">
<head>
    <?php $active = 'meniuDokumentacija';?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kaip pridėti gamintoją Opencart</title>
    <meta content="Kaip pridėti gamintoją Opencart" property="og:title"/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <meta name="description" content="Kaip pridėti gamintoją Opencart">
    <meta content="Kaip pridėti gamintoją Opencart" property="og:description"/>
    <meta property="og:type" content="website"/>
    <meta content="{{ route('GamintojasOC20') }}" property="og:url"/>
    <meta content="{{ url('assets/img/misc/logo.png') }}" property="og:image"/>
    <link rel="canonical" href="{{ route('GamintojasOC20') }}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="author" content="Gediminas">
    <!-- Twiter-->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@elparduotuve">
    <meta name="twitter:creator" content="@elparduotuve">
    <meta name="twitter:title" content="Kaip pridėti gamintoją Opencart">

    <meta name="twitter:description" content="Kaip pridėti gamintoją Opencart">

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
                            class="active"><a itemprop="item" href="{{ route('GamintojasOC20') }}"><span itemprop="name">Kaip pridėti gamintoją?</span></a>
                            <meta itemprop="position" content="4"/>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>Kaip pridėti gamintoją?</h1>
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
                            <h2 class="heading-primary" itemprop="name"><strong>Kaip pridėti gamintoją prie prekės aprašymo?</strong></h2>
                            <div class="post-meta">
                                <span><i class="fa fa-user"></i> Parengė <a target="_blank" rel="nofollow" href="https://plus.google.com/u/0/117284839973334834336?rel=author"><span itemprop="author">Gediminas</span></a> </span>
                            </div>

                            <div class="heading heading-border heading-bottom-border">
                                <h3>Kaip pridėti gamintoją prie prekės aprašymo?</h3>
                            </div>

                            <ul>
                                <li>Eikite &nbsp;į &nbsp;http://www.jusuPuslapis.lt/admin</li>
                                <li>Eikite į <strong><em><u>Katalogas</u></em></strong> &ndash; <strong><em><u>Gamintojai</u></em></strong>.</li>
                                <li>Spauskite mygtuką <strong><em><u>Pridėti</u></em></strong>.</li>
                            </ul>

                            <p><img class="img-responsive" alt="gamintojai opencart" src="{{ url('assets/img/dokumentacija/gamintojas1.png') }}" /><br />
                                &nbsp;</p>

                            <p><strong>GAMINTOJO LANGAS:</strong></p>

                            <p><img class="img-responsive" alt="gamintojai" src="{{ url('assets/img/dokumentacija/gamintojas2.png') }}" /></p>

                            <ul>
                                <li><strong>Domeno URL plėtinys:</strong> galite&nbsp; palikti tu&scaron;čią arba jeigu turite modulį SEO generatorius, tuomet jis sugeneruos draugi&scaron;ką URL.</li>
                                <li><strong>Atvaizdas:</strong> pasirinkite gamintojo nuotrauką ar logotipą i&scaron; serverio arba įkelkite i&scaron; savo kompiuterio.</li>
                                <li><strong>Rikiavimo eili&scaron;kumas:</strong> kokia eilės tvarka bus suru&scaron;iuoti gamintojai Jūsų internetinėje parduotuvėje.</li>
                                <li>Įra&scaron;ykite gamintojo pavadinimą, kuri bus matomas čia:</li>
                            </ul>

                            <p>p.s. Žinoma Jums dar reikės eiti Katalogas--&gt;Produktai pasirinkus norimą prekę spaudžiate redaguoti ir ties lentele Nuorodos įtraukite Jums reikiamą gamintoją.</p>

                            <p><img class="img-responsive" alt="gamintojai" src="{{ url('assets/img/dokumentacija/gamintojas3.png') }}" /></p>

                            <p>Atidarius prekę pamatysite priskirtą gamintoją. Gamintoja nuoroda iteraktyvi, todėl paspaudus ant gamintojo būsite nukreipti į pasirinkto gamintojo puslapį.</p>

                            <p><img class="img-responsive" alt="gamintojai" src="{{ url('assets/img/dokumentacija/gamintojas4.png') }}" /></p>
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