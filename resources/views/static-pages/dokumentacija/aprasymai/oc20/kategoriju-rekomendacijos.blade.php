<!DOCTYPE html>
<html xmlns:fb="http://www.w3.org/1999/xhtml">
<head>
    <?php $active = 'meniuDokumentacija';?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kategorijų kūrimo rekomeNdacijos</title>
    <meta content="Kategorijų kūrimo rekomeNdacijos" property="og:title"/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <meta name="description" content="Kategorijų kūrimo rekomeNdacijos">
    <meta content="Kategorijų kūrimo rekomeNdacijos" property="og:description"/>
    <meta property="og:type" content="website"/>
    <meta content="{{ route('KategorijuRekomendacijos') }}" property="og:url"/>
    <meta content="{{ url('assets/img/misc/logo.png') }}" property="og:image"/>
    <link rel="canonical" href="{{ route('KategorijuRekomendacijos') }}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="author" content="Gediminas">
    <!-- Twiter-->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@elparduotuve">
    <meta name="twitter:creator" content="@elparduotuve">
    <meta name="twitter:title" content="Kategorijų kūrimo rekomeNdacijos">

    <meta name="twitter:description" content="Kategorijų kūrimo rekomeNdacijos">

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
                                    itemprop="item" href="{{ route('home') }}"><span itemprop="name">Pradžia</span></a>
                            <meta itemprop="position" content="1"/>
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"
                            class="active"><a itemprop="item"  href="{{ url('dokumentacija.php') }}"><span itemprop="name">Dokumentacija</span></a>
                            <meta itemprop="position" content="2"/>
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"
                            class="active"><a itemprop="item" href="{{ route('AprasymaiOC20') }}"><span itemprop="name">Aprašymai</span></a>
                            <meta itemprop="position" content="3"/>
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"
                            class="active"><a itemprop="item" href="{{ route('KategorijuRekomendacijos') }}"><span itemprop="name">Kategorijų kūrimo rekomendacijos</span></a>
                            <meta itemprop="position" content="4"/>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>Kategorijų kūrimo rekomendacijos</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="blog-posts single-post">
                    <article class="post post-large blog-single-post">
                        <div class="post-content">
                            <h2 class="heading-primary" itemprop="name"><strong>Kategorijų kūrimo rekomendacijos</strong></h2>
                            <div class="post-meta">
                                <span><i class="fa fa-user"></i> Parengė <a target="_blank" rel="nofollow" href="https://plus.google.com/u/0/117284839973334834336?rel=author"><span itemprop="author">Gediminas</span></a> </span>
                            </div>

                            <div class="heading heading-border heading-bottom-border">
                                <h3>Rekomendacijos kaip sudaryti kategorijų STRUKTŪRĄ?</h3>
                            </div>
                            <p class="lead"> <strong>Vienas i&scaron; svarbesnių darbų, kuriuos reikia padaryti NAUJAI elektroninei parduotuvei tai &ndash; TINKAMAS PREKIŲ KATEGORIJŲ SUKŪRIMAS.</strong></p>

                            <p>Tinkamas &ndash; tai rei&scaron;kia, kad sudaryta prekių kategorijų struktūra leistų klientams lengvai orientuotis el-parduotuvėje. Dažnai netinkamas el-parduotuvės struktūros padaro didelį atmetimo rodiklį (angl. Bounce rate). Bounce rate galite stebėti per Google Analytics paskyrą.</p>

                            <p>Tinkamas &ndash; tai rei&scaron;kia, kad reikėtų gerai pagalvoti ir sudaryti kategorijas taip, kad jos būtų suskirstytos ir pagal raktažodžius (Raktažodis &ndash; tai žodis ar žodžių junginys, kuris ra&scaron;omas google paie&scaron;koje). Kaip pavyzdžiui nelabai tinkama prekių kategorija būtų tokia &ndash; &bdquo;Prekių katalogas&ldquo; (pvz.: www.domenas.lt/prekiu-katalogas.html), kai &scaron;ioje kategorijoje būtų sekančios prekių grupės (subkategorijos): patalynės komplektai, užuolaidos, moteri&scaron;kos rankinės. &Scaron;iuo atveju geriau kurti atskiras pagrindines kategorijas, o ne subkategorijas. Tačiau reiktų spręsti kaskart individualiai pagal konkrečią prekybos sritį.</p>

                            <hr />
                            <p>www.el-parduotuve.lt - <strong><a href="{{route('home')}}" title="elektroninių parduotuvių kūrimas">elektroninių parduotuvių kūrimas</a></strong></p>

                            <hr />
                            <h3>BENDRI PATARIMAI ir rekomendacijos dėl prekių kategorijų sudarymo:</h3>

                            <ul>
                                <li>Įvertinkite Jūsų konkurentų esamus e-prekybos puslapius ir i&scaron;analizuokite:
                                    <ul>
                                        <li>Ar patogi puslapių navigacija?</li>
                                        <li>Kategorijų ir subkategorijų kiekis (ar ne per daug, ar ne per mažai, ar nepainu)?</li>
                                        <li>Ar lengvai ir gretai pasiekiamas norimas turinys/informacija? Rekomenduojama, kad bet koks puslapis turi būti pasiekiamas per 3-4 pelės paspaudimus)?</li>
                                        <li>Ar nar&scaron;ant el-parduotuvėje lengva orientuotis ir visada yra ai&scaron;ku kurioje vietoje Jūs esate (Ar kategorijoje, ar prekės puslapyje, ar informaciniame puslapyje, ar Blog&lsquo;o puslapyje).</li>
                                    </ul>
                                </li>
                                <li>Padarykite keliolika el-parduotuvių įvertinimų ir TIK TUOMET sudarykite savo el-parduotuvės struktūrą.</li>
                                <li>Kad būtų paprasčiau ir ai&scaron;kiau ir nereiktų vargti su kategorijų kūrimu / redagavimu / keitimu SIŪLAU visų pirma PREKIŲ KATEGORIJŲ STRUKTŪRĄ NUSIBRAIŽYTI ANT POPIERIAUS LAPO.</li>
                            </ul>
<h4>Kaip pavyzdžiui kad ir taip:</h4>
                            <p><img class="img-responsive" alt="kategoriju-struktura" src="{{ url('assets/img/dokumentacija/1_kategoriju-struktura.jpg') }}" /></p>

                            <ul>
                                <li>Sukurtą prekių kategorijų struktūra parodykite kolegoms draugams ir paklauskite jų nuomonės.</li>
                            </ul>
<p></p>
                            <h3>DĖL PREKIŲ PRISKYRIMO KATEGORJOMS/SUBATEGORIJOMS:</h3>

                            <p class="lead"><strong>SITUACIJA:</strong> turite el-parduotuvę, kurioje yra Prekių kategorija KOMPIUTERIAI ir &scaron;i kategorija dar suskirstyta į dvi subkategorijas NE&Scaron;IOJAMI KOMPIUTERIAI ir STACIONARŪS KOMPIUTERIAI.</p>

                            <h4>Jums reikia apsispręsti ką klientai pamatys atidarę prekių kategoriją KOMPIUTERIAI?</h4>

                            <h4>I. Ar pamatys trumpą kategorijos apra&scaron;ymą su dviem pasirinkimais: NE&Scaron;IOJAMI KOMPIUTERIAI ir STACIONARŪS KOMPIUTERIAI. Ir &scaron;ioje kategorijoje KOMPIUTERIAI nebus nei vienos prekės.</h4>

                            <h4>II. Ar pamatys trumpą kategorijos apra&scaron;ymą su dviem pasirinkimais: NE&Scaron;IOJAMI KOMPIUTERIAI ir STACIONARŪS KOMPIUTERIAI. Ir &scaron;ioje kategorijoje KOMPIUTERIAI pamatys visas prekes i&scaron; abiejų subkategorijų.</h4>

                            <h4>III. Ar pamatys trumpą kategorijos apra&scaron;ymą su dviem pasirinkimais: NE&Scaron;IOJAMI KOMPIUTERIAI ir STACIONARŪS KOMPIUTERIAI. Ir &scaron;ioje kategorijoje KOMPIUTERIAI pamatys tik keletą TOP prekių i&scaron; abiejų subkategorijų.</h4>

                            <p><strong>REKOMEDACIJA:</strong> turint tik keletą subkategorijų su ganėtinai pana&scaron;iomis prekėmis, kaip ir &scaron;iame pavyzdyje rekomenduočiau kategorijoje KOMPIUTERAI rodyti visas subkategorijų prekes. TAČIAU jeigu el-parduotuvėje yra pakankamai didelis kiekis prekių ir konkreti kategorija turi daug subkategorijų (kaip kategorija TELEFONAI), tuomet rekomenduočiau rinktis variantą 1 &ndash; kai atidarius pirmą pagrindinę kategoriją rodytų tik pasirinkimą į subkategorijas ir nebūtų pateiktas sąra&scaron;as visų prekių. Taip pat &scaron;iuo atveju galima rinktis ir 3 variantą, kai rodomos tik i&scaron;skirtinės TOP prekės, tačiau būtina i&scaron;skirti, kad tai rekomenduotinos prekės, o ne visas kategorijų sąra&scaron;as.</p>

                            <h4>Pavyzdinė el-parduotuvės kategorijų struktūra, kurioje matote kategorijas, subkategorijas ir kokios prekės matomos konkrečioje kategorijoje ir subkategorijoje:</h4>

                            <p><img class="img-responsive" alt="kategoriju-struktura" src="{{ url('assets/img/dokumentacija/2_kategoriju-struktura.jpg') }}" /></p>

                            <h4>Realus pavyzdys: <a href="http://www.demo.seopaslaptys.lt" rel="nofollow" target="_blank">www.demo.seopaslaptys.lt</a></h4>
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