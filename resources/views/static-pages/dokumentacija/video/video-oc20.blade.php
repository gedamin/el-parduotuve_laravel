<!DOCTYPE html>
<html>
<head>
    <?php $active = 'meniuDokumentacija';?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Internetinės parduotuvės video mokomoji medžiaga</title>
    <meta content="Internetinės parduotuvės video mokomoji medžiaga" property="og:title"/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <meta name="description"
          content="Internetinės parduotuvės video mokomoji medžiaga. Vaizdžiai ir paprastai išmok valdyti e-parduotuvę.">
    <meta content="Internetinės parduotuvės video mokomoji medžiaga. Vaizdžiai ir paprastai išmok valdyti e-parduotuvę."
          property="og:description"/>
    <meta property="og:type" content="website"/>
    <meta content="{{ route ('VideoDokOC20') }}" property="og:url"/>
    <meta content="{{ url('assets/img/misc/logo.png') }}" property="og:image"/>
    <link rel="canonical" href="{{ route ('VideoDokOC20') }}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="author" content="Gediminas">
    <!-- Twiter-->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@elparduotuve">
    <meta name="twitter:creator" content="@elparduotuve">
    <meta name="twitter:title" content="Internetinės parduotuvės video mokomoji medžiaga">
    <meta name="twitter:description"
          content="Internetinės parduotuvės video mokomoji medžiaga. Vaizdžiai ir paprastai išmok valdyti e-parduotuvę.">
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
                                class="active"><a itemprop="item"  href="{{ url('dokumentacija.php') }}"><span itemprop="name">Dokumentacija</span></a>
                                <meta itemprop="position" content="2"/>
                            </li>
                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"
                                class="active"><a itemprop="item" href="{{ route ('VideoDokOC20') }}"><span itemprop="name">Video dokumentacija</span></a>
                                <meta itemprop="position" content="3"/>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h1>Internetinės parduotuvės mokomoji video dokumentacija</h1>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="mb-sm">Mokomoji video dokumentacija</h2>
                            <p class="lead justify">Internetinės parduotuvės valdymo ir administravimo mokomoji dokumentacija. Priklausomai nuo turimų parduotuvės funkcijų, administracinė aplinka gali šiek tiek skirtis nuo video, tačiau valdymo principas praktiškai vienodas.</p>
                        </div>
                        <div class="col-md-12">
                            <h4><strong>EL-parduotuvės Administracinės aplinkos apžvalga</strong></h4>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://www.youtube.com/embed/MU0Bt6ycRWg" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <p class="lead justify">Opencart elektroninės parduotuvės apžvalga. Trumpas video reportažas, kuriame parodomos bendrinės funkcijos, bei kur ir kaip jos valdomos</p>
                            <hr class="tall">
                            <h4><strong>Kaip sukurti prekių kategoriją</strong></h4>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://www.youtube.com/watch?v=mzQtR9bShkk" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <p class="lead justify">Elektroninės parduotuvės kategorijų valdymas. Trumpas video reportažas, kuriame parodoma kaip kuriamos ir valdomos prekių kategorijos.</p>
                            <hr class="tall">
                            <h4><strong>Kaip sukurti prekių subkategoriją</strong></h4>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://www.youtube.com/watch?v=qAYS37d5RSM" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <p class="lead justify">Elektroninės parduotuvės subkategorijų valdymas. Trumpas video reportažas, kuriame parodoma kaip kuriamos ir valdomos prekių subkategorijos.</p>
                            <hr class="tall">
                            <h4><strong>Kaip pridėti prekę į elektroninę parduotuvę</strong></h4>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://www.youtube.com/watch?v=lOo1Hdg9H00" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <p class="lead justify">Elektroninės parduotuvės prekių valdymas. Trumpas video reportažas, kuriame parodoma kaip kuriamos ir valdomos prekės.</p>
                            <hr class="tall">
                            <h4><strong>Kaip sukurti ir valdyti prekių gamintojus</strong></h4>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://www.youtube.com/watch?v=kiA4I6qMFUM" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <p class="lead justify">Elektroninės parduotuvės gamintojų valdymas. Trumpas video reportažas, kuriame parodoma kaip kuriami ir valdomi gamintojai.</p>
                            <hr class="tall">
                            <h4><strong>Kaip sukurti ir valdyti prekių pasirinkimus</strong></h4>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://www.youtube.com/watch?v=98HTq04XEU4" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <p class="lead justify">Elektroninės parduotuvės prekių pasirinkimų valdymas. Trumpas video reportažas, kuriame parodoma kaip kuriami ir valdomi prekių pasirinkimai.</p>
                            <hr class="tall">
                            <h4><strong>Kaip sukurti ir valdyti prekių atributus</strong></h4>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://www.youtube.com/watch?v=uKLZJF242WU" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <p class="lead justify">Elektroninės parduotuvės prekių atributų valdymas. Trumpas video reportažas, kuriame parodoma kaip kuriami ir valdomi prekių atributai.</p>
                            <hr class="tall">
                            <h4><strong>Pristatymo ir mokėjimo modulių valdymas</strong></h4>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://www.youtube.com/watch?v=g_PnRAdw61k" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <p class="lead justify">Elektroninės parduotuvės pristatymo ir mokėjimo modulių valdymas. Trumpas video reportažas, kuriame parodoma kaip valdomi pristatymo ir mokėjimo moduliai.</p>
                            <hr class="tall">
                            <h4><strong>MODULIS - Akcijos</strong></h4>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://www.youtube.com/watch?v=jN03NWq2B3M" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <p class="lead justify">Elektroninės parduotuvės akcijų valdymas. Trumpas video reportažas, kuriame parodoma kaip valdomas akcijų moduliai.</p>
                            <hr class="tall">
                            <h4><strong>MODULIS - Reklaminės skaidrės ir karuselė</strong></h4>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://www.youtube.com/watch?v=vBNaamrVmTc" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <p class="lead justify">Elektroninės parduotuvės modulių: Reklaminės skaidrės ir karuselės valdymas. Trumpas video reportažas, kuriame parodoma kaip valdomi šie modulias.</p>
                            <hr class="tall">
                            <h4><strong>Informacinių puslapių valdymas</strong></h4>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://www.youtube.com/watch?v=PG130OfMNA4" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <p class="lead justify">Elektroninės parduotuvės Informacinių puslapių valdymas. Trumpas video reportažas, kuriame parodoma kaip valdomi informaciniai puslapiai.</p>
                            <hr class="tall">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('__include/footer')
</div>
@include('__include/scriptsFooter')
</body>
</html>