<!DOCTYPE html>
<html>
<head>
    <?php $active = 'meniuElParduotuveKurimas';?>
        <meta charset="UTF-8">
        <title>Logotipų kūrimas | Logotipai | Kaina | Susikūrk Nemokamai</title>
        <meta content="Logotipų kūrimas | Logotipai" property="og:title" />
        <meta name="robots" content="INDEX,FOLLOW" />
        <meta name="description" content="Logotipų kūrimas ir kitos grafinio dizaino paslaugos. Rasite ir priemonę leidžiančią susikūrti NEMOKAMĄ logotipą vos per kelias sekundes">
        <meta content="Logotipų kūrimas ir kitos grafinio dizaino paslaugos. Rasite ir priemonę leidžiančią susikūrti NEMOKAMĄ logotipą vos per kelias sekundes" property="og:description" />
        <meta property="og:type" content="website" />
        <meta content="http://www.el-parduotuve.lt/logotipu-kurimas.php" property="og:url" />
        <meta content="{{ url('assets/img/misc/logo.png') }}" property="og:image" />
        <link rel="canonical" href="{{ url('logotipu-kurimas.php') }}" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

        <meta name="author" content="Gediminas">
        <!-- Twiter-->
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@elparduotuve">
        <meta name="twitter:creator" content="@elparduotuve">
        <meta name="twitter:title" content="Logotipų kūrimas | Logotipai">
        <meta name="twitter:description" content="Logotipų kūrimas ir kitos grafinio dizaino paslaugos. Rasite ir priemonę leidžiančią susikūrti NEMOKAMĄ logotipą vos per kelias sekundes">
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
                                            itemprop="name">xx__jonas</span></a>
                                <meta itemprop="position" content="3"/>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h1>Portfolio</h1>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
{{--            {{dd($disainerPorfolio)}}--}}
            <h2>{{ $disainerPorfolio->disainer_name }}</h2>
            <h3>{{ $disainerPorfolio->disainer_title }}</h3>
            <p>{{ $disainerPorfolio->disainer_phone }}</p>
            <p>{{ $disainerPorfolio->disainer_email }}</p>
            <p>{{ $disainerPorfolio->disainer_avatar }}</p>
            <img src="/storage/disainer/{{ $disainerPorfolio->disainer_avatar }}">
            <p>{{ $disainerPorfolio->disainer_description }}</p>
            {{--LogoDisainer yra iš MODULIO LogoDisainerProfile.php public function LogoDIsainers   t.y. per sąrišį--}}

{{--            <p>{{ $disainerPorfolio->LogoDisainerImg }}</p>--}}

            @foreach($disainerPorfolio->LogoDisainerList->LogoDisainerImg as $disainerImage)
            <p>{{ $disainerImage->logo_img }}</p>
            @endforeach







        </div>


    </div>

    @include('__include/footer')
</div>
@include('__include/scriptsFooter')

</body>
</html>