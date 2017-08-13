<!DOCTYPE html>
<html>
<head>
    <?php $active = 'meniuElParduotuveKurimas';?>
    <meta charset="UTF-8">
    <title>==Hostingas | Svetainės talpinimas | iki 50% nuolaida==</title>
    <meta content="==Hostingas | Svetainės talpinimas | iki 50% nuolaida==" property="og:title"/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <meta name="description" content="Hostingas | Svetainės talpinimas | iki 50% nuolaida"/>
    <meta content="Hostingas | Svetainės talpinimas | iki 50% nuolaida"
          property="og:description"/>
    <meta property="og:type" content="website"/>
    <meta content="{{route('Hostingas')}}" property="og:url"/>
    <meta content="{{ url('assets/img/misc/logo.png') }}" property="og:image"/>
    <link rel="canonical" href="{{route('Hostingas')}}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="author" content="Gediminas">
    <!-- Twiter-->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@elparduotuve">
    <meta name="twitter:creator" content="@elparduotuve">
    <meta name="twitter:title" content="==Hostingas | Svetainės talpinimas | iki 50% nuolaida==">
    <meta name="twitter:description" content="Hostingas | Svetainės talpinimas | iki 50% nuolaida">
    <meta name="twitter:image" content="{{ url('assets/img/misc/logo.png') }}" title="www.el-parduotuve.lt">
    <!-- END of Twiter-->
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
                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="active"><a itemprop="item" href="{{ route('Hostingas') }}"><span itemprop="name">Hostingas (su nuolaida)</span></a>
                                <meta itemprop="position" content="2"/>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h1>Hostingas (su nuolaida)</h1>
                    </div>
                </div>

            </div>
        </section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading heading-quaternary heading-border heading-bottom-border">
                        <h2><span class="inverted inverted-quaternary">NUOLAIDA</span> <strong>Hostingui ir Domenui</strong> iki 50%</h2>
                    </div>
                    <p class="lead justify"><span class="inverted inverted-quaternary"><strong>REKOMENDUOJAME</strong></span> pasinaudoti serveriai.lt paslaugomis ir įsigyti domeną ir hostingą už specialią kainą, kurios negausite pirkdami tiesiai iš serveria.lt svetainės. Serveriai.lt - tai profesionalios interneto svetainių arba elektroninių parduotuvių talpinimo paslaugos, bei domenų registravimas geromis kainomis. Užsakę šias paslaugas per mus (pasinaudojus mūsų rekomenduojama nuoroda), Jūs gausite <span class="inverted inverted-quaternary"><strong>50% hostingo ir/arba 20% domeno</strong></span> užsakymo sumos premiją, kurią galėsite panaudoti turimų svetainių ar internetinių parduotuvių talpinimo paslaugų pratęsimui. Serveriai.lt siūlo pinigų grąžinimo garantiją, todėl premija Jums bus suteikta lygiai po vieno mėnesio nuo apmokėjimo už paslaugas. Savo premijos likutį matysite prisijungę prie serveriai.lt klientų sistemos.</p>
                    <div class="featured-box featured-box-quaternary mt-sm" style="height: 200px;">
                        <div class="box-content">
                            <div class="row">
                                <div class="col-md-12">

                                    <h3 class="mb-lg"><strong>50% NUOLAIDA</strong> svetainės talpinimo (web hostingo) paslaugoms</h3>

                                    <div class="divider divider-small divider-small-center">
                                        <hr>
                                    </div>
                                    <a class="btn btn-lg btn-quaternary mr-xs mb-lg" target="_blank" href="https://www.serveriai.lt/rekomenduoti.php?ek03SHljWQkxCWRiMWI">50% NUOLAIDA ČIA</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="featured-box featured-box-quaternary mt-sm" style="height: 200px;">
                        <div class="box-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="mb-lg"><strong>10% NUOLAIDA</strong> registruojant naują domeną</h3>
                                    <div class="divider divider-small divider-small-center">
                                        <hr>
                                    </div>
                                    <a class="btn btn-lg btn-quaternary mr-xs mb-lg" target="_blank" href="https://www.iv.lt/rekomenduoti.php?ek03SHljWQkxCWRiMWI">10% NUOLAIDA ČIA</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a target="_blank" rel="nofollow" href="http://www.serveriai.lt/"><img border="0" src="http://grafika.iv.lt/serveriai/hosted.png" alt="Web hostingas"></a>
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