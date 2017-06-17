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
                                class="active"><a itemprop="item" href="{{ url('logotipu-kurimas.php') }}"><span
                                            itemprop="name">Logotipų kūrimas</span></a>
                                <meta itemprop="position" content="2"/>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h1>Logotipų kūrimas</h1>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <h2>Pasirink <strong>Logotipo Dizainerį</strong></h2>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    @include('__include/categories')
                </div>
                <div class="col-md-9">
                    {{--Add disainer--}}
                    <section class="call-to-action mb-xl">
                        <div class="call-to-action-content">
                            <h3>Kuriate <strong>Logotipus</strong> ?</h3>
                            <p><strong>Būkit matomi</strong> įkelkite savo darbus ir pavyzdžius!</p>
                        </div>
                        <div class="call-to-action-btn">
                            <a href="{{ route('login') }}" target="_blank" class="btn btn-lg btn-primary">Įkelti</a>
                        </div>
                    </section>
                    <div class="sort-destination-loader-showing">
                        <ul class="team-list sort-destination">
                            @foreach($disainers_lists as $disainer)
                                @if(($disainer->is_active_disainer) != 1 )
                                    <li class="col-md-4 col-sm-4 col-xs-4 isotope-item leadership">
									<span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
										<span class="thumb-info-wrapper">
											<a href="{{ route('logotipu-kurimas.disainer.view', $disainer->slug) }}">

												@if( ($disainer->disainer_avatar) == '')
                                                    <img src="{{ url('assets/img/misc/team-1.jpg') }}"
                                                         class="img-responsive" alt="{{$disainer->disainer_name}}">
                                                @else
                                                    <img src="/images/disainer_avatar/{{$disainer->disainer_avatar}}"
                                                         class="img-responsive" alt="{{$disainer->disainer_name}}">
                                                @endif
                                                <span class="thumb-info-title">
													<span class="thumb-info-inner">{{$disainer->disainer_name}}</span>
													<span class="thumb-info-type">{{$disainer->disainer_title}}</span>
												</span>
											</a>
										</span>
										<div class="thumb-info-caption">
											<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
											<span class="thumb-info-caption-text">{{$disainer->disainerShort_description}}</span>
											<hr>
										</div>
									</span>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            {{ $disainers_lists->links() }}
        </div>
    </div>
    @include('__include/footer')
</div>
@include('__include/scriptsFooter')
</body>
</html>