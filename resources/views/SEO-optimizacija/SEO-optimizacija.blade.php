<!DOCTYPE html>
<html>
<head>
    <?php $active = 'meniu_SEO-optimizacija';?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Elektroninės parduotuvės SEO | Kaip optimizuoti el-parduotuvę?</title>
    <meta content="Elektroninės parduotuvės SEO | Kaip optimizuoti el-parduotuvę?" property="og:title"/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <meta name="description"
          content="Sužinokite kaip optimizuoti elektroninę parduotuvę. Nemokėk didelės kainos už SEO paslaugas. Išmok ir optimizuok svetainę pats - NEMOKAMAI!">
    <meta content="Sužinokite kaip optimizuoti elektroninę parduotuvę. Nemokėk didelės kainos už SEO paslaugas. Išmok ir optimizuok svetainę pats - NEMOKAMAI!"
          property="og:description"/>
    <meta property="og:type" content="website"/>
    <meta content="{{ route ('SEO-optimizacija') }}" property="og:url"/>
    <meta content="{{ url('assets/img/misc/logo.png') }}" property="og:image"/>

    <link rel="canonical" href="{{ route ('SEO-optimizacija') }}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="author" content="Gediminas">
    <!-- Twiter-->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@elparduotuve">
    <meta name="twitter:creator" content="@elparduotuve">
    <meta name="twitter:title" content="Elektroninės parduotuvės SEO | Kaip optimizuoti el-parduotuvę?">
    <meta name="twitter:description"
          content="Sužinokite kaip optimizuoti elektroninę parduotuvę. Nemokėk didelės kainos už SEO paslaugas. Išmok ir optimizuok svetainę pats - NEMOKAMAI!">
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
                                class="active"><a itemprop="item" href="{{ route ('SEO-optimizacija') }}"><span itemprop="name">SEO optimizacija</span></a>
                                <meta itemprop="position" content="2"/>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h1>Elektroninės parduotuvės SEO optimizacija</h1>
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
                            <h2 class="mb-sm">SEO optimizacija el-parduotuvei</h2>
                            <p class="justify">Čia rasite informacijos apie elektroninės parduotuvės (tačiau galite
                                pritaikyti ir betkuriam kitam web projektui) optimizaciją, kaip tinkamai aprašyti
                                kategorijas, prekes ir kitus specifinius dalykus. Jeigu Jums aktualu, kad Jūsų
                                internetinė parduotuvė su tam tikru raktiniu žodžiu būtų iškelta bent jau į pirmą
                                dešimtuką - užsukite į <strong><a href="{{route('home')}}"
                                                                  title="www.seopaslaptys.lt" target="_blank">www.seopaslaptys.lt</a></strong>
                                arba ieškokite čia <strong>www.el-parduotuve.l</strong>t ir raskite sau tinkamą
                                patarimą.</p>
                        </div>
                        <div class="featured-boxes featured-boxes-style-8">
                            <div class="col-md-12">
                                <div class="featured-box featured-box-primary featured-box-text-left">
                                    <div class="box-content">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <h3>Visiems esamiems ir būsimiems klientams</h3>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="align-right">
                                                    <i class="icon-featured fa fa-user"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p class="lead justify">Nemokama SEO konsultacija ir patarimai.
                                                    Rekomenduojame geriausius SEO specialistus. Esant poreikui
                                                    organizuojami <a href="http://www.seopaslaptys.lt/video-seo-mokymai.php" title="SEO kursai" target="_blank">SEO kursai</a> ir <a  href="{{route('home')}}" title="SEO paslaugos" target="_blank">SEO paslaugos</a> įmonėms.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="tall">
                    <div class="blog-posts">
                        @foreach($posts as $post)
                            <article class="post post-medium">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="post-image">
                                            <div>
                                                <div>
                                                    <div class="img-thumbnail">
                                                        <a href="{{ route('blog.single',$post->slug) }}">
                                                        <img class="img-responsive" src="/images/seo_post_img/{{$post->img}}" alt="{{$post->title}}">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="post-content">
                                            <h3 class="mb-xs"><a
                                                        href="{{ route('blog.single',$post->slug) }}">{{$post->title}}</a>
                                            </h3>
                                            <div class="justify-p">{!! $post->short_conten !!}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="post-meta">
                                            <span><i class="fa fa-calendar"></i> {{$post->created->format('Y-m-d')}}</span>
                                            <span><i class="fa fa-user"></i> Parengė <a href="https://plus.google.com/u/0/117284839973334834336?rel=author">{{$post->author}}</a> </span>
                                            <span><i class="fa fa-comments"></i> <a href="{{ route('blog.single',$post->slug) }}#cmt">{{ $post->comments->where("is_active_comment", 0)->count() }}
                                                    Komentarai (-ų)</a></span>
                                            <a href="{{ route('blog.single',$post->slug) }}" class="btn btn-xs btn-primary pull-right">Detaliau...</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                        {{ $posts->links() }}
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