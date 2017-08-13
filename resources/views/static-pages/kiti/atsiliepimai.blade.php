<!DOCTYPE html>
<html>
<head>
    <?php $active = 'meniu_kontaktai';?>
    <meta charset="UTF-8">
    <title>Kontaktai | www.el-parduotuve.lt | info@el-parduotuve.lt</title>
    <meta content="Atsiliepimai www.el-parduotuve.lt" property="og:title"/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <meta name="description" content="Atsiliepimai www.el-parduotuve.lt" property="og:description"/>
    <meta property="og:type" content="website"/>
    <meta content="{{ route('atsiliepimai') }}" property="og:url"/>
    <meta content="{{ url('assets/img/misc/logo.png') }}" property="og:image"/>
    <link rel="canonical" href="{{ route('atsiliepimai') }}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="author" content="Gediminas">
    <!-- Twiter-->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@elparduotuve">
    <meta name="twitter:creator" content="@elparduotuve">
    <meta name="twitter:title" content="Atsiliepimai www.el-parduotuve.lt<">
    <meta name="twitter:description" content="Atsiliepimai www.el-parduotuve.lt">
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
                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="active"><a itemprop="item" href="{{ route('atsiliepimai') }}"><span itemprop="name">Klientų atsiliepimai</span></a>
                                <meta itemprop="position" content="2"/>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h1>Mūsų klientų atsiliepimai</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-custom-map">
            <section class="section section-default">
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
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="alert alert-success hidden mt-lg" id="contactSuccess">
                        <strong>Pavyko!</strong> Jūsų pranešimas išsiųstas..
                    </div>
                    <div class="alert alert-danger hidden mt-lg" id="contactError">
                        <strong>Klaida!</strong> Įvyko klaida siunčiant Jūsų pranešimą.
                        <span class="font-size-xs mt-sm display-block" id="mailErrorMessage"></span>
                    </div>
                    <h2 class="mb-sm mt-sm"><strong>Laukiame</strong> Jūsų atsiliepimų:</h2>
                    <form id="contactForm" action="atsiliepimai.php" method="POST">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label>Jūsų vardas *</label>
                                    <input type="text" value="" data-msg-required="Įveskite vardą." maxlength="100" class="form-control" name="ContactFormName" id="ContactFormName" required>
                                </div>
                                <div class="col-md-6">
                                    <label>Jūsų elektroninio pašto adresas *</label>
                                    <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="prašome įveskite tinkamą adresą." maxlength="100" class="form-control" name="ContactFormEmail" id="email" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label>Antraštė</label>
                                    <input type="text" value="" data-msg-required="Įveskite klausimą." maxlength="100" class="form-control" name="ContacFormSubject" id="ContacFormSubject" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label>Žinutė *</label>
                                    <textarea maxlength="5000" data-msg-required="Įveskite žinutę mums." rows="10" class="form-control" name="ContactFormMessage" id="ContactFormMessage" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="submit" value="Siųsti" class="btn btn-primary btn-lg mb-xlg" data-loading-text="Kraunasi...">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <h4 class="heading-primary mt-lg">Apie <strong>Mus</strong></h4>
                    <p>Dirbame pagal individualios veiklos pažymą Nr. 589908. Individualios veiklos kodas pagal
                        ekonominės veiklos rūšių klasifikatorių: 620100. Individualios veiklos rūšies pavadinimas:
                        Kompiuterių programavimo veikla</p>
                    <hr>

                    <h4 class="heading-primary">Mūsų <strong>Kontaktai</strong></h4>
                    <ul class="list list-icons list-icons-style-3 mt-xlg">
                        <li><i class="fa fa-map-marker"></i> <strong>Adresas:</strong> Kovo 11-osios g. Vilnius</li>
                        <li><i class="fa fa-phone"></i> <strong>Tel:</strong> +37064687522</li>
                        <li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a
                                    href="mailto:info@el-parduotuve.lt">info@el-parduotuve.lt</a></li>
                    </ul>
                    <hr>
                    <h4 class="heading-primary">Darbo <strong>Valandos</strong></h4>
                    <ul class="list list-icons list-dark mt-xlg">
                        <li><i class="fa fa-clock-o"></i>Darbo laikas neribojamas</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @include('__include/footer')
</div>
@include('__include/scriptsFooter')
</body>
</html>