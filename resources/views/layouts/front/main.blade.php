<!DOCTYPE html>
<html xmlns:fb="http://www.w3.org/1999/xhtml">
<head>
    <?php $active = 'meniu_SEO-optimizacija';?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{$posts->meta_title}}</title>
    <meta content="{{$posts->meta_title}}" property="og:title"/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <meta name="description" content="{{$posts->meta_description}}">
    <meta content="{{$posts->meta_description}}" property="og:description"/>
    <meta property="og:type" content="website"/>

    <meta content="{{ url('SEO-optimizacija',$posts->slug) }}" property="og:url"/>
    <meta content="{{ url('assets/img/misc/logo.png') }}" property="og:image"/>
    <link rel="canonical" href="{{ url('SEO-optimizacija',$posts->slug) }}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="author" content="{{ $posts->author }}">
    <!-- Twiter-->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="{{$posts->twiter_creator}}">
    <meta name="twitter:creator" content="{{$posts->twiter_creator}}">
    <meta name="twitter:title" content="{{$posts->meta_title}}">

    <meta name="twitter:description" content="{{$posts->meta_description}}">

    <meta name="twitter:image" content="{{ url('assets/img/misc/logo.png') }}" title="www.el-parduotuve.lt">
    <!-- END of Twiter-->

    @include('__include/head-no-seo')
</head>
<body itemscope itemtype="http://schema.org/WebPage">
<div class="body">
    @include('__include/header')
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
                            class="active"><a itemprop="item" href="{{ url('SEO-optimizacija.php') }}"><span
                                        itemprop="name">SEO optimizacija</span></a>
                            <meta itemprop="position" content="2"/>
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"
                            class="active"><a itemprop="item" href="{{ url('SEO-optimizacija',$posts->id) }}"><span
                                        itemprop="name">{{$posts->title}}</span></a>
                            <meta itemprop="position" content="2"/>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>{{$posts->title}}</h1>
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
                <div class="blog-posts single-post">
                    <article class="post post-large blog-single-post" itemscope itemtype="http://schema.org/Article">
                        <meta itemprop="discussionUrl" content="{{ url('SEO-optimizacija',$posts->slug) }}" />
                        <meta itemprop="interactionCount" content="UserComments:{{count($posts->comments)}}" />
                        <meta itemprop="datePublished" content="{{$posts->created}}" />
                        <meta itemprop="dateModified" content="{{$posts->modified}}" />
                        <meta itemprop="section" content="SEO optimizacija" />
                        <meta itemprop="isAccessibleForFree" content="true" />
                        <div class="post-image center">
                            <div class="img-thumbnail">
                                <img itemprop="image"  class="img-responsive" src="/images/seo_post_img/{{$posts->img}}" alt="{{$posts->title}}">
                            </div>
                        </div>
                        <div class="post-date">
                            <span class="day">{{$posts->created->format('m')}}</span>
                            <?php
                            $menuo = $posts->created->format('M');
                            switch ($menuo) {
                                case "January":
                                    $sis_menuo = "Sausis";
                                    break;
                                case "February":
                                    $sis_menuo = "Vasaris";
                                    break;
                                case "March":
                                    $sis_menuo = "Kovas";
                                    break;
                                case "April":
                                    $sis_menuo = "Balandis";
                                    break;
                                case "May":
                                    $sis_menuo = "Gegužė";
                                    break;
                                case "June":
                                    $sis_menuo = "Birželis";
                                    break;
                                case "July":
                                    $sis_menuo = "Liepa";
                                    break;
                                case "August":
                                    $sis_menuo = "Rugpjūtis";
                                    break;
                                case "September":
                                    $sis_menuo = "Rugsėjis";
                                    break;
                                case "October":
                                    $sis_menuo = "Spalis";
                                    break;
                                case "November":
                                    $sis_menuo = "Lapkritis";
                                    break;
                                case "December":
                                    $sis_menuo = "Gruodis";
                                    break;
                                default:
                                    $sis_menuo = "Sausis";
                            }
                            ?>
                            <span class="month"><?php echo $sis_menuo; ?></span>
                        </div>
                        <div class="post-content">

                            <h2 itemprop="name">{{$posts->title}}</h2>

                            <div class="post-meta">
                                <span><i class="fa fa-calendar"></i> {{$posts->created->format('Y-m-d')}}</span>
                                <span><i class="fa fa-user"></i> Parengė <a
                                            href="https://plus.google.com/u/0/117284839973334834336?rel=author"><span itemprop="author">{{$posts->author}}</span></a> </span>
                                <span><i class="fa fa-comments"></i> <a
                                            href="{{ url('SEO-optimizacija',$posts->id) }}#cmt">{{ $posts->comments->where("is_active_comment", 0)->count() }}
                                        Komentarai</a></span>



                            </div>
                            @yield('content')
                            <div id="cmt" class="post-block post-share">
                                <h3 class="heading-primary"><i class="fa fa-share"></i>Pasidalinkite</h3>
                                <!-- AddThis Button BEGIN -->
                                <div class="addthis_toolbox addthis_default_style ">
                                    <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                                    <a class="addthis_button_pinterest_pinit"></a>
                                    <a class="addthis_counter addthis_pill_style"></a>
                                </div>
                                <script type="text/javascript"
                                        src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-50faf75173aadc53"></script>
                                <!-- AddThis Button END -->
                            </div>
                            {{--Comment begin--}}
                            <div class="post-block post-comments clearfix">
                                <h3 class="heading-primary"><i class="fa fa-comments"></i>Komentarai
                                    ({{ $posts->comments->where("is_active_comment", 0)->count() }})</h3>

                                @foreach($posts->comments as $comment)
                                    @if(($comment->is_active_comment) == 0)

                                        <ul class="comments">
                                            <li>
                                                <div class="comment">
                                                    <div class="img-thumbnail">
                                                        <img class="avatar" alt="{{$comment->comment_author}}"
                                                             src="{{ url('assets/img/ico/avatar.png') }}">
                                                    </div>
                                                    <div class="comment-block">
                                                        <div class="comment-arrow"></div>
                                                        <span class="comment-by"><strong>{{$comment->comment_author}}</strong></span>
                                                        <p>{{$comment->seo_post_comment}}</p>
                                                        <span class="date pull-right">{{$comment->comment_created->format('Y-m-d')}}</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    @else
                                    @endif
                                @endforeach
                                <div itemprop="interactionStatistic" itemscope itemtype="http://schema.org/InteractionCounter">
                                    <meta itemprop="interactionType" content="http://schema.org/CommentAction"/>
                                    <meta itemprop="userInteractionCount" content="{{count($posts->comments)}}" />
                                </div>
                            </div>
                            {{--Comment End--}}
                            <div class="post-block post-leave-comment">
                                <h3 class="heading-primary">Parašykite komentarą</h3>

                                <form action="{{ route('SEO-optimizacija.comment.insert', $posts->id) }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label>Jūsų vardas *</label>
                                                <input type="text" value="" maxlength="100" class="form-control"
                                                       name="comment_author" id="name">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Jūsų El-paštas *</label>
                                                <input type="email" value="" maxlength="100" class="form-control"
                                                       name="email" id="email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label>Komentaras *</label>
                                                <textarea maxlength="5000" rows="10" class="form-control"
                                                          name="seo_post_comment" id="comment"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="submit" value="Siųsti" class="btn btn-primary btn-lg"
                                                   data-loading-text="Siunčiama...">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </article>
                </div>
            </div>

        </div>
    </div>
    @include('__include/footer')
</div>
@include('__include/scriptsFooter')
</body>
</html>