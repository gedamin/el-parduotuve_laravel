<!DOCTYPE html>
<html lang="en">
<head>
    <title>SEO post redagavimas</title>
    <meta name="robots" content="NOINDEX,NOFOLLOW" />

    <!-- bootstrap minified css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- admin css -->
    <link rel="stylesheet" href="{{ url('assets/css/admin.css') }}">    <!-- jQuery library -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- bootstrap minified js -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- admin js -->
    <script src="{{ url('assets/js/admin.js') }}"></script>
    <script src="{{ asset('/vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>

</head>

<body>
<div class="wrap">
    <nav class="nav-bar navbar-inverse" role="navigation">
        <div id ="top-menu" class="container-fluid active">
            <a class="navbar-brand" href="{{ route('SEO-optimizacija.admin.index') }}" >ADMIN</a>
            <a class="navbar-brand" href="{{ url('/SEO-optimizacija.php') }}" target="_blank">SEO optimizacijos BLOG</a>

            <ul class="nav navbar-nav">

                <li class="dropdown movable">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="caret"></span><span class="fa fa-4x fa-child">{{ Auth::user()->name }}</span></a>


                    <ul class="dropdown-menu" role="menu">
                        @if (Auth::guest())
                        <li><a href="{{ route('login') }}"><span class="fa fa-user"></span>Login</a></li><li><a href="{{ route('register') }}"><span class="fa fa-user"></span>Register</a></li>
                        @else
                        <li><a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><span class="fa fa-power-off"></span>Atsijungti</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                        @endif
                    </ul>
                </li>

            </ul>
        </div>
    </nav>
    <aside id="side-menu" class="aside" role="navigation">
        <ul class="nav nav-list accordion">
            <li class="nav-header">
                <div class="link"><i class="fa fa-lg fa-globe"></i>BLOG<i class="fa fa-chevron-down"></i></div>
                <ul class="submenu">
                    <li><a href="{{ route('SEO-optimizacija.admin.index') }}">BLOG sąrašas</a></li>
                    <li><a href="{{ route('SEO-optimizacija.comments.list.all') }}">Visi komentarai</a></li>
                </ul>
            </li>

            <li class="nav-header">
                <div class="link"><i class="fa fa-lg fa-users"></i>MENIU<i class="fa fa-chevron-down"></i></div>
                <ul class="submenu">
                    <li><a href="#">Pagrindinis Meniu</a></li>
                    <li><a href="#">Kategorijų Meniu</a></li>
                </ul>
            </li>

            <li class="nav-header">
                <div class="link"><i class="fa fa-cloud"></i>Sites<i class="fa fa-chevron-down"></i></div>
                <ul class="submenu">
                    <li><a href="#">Search Sites</a></li>
                    <li><a href="#">New Site</a></li>
                    <li><a href="#">Jobs</a></li>
                </ul>
            </li>

            <li class="nav-header">
                <div class="link"><i class="fa fa-lg fa-map-marker"></i>Zones<i class="fa fa-chevron-down"></i></div>
                <ul class="submenu">
                    <li><a href="#">Search Zones</a></li>
                    <li><a href="#">New Zone</a></li>
                </ul>
            </li>

            <li class="nav-header">
                <div class="link"><i class="fa fa-lg fa-file-image-o"></i>Reports<i class="fa fa-chevron-down"></i></div>
                <ul class="submenu">
                    <li><a href="#">Entries</a></li>
                    <li><a href="#">Redirects</a></li>
                    <li><a href="#">Pingbacks</a></li>
                    <li><a href="#">Tags</a></li>
                </ul>
            </li>

        </ul>
    </aside>

    <!--Body content-->
    <div class="content">
        <div class="top-bar">
            <a href="#menu" class="side-menu-link burger">
                <span class='burger_inside' id='bgrOne'></span>
                <span class='burger_inside' id='bgrTwo'></span>
                <span class='burger_inside' id='bgrThree'></span>
            </a>
        </div>

        <section class="content-inner">
            <div class="container-full">
            @yield('content')
            </div>
        </section>

    </div>

</div>
<script>
        $(document).ready(function () {
            $("#side-menu").height($(".content-inner").height());
        });
</script>
</body>
</html>
