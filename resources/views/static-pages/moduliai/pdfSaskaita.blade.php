<!DOCTYPE html>
<html>
<head>
    <?php $active = 'meniuElParduotuveKurimas';?>
    <meta charset="UTF-8">
    <title>==PDF sąskaitos modulis==</title>
    <meta content="==PDF sąskaitos modulis==" property="og:title"/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <meta name="description" content="PDF sąskaitos modulis. Pateikiama el-parduotuvę su svarbiausiomis funkcijomis ir galimybėmis, kurių pilnai užteks e-prekybai vykdyti."/>
    <meta content="PDF sąskaitos modulis. Pateikiama el-parduotuvę su svarbiausiomis funkcijomis ir galimybėmis, kurių pilnai užteks e-prekybai vykdyti."
          property="og:description"/>
    <meta property="og:type" content="website"/>
    <meta content="{{route('pdfModulis)}}" property="og:url"/>
    <meta content="{{ url('assets/img/misc/logo.png') }}" property="og:image"/>
    <link rel="canonical" href="{{route('pdfModulis)}}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="author" content="Gediminas">
    <!-- Twiter-->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@elparduotuve">
    <meta name="twitter:creator" content="@elparduotuve">
    <meta name="twitter:title" content="==PDF sąskaitos modulis==">
    <meta name="twitter:description" content="PDF sąskaitos modulis. Pateikiama el-parduotuvę su svarbiausiomis funkcijomis ir galimybėmis, kurių pilnai užteks e-prekybai vykdyti.">
    <meta name="twitter:image" content="{{ url('assets/img/misc/logo.png') }}" title="www.el-parduotuve.lt">
    <!-- END of Twiter-->
        <link rel="stylesheet" href="{{ url('assets/css/theme-shop.css') }}">
        <link rel="stylesheet" href="{{ url('assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ url('assets/vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
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
                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{ url('/') }}"><span itemprop="name">Pradžia</span></a>
                                <meta itemprop="position" content="1"/>
                            </li>
                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="active"><a itemprop="item" href="{{ route('Moduliai') }}"><span itemprop="name">Papildomi moduliai</span></a>
                                <meta itemprop="position" content="2"/>
                            </li>
                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="active"><a itemprop="item" href="{{ route('pdfModulis') }}"><span itemprop="name">PDF sąskaitos modulis</span></a>
                                <meta itemprop="position" content="3"/>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h1>PDF sąskaitos modulis</h1>
                    </div>
                </div>
            </div>
        </section>
        <div role="main" class="main shop">
            <div>
            <div class="container">
            <div class="row">
                <div class="col-md-12 mb-xlg mt-xlg">
                    <h3>PDF sąskaitos <strong>modulis</strong></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="owl-carousel owl-theme" data-plugin-options="{'items': 1, 'singleItem': false, 'autoPlay': true}">
                        <div>
                            <div class="thumbnail">
                                <img alt="PDF sąskaitos modulis" class="img-responsive img-rounded" src="{{ url('assets/img/dokumentacija/pdf-modulis.png') }}">
                            </div>
                        </div>
                        <div>
                            <div class="thumbnail">
                                <img alt="PDF sąskaitos modulis" class="img-responsive img-rounded" src="{{ url('assets/img/dokumentacija/pdf-modulis.png') }}">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="summary entry-summary">
                        <h3 class="mb-xs" itemprop="name"><strong>PDF sąskaitos modulis</strong></h3>

                        <div>
                        <p class="price">
                            <span>KAINA: </span><span class="amount" >60<span itemprop="priceCurrency" > €</span></span>
                        </p>
                            <p>
                                <strong class="inverted">
                                <span class="word-rotate active" data-plugin-options="{'delay': 2000, 'animDelay': 350}">
											<span class="word-rotate-items">
												<span>Prekyboje</span>
												<span>Prekyboje</span>
                                            </span>
                                    </span>
                                </strong>
                                </p>

                        </div>
                        <div class="featured-box featured-box-quaternary mt-sm" style="height: 230px;">
                            <div class="box-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3 class="mb-lg">Peržiūrėkite ir išbandykite</h3>
                                        <div class="divider divider-small divider-small-center">
                                            <hr>
                                        </div>
                                        <a class="btn btn-lg btn-quaternary mr-xs mb-lg" target="_blank" href="http://www.demopdf.el-parduotuve.lt/admin/index.php?route=module/pdf_invoice&token=116f90f33f84ed8422c2fdc4f1c0374c">Prisijunk ir išmėgink</a>
                                        <a class="btn btn-lg btn-quaternary mr-xs mb-lg" target="_blank" href="http://demopdf.el-parduotuve.lt/">Demo parduotuvė</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


                <div class="heading heading-border heading-middle-border">
                    <h3><strong>PDF sąskaitos&nbsp; generavimo modulis</strong> suteiks papildomus valdymo elementus</h3>
                </div>

                <h4>Administracinėje dalyje:</h4>

                <p>Plėtiniai &gt; PDF sąskaita / invoice:<br />
                    - Redaguosite visus pagrindinius modulio nustatymus.<br />
                    <br />
                    Pardavimai &gt; Užsakymai:<br />
                    - <strong>PDF sąskaita:</strong> pažymėjus varnelę ant norimo užsakymo, galite i&scaron;saugoti PDF sąskaitą<br />
                    - <strong>Pakuotės etiketė:</strong> pažymėjus varnelę ant norimo užsakymo, galite i&scaron;saugoti pakuotės etiketę<br />
                    - <strong>Atstatyti sąskaitą.</strong><br />
                    <br />
                    Pardavimai &gt; Užsakymai ir pasirinkus į norimą užsakymą spaudžiame žiūrėti:<br />
                    - Lentelėje užsakymo detalės turėsite galimybę redaguoti Sąskaitos Nr. (priklausomai nuo to kaip sukonfigūravote nustatymus Plėtiniai &gt; PDF sąskaita / invoice lentelėje Pagrindiniai nustatymai.</p>

                <h3>Kliento paskyroje:</h3>

                <p>Mano paskyra &gt; Užsakymų istorija:<br />
                    - Papildoma ikona, kuri klientui lesi atsisiųsti sąskaitą PDF formatu.</p>

                <h3>Visos PDF modulio funkcijos:</h3>

                <ul>
                    <li>Klientas savo paskyroje galės atsisiųsti sąskaitą PDF formatu</li>
                    <li>Įjungti automatinį sąskaitos numerio suteikimą</li>
                    <li>Redaguoti sąskaitos numerį rankiniu būdu</li>
                    <li>Siųsti PDF sąskaitas kartu su užsakymu elektroniniu pa&scaron;tu</li>
                    <li>Siųsti PDF sąskaitos kopiją parduotuvės administratoriui</li>
                    <li>Generuoti Pakavimo etiketę</li>
                    <li>Sugeneruotos pakavimo etiketės siuntimas parduotuvės administratoriui</li>
                    <li>Rodyti / slėpti kliento ID PDF sąskaitoje</li>
                    <li>Atsisiųsti ir i&scaron;sisaugoti&nbsp; PDF sąskaitą per administratoriaus užsakymų valdymą.</li>
                    <li>Pridėti norimus Blokus (teksto, foto) norimoje PDF sąskaitos vietoje (vir&scaron;uje, viduryje, apačioje arba naujame puslapyje)</li>
                    <li>Pridėti Blokus (teksto, foto) tik pagal nurodytas sąlygas:
                        <ul>
                            <li>Aktyvuota visuomet</li>
                            <li>Deaktyvuota</li>
                            <li>Pagal klientų grupę (pridedamas blokas tik pasirinktai klientų grupei)</li>
                            <li>Pagal užsakymų būseną (pridedamas blokas tik pagal nustatytą užsakymo būseną)</li>
                            <li>Pagal mokėjimo už prekes metodą (pridedamas blokas tik pasirinktiems mokėjimo metodams)</li>
                        </ul>
                    </li>
                    <li>PDF sąskaitos &scaron;ablonų pasirinkimai</li>
                    <li>Papildomos informacijos prie PDF sąskaitos pridėjimas arba pa&scaron;alinimas
                        <ul>
                            <li>PDF sąskaitoje esančios informacijos (Prekės pavadinimas, kiekis, paveiksliukas, Modelis, vieneto kaina)</li>
                            <li>&Scaron;rifto spalvų redagavimas</li>
                            <li>Fono spalvų redagavimas</li>
                        </ul>
                    </li>
                    <li>Ikonos (paveiksliuko) parinkimas PDF sąskaitos atsisiuntimui , kuri bus matomas klientui jo paskyroje</li>
                    <li>Nustatymas, kad klientas galėtų atsisiųsti sąskaitas, tik tuomet, kai parduotuvės administratorius suteiks sąskaitai numerį</li>
                    <li>Sąskaitos numerio rodymas PDF sąskaitoje</li>
                    <li>PDF sąskaitos siuntimas priklausomai nuo užsakymo statuso pasikeitimo</li>
                    <li>PDF sąskaitos lapo formatas</li>
                    <li>PDF sąskaitų atstatymo galimybė (sąskaitos gali būti automati&scaron;kai i&scaron;saugomos Jūsų serveryje)</li>
                    <li>Siuntimas tos pačios sąskaitos tie klientui tie administratoriui</li>
                    <li>Nustatymas leidžiantis rodyti datą iki kada sąskaita turi būti apmokėta</li>
                    <li>Ir kitos funkcijos</li>
                </ul>



        </div>
            </div>
        </div>


        <section class="call-to-action call-to-action-default with-button-arrow call-to-action-in-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="call-to-action-content">
                            <h3>Turite klausimų, nedelskite <strong> rašykite...</strong></h3>
                            <p>Atsakome <strong>tą pačią</strong> arba sekančią dieną</p>
                        </div>
                        <div class="call-to-action-btn">
                            <a href="{{route('kontaktai')}}" class="btn btn-lg btn-primary btn-primary-scale-2 mr-md">Susisiekite ...</a>
                            <span class="mr-md text-color-quaternary hidden-xs">Nedelskite<span class="arrow hlb"style="top: -88px; right: -47px;"></span></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('__include/footer')
    </div>
</div>
@include('__include/scriptsFooter')
<script src="{{ url('assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
</body>
</html>