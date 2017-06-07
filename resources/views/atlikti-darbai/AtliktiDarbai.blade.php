<!DOCTYPE html>
<html>
<head>
    <?php $active = 'meniu_AtliktiDarbai';?>
    <meta charset="UTF-8">
    <title>Atlikti darbai | www.el-parduotuve.lt</title>
    <meta content="Atlikti darbai | www.el-parduotuve.lt | el.parduotuve.lt@gmail.com" property="og:title"/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <meta name="description"
          content="Atlikti darbai www.el-parduotuve.lt el.paštas - el.parduotuve.lt@gmail.com< - Elektroninės parduotuvės kūrimas."
          property="og:description"/>
    <meta property="og:type" content="website"/>
    <meta content="{{ url('kontaktai.php') }}" property="og:url"/>
    <meta content="{{ url('assets/img/misc/logo.png') }}" property="og:image"/>

    <link rel="canonical" href="{{ url('kontaktai.php') }}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="author" content="Gediminas">
    <!-- Twiter-->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@elparduotuve">
    <meta name="twitter:creator" content="@elparduotuve">
    <meta name="twitter:title" content="Atlikti darbai | www.el-parduotuve.lt | el.parduotuve.lt@gmail.com<">
    <meta name="twitter:description"
          content="Atlikti darbai: www.el-parduotuve.lt el.paštas - info@el-parduotuve.lt - Elektroninės parduotuvės kūrimas">
    <meta name="twitter:image" content="{{ url('assets/img/misc/logo.png') }}" title="www.el-parduotuve.lt">
    <!-- END of Twiter-->
    @include('__include.head-no-seo')
</head>
<body>
<div class="body">
    @include('__include/header')
    <div role="main" class="main">
        <section class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="breadcrumb" itemtype="http://schema.org/BreadcrumbList">
                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                        itemprop="item" href="{{ url('/') }}"><span itemprop="name">Pradžia</span></a>
                                <meta itemprop="position" content="1"/>
                            </li>
                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"
                                class="active"><a itemprop="item" href="{{ route('atlikti-darbai') }}"><span
                                            itemprop="name">Atlikti darbai</span></a>
                                <meta itemprop="position" content="2"/>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h1>Atlikti darbai</h1>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <h2>Atlikti darbai</h2>
            <ul class="nav nav-pills sort-source" data-sort-id="portfolio" data-option-key="filter"
                data-plugin-options="{'layoutMode': 'masonry', 'filter': '*'}">
                <li data-option-value="*" class="active"><a href="#">Rodyti visas</a></li>
                <li data-option-value=".eshop"><a href="#">El-parduotuvės</a></li>
                <li data-option-value=".web"><a href="#">Svetainės</a></li>
            </ul>
            <hr>
            <div class="row">
                <div class="sort-destination-loader sort-destination-loader-showing">
                    <ul class="portfolio-list sort-destination" data-sort-id="portfolio">
                        @foreach($images as $darbai)
                        <li class="col-md-4 isotope-item {{$darbai->type}}">
                            <div class="portfolio-item">
                                <a target="_blank" href="{{$darbai->link}}">
                                    <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                                        <span class="thumb-info-wrapper">
                                            <img src="/storage/images/darbai/{{ $darbai->image }}"
                                                 class="img-responsive" alt="{{$darbai->title}}">
                                            <span class="thumb-info-title">
                                                <span class="thumb-info-inner">{{$darbai->title}}</span>
                                                <span class="thumb-info-type">{{$darbai->name}}</span>
                                            </span>
                                            <span class="thumb-info-action">
                                                <span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </li>
                        @endforeach
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