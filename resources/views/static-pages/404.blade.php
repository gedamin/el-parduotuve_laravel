<!DOCTYPE html>
<html>
<head>
    <?php $active = 'index';?>
    <meta charset="UTF-8">
    <title>Puslapis nerastas | www.el-parduotuve.lt</title>
    <meta content="Kontaktai | www.el-parduotuve.lt" property="og:title"/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <meta name="description" content="Puslapis nerastas | www.el-parduotuve.lt" property="og:description"/>
    <meta property="og:type" content="website"/>
    <meta content="{{ url('assets/img/misc/logo.png') }}" property="og:image"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="author" content="Gediminas">
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
                                class="active"><a itemprop="item" href="{{ url('404.php') }}"><span
                                            itemprop="name">Puslapis nerastas</span></a>
                                <meta itemprop="position" content="2"/>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h1>Puslapis nerastas</h1>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <section class="page-not-found">
                <div class="row">
                    <div class="col-md-6 col-md-offset-1">
                        <div class="page-not-found-main">
                            <h2>404 <i class="fa fa-file"></i></h2>
                            <p>Ooops, Puslapio, kurio ieškote nėra!</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h4 class="heading-primary">Keletas naudingų nuorodų</h4>
                        <ul class="nav nav-list">
                            <li><a href="{{route('home')}}">Pradžia</a></li>
                            <li><a href="{{route('elektronines-parduotuves-kurimas')}}">Elektroninės parduotuvės
                                    kūrimas</a></li>
                            <li><a href="{{route('SEO-optimizacija')}}">SEO optimizacija</a></li>
                            <li><a href="{{route('atlikti-darbai')}}">Atlikti darbai</a></li>
                            <li><a href="{{route('kontaktai')}}">Kontaktai</a></li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    </div>
    @include('__include/footer')
</div>
@include('__include/scriptsFooter')
</body>
</html>