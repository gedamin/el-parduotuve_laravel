<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Elektroninių parduotuvių kūrimas | Internetinės parduotuvės kūrimas</title>
    <meta content="Elektroninių parduotuvių kūrimas | Internetinės parduotuvės kūrimas" property="og:title"/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <meta name="description" content="Internetinių Elektroninių parduotuvių kūrimas prieinama kaina. Savo klientams - NEMOKAMA SEO konsultacija. Jokio avanso atsiskaitymas sukūrus tinkamą el-parduotuvę!">
    <meta content="Internetinių Elektroninių parduotuvių kūrimas prieinama kaina. Savo klientams - NEMOKAMA SEO konsultacija. Jokio avanso atsiskaitymas sukūrus tinkamą el-parduotuvę!" property="og:description"/>
    <meta property="og:type" content="website"/>
    <meta property="og:site_name" content="Elektroninių parduotuvių kūrimas"/>
    <meta content="{{route('home')}}" property="og:url"/>
    <meta content="{{ url('assets/img/misc/logo.png') }}" property="og:image"/>
    <link rel="canonical" href="{{route('home')}}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="author" content="Gediminas">
    <!-- Twiter-->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@elparduotuve">
    <meta name="twitter:creator" content="@elparduotuve">
    <meta name="twitter:title" content="Elektroninių parduotuvių kūrimas | www.el-parduotuve.lt">
    <meta name="twitter:description" content="Internetinių Elektroninių parduotuvių kūrimas prieinama kaina. Savo klientams - NEMOKAMA SEO konsultacija. Jokio avanso atsiskaitymas sukūrus tinkamą el-parduotuvę!">
    <meta name="twitter:image" content="{{ url('assets/img/misc/logo.png') }}" title="www.el-parduotuve.lt">
    @include('__include/head-no-seo')
    <?php $active = 'index';?>
</head>
<body itemscope itemtype="http://schema.org/WebPage">
<div class="body">
    @include('__include/header')
    <div role="main" class="main">
        @include('__include/home_rev_slider')
        <div class="home-intro" id="home-intro">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <p>Nežinote nuo ko pradėti - ?&nbsp;&nbsp;&nbsp;<em>Susisiekite</em> ir mes Jums padėsime!
                            <span>Apžvelkite e-parduotuvės funkcijas ir galimybes!</span>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <div class="get-started">
                            <a href="{{route('kontaktai')}}" class="btn btn-lg btn-primary">Susisiekite
                                dabar!</a>
                            <div class="learn-more">arba <a
                                        href="http://www.el-parduotuve.lt/elektronines-parduotuves-kurimas/elektronines-parduotuves-galimybes.php">sužinokite
                                    daugiau.</a></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="row center">
                <div class="col-md-12">
                    <h1 class="word-rotator-title mb-sm">
                        <strong>
                            <span class="word-rotate" data-plugin-options='{"delay": 2000, "animDelay": 300}'>
                                <span class="word-rotate-items">
                                    <span>Elektroninių</span>
                                    <span>Internetinių</span>
                                </span>
                            </span>
                        </strong>parduotuvių kūrimas
                    </h1>
                    <p class="lead">Išskirtinis pasiūlymas: atsiskaitykite tik tuomet, kai elektroninė parduotuvė bus
                        tokia, kokios pageidavote. Neprašome avanso ar išankstinio mokėjimo!</p><a itemprop="url" href="{{route('home')}}"></a>
                </div>
            </div>
        </div>
        <section class="section section-default section-with-mockup mb-xlg">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="feature-box feature-box-style-2 reverse mb-xl appear-animation"
                             data-appear-animation="fadeInLeft" data-appear-animation-delay="300">
                            <div class="feature-box-icon">
                                <i class="fa fa-search"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="mb-sm">„Draugiška“ SEO</h4>
                                <p class="mb-lg">Elektroninių parduotuvių kūrimas yra neatsiejama nuo SEO optimazacijos,
                                    todėl siūlomos parduotuvės bus paruoštos SEO optimizacijai.</p>
                            </div>
                        </div>
                        <div class="feature-box feature-box-style-2 reverse mt-xl appear-animation"
                             data-appear-animation="fadeInLeft" data-appear-animation-delay="600">
                            <div class="feature-box-icon">
                                <i class="fa fa-mobile"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="mb-sm">Pritaikyta mobiliems</h4>
                                <p class="mb-lg">Siūlomų Internetinių parduotuvių dizainai visuomet bus pritaikyti
                                    įvairiems mobiliesiems įrenginiams ir planšetiniams kompiuteriams!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="{{ url('assets/img/home/elektroniniu_parduotuviu_kurimas.png') }}"
                             class="img-responsive mockup-landing-page mb-xl appear-animation"
                             alt="Elektroniniu parduotuviu kurimas" data-appear-animation="zoomIn"
                             data-appear-animation-delay="300">
                    </div>
                    <div class="col-md-4">
                        <div class="feature-box feature-box-style-2 mb-xl appear-animation"
                             data-appear-animation="fadeInRight" data-appear-animation-delay="300">
                            <div class="feature-box-icon">
                                <i class="fa fa-eur"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="mb-sm">Atsiskaityk po ...</h4>
                                <p class="mb-lg">Atsiskaitykite už suteiktas paslaugas tik po tinkamai atliktų darbų.
                                    Neprašysime avanso ir išankstinio mokėjimo. Įsigykite tik domeną ir hostingą!</p>
                            </div>
                        </div>
                        <div class="feature-box feature-box-style-2 mt-xl appear-animation"
                             data-appear-animation="fadeInRight" data-appear-animation-delay="600">
                            <div class="feature-box-icon">
                                <i class="fa fa-calendar-o"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="mb-sm">E-parduotuvė ~ 5 d. d. ...</h4>
                                <p class="mb-lg">Elektroninė parduotuvė gali būti sukūrta ir per 5 darbo dienas.
                                    Prireikus papildomų funkcijų ir galimybių - programuojame atitinkamai ilgiau.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="row center pt-xl pb-xl">
                <div class="col-md-12">
                    <div class="heading heading-border heading-middle-border heading-middle-border-center mt-xlg">
                        <h2 class="word-rotator-title mb-sm">Elektroninių parduotuvių kūrimas</h2>
                    </div>
                    <p class="lead">Susisiekite ir pateikite savo poreikį, pateiksime pasiūlymą ir sutarties projektą.
                        Pasirašius sutartį atliksime programavimo darbus, o <span class="label label-info">ATSISKAITYSITE TIK TUOMET</span>
                        kai bus tinkamai atliktas darbas!</p>
                </div>
            </div>
        </div>
        <section class="call-to-action call-to-action-primary mb-xlg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="call-to-action-content align-left pb-md mb-xl ml-none">
                            <h3 class="text-color-light mb-none mt-xl uppercase">Elektroninių <strong>parduotuvių
                                    kūrimas...</strong></h3>
                            <p class="lead mb-xl">Peržiūrėkite siūlomą internetinės parduotuvės pasiūlymą:</p>
                        </div>
                        <div class="call-to-action-btn">
                            <a href="http://www.el-parduotuve.lt/elektronines-parduotuves-kurimas/elektronines-parduotuves-kaina.php"
                               class="btn btn-lg btn-primary btn-primary-scale-2 mr-md">Detaliau ...</a>
                            <span class="mr-md text-color-light hidden-xs">Nuo <strong>400 &euro;</strong><span
                                        class="arrow arrow-light hlb" style="top: -88px; right: -47px;"></span></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="home-concept appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500">
            <svg class="home-concept-bg" x="0px" y="0px" width="345px" height="93px" viewBox="0 0 345 83"
                 enable-background="new 0 0 345 93" xml:space="preserve">
						<image overflow="visible" width="26" height="39"
                               xlink:href="{{ url('assets/img/temp/home-concept-pin.png') }}"
                               transform="matrix(0.169 0.1308 -0.1308 0.169 339.8496 0.6826)"
                               class="final-pin appear-animation" data-appear-animation="animated-pin"
                               data-appear-animation-delay="3650">
                        </image>
                <path class="line appear-animation" fill="none" stroke="#6f6f6f" stroke-width="0.25"
                      stroke-miterlimit="0" stroke-dasharray="0" data-appear-animation="animated-line"
                      data-appear-animation-duration="4s"
                      d="M7.086,87.455c8.133-8.646,54.247-51.634,155.173-36.766C268.762,66.38,327.34,17.642,337.992,10.241"/>
                <path fill="none" stroke="#FFF" stroke-width="0.50" stroke-miterlimit="10" stroke-dasharray="1,2.5"
                      d="M7.086,87.455c8.133-8.646,54.247-51.634,155.173-36.766C268.762,66.38,327.34,17.642,337.992,10.241"/>
                <image overflow="visible" width="26" height="39"
                       xlink:href="{{ url('assets/img/temp/home-concept-pin.png') }}"
                       transform="matrix(0.2137 0 0 0.2137 1 81.5898)" class="initial-pin appear-animation"
                       data-appear-animation="animated-pin">
                </image>
					</svg>
            <div class="container">
                <div class="row center">
                    <span class="sun"></span>
                    <span class="cloud"></span>
                    <div class="col-md-2 col-md-offset-1">
                        <div class="process-image">
                            <div class="box-image">
                                <svg class="small-circle" x="0px" y="0px" width="39px" height="39px" viewBox="0 0 39 39"
                                     enable-background="new 0 0 39 39" xml:space="preserve">
											<circle class="line appear-animation" fill="#FFF" stroke="#6f6f6f"
                                                    stroke-width="0.25" stroke-miterlimit="0" stroke-dasharray="0"
                                                    data-appear-animation="animated-line"
                                                    data-appear-animation-delay="800" cx="19.5" cy="19.5" r="19.063"/>
                                    <circle fill="none" stroke="#FFF" stroke-width="0.50" stroke-miterlimit="10"
                                            stroke-dasharray="1,2.5" cx="19.5" cy="19.5" r="19.063"/>
										</svg>
                                <img src="{{ url('assets/img/home/poreikis.png') }}" alt="e-parduotuves poreikis"
                                     class="appear-animation" data-appear-animation="zoomIn"
                                     data-appear-animation-duration="300" data-appear-animation-delay="1400"/>
                            </div>
                            <strong class="appear-animation" data-appear-animation="fadeInDown"
                                    data-appear-animation-delay="1150"
                                    data-plugin-options="{'accY': 200}">Poreikis</strong>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="process-image">
                            <div class="box-image">
                                <svg class="small-circle" x="0px" y="0px" width="39px" height="39px" viewBox="0 0 39 39"
                                     enable-background="new 0 0 39 39" xml:space="preserve">
											<circle class="line appear-animation" fill="#FFF" stroke="#6f6f6f"
                                                    stroke-width="0.25" stroke-miterlimit="0" stroke-dasharray="0"
                                                    data-appear-animation="animated-line"
                                                    data-appear-animation-delay="1200" cx="19.5" cy="19.5" r="19.063"/>
                                    <circle fill="none" stroke="#FFF" stroke-width="0.50" stroke-miterlimit="10"
                                            stroke-dasharray="1,2.5" cx="19.5" cy="19.5" r="19.063"/>
										</svg>
                                <img src="{{ url('assets/img/home/sutartis.png') }}" alt="el-parduotuves sutaris"
                                     class="appear-animation" data-appear-animation="zoomIn"
                                     data-appear-animation-duration="300" data-appear-animation-delay="1900"/>
                            </div>
                            <strong class="appear-animation" data-appear-animation="fadeInDown"
                                    data-appear-animation-delay="2150"
                                    data-plugin-options="{'accY': 200}">Sutartis</strong>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="process-image">
                            <div class="box-image">
                                <svg class="small-circle" x="0px" y="0px" width="39px" height="39px" viewBox="0 0 39 39"
                                     enable-background="new 0 0 39 39" xml:space="preserve">
											<circle class="line appear-animation" fill="#FFF" stroke="#6f6f6f"
                                                    stroke-width="0.25" stroke-miterlimit="0" stroke-dasharray="0"
                                                    data-appear-animation="animated-line"
                                                    data-appear-animation-delay="1700" cx="19.5" cy="19.5" r="19.063"/>
                                    <circle fill="none" stroke="#FFF" stroke-width="0.50" stroke-miterlimit="10"
                                            stroke-dasharray="1,2.5" cx="19.5" cy="19.5" r="19.063"/>
										</svg>
                                <img src="{{ url('assets/img/home/programavimas.png') }}" alt="parduotuves programavimas"
                                     class="appear-animation" data-appear-animation="zoomIn"
                                     data-appear-animation-duration="300" data-appear-animation-delay="2400"/>
                            </div>
                            <strong class="appear-animation" data-appear-animation="fadeInDown"
                                    data-appear-animation-delay="2650"
                                    data-plugin-options="{'accY': 200}">Programavimas</strong>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-offset-1">
                        <div class="project-image">
                            <div class="box-image">
                                <svg class="big-circle" x="0px" y="0px" width="85px" height="85px" viewBox="0 0 85 85"
                                     enable-background="new 0 0 85 85" xml:space="preserve">
											<circle class="line appear-animation" fill="#FFF" stroke="#6f6f6f"
                                                    stroke-width="0.25" stroke-miterlimit="0" stroke-dasharray="0"
                                                    data-appear-animation="animated-line"
                                                    data-appear-animation-delay="2250" cx="42.5" cy="42.5" r="42.063"/>
                                    <circle fill="none" stroke="#FFF" stroke-width="0.50" stroke-miterlimit="10"
                                            stroke-dasharray="1,2.5" cx="42.5" cy="42.5" r="42.063"/>
										</svg>
                                <div id="fcSlideshow" class="fc-slideshow appear-animation"
                                     data-appear-animation="zoomIn" data-appear-animation-duration="300"
                                     data-appear-animation-delay="2900">
                                    <ul class="fc-slides">
                                        <li><a href="{{route('atlikti-darbai')}}"><img class="img-responsive"
                                                                                              src="{{ url('assets/img/home/atliktas-darbas.png') }}"
                                                                                              alt="e-parduotuves kurimass"/></a></li>
                                        <li><a href="{{route('atlikti-darbai')}}"><img class="img-responsive"
                                                                                              src="{{ url('assets/img/home/atliktas-darbas-2.png') }}"
                                                                                              alt="e-parduotuves kurimass"/></a></li>
                                        <li><a href="{{route('atlikti-darbai')}}"><img class="img-responsive"
                                                                                              src="{{ url('assets/img/home/atliktas-darbas-3.png') }}"
                                                                                              alt="e-parduotuves kurimass"/></a></li>
                                        <li><a href="{{route('atlikti-darbai')}}"><img class="img-responsive"
                                                                                              src="{{ url('assets/img/home/atliktas-darbas-4.png') }}"
                                                                                              alt="e-parduotuves kurimass"/></a></li>
                                    </ul>
                                </div>
                            </div>
                            <strong class="our-work appear-animation" data-appear-animation="fadeInDown"
                                    data-appear-animation-delay="3150" data-plugin-options="{'accY': 300}">Atliktas
                                darbas</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading heading-border heading-middle-border heading-middle-border-center mt-xlg">
                        <h3 class="uppercase">Elektroninių parduotuvių kūrimas</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mb-lg">
                <div class="col-md-12 center">
                    <h4 class="mb-xl"><span class="text-color-primary">Kodėl</span> <strong><span
                                    class="text-color-secondary">rinktis</span> <span
                                    class="text-color-tertiary">mus ?</span></strong></h4>
                </div>
                <div class="row pt-xl clearfix">
                    <div class="col-md-6">
                        <div class="feature-box feature-box-style-2 reverse appear-animation"
                             data-appear-animation="fadeInLeft" data-appear-animation-delay="0">
                            <div class="feature-box-icon">
                                <i class="icon-settings icons text-color-quaternary"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="mb-sm">Funkcionalios</h4>
                                <p class="mb-lg">Funkcionali Elektroninės parduotuvės Turinio valdymo sistema užtikrins
                                    E-parduotuvės veikimą 24 val/parą. E-parduotuvės palaikymas visą sutartą
                                    laikotarpį ir nuolatinės rekomendacijos bei pagalba.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-box feature-box-style-2 appear-animation"
                             data-appear-animation="fadeInRight" data-appear-animation-delay="0">
                            <div class="feature-box-icon">
                                <i class="icon-film icons text-color-quaternary"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="mb-sm">Video dokumentacija</h4>
                                <p class="mb-lg">Paruošėme elektroninės parduotuvės video dokumentaciją, kurią
                                    peržiūrėjus greitai suprasite kaip valdoma e-parduotuvė. Nerandate video kaip
                                    valdyti tam tikrą funkciją? Susisiekite: info@el-parduotuve.lt</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="feature-box feature-box-style-2 reverse appear-animation"
                             data-appear-animation="fadeInLeft" data-appear-animation-delay="300">
                            <div class="feature-box-icon">
                                <i class="icon-screen-smartphone icons text-color-quaternary"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="mb-sm">Pritaikytos mobiliems</h4>
                                <p class="mb-lg">Siūlydami šias paslaugas: internetinių parduotuvių kūrimas ir <a
                                            target="_blank" href="https://logon.lt/">svetainių kūrimas</a> visada
                                    pasirūpiname, kad svetainės būtų prisitaikančio dizaino <span
                                            class="text-color-secondary">mobiliesiems</span> telefonams, planšetėms ir
                                    įvairiems kitiems skirtingų dydžių ir matmenų įrenginiams.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-box feature-box-style-2 appear-animation"
                             data-appear-animation="fadeInRight" data-appear-animation-delay="300">
                            <div class="feature-box-icon">
                                <i class="icon-check icons text-color-quaternary"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="mb-sm">Paruoštos SEO optimizacijai</h4>
                                <p class="mb-lg">Mūsų kuriamos internetinės parduotuvės yra paruoštos savarankiškam SEO
                                    optimizavimui. Savo klientams visuomet
                                    suteikiame <span class="text-color-secondary">NEMOKAMĄ SEO konsultaciją.</span>
                                    Detaliau apie SEO paslaugos privalumus skaitykite - <a
                                            href="http://www.seopaslaptys.lt/index.php">www.seopaslaptys.lt</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="feature-box feature-box-style-2 reverse appear-animation"
                             data-appear-animation="fadeInLeft" data-appear-animation-delay="600">
                            <div class="feature-box-icon">
                                <i class="icon-arrow-right icons text-color-quaternary"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="mb-sm">Marketingo rekomendacijos</h4>
                                <p class="mb-lg">Įvairius marketingo ir kitus naudingus rinkodaros patarimus siūlo mūsų
                                    partneriai: viliamas.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-box feature-box-style-2 appear-animation"
                             data-appear-animation="fadeInRight" data-appear-animation-delay="600">
                            <div class="feature-box-icon">
                                <i class="icon-arrow-left icons text-color-quaternary"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="mb-sm">Teiraukitės dėl nuomos</h4>
                                <p class="mb-lg">O jei dvejojate dėl pirkimo, tuomet alternatyva - <a target="_blank"
                                                                                                      href="https://www.eshoprent.com">elektroninių
                                        parduotuvių nuoma</a> , klauskite info@el-parduotuve.lt</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 center mt-xl mb-sm">
                    <a href="{{ url('elektronines-parduotuves-kurimas/elektronines-parduotuves-galimybes.php') }}"
                       class="btn btn-secondary mr-xs mb-sm appear-animation" data-appear-animation="fadeInUp"
                       data-appear-animation-delay="900">Visos galimybės</a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading heading-border heading-middle-border heading-middle-border-center mb-xlg">
                        <h3 class="uppercase">Elektroninių parduotuvių kūrimas</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <a href="{{route('demonstracija')}}"
                       target="_blank"><img
                                class="img-responsive mt-xl appear-animation"
                                src="{{ url('assets/img/home/demo-el-parduotuve.png') }}" alt="elektronines parduotuves"
                                data-appear-animation="fadeInLeft"></a>
                    <p class="center"><a class="btn btn-borders btn-primary btn-sm mt-sm"  href="{{route('demonstracija')}}">Detaliau</a>
                    </p>
                </div>
                <div class="col-md-7 col-md-offset-1">
                    <h3 class="mt-xl center uppercase"><strong>Elektroninės parduotuvės kūrimas</strong></h3>
                    <p class="text-xl center heading-primary mb-xl"><strong>Su DEMO dizainu</strong></p>
                    <p class="lead justify">Tai elektronininė parduotuvė su DEMO dizainu, nors tai ir paprastas
                        dizainas, tačiau prisitaikantis prie įvairaus dydžio įrenginių.</p>
                    <p class="lead justify">Norintiems sutaupyti - rinkitės DEMO dizainą. O esant poreikiui už protingą
                        kainą galėsime pakoreguoti DEMO dizaino spalvas, šriftą ir kitus dizaino atributus. TAČIAU,
                        jeigu
                        pateiksite didelį sąrašą pakeitimų, kuriuos norėsite pakoreguoti šiame dizaine, tuomet
                        atitikamai ir kaina gali padidėti. NEŽINOTE kiek kainuos dizaino pakeitimai ? KLAUSKITE
                        pateikdami pakeitimų sąrašą ir mes pateiksime pasiūlymą. O jeigu matysime, kad iš esmės reikia
                        keisti dizainą, tuomet iškart perspėsime, kad kaina žymiai pasikeis.</p>
                    <p class="lead justify">DEMO dizaine, Jūs kaip būsimas elektroninės parduotuvės administratorius
                        pats savarankiškai negalėsite keisti spalvų ir kitų dizaino elementų, todėl jeigu Jūs nuolat
                        norėsite eksperimentuoti su dizaino išvaizda ir spalvų gama, tuomet rekomenduosime tam
                        pritaikytus dizainus.</p>
                </div>
            </div>
            <hr class="tall">
            <div class="row">
                <div class="col-md-7">
                    <h3 class="mt-xl center uppercase"><strong>Elektroninės parduotuvės kūrimas</strong></h3>
                    <p class="text-xl center heading-primary mb-xl"><strong>Su JOURNAL dizainu</strong></p>
                    <p class="lead justify">Tai vienas iš funkcionaliausių dizainų, kadangi Jūs kaip el-parduotuvės
                        administratorius (be programuotojo pagalbos) galėsite pakeisti itin daug elementų (spalvas,
                        šriftus, išdėstymus ir t.t.). Kadangi šis dizainas turi labai daug nustatymų, todėl valdyti šį
                        dizainą yra šiek tiek sudėtingiau, tačiau be programuotojo pagalbos Jūs galėsite redaguoti labai
                        daug dizaino elementų. Ir visa tai galėsite padaryti per elektroninės parduotuvės administracinę
                        aplinką.</p>
                    <p class="lead justify">Ypač rekomenduotinas dizainas ir todėl, kad kartu su juo yra integruojamos
                        elektroninei parduotuvei labai svarbios papildomos funkcijos. Kaip pavyzdžiui BLOG (straipsnių
                        modulis), greito prekių atsiskaitymo modulis, modulis skirtas optimizuoti elektroninės
                        parduotuvės greitį ir kiti moduliai, kurie tiek prideda naujų funkcijų, tiek optimizuoja
                        programinį kodą.</p>
                </div>
                <div class="col-md-4 col-md-offset-1 mt-xl">
                    <a href="http://www.el-parduotuve.lt/elektronines-parduotuves-kurimas/elektronines-parduotuves-dizainas.php"
                       target="_blank"><img class="img-responsive mt-xl appear-animation"
                                            src="{{ url('assets/img/home/journal-dizainas-mix.png') }}"
                                            alt="layout styles" data-appear-animation="fadeInLeft"></a>
                    <p class="center"><a class="btn btn-borders btn-primary btn-sm mt-md"
                                         href="http://www.el-parduotuve.lt/elektronines-parduotuves-kurimas/elektronines-parduotuves-dizainas.php">Detaliau</a>
                    </p>
                </div>
            </div>

            <hr class="tall">
        </div>
        <section class="call-to-action call-to-action-primary mb-xlg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="call-to-action-content align-left pb-md mb-xl ml-none">
                            <h2 class="text-color-light mb-none mt-xl">Elektroninių <strong>parduotuvių
                                    kūrimas...</strong></h2>
                            <p class="lead mb-xl">Susisiekite dabar:</p>
                        </div>
                        <div class="call-to-action-btn">
                            <a href="{{route('kontaktai')}}"
                               class="btn btn-lg btn-primary btn-primary-scale-2 mr-md">Susisiekite ...</a>
                            <span class="mr-md text-color-light hidden-xs">Nedelskite<span class="arrow arrow-light hlb"
                                                                                           style="top: -88px; right: -47px;"></span></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading heading-border heading-middle-border heading-middle-border-center mt-xlg">
                        <h3 class="uppercase">Elektroninių parduotuvių kūrimas</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="lead justify">Jeigu Jūs turite parduotuvę kurioje prekiaujate įvairiomis prekėmis, tačiau
                        neturite elektroninės parduotuvės tuomet Jūs prarandate daug klientų. Naujus klientus galėsite
                        pritraukti elektroninės parduotuvės pagalba – užsakę Google reklamą arba SEO optimizaciją.
                        <strong>Elektroninių parduotuvių kūrimas</strong> labai sparčiai populiarėja ir vis daugiau
                        įmonių įsigyja web parduotuves. Tai paaiškinama labai paprastai - tai labai greitas, patogus,
                        paprastas, saugus būdas įsigyti prekes ar paslaugas. Pirkėjui ar klientui nereikia išeiti iš
                        namų, kad įsigyti prekes ar paslaugas. Be to Jūsų klientai galės susipažinti su Jūsų siūloma
                        preke ar paslaugomis, išsiaiškinti visas prekių savybes, palyginti prekių kainas. Elektroninė
                        parduotuvė suteiks galimybę apžiūrėti prekes nuotraukų ir video pagalba, taip pat galimybę
                        detaliai pasiskaityti prekės aprašymus, techninius duomenis, kainą, taikomas nuolaidas ir t.t.
                        Taigi E-parduotuvė - viskas - vienoje vietoje prekės, aprašymai, rekomendacijos, atsiliepimai ir
                        dar daugiau! O ypač svarbu tai, kad visą informaciją Jūs galite kontroliuoti realiuoju laiku, t.
                        y., bet kokie pakeitimai, kuriuos atliekate Jūs, iš karto matomi klientui - tai leidžia
                        vartotojui matyti visą šiuo metu naujausią aktualią informaciją. Be to, <a target="_blank"
                                                                                                   href="http://www.seopaslaptys.lt/elektroniniu-parduotuviu-kurimas.php">elektroninių
                            parduotuvių kūrimas</a> atliekamas pagal Jūsų norus, t. y. - internetinės parduotuvės
                        kūrimas, pagal Jūsų norimą dizainą, struktūrą, galimus atsiskaitymo būdus ir t.t. Svarbu ir tai,
                        kad web parduotuvės kūrimas, iš esmės, tai verslo pagalbininko susikūrimas, kadangi,
                        internetinės parduotuvės - tai tokios automatizuotos sistemos, kurios priima užsakymus,
                        apskaičiuoja užsakymų kainas, veda apskaitas, informuoja visus Jūsų klientus, apie nuolaidas ir
                            dar daugiau. Susisiekite su mumis ir mes Jums pateiksime geriausius pasiūlymus.</p>
                </div>
            </div>
            <div class="row">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading heading-border heading-middle-border heading-middle-border-center mt-xlg">
                            <h3 class="uppercase">Elektroninių parduotuvių kūrimas ir SEO</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <p class="lead justify"><strong><a href="http://www.seopaslaptys.lt">SEO</a> </strong> yra angliškas
                        trumpinys, kuris labiausiai žinomas ir vartojamas internetinių puslapių bei parduotuvių
                        programuotojams. O vartotojams tai lyg keiksmažodis, kuris nieko nereiškia. Tačiau kiekvienas
                        elektroninės parduotuvės savininkas norėtų, kad jo svetainė būtų paieškos sistemų (tokių kaip
                        google) aukščiausioje pozicijoje, todėl kiekvienam web svetainės savininkui pravartu susipažinti
                        su SEO. SEO angliškai būtų - Search Engine Optimisation, o lietuviškai – tai toks procesas,
                        kuriuo siekiama interneto puslapio informaciją (apie paslaugas, prekes ir t.t.) optimizuoti
                        paieškos sistemoms Google, Yahoo, Live ir kitoms. Pagrindinis SEO tikslas – atvesti į puslapį
                        kuo daugiau tikslinių vartotojų, kurie informacijos ieško paieškos sistemose (tokiose kaip
                        Google ir pan.). Daug informacijos apie SEO optimizaciją, bei nemokamus SEO patarimus galite
                        rasti mano svetainėje Internetinės parduotuvės optimizacija.</p>
                    <p class="lead justify">Statistika rodo tai, kad apie 90% visų interneto vartotojų informacijos
                        paieškai naudoja paieškos sistemas (dažniausiai google), todėl kiekvienam internetiniam
                        puslapiui yra labai svarbu "iškovoti" kuo aukštesnę poziciją paieškos variklių rezultatų
                        puslapiuose (angl. Search engine results page (SERP)). Remiantis pasauline praktika, daugiausia
                        tikslinių lankytojų į internetinį puslapį ar Jūsų elektroninę parduotuvę ateina jei paieškos
                        rezultatuose, pagal vartotojų ieškomą frazę, puslapis yra pirmose paieškos rezultatų pozicijose.
                        O kad tai pasiekti reikia nemažai pastangų ir laiko. O jeigu kreipsitės į profesionalus tai Jums
                        dar kainos krūvą pinigų, todėl siūlau nemokamus internetinės parduotuvės patarimus dėl SEO.</p>
                    <p class="lead justify">Kaip vienas iš svarių SEO optimizacijos faktorių yra tikslinių lankytojų
                        kiekio didinimas. Tai yra didinamas būtent tų lankytojų kiekis, kurie domisi Jūsų paslaugomis,
                        kaip pavyzdžiui kai žmonės ieško google paieškoje medinių langų ir jie paieškoje įrašys
                        raktažodį: kompiuteriai internetu tuomet pirmame paieškų rezultatų puslapyje bus pateikti visi
                        puslapiai, kurie atitiks minėtą raktažodį taip tie puslapiai gaus daug daugiau tikslinių
                        lankytojų, nei tie puslapiai kurie reklamuojasi visur kur įmanoma ir peršama reklama nors ir
                        lankytojui visai neaktuali tam tikra reklama.</p>

                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 center">
                    <h3 class="mb-xlg mt-xlg uppercase"><span class="text-color-primary">Opencart</span> <strong><span
                                    class="text-color-secondary">elektroninės parduotuvės</span></strong> <span
                                class="text-color-primary">privalumai</span></h3>
                </div>
                <div class="row pt-xl clearfix">
                    <div class="col-md-6">
                        <div class="feature-box feature-box-style-2 reverse appear-animation"
                             data-appear-animation="fadeInLeft" data-appear-animation-delay="0">
                            <div class="feature-box-icon">
                                <i class="icon-settings icons text-color-quaternary"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="mb-sm">Nesudėtinga TVS</h4>
                                <p class="mb-lg">Prisijungę prie parduotuvės TVS (turinio valdymo sistema) - lengvai
                                    pridėsite/redaguosite prekes, kategorijas ir kitą informaciją.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-box feature-box-style-2 appear-animation"
                             data-appear-animation="fadeInRight" data-appear-animation-delay="0">
                            <div class="feature-box-icon">
                                <i class="icon-organization icons text-color-quaternary"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="mb-sm">Daugiakalbystė</h4>
                                <p class="mb-lg">Daugiakalbystė suteiks Jums galimybę prekiauti ir kitose šalyse.
                                    Standartiškai suteikiamos trys klabos (Lietuvių, Anglų, Rusų).</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="feature-box feature-box-style-2 reverse appear-animation"
                             data-appear-animation="fadeInLeft" data-appear-animation-delay="300">
                            <div class="feature-box-icon">
                                <i class="icon-basket icons text-color-quaternary"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="mb-sm">Neribotas prekių skaičius</h4>
                                <p class="mb-lg">El-parduotuvė neturi apribojimų dėl prekių kiekio. Tik jeigu prekių
                                    kiekis viršys 5000 tuomet rekomenduosime įsigyti dedikuotą serverį, kad būtų
                                    užtikrintas tinkamas veikimas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-box feature-box-style-2 appear-animation"
                             data-appear-animation="fadeInRight" data-appear-animation-delay="300">
                            <div class="feature-box-icon">
                                <i class="icon-check icons text-color-quaternary"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="mb-sm">"Draugiška SEO"</h4>
                                <p class="mb-lg">Parduotuvė paruošta SEO optimizacijai. Jeigu SEO optimizavimą darysite
                                    ne patys, tuomet visada Jums siūlomi geriausi <a
                                            href="http://www.seopaslaptys.lt/seo-specialistai.php">SEO specialistai</a>
                                    mūsų seopaslaptys.lt svetainėje.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="feature-box feature-box-style-2 reverse appear-animation"
                             data-appear-animation="fadeInLeft" data-appear-animation-delay="600">
                            <div class="feature-box-icon">
                                <i class="icon-arrow-right icons text-color-quaternary"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="mb-sm">Nebūtinas galingas serveris</h4>
                                <p class="mb-lg">Dažniausiai visuomt užtenka paprastojo (angl. shared hosting) serverio,
                                    kurio kaina nuo kelių Eur per mėnesį.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-box feature-box-style-2 appear-animation"
                             data-appear-animation="fadeInRight" data-appear-animation-delay="600">
                            <div class="feature-box-icon">
                                <i class="icon-arrow-left icons text-color-quaternary"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="mb-sm">Papildomų funkcijų integracija</h4>
                                <p class="mb-lg">Esant poreikiui (už papildomą mokestį) įdiegiame papidomus modulius,
                                    kurie išplėčia parduotuvės funkcionalumą.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 center mt-xl mb-sm">
                    <a href="{{ url('elektronines-parduotuves-kurimas/elektronines-parduotuves-galimybes.php') }}"
                       class="btn btn-secondary mr-xs mb-sm appear-animation" data-appear-animation="fadeInUp"
                       data-appear-animation-delay="900">Visos galimybės</a>
                </div>
            </div>
        </div>
        <section class="section section-custom-map">
            <section class="section section-default section-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="center uppercase"><strong>Mūsų</strong> Klientų <strong>atsiliepimai</strong></h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="owl-theme mb-none">
                                    <div>
                                        <div class="col-md-12">
                                            <div class="testimonial testimonial-quaternary">
                                                <blockquote>
                                                    <p>Nepriekaištingas darbas, o ypač puikus palaikykas. Prireikė
                                                        keletą naujų internetinės parduotuvės funkcijų ir nustebau, kad
                                                        tai praktiškai nieko nekainavo, o maniau kad bus solidi suma.
                                                        Ačiū.</p>
                                                </blockquote>
                                                <div class="testimonial-arrow-down"></div>
                                                <div class="testimonial-author">
                                                    <div class="testimonial-author-thumbnail img-thumbnail">
                                                        <img src="{{ url('assets/img/ico/amunicija_m.png') }}" alt="">
                                                    </div>
                                                    <p><strong>Eligijus</strong><span>amunicija.lt</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="owl-theme mb-none">
                                    <div>
                                        <div class="col-md-12">
                                            <div class="testimonial testimonial-quaternary">
                                                <blockquote>
                                                    <p>Elektroninė parduotuvė sukūrta laiku pagal JOURNAL dizainą,
                                                        atlikti nestandartiniai pataisymai, konsultacija kaip naudotis
                                                        el-parduotuve buvo teikiama visą mėnesį ilgiau nei sutarėme
                                                        sutartyje, tad viskas puiku ...</p>
                                                </blockquote>
                                                <div class="testimonial-arrow-down"></div>
                                                <div class="testimonial-author">
                                                    <div class="testimonial-author-thumbnail img-thumbnail">
                                                        <img src="{{ url('assets/img/ico/neriBee.lt_logo.jpg') }}"
                                                             alt="">
                                                    </div>
                                                    <p><strong>NeriBee</strong><span>neribee.lt</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="owl-theme mb-none">
                                    <div>
                                        <div class="col-md-12">
                                            <div class="testimonial testimonial-quaternary">
                                                <blockquote>
                                                    <p>Svetainė sukūrta laiku ir viskas padaryta pagal mūsų pageidavimus
                                                        ir norus. Taip pat labai džiaugiamės, kad gavome ir papildomą
                                                        konsultaciją dėl reklamos ir SEO optimizacijos. Todėl drąsiai
                                                        rekomenduoju ir kitiems ...</p>
                                                </blockquote>
                                                <div class="testimonial-arrow-down"></div>
                                                <div class="testimonial-author">
                                                    <div class="testimonial-author-thumbnail img-thumbnail">
                                                        <img src="{{ url('assets/img/ico/damutei.lt_m.jpg') }}" alt="">
                                                    </div>
                                                    <p><strong>Jurgita</strong><span>damutei.lt</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="owl-theme mb-none">
                                    <div>
                                        <div class="col-md-12">
                                            <div class="testimonial testimonial-quaternary">
                                                <blockquote>
                                                    <p>Puikus darbas!!! konsultavimas, bendravimas ir atlikto darbo
                                                        greitis aukščiausio lygio,kylant neaiškumams visada patarta bei
                                                        papildomai konsultuota. Rekomenduoju,tikrai nenusivilsite!
                                                        Ačiū</p>
                                                </blockquote>
                                                <div class="testimonial-arrow-down"></div>
                                                <div class="testimonial-author">
                                                    <div class="testimonial-author-thumbnail img-thumbnail">
                                                        <img src="{{ url('assets/img/ico/kosmilta.jpg') }}" alt="">
                                                    </div>
                                                    <p><strong>Oksana</strong><span>Kosmilta</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
        </section>
    </div>
    @include('__include/footer')
</div>
@include('__include/scriptsFooter')
</body>
</html>