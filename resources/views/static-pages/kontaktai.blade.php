<!DOCTYPE html>
<html>
<head>
    <?php $active = 'meniu_kontaktai';?>
    <meta charset="UTF-8">
    <title>Kontaktai | www.el-parduotuve.lt | info@el-parduotuve.lt</title>
    <meta content="Kontaktai | www.el-parduotuve.lt | info@el-parduotuve.lt" property="og:title"/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <meta name="description"
          content="Kontaktai: www.el-parduotuve.lt el.paštas - info@el-parduotuve.lt< - Elektroninės parduotuvės kūrimas."
          property="og:description"/>
    <meta property="og:type" content="website"/>
    <meta content="{{ route('kontaktai') }}" property="og:url"/>
    <meta content="{{ url('assets/img/misc/logo.png') }}" property="og:image"/>
    <link rel="canonical" href="{{ route('kontaktai') }}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="author" content="Gediminas">
    <!-- Twiter-->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@elparduotuve">
    <meta name="twitter:creator" content="@elparduotuve">
    <meta name="twitter:title" content="Kontaktai | www.el-parduotuve.lt | info@el-parduotuve.lt<">
    <meta name="twitter:description"
          content="Kontaktai: www.el-parduotuve.lt el.paštas - info@el-parduotuve.lt - Elektroninės parduotuvės kūrimas">
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
                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{ url('/') }}"><span itemprop="name">Pradžia</span></a>
                                <meta itemprop="position" content="1"/>
                            </li>
                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="active"><a itemprop="item" href="{{ route('kontaktai') }}"><span itemprop="name">Kontaktai</span></a>
                                <meta itemprop="position" content="2"/>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h1>Susisiekite su mumis</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
        <div id="googlemaps" class="google-map">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="alert alert-success hidden mt-lg" id="contactSuccess">
                        <strong>Pavyko!</strong> Jūsų pranešimas išsiųstas..
                    </div>
                    <div class="alert alert-danger hidden mt-lg" id="contactError">
                        <strong>Klaida!</strong> Įvyko klaida siunčiant Jūsų pranešimą.
                        <span class="font-size-xs mt-sm display-block" id="mailErrorMessage"></span>
                    </div>
                    <h2 class="mb-sm mt-sm"><strong>Klauskite</strong> ir netrukus susisieksime:</h2>
                    <form id="contactForm" action="kontaktai.php" method="POST">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label>Jūsų vardas *</label>
                                    <input type="text" value="" data-msg-required="Įveskite vardą." maxlength="100" class="form-control" name="ContactFormName" id="ContactFormName" required>
                                </div>
                                <div class="col-md-6">
                                    <label>Jūsų elektroninio pašto adresas *</label>
                                    <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="prašome įveskite tinkamą adresą." maxlength="100" class="form-control" name="ContactFormEmail" id="email" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label>Klausimas</label>
                                    <input type="text" value="" data-msg-required="Įveskite klausimą." maxlength="100" class="form-control" name="ContacFormSubject" id="ContacFormSubject" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label>Žinutė *</label>
                                    <textarea maxlength="5000" data-msg-required="Įveskite žinutę mums." rows="10" class="form-control" name="ContactFormMessage" id="ContactFormMessage" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="submit" value="Siųsti" class="btn btn-primary btn-lg mb-xlg"
                                       data-loading-text="Kraunasi...">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <h4 class="heading-primary mt-lg">Apie <strong>Mus</strong></h4>
                    <p>Dirbame pagal individualios veiklos pažymą Nr. 589908. Individualios veiklos kodas pagal
                        ekonominės veiklos rūšių klasifikatorių: 620100. Individualios veiklos rūšies pavadinimas:
                        Kompiuterių programavimo veikla</p>
                    <hr>

                    <h4 class="heading-primary">Mūsų <strong>Kontaktai</strong></h4>
                    <ul class="list list-icons list-icons-style-3 mt-xlg">
                        <li><i class="fa fa-map-marker"></i> <strong>Adresas:</strong> Kovo 11-osios g. Vilnius</li>
                        <li><i class="fa fa-phone"></i> <strong>Tel:</strong> +37064687522</li>
                        <li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a
                                    href="mailto:info@el-parduotuve.lt">info@el-parduotuve.lt</a></li>
                    </ul>
                    <hr>
                    <h4 class="heading-primary">Darbo <strong>Valandos</strong></h4>
                    <ul class="list list-icons list-dark mt-xlg">
                        <li><i class="fa fa-clock-o"></i>Darbo laikas neribojamas</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    @include('__include/footer')
</div>
@include('__include/scriptsFooter')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAjfhEdx6rNcFV0gofX8ETdTWv707OwKkQ"></script>
<script src="{{ url('assets/vendor/jquery.gmap/jquery.gmap.min.js') }}"></script>
<script>
    // Map Markers
    var mapMarkers = [{
//        address: "Vilnius, LT-27125",
//        html: "<strong>Kovo 11-osios g.</strong><br>Vilnius, LT-27125<br><br><a href='#' onclick='mapCenterAt({latitude: 54.668608, longitude: 25.099480, zoom: 12}, event)'>[+] padidinti</a>",
//        icon: {
//            image: "assets/img/misc/pin.png",
//            iconsize: [26, 46],
//            iconanchor: [12, 46]
//        }
    }];
    // Map Initial Location
    var initLatitude = 54.668608;
    var initLongitude = 25.099480;

    // Map Extended Settings
    var mapSettings = {
        controls: {
            panControl: true,
            zoomControl: true,
            mapTypeControl: true,
            scaleControl: true,
            streetViewControl: true,
            overviewMapControl: true
        },
        scrollwheel: false,
        markers: mapMarkers,
        latitude: initLatitude,
        longitude: initLongitude,
        zoom: 9
    };
    var map = $('#googlemaps').gMap(mapSettings),
        mapRef = $('#googlemaps').data('gMap.reference');

    // Map Center At
    var mapCenterAt = function (options, e) {
        e.preventDefault();
        $('#googlemaps').gMap("centerAt", options);
    }

    // Styles from https://snazzymaps.com/
    var styles = [{
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [{"color": "#e9e9e9"}, {"lightness": 17}]
    }, {
        "featureType": "landscape",
        "elementType": "geometry",
        "stylers": [{"color": "#f5f5f5"}, {"lightness": 20}]
    }, {
        "featureType": "road.highway",
        "elementType": "geometry.fill",
        "stylers": [{"color": "#ffffff"}, {"lightness": 17}]
    }, {
        "featureType": "road.highway",
        "elementType": "geometry.stroke",
        "stylers": [{"color": "#ffffff"}, {"lightness": 29}, {"weight": 0.2}]
    }, {
        "featureType": "road.arterial",
        "elementType": "geometry",
        "stylers": [{"color": "#ffffff"}, {"lightness": 18}]
    }, {
        "featureType": "road.local",
        "elementType": "geometry",
        "stylers": [{"color": "#ffffff"}, {"lightness": 16}]
    }, {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [{"color": "#f5f5f5"}, {"lightness": 21}]
    }, {
        "featureType": "poi.park",
        "elementType": "geometry",
        "stylers": [{"color": "#dedede"}, {"lightness": 21}]
    }, {
        "elementType": "labels.text.stroke",
        "stylers": [{"visibility": "on"}, {"color": "#ffffff"}, {"lightness": 16}]
    }, {
        "elementType": "labels.text.fill",
        "stylers": [{"saturation": 36}, {"color": "#333333"}, {"lightness": 40}]
    }, {"elementType": "labels.icon", "stylers": [{"visibility": "off"}]}, {
        "featureType": "transit",
        "elementType": "geometry",
        "stylers": [{"color": "#f2f2f2"}, {"lightness": 19}]
    }, {
        "featureType": "administrative",
        "elementType": "geometry.fill",
        "stylers": [{"color": "#fefefe"}, {"lightness": 20}]
    }, {
        "featureType": "administrative",
        "elementType": "geometry.stroke",
        "stylers": [{"color": "#fefefe"}, {"lightness": 17}, {"weight": 1.2}]
    }];
    var styledMap = new google.maps.StyledMapType(styles, {
        name: 'Styled Map'
    });
    mapRef.mapTypes.set('map_style', styledMap);
    mapRef.setMapTypeId('map_style');
</script>
</body>
</html>