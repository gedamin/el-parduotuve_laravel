<!DOCTYPE html>
<html lang="lt">
<head>
    <title>Admin aplinka</title>
    <meta name="robots" content="NOINDEX,NOFOLLOW"/>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
    <script type="text/javascript" src="{{ url('assets/js/admin/jquery-2.1.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/js/admin/bootstrap.min.js') }}"></script>
    <link rel="stylesheet" href="{{ url('assets/css/admin/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/admin/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/admin/stylesheet.css') }}">
    <script type="text/javascript" src="{{ url('assets/js/admin/common.js') }}"></script>
    <script src="{{ asset('/vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
          media="screen">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</head>
<body>
<header id="header" class="navbar navbar-static-top">
    <div class="navbar-header">
        <a type="button" id="button-menu" class="pull-left"><i class="fa fa-indent fa-lg"></i></a>
        <a href="{{ route('SEO-optimizacija.admin.index') }}" class="navbar-brand"><img height="28" width="155" src="{{ url('assets/img/misc/admin_logo.png') }}" alt="ADMIN" title="ADMIN"/></a>
    </div>
    <ul class="nav pull-right">
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"><span class="pd-lr">Į Puslapį</span><i class="fa fa-life-ring fa-lg"></i></a>
            <ul class="dropdown-menu dropdown-menu-right">
                <li><a href="{{ url('/') }}" target="_blank">Pradžia</a></li>
                <li class="divider"></li>
                <li><a href="{{ url('/SEO-optimizacija.php') }}" target="_blank">SEO BLOG</a></li>
                <li><a href="http://www.seopaslaptys.lt" target="_blank">Detali SEO</a></li>
                <li><a href="{{ route('logotipu-kurimas.list.view') }}" target="_blank">Logotipų dizaineriai</a></li>
            </ul>
        </li>
        @if (Auth::guest())
            <li><a href="{{ route('login') }}"><span class="fa fa-user"></span>Prisijungit</a></li>
            <li><a href="{{ route('register') }}"><span class="fa fa-user"></span>Registruotis</a></li>
        @else
            <li><a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"><span
                            class="hidden-xs hidden-sm hidden-md">Atsijungti</span> <i class="fa fa-sign-out fa-lg"></i></a>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        @endif
    </ul>
</header>
<nav id="column-left" class="active">
    <div id="profile">
        <div><a class="dropdown-toggle" data-toggle="dropdown"><img src="{{ url('assets/img/ico/avatar.png') }}"  alt="{{ Auth::user()->name }}" title="{{ Auth::user()->name }}" class="img-circle" width="40"/></a></div>
        <div>
            <h4>{{ Auth::user()->name }}{{ Auth::user()->lastname }}</h4>
            <small>Administratorius</small>
        </div>
    </div>
    <ul id="menu">
        @if (Auth::check() && Auth::user()->isAdmin() )
            <li id="dashboard"><a href="{{ route('logotipu-kurimas.admin.disainer.view') }}"><i class="fa fa-dashboard fa-fw"></i> <span>Admin aplinka</span></a></li>
            <li id="catalog"><a class="parent"><i class="fa fa-tags fa-fw"></i> <span>SEO BLOG</span></a>
                <ul>
                    <li><a href="{{ route('SEO-optimizacija.admin.index') }}">BLOG sąrašas</a></li>
                    <li><a href="{{ route('SEO-optimizacija.comments.list.all') }}">Visi komentarai</a></li>
                </ul>
            </li>
            <li id="extension"><a class="parent"><i class="fa fa-cog fa-fw"></i> <span>Atlikti darbai</span></a>
                <ul>
                    <li><a href="{{ route('AtliktiDarbaiCRUD') }}">Atlikti darbai</a></li>
                </ul>
            </li>

        @endif
        <li><a class="parent"><i class="fa fa-puzzle-piece fa-fw"></i> <span>Logotipų dizaineriai</span></a>
            <ul>
                <li><a href="{{ route('logotipu-kurimas.admin.disainer.view') }}">Dizainerių sąrašąs</a></li>
            </ul>
        </li>
    </ul>
</nav>
<div id="content">
    <div class="page-header">
        <div class="container-fluid">
            <h1>Administracinė aplinka</h1>
            <div class="panel panel-default">
                @yield('content')
            </div>
        </div>
    </div>
</div>
</body>
</html>