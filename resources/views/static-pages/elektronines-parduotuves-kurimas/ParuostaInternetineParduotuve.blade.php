<!DOCTYPE html>
<html>
<head>
    <?php $active = 'meniuElParduotuveKurimas';?>
    <meta charset="UTF-8">
    <title>Įsigyk paruoštą prekybai internetinę parduotuvę</title>
    <meta content="Įsigyk paruoštą prekybai internetinę parduotuvę" property="og:title"/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <meta name="description" content="Įsigyk paruoštą prekybai internetinę parduotuvę. www.el-parduotuve.lt"/>
    <meta content="Įsigyk paruoštą prekybai internetinę parduotuvę. www.el-parduotuve.lt"
          property="og:description"/>
    <meta property="og:type" content="website"/>
    <meta content="{{route('paruostaJournalParduotuve')}}" property="og:url"/>
    <meta content="{{ url('assets/img/misc/logo.png') }}" property="og:image"/>
    <link rel="canonical" href="{{route('paruostaJournalParduotuve')}}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="author" content="Gediminas">
    <!-- Twiter-->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@elparduotuve">
    <meta name="twitter:creator" content="@elparduotuve">
    <meta name="twitter:title" content="Įsigyk paruoštą prekybai internetinę parduotuvę">
    <meta name="twitter:description" content="Įsigyk paruoštą prekybai internetinę parduotuvę. www.el-parduotuve.lt">
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
                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="active"><a itemprop="item" href="{{ route('paruostaJournalParduotuve') }}"><span itemprop="name">Įsigyk paruoštą prekybai internetinę parduotuvę</span></a>
                                <meta itemprop="position" content="3"/>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h1>Įsigyk paruoštą prekybai internetinę parduotuvę</h1>
                    </div>
                </div>
            </div>
        </section>
        <div role="main" class="main shop">
            <div>
            <div class="container">
            <div class="row">
                <div class="col-md-12 mb-xlg mt-xlg">
                    <h3><strong>Paruošta prekybai</strong> E-parduotuvė su <strong>JOURNAL</strong> Dizainu</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="owl-carousel owl-theme" data-plugin-options="{'items': 1, 'singleItem': false, 'autoPlay': true}">
                        <div>
                            <div class="thumbnail">
                                <img alt="elektroninės parduotuvės kaina" class="img-responsive img-rounded" src="{{ url('assets/img/el-parduotuviu-kurimas/journal-2-demo1.png') }}">
                            </div>
                        </div>
                        <div>
                            <div class="thumbnail">
                                <img alt="elektroninės parduotuvės kaina" class="img-responsive img-rounded" src="{{ url('assets/img/el-parduotuviu-kurimas/journal-2-demo2.png') }}">
                            </div>
                        </div>
                        <div>
                            <div class="thumbnail">
                                <img alt="elektroninės parduotuvės kaina" class="img-responsive img-rounded" src="{{ url('assets/img/el-parduotuviu-kurimas/journal-2-demo1.png') }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="summary entry-summary">
                        <h3 class="mb-xs" itemprop="name"><strong>E-parduotuvė su JOURNAL dizainu</strong></h3>
                        <div>
                        <p class="price">
                            <span>KAINA: </span><span class="amount" content="@include('__include/price')">@include('__include/price')<span> €</span></span>
                        </p>
                            <p>
                                <strong class="inverted">
                                <span class="word-rotate active" data-plugin-options="{'delay': 2000, 'animDelay': 350}">
											<span class="word-rotate-items">
												<span>Prekyboje</span>
												<span>Prekyboje</span>
                                            </span>
                                    </span>
                                </strong>
                                </p>

                        </div>
                        <p class="lead justify " itemprop="description">Elektroninė paduotuvė su itin funkciuonaliu JOURNAL dizainu. Tai yra dizaino šablonas TAČIAU šis dizainas yra labai funkciuonalus, todėl Jūs kaip parduotuvės administratorius galėsite patys (be programuotojo pagalbos) redaguoti daugumą dizaino elementų (šriftus, spalvas, fonus, išdėstymus, meniu ir t.t.) </p>
                        <div class="featured-box featured-box-quaternary mt-sm" style="height: 377px;">
                            <div class="box-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3 class="mb-lg">JOURNAL dizaino pavyzdžiai</h3>
                                        <p class="lead justify">Peržiūrėkite visus JOURNAL dizainų pavyzdžius ir išsirinkite Jums tinkamiausią. TAČIAU atkreipiame dėmesį, kad Jūs patys galėsite redaguoti dizaino išvaizdą.</p>
                                        <div class="divider divider-small divider-small-center">
                                            <hr>
                                        </div>
                                        <a class="btn btn-lg btn-quaternary mr-xs mb-lg" target="_blank" href="{{route('elektronines-parduotuves-dizainas')}}">Peržiūrėti dizainus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="featured-box featured-box-tertiary mt-sm" style="height: 390px;">
                            <div class="box-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3 class="mb-lg">Prisijunkite prie JOURNAL dizaino ADMIN aplinkos</h3>
                                        <p class="lead text-center">Siūlome prisijngti prie vieno iš JOURNAL dizaino Administracinės aplinkos ir apsidairyti kaip valdoma elektroninė parduotuvė.</p>
                                        <div class="divider divider-longer divider-longer-center">
                                            <hr>
                                        </div>

                                        <div class="col-md-6">
                                            <a class="btn btn-lg btn-primary  mr-md mb-lg" target="_blank" href="http://www.journal-2.el-parduotuve.lt/">Peržiūrėti JOURNAL dizainą</a>
                                        </div>
                                        <div class="col-md-6">
                                            <a class="btn btn-lg btn-primary  ml-md mb-lg" target="_blank" href="http://www.journal-2.el-parduotuve.lt/admin">Prisijungti prie ADMIN aplinkos</a>
                                            <p class=" text-center">Vartotojo vardas: <span class="label label-dark">demo</span> Slaptažodis: <span class="label label-dark">demo</span></p>
                                        </div>
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