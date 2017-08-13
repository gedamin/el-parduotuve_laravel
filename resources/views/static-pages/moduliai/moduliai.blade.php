<!DOCTYPE html>
<html>
<head>
    <?php $active = 'meniuDokumentacija';?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Papildomi moduliai</title>
    <meta content="Papildomi moduliai" property="og:title"/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <meta name="description" content="Papildomi moduliai">
    <meta content="Papildomi moduliai" property="og:description"/>
    <meta property="og:type" content="website"/>
    <meta content="{{ route ('Moduliai') }}" property="og:url"/>
    <meta content="{{ url('assets/img/misc/logo.png') }}" property="og:image"/>
    <link rel="canonical" href="{{ route ('Moduliai') }}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="author" content="Gediminas">
    <!-- Twiter-->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@elparduotuve">
    <meta name="twitter:creator" content="@elparduotuve">
    <meta name="twitter:title" content="Papildomi moduliai">
    <meta name="twitter:description" content="Papildomi moduliai">
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
                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="active"><a itemprop="item" href="{{ route ('Moduliai') }}"><span itemprop="name">Papildomi moduliai</span></a>
                                <meta itemprop="position" content="2"/>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h1>Papildomi moduliai</h1>
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
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="mb-sm">Papildomi Internetinės parduotuvės  moduliai</h2>
                        </div>
                    </div>
                    <hr class="tall">
                    <div class="blog-posts">
                            <article class="post post-medium">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="post-image">
                                            <div>
                                                <div>
                                                    <div class="img-thumbnail">
                                                        <a target="_blank" href="{{route('pdfModulis')}}">
                                                        <img class="img-responsive" src="{{ url('assets/img/dokumentacija/pdf-modulis.png') }}" alt="Opencart pdf modulis">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="post-content">
                                            <h3 class="mb-xs"><a target="_blank" href="{{route('pdfModulis')}}">MODULIS: pdf sąskaitos generavimas</a></h3>
                                            <div class="justify-p"><p>MODULIS: pdf sąskaitos generavimas. Papildomas modulis internetinei parduotuvei. Šis modulis suteiks galimybę profesionaliau savo klientams pateikti sąskaitas PDF formatu. Taip pat rasite ir daug daugiau modulio funkcijų prisijungę prie DEMO parduotuvės, kurioje įdiegtas šis modulis... <br/>www.el-parduotuve.lt - <a href="{{route('home')}}">elektroninių parduotuvių kurimas</a> rekomenduoja šį pdf modulį.</p></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="post-meta">
                                            <a target="_blank" href="{{route('pdfModulis')}}" class="btn btn-xs btn-primary pull-right">Detaliau...</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        <article class="post post-medium">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="post-image">
                                        <div>
                                            <div>
                                                <div class="img-thumbnail">
                                                    <a target="_blank" href="{{route('payseraModulis')}}">
                                                        <img class="img-responsive" src="{{ url('assets/img/dokumentacija/paysera_modulis_kategorija.png') }}" alt="Opencart parduotuvės valdymas">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="post-content">
                                        <h3 class="mb-xs"><a target="_blank" href="{{route('payseraModulis')}}">Paysera Modulis</a></h3>
                                        <div class="justify-p"><p>Savo klientams integruojame vieną iš populiariausių mokėjimo modulių- Paysera.</p>
                                            <a target="_blank" rel="nofollow" href="https://www.mokejimai.lt/ref/616036" class="btn btn-quaternary mr-xs mb-sm">Registruotis paysera</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="post-meta">
                                        <a target="_blank" href="{{route('payseraModulis')}}" class="btn btn-xs btn-primary pull-right">Detaliau...</a>
                                    </div>
                                </div>
                            </div>
                        </article>

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