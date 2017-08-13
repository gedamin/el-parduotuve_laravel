<header id="header" class="header-no-border-bottom has-nav-bar" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 110, 'stickySetTop': '-110px', 'stickyChangeLogo': false}">
    <div class="header-body">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-logo">
                        <a href="{{ url('/') }}">
                            <img alt="www.el-parduotuve.lt" width="210" height="50" data-sticky-width="210" data-sticky-height="40" data-sticky-top="26" src="{{ url('assets/img/misc/el-parduotuve.lt_logo.png') }}">
                        </a>
                    </div>
                </div>
                <div class="header-column">
                    <ul class="header-extra-info hidden-xs">
                        <li>
                            <div class="feature-box feature-box-style-3">
                                <div class="feature-box-icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="mb-none"><a href="tel:+37064687522">+37064687522</a></h4>
                                    <p><small>Susisiekite su mumis</small></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="feature-box feature-box-style-3">
                                <div class="feature-box-icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="mb-none"><a href="mailto:info@el-parduotuve.lt">info@el-parduotuve.lt</a></h4>
                                    <p><small>Parašykite mums</small></p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-container header-nav header-nav-bar header-nav-bar-primary">
            <div class="container">
                <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
                    <i class="fa fa-bars"></i>
                </button>
                <ul class="header-social-icons social-icons hidden-xs">
                    <li class="social-icons-facebook"><a href="https://www.facebook.com/Pirkimas" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li class="social-icons-twitter"><a href="https://twitter.com/elparduotuve" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li class="social-icons-googleplus"><a href="https://plus.google.com/104747492358203638264" target="_blank" title="Google+"><i class="fa fa-google-plus"></i></a></li>
                </ul>
                <div class="header-nav-main header-nav-main-light header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
                    <nav>
                        <ul class="nav nav-pills" id="mainNav">
                            <li class="@if($active == 'index')active @endif">
                                <a href="{{ url('/') }}">Pradžia</a>
                            </li>
                            <li class="dropdown @if($active == 'meniuElParduotuveKurimas')active @endif ">
                                <a class="dropdown-toggle" href="{{ url('elektronines-parduotuves-kurimas.php') }}">El-parduotuvės kūrimas</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-submenu">
                                        <a href="{{ url('elektronines-parduotuves-kurimas.php') }}">El-parduotuvės kūrimas</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{ url('elektronines-parduotuves-kurimas/elektronines-parduotuves-kaina.php') }}">Kaina<span class="tip tip-dark">hot</span></a></li>
                                            <li><a href="{{ url('elektronines-parduotuves-kurimas/elektronines-parduotuves-galimybes.php') }}">Galimybės</a></li>
                                            <li><a href="{{ url('elektronines-parduotuves-kurimas/elektronines-parduotuves-dizainas.php') }}">Rekomenduojami Dizainai</a></li>
                                            <li><a href="{{ url('elektronines-parduotuves-kurimas/el-parduotuves-kurimo-etapai.php') }}">Kūrimo etapai</a></li>
                                            <li><a href="{{ url('elektronines-parduotuves-kurimas/demonstracija.php') }}">DEMO el-parduotuvė</a></li>
                                            <li><a href="{{ url('elektronines-parduotuves-kurimas/paruosta-internetine-parduotuve.php') }}">Įsigyk paruoštą el-parduotuvę!</a></li>
                                            <li><a href="{{ url('moduliai.php') }}">Papildomi moduliai</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ url('logotipu-kurimas.php') }}">Logotipų kūrimas</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('hostingas-svetaines-talpinimas.php') }}">Hostingas (su nuolaida)</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="{{ url('dokumentacija.php') }}">Dokumentacija</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ url('dokumentacija/video-dokumentacija.php') }}">Video dokumentacija</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('dokumentacija/aprasymai.php') }}">Aprašymai</a>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="{{ url('opencart-valdymas.php') }}">Dokumentacija (E-parduotuvėms iki 2015-04-01)</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{ url('opencart-valdymas/opencart-aprasymai.php') }}">Aprašymai</a></li>
                                            <li><a href="{{ url('opencart-valdymas/opencart-video-tvs.php') }}">Video</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown @if($active == 'meniu_SEO-optimizacija')active @endif">
                                <a class="dropdown-toggle" href="{{ url('SEO-optimizacija.php') }}">SEO OPTIMIZACIJA</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ url('SEO-optimizacija.php') }}">SEO optimizacija el-parduotuvei</a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="http://www.seopaslaptys.lt/index.php">Detaliau apie SEO - seopaslaptys.lt</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="@if($active == 'meniu_AtliktiDarbai')active @endif">
                                <a href="{{ url('atlikti-darbai.php') }}">Atlikti darbai</a>
                            </li>

                            <li class="@if($active == 'meniu_kontaktai')active @endif">
                                <a class="" href="{{ url('kontaktai.php') }}">Kontaktai</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
