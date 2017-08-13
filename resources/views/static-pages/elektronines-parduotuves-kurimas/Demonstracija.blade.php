<!DOCTYPE html>
<html>
<head>
    <?php $active = 'meniuElParduotuveKurimas';?>
    <meta charset="UTF-8">
    <title>==Elektroninės parduotuvės kaina==</title>
    <meta content="Elektroninės parduotuvės demonstarcija | Išbandyk TVS" property="og:title"/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <meta name="description" content="Elektroninės parduotuvės demonstarcija | Išbandyk TVS."/>
    <meta content="Elektroninės parduotuvės demonstarcija | Išbandyk TVS."
          property="og:description"/>
    <meta property="og:type" content="website"/>
    <meta content="{{route('demonstracija')}}" property="og:url"/>
    <meta content="{{ url('assets/img/misc/logo.png') }}" property="og:image"/>
    <link rel="canonical" href="{{route('demonstracija')}}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="author" content="Gediminas">
    <!-- Twiter-->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@elparduotuve">
    <meta name="twitter:creator" content="@elparduotuve">
    <meta name="twitter:title" content="Elektroninės parduotuvės demonstarcija | Išbandyk TVS">
    <meta name="twitter:description" content="Elektroninės parduotuvės demonstarcija | Išbandyk TVS.">
    <meta name="twitter:image" content="{{ url('assets/img/misc/logo.png') }}" title="www.el-parduotuve.lt">
    <!-- END of Twiter-->
        <link rel="stylesheet" href="{{ url('assets/css/theme-shop.css') }}">
        <link rel="stylesheet" href="{{ url('assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ url('assets/vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
    @include('__include/head-no-seo')

</head>
<body>
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
                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="active"><a itemprop="item" href="{{ route('elektronines-parduotuves-kurimas') }}"><span itemprop="name">Elektroninės parduotuvės kūrimas</span></a>
                                <meta itemprop="position" content="2"/>
                            </li>
                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="active"><a itemprop="item" href="{{ route('demonstracija') }}"><span itemprop="name">DEMO El-parduotuvė</span></a>
                                <meta itemprop="position" content="3"/>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h1>DEMO El-parduotuvė</h1>
                    </div>
                </div>
            </div>
        </section>
        <div role="main" class="main shop">

        <div role="main" class="main shop">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-xlg mt-xlg">
                        <h3>DEMO <strong>El-parduotuvė</strong></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">

                            <div>
                                <div class="thumbnail">
                                    <img alt="elektroninės parduotuvės kaina" class="img-responsive img-rounded" src="{{ url('assets/img/el-parduotuviu-kurimas/demo-el-parduotuve.png') }}">
                                </div>
                            </div>
                        </div>
                    <div class="col-md-6">
                        <div class="summary entry-summary">
                            <h3 class="mb-xs">Išbandykite<strong>DEMO El-parduotuvę</strong></h3>
                            <p class="price mb-xlg mt-xlg">
                                <span>KAINA: </span><span class="amount">@include('__include/price-demo')<span> €</span></span>
                            </p>

                            <p class="lead justify">DEMO Elektroninė paduotuvė yra pilnai paruošta prekybai internete ir su visu reikalingu funkcionalumu, tačiau turi žymiai mažiau funkcijų nei JOURNAL dizainas. </p>
                            <div class="featured-box featured-box-quaternary mb-xlg mt-xlg" style="height: 355px;">
                                <div class="box-content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3 class="mb-lg">DEMO dizainas</h3>
                                            <p class="lead justify">Taip pat galite išbandyti ir elektroninę parduotuvę su DEMO dizainu ir įvertinti jos funkciuonalumą.</p>
                                            <div class="divider divider-small divider-small-center">
                                                <hr>
                                            </div>
                                            <div class="col-md-6">
                                                <a class="btn btn-lg btn-primary  mr-md mb-lg" target="_blank" href="http://www.demooc2.el-parduotuve.lt/">DEMO dizainas</a>
                                            </div>
                                            <div class="col-md-6">
                                                <a class="btn btn-lg btn-primary  ml-md mb-lg" target="_blank" href="http://www.demooc2.el-parduotuve.lt/admin/">DEMO ADMIN aplinka</a>

                                            </div>
                                            <p class="text-center">Vartotojo vardas: <span class="label label-dark">demo</span> Slaptažodis: <span class="label label-dark">demo</span></p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
@include('__include/scriptsFooter')
<script src="{{ url('assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
</body>
</html>