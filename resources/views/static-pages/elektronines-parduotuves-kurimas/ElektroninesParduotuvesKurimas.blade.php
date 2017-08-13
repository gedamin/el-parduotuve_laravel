<!DOCTYPE html>
<html>
<head>
    <?php $active = 'meniuElParduotuveKurimas';?>
    <meta charset="UTF-8">
    <title>Elektronines parduotuvės kūrimas</title>
    <meta content="Elektronines parduotuvės kūrimas" property="og:title"/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <meta name="description"
          content="Elektronines parduotuvės kūrimas prieinama kaina pradedančiam verslą. info@el-parduotuve.lt"/>
    <meta content="Elektronines parduotuvės kūrimas prieinama kaina pradedančiam verslą. info@el-parduotuve.lt"
          property="og:description"/>
    <meta property="og:type" content="website"/>
    <meta content="{{route('elektronines-parduotuves-kurimas')}}" property="og:url"/>
    <meta content="{{ url('assets/img/misc/logo.png') }}" property="og:image"/>
    <link rel="canonical" href="{{route('elektronines-parduotuves-kurimas')}}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="author" content="Gediminas">
    <!-- Twiter-->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@elparduotuve">
    <meta name="twitter:creator" content="@elparduotuve">
    <meta name="twitter:title" content="Elektronines parduotuvės kūrimas">
    <meta name="twitter:description" content="Elektronines parduotuvės kūrimas. PRIEINAMA KAINA NAUJAM VERSLININKUI">
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
                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                        itemprop="item" href="{{ url('/') }}"><span itemprop="name">Pradžia</span></a>
                                <meta itemprop="position" content="1"/>
                            </li>
                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"
                                class="active"><a itemprop="item"
                                                  href="{{ url('elektronines-parduotuves-kurimas.php') }}"><span
                                            itemprop="name">Elektroninės parduotuvės kūrimas</span></a>
                                <meta itemprop="position" content="2"/>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h1>Elektroninės parduotuvės kūrimas</h1>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Elektroninės parduotuvės <strong>kūrimas</strong></h3>
                    <p class="lead justify mb-xlg">Susipažinkite kaip prasideda elektroninių parduotuvių kūrimas, kokie yra
                        preliminarūs kūrimo etapai, kokios siūlomos parduotuvės galimybėmis. Peržiūrėkite
                        rekomenduojamus dizainus ir išsirinkite Jums tinkamiausią. Taip pat rekomenduojame susipažinti
                        ir išbandyti demonstracinę elektroninės parduotuvės versiją. Turime paruoštų internetinių
                        parduotuvių, todėl esant poreikiui elektroninė parduotuvė gali būti sukurta vos per kelias
                        dienas.</p>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="sort-destination-loader-showing">
                        <ul class="team-list sort-destination">
                            <li class="col-md-4 col-sm-4 col-xs-4 isotope-item leadership">
                <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                    <span class="thumb-info-wrapper">
                        <a href="{{route('elektronines-parduotuves-kaina')}}">
                            <img src="{{ url('assets/img/el-parduotuviu-kurimas/kaina.jpg') }}" class="img-responsive"
                                 alt="elektronines parduotuves kaina">
                            <span class="thumb-info-title">
                                <span class="thumb-info-inner">Elektroninės parduotuvės - KAINA</span>
                                <span class="thumb-info-type">KAINA</span>
                            </span>
                        </a>
                    </span>
                </span>
                            </li>
                            <li class="col-md-4 col-sm-4 col-xs-4 isotope-item leadership">
                <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                    <span class="thumb-info-wrapper">
                        <a href="{{route('elektronines-parduotuves-galimybes')}}">
                            <img src="{{ url('assets/img/el-parduotuviu-kurimas/galimybes.jpg') }}"
                                 class="img-responsive" alt="elektronines parduotuves galimybės">
                            <span class="thumb-info-title">
                                <span class="thumb-info-inner">Elektroninės parduotuvės - GALIMYBĖS</span>
                                <span class="thumb-info-type">GALIMYBĖS</span>
                            </span>
                        </a>
                    </span>
                </span>
                            </li>
                            <li class="col-md-4 col-sm-4 col-xs-4 isotope-item leadership">
                <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                    <span class="thumb-info-wrapper">
                        <a href="{{route('elektronines-parduotuves-dizainas')}}">
                            <img src="{{ url('assets/img/el-parduotuviu-kurimas/dizainai.jpg') }}"
                                 class="img-responsive" alt="elektronines parduotuves dizainai">
                            <span class="thumb-info-title">
                                <span class="thumb-info-inner">Elektroninės parduotuvės - DIZAINAI</span>
                                <span class="thumb-info-type">Rekomenduojami DIZAINAI</span>
                            </span>
                        </a>
                    </span>
                </span>
                            </li>
                            <li class="col-md-4 col-sm-4 col-xs-4 isotope-item leadership">
                <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                    <span class="thumb-info-wrapper">
                        <a href="{{route('elektronines-parduotuves-kurimo-etapai')}}">
                            <img src="{{ url('assets/img/el-parduotuviu-kurimas/kurimo-etapai.jpg') }}"
                                 class="img-responsive" alt="elektronines parduotuves dizainai">
                            <span class="thumb-info-title">
                                <span class="thumb-info-inner">Elektroninės parduotuvės - KŪRIMO ETAPAI</span>
                                <span class="thumb-info-type">KŪRIMO ETAPAI</span>
                            </span>
                        </a>
                    </span>
                </span>
                            </li>

                            <li class="col-md-4 col-sm-4 col-xs-4 isotope-item leadership">
                <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                    <span class="thumb-info-wrapper">
                        <a href="{{route('demonstracija')}}">
                            <img src="{{ url('assets/img/el-parduotuviu-kurimas/demo-e-parduotuve.png') }}"
                                 class="img-responsive" alt="elektronines parduotuves TVS">
                            <span class="thumb-info-title">
                                <span class="thumb-info-inner">IŠBANDYK E-parduotuvę su - DEMO Dizainu</span>
                                <span class="thumb-info-type">IŠBANDYK ir Turinio valdymo sistemą</span>
                            </span>
                        </a>
                    </span>
                </span>
                            </li>
                            <li class="col-md-4 col-sm-4 col-xs-4 isotope-item leadership">
                <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                    <span class="thumb-info-wrapper">
                        <a href="{{route('paruostaJournalParduotuve')}}">
                            <img src="{{ url('assets/img/el-parduotuviu-kurimas/journal-dizainas-mix.png') }}"
                                 class="img-responsive" alt="elektronines parduotuves">
                            <span class="thumb-info-title">
                                <span class="thumb-info-inner">IŠBANDYK E-parduotuvę su JOURNAL Dizainu</span>
                                <span class="thumb-info-type">PARUOŠTA E-parduotuvė su JOURNAL Dizainu</span>
                            </span>
                        </a>
                    </span>
                </span>
                            </li>
                         </ul>
                    </div>
                </div>
            </div>
            <hr class="tall"/>
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading heading-border heading-middle-border heading-middle-border-center center">
                            <h3><strong>Programavimo darbus pradedame kai:</strong></h3>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="tabs tabs-bottom tabs-center tabs-simple">
                            <ul class="nav nav-tabs">
                                <li class="">
                                    <a href="#tabsNavigationSimpleIcons1" data-toggle="tab" aria-expanded="false">
										<span class="featured-boxes featured-boxes-style-6 p-none m-none">
											<span class="featured-box featured-box-primary featured-box-effect-6 p-none m-none"
                                                  style="height: 100px;">
												<span class="box-content p-none m-none">
													<i class="icon-featured fa fa-check-circle-o"></i>
												</span>
											</span>
										</span>
                                        <p class="mb-none pb-none">Turite domeną ir hostingą</p>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#tabsNavigationSimpleIcons2" data-toggle="tab" aria-expanded="false">
										<span class="featured-boxes featured-boxes-style-6 p-none m-none">
											<span class="featured-box featured-box-primary featured-box-effect-6 p-none m-none"
                                                  style="height: 100px;">
												<span class="box-content p-none m-none">
													<i class="icon-featured fa fa-desktop"></i>
												</span>
											</span>
										</span>
                                        <p class="mb-none pb-none">Pasirinkote dizainą</p>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="#tabsNavigationSimpleIcons3" data-toggle="tab" aria-expanded="true">
										<span class="featured-boxes featured-boxes-style-6 p-none m-none">
											<span class="featured-box featured-box-primary featured-box-effect-6 p-none m-none"
                                                  style="height: 100px;">
												<span class="box-content p-none m-none">
													<i class="icon-featured fa fa-file-text-o"></i>
												</span>
											</span>
										</span>
                                        <p class="mb-none pb-none">Pasirašyta sutartis</p>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#tabsNavigationSimpleIcons4" data-toggle="tab" aria-expanded="false">
										<span class="featured-boxes featured-boxes-style-6 p-none m-none">
											<span class="featured-box featured-box-primary featured-box-effect-6 p-none m-none"
                                                  style="height: 100px;">
												<span class="box-content p-none m-none">
													<i class="icon-featured fa fa-key"></i>
												</span>
											</span>
										</span>
                                        <p class="mb-none pb-none">Pateikti prisijungimai</p>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane" id="tabsNavigationSimpleIcons1">
                                    <div class="center">
                                        <h4>Turite įsigiję domeną ir hostingą</h4>
                                        <p>Kad pradėti programavimo darbu Jums reikės įsigyti domeną ir hostingą (svetainės
                                            talpinimo pasalugą). Esant poreikiui tai padarysime už Jus.</p>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tabsNavigationSimpleIcons2">
                                    <div class="center">
                                        <h4>Pasirinkote elektroninė parduotuvės dizainą</h4>
                                        <p>Pasirinkti siūlome iš rekomenduojamų dizainų, tačiau vienas iš funkciuonaliausių
                                            dizainų yra JOURNAL.</p>
                                    </div>
                                </div>
                                <div class="tab-pane active" id="tabsNavigationSimpleIcons3">
                                    <div class="center">
                                        <h4>Pasirašoma sutartis ir darbų sąmata</h4>
                                        <p>Prieš pradedant programavimo darbus pasirašome sutartį ir darbų sąmatą, kurioje
                                            matysite ką uužsakote ir ką gausite po darbų atlikimo.</p>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tabsNavigationSimpleIcons4">
                                    <div class="center">
                                        <h4>Pateikiate prisijungimus prie serverio ir domeno</h4>
                                        <p>Pasirašius sutartį turėsite pateikti prisijungimus prie Jūsų domeno ir hostingo
                                            (serverio) ir programavimo darbai bus pradėti.</p>
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
<@include('__include/scriptsFooter')
</body>
</html>