<!DOCTYPE html>
<html xmlns:fb="http://www.w3.org/1999/xhtml">
<head>
    <?php $active = 'meniuDokumentacija';?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Modulis: Nemokamas pristatymas</title>
    <meta content="Modulis: Nemokamas pristatymas" property="og:title"/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <meta name="description" content="Modulis: Nemokamas pristatymas">
    <meta content="Modulis: Nemokamas pristatymas" property="og:description"/>
    <meta property="og:type" content="website"/>
    <meta content="{{ route('NemokamasPristatymasOC15') }}" property="og:url"/>
    <meta content="{{ url('assets/img/misc/logo.png') }}" property="og:image"/>
    <link rel="canonical" href="{{ route('NemokamasPristatymasOC15') }}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="author" content="Gediminas">
    <!-- Twiter-->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@elparduotuve">
    <meta name="twitter:creator" content="@elparduotuve">
    <meta name="twitter:title" content="Modulis: Nemokamas pristatymas">

    <meta name="twitter:description" content="Modulis: Nemokamas pristatymas">

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
                            class="active"><a itemprop="item" href="{{ route('NemokamasPristatymasOC15') }}"><span
                                        itemprop="name">Modulis: Nemokamas pristatymas</span></a>
                            <meta itemprop="position" content="4"/>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>Modulis: Nemokamas pristatymas</h1>
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
                            <h2 class="heading-primary" itemprop="name"><strong>Modulis: Nemokamas pristatymas</strong></h2>
                            <div class="post-meta">
                                <span><i class="fa fa-user"></i> Parengė <a target="_blank" rel="nofollow" href="https://plus.google.com/u/0/117284839973334834336?rel=author"><span itemprop="author">Gediminas</span></a> </span>
                            </div>

                            <div class="heading heading-border heading-bottom-border">
                                <h4><strong>Modulis: Nemokamas pristatymas</strong></h4>
                            </div>
                            <h3>Kaip valdyti modulį: Nemokamas pristatymas?</h3>

                            <ul>
                                <li>Eikite &nbsp;į &nbsp;http://www.jusuPuslapis.lt/admin</li>
                                <li>Eikite į <strong><em><u>Plėtiniai</u></em></strong> &ndash; <strong><em><u>Pristatymai</u></em></strong>.</li>
                                <li>Susiraskite modulį <strong>&bdquo;Nemokamas pristatymas&ldquo;</strong> ir paspauskite <strong><em><u>Redaguoti</u></em></strong>.</li>
                            </ul>

                            <p><img class="img-responsive" alt="logotipas opencart" src="{{ url('assets/img/dokumentacija15/nemokamas-pristatymas.png') }}" /></p>

                            <ul>
                                <li><strong>Suma:</strong> įra&scaron;ykite sumą, reikalingą norint aktyvuoti nemokamą pristatymą. T.y. vieta, kur Jūs nusprendžiate už kokią sumą reikia pirkti, kad internetinė parduotuvė automati&scaron;kai sukonfiguruotų nemokamo pristatymo funkciją. Pavyzdžiui jeigu įra&scaron;ysite 100 tai jūsų internetinės parduotuvės klientai automati&scaron;kai gaus nemokamo pristatymo pasirinkimo galimybę, kai pirks prekių daugiau nei už 100 litų.</li>
                                <li><strong>Būsena:</strong> Aktyvuota.</li>
                            </ul>

                            <p><strong>Modulio veikimo principas:</strong> Internetinė parduotuvė Jūsų klientams automati&scaron;kai leis pasirinkti nemokamo pristatymo būdą, kai pirks daugiau arba lygu Jūsų nurodytai sumai (kai bus skaičiuojamas nemokamas pristatymas).</p>

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