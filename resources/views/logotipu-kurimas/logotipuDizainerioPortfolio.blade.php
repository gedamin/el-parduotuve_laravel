<!DOCTYPE html>
<html>
<head>
    <?php $active = 'meniuElParduotuveKurimas';?>
    <meta charset="UTF-8">
    <title>Logotipų kūrimas | Logotipai | Kaina | Susikūrk Nemokamai</title>
    <meta content="Logotipų kūrimas | Logotipai" property="og:title"/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <meta name="description"
          content="Logotipų kūrimas ir kitos grafinio dizaino paslaugos. Rasite ir priemonę leidžiančią susikūrti NEMOKAMĄ logotipą vos per kelias sekundes">
    <meta content="Logotipų kūrimas ir kitos grafinio dizaino paslaugos. Rasite ir priemonę leidžiančią susikūrti NEMOKAMĄ logotipą vos per kelias sekundes"
          property="og:description"/>
    <meta property="og:type" content="website"/>
    <meta content="http://www.el-parduotuve.lt/logotipu-kurimas.php" property="og:url"/>
    <meta content="{{ url('assets/img/misc/logo.png') }}" property="og:image"/>
    <link rel="canonical" href="{{ url('logotipu-kurimas.php') }}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="author" content="Gediminas">
    <!-- Twiter-->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@elparduotuve">
    <meta name="twitter:creator" content="@elparduotuve">
    <meta name="twitter:title" content="Logotipų kūrimas | Logotipai">
    <meta name="twitter:description"
          content="Logotipų kūrimas ir kitos grafinio dizaino paslaugos. Rasite ir priemonę leidžiančią susikūrti NEMOKAMĄ logotipą vos per kelias sekundes">
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
                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                        itemprop="item" href="{{ url('/') }}"><span itemprop="name">Pradžia</span></a>
                                <meta itemprop="position" content="1"/>
                            </li>
                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"
                                class="active"><a itemprop="item" href="{{ url('logotipu-kurimas.php') }}"><span
                                            itemprop="name">Logotipų kūrimas</span></a>
                                <meta itemprop="position" content="2"/>
                            </li>
                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"
                                class="active"><a itemprop="item" href="{{ url('logotipu-kurimas.php') }}"><span
                                            itemprop="name">{{ $disainerPorfolio->disainer_name }}</span></a>
                                <meta itemprop="position" content="3"/>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h1>{{ $disainerPorfolio->disainer_name }}</h1>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <h2>{{ $disainerPorfolio->disainer_title }}</h2>
            <div class="row">
                <div class="col-md-12">
                    <div class="post-block post-author clearfix">
                        <h3 class="heading-primary"><i class="fa fa-user"></i>{{ $disainerPorfolio->disainer_title }}
                        </h3>
                        <div class="img-thumbnail img-thumbnail-circle">
                            <img src="/storage/disainer/{{ $disainerPorfolio->disainer_avatar }}"
                                 alt="{{ $disainerPorfolio->disainer_name }}">
                        </div>
                        <p><strong class="name">{{ $disainerPorfolio->disainer_name }}</strong></p>
                        <p>{{$disainerPorfolio->LogoDisainerList->disainer_description}} </p>
                    </div>
                </div>
                <div class="col-md-12">
                    <ul class="list list-icons list-icons-style-3 mt-xs pl-md pr-md">
                        <li class="ib"><i class="fa fa-phone"></i> {{$disainerPorfolio->disainer_phone}}</li>
                        <li class="ib"><i class="fa fa-envelope"></i> <a
                                    href="mailto:{{$disainerPorfolio->disainer_email}}"> {{$disainerPorfolio->disainer_email}}</a>
                        </li>
                    </ul>
                </div>
                <hr>
                <div class="col-md-12">
                    <div class="sort-destination-loader-showing">
                        <ul class="image-gallery sort-destination lightbox" data-sort-id="portfolio"
                            data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">
                            @foreach($disainerPorfolio->LogoDisainerGallery as $LogoImage)
                                <li class="col-md-3 col-sm-6 col-xs-12 isotope-item websites">
                                    <div class="image-gallery-item">
                                        <a href="/storage/images/{{ $LogoImage->image }}" class="lightbox-portfolio">
									<span class="thumb-info">
										<span class="thumb-info-wrapper">
															<img src="/storage/images/{{ $LogoImage->image }}"
                                                                 class="img-responsive" alt="{{ $LogoImage->title }}">
															<span class="thumb-info-title">
																<span class="thumb-info-inner">{{ $LogoImage->title }}</span>
																<span class="thumb-info-type">{{ $LogoImage->type }}</span>
															</span>
															<span class="thumb-info-action">
																<span class="thumb-info-action-icon"><i
                                                                            class="fa fa-link"></i></span>
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
            {{--end row--}}
        </div>
    </div>
    @include('__include/footer')
</div>
@include('__include/scriptsFooter')
</body>
</html>