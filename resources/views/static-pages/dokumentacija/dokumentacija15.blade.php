<!DOCTYPE html>
<html>
<head>
    <?php $active = 'meniuDokumentacija';?>
    <meta charset="UTF-8">
    <title>Internetinės parduotuvės dokumentacija</title>
    <meta content="Internetinės parduotuvės dokumentacija" property="og:title"/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <meta name="description" content="Internetinės parduotuvės dokumentacija. Išmoksite greitai ir lengvai valdysite patys. Mokomoji video ir tekstinė Opencart valdymo medžiaga."/>
    <meta content="Internetinės parduotuvės dokumentacija. Išmoksite greitai ir lengvai valdysite patys. Mokomoji video ir tekstinė Opencart valdymo medžiaga."
          property="og:description"/>
    <meta property="og:type" content="website"/>
    <meta content="{{route('dokumentacija15')}}" property="og:url"/>
    <meta content="{{ url('assets/img/misc/logo.png') }}" property="og:image"/>
    <link rel="canonical" href="{{route('dokumentacija15')}}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="author" content="Gediminas">
    <!-- Twiter-->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@elparduotuve">
    <meta name="twitter:creator" content="@elparduotuve">
    <meta name="twitter:title" content="Internetinės parduotuvės dokumentacija">
    <meta name="twitter:description" content="Internetinės parduotuvės dokumentacija. Išmoksite greitai ir lengvai valdysite patys. Mokomoji video ir tekstinė Opencart valdymo medžiaga.">
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
                                class="active"><a itemprop="item"  href="{{ route('dokumentacija15') }}"><span itemprop="name"> E-parduotuvėms kurtoms iki 2015-04-01</span></a>
                                <meta itemprop="position" content="2"/>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h1>Elektroninės parduotuvės dokumentacija kurtoms iki 2015-04-01</h1>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    @include('__include/categories')
                </div>
                <div class="col-md-9">
                    <h3>Elektroninės parduotuvės <strong>dokumentacija kurtoms iki 2015-04-01</strong></h3>
                    <p class="lead justify mb-xlg">Elektroninės parduotuvės dokumentacija. Išmoksite greitai ir lengvai valdysite patys. Video ir aprašomoji parduotuvės valdymo medžiaga. Jeigu neradote reikiamos metodinės medžiagos - susisiekite ir mes pasistengsime paruošti ar pakoreguoti esamą.</p>
                    <div class="sort-destination-loader-showing">
                        <ul class="team-list sort-destination">
                            <li class="col-md-6 col-sm-6 col-xs-6 isotope-item leadership">
                                <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                                    <span class="thumb-info-wrapper">
                                        <a href="{{route('AprasymaiOC15')}}">
                                            <img src="{{ url('assets/img/dokumentacija/aprasymai.png') }}" class="img-responsive"
                                                 alt="elektronines parduotuves kaina">
                                            <span class="thumb-info-title">
                                                <span class="thumb-info-inner">Aprašymai</span>
                                                <span class="thumb-info-type">DETALIAU</span>
                                            </span>
                                        </a>
                                    </span>
                                </span>
                            </li>
                            <li class="col-md-6 col-sm-6 col-xs-6 isotope-item leadership">
                                <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                                    <span class="thumb-info-wrapper">
                                        <a href="{{route('VideoDokOC15')}}">
                                        <a href="{{route('VideoDokOC15')}}">
                                            <img src="{{ url('assets/img/dokumentacija/video-dokumentacija.png') }}" class="img-responsive" alt="elektronines parduotuves galimybės">
                                            <span class="thumb-info-title">
                                                <span class="thumb-info-inner">Video</span>
                                                <span class="thumb-info-type">DETALIAU</span>
                                            </span>
                                        </a>
                                    </span>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            </div>
        <section class="call-to-action call-to-action-default with-button-arrow call-to-action-in-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="call-to-action-content">
                            <h3>Turite klausimų, nedelskite <strong> rašykite...</strong></h3>
                            <p>Atsakome <strong>tą pačią</strong> arba sekančią dieną</p>
                        </div>
                        <div class="call-to-action-btn">
                            <a href="{{route('kontaktai')}}" class="btn btn-lg btn-primary btn-primary-scale-2 mr-md">Susisiekite ...</a>
                            <span class="mr-md text-color-quaternary hidden-xs">Nedelskite<span class="arrow hlb"style="top: -88px; right: -47px;"></span></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('__include/footer')
    </div>
</div>
<@include('__include/scriptsFooter')
</body>
</html>