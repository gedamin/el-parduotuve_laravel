<!DOCTYPE html>
<html>
<head>
    <?php $active = 'meniuElParduotuveKurimas';?>
    <meta charset="UTF-8">
    <title>Logotipo spalvos pasirinkimas</title>
    <meta content="Logotipo spalvos pasirinkimas" property="og:title"/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <meta name="description" content="Logotipo spalvos pasirinkimas">
    <meta content="Logotipo spalvos pasirinkimas" property="og:description"/>
    <meta property="og:type" content="website"/>
    <meta content="{{route('LogotipoSpalva')}}" property="og:url"/>
    <meta content="{{route('LogotipoSpalva')}}" property="og:image"/>
    <link rel="canonical" href="{{route('LogotipoSpalva')}}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="author" content="Gediminas">
    <!-- Twiter-->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@elparduotuve">
    <meta name="twitter:creator" content="@elparduotuve">
    <meta name="twitter:title" content="Logotipo spalvos pasirinkimas">
    <meta name="twitter:description" content="Logotipo spalvos pasirinkimas">
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
                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{ route('home') }}"><span itemprop="name">Pradžia</span></a>
                                <meta itemprop="position" content="1"/>
                            </li>
                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"
                                class="active"><a itemprop="item" href="{{ url('logotipu-kurimas.php') }}"><span itemprop="name">Logotipų kūrimas</span></a>
                                <meta itemprop="position" content="2"/>
                            </li>
                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="active"><a itemprop="item" href="{{route('LogotipoSpalva')}}"><span itemprop="name">Logotipo Spalva</span></a>
                                <meta itemprop="position" content="3"/>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h1>Logotipo Spalva</h1>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <h2>Logotipo Spalva</h2>
            <div class="row mt-xlg">
                <div class="col-md-12">

                    <h3>Logotipų kūrimas ir jų spalva</h3>

                    <p>Logotipas &scaron;ių dienų verslo rinkoje tai įmonės prisistatymas ir atitinkamas įvaizdis. Logotipai yra panaudojami vizitinėse kortelėse, elektroninėse parduotuvėse, interneto svetainėse, reklaminėse skrajutėse, įvairiuose dokumentuose, bei kitoje atributikoje. Todėl galima teigti jog&nbsp;<strong><a href="{{route('logotipu-kurimas.list.view')}}">logotipų kūrimas</a></strong>&nbsp;&ndash; yra vienas i&scaron; reik&scaron;mingų žingsnių Jūsų naujame versle.</p>

                    <p><img alt="Logotipų spalvos" src="{{ url('assets/img/logotipu-kurimas/logotipu-spalvos.jpg') }}" /></p>

                    <p>Tačiau prie&scaron; kuriant įmonės logotipą, turėtumėte apgalvoti apie &scaron;iuos dalykus:</p>

                    <ul>
                        <li>Kokia yra mūsų įmonės pagrindinė veikla ir ar ji nekis laikui bėgant?</li>
                        <li>Kokia įmonės tikslinė auditorija?</li>
                        <li>Kokios įmonės vertybės?</li>
                        <li>Ką mes norime pasakyti ir parodyti savo būsimiems klientams ir partneriams per logotipą?</li>
                    </ul>

                    <p>Tai tik keletas klausimų, kuriuos turėtumėte apmąstyti prie&scaron; kuriant logotipą, nes nuo &scaron;ių atsakymų priklausys ir Jūsų logotipo dizainas ir i&scaron;vaizda. Logotipų kūrimas reikalauja tiek dizaino, tiek ir techninių žinių dirbant su įvairiomis logotipams kurti reikalingoms programoms. &Scaron;iuolaikiniai profesionalūs dizaineriai, kurdami logotipus būtinai pasiteirauja kliento apie numatomas logotipo spalvas. Bet jeigu manote, kad tai visai nesvarbu, tuomet klystate. Kadangi kiekviena spalva turi tam tikrą reik&scaron;mę.</p>

                    <h3>Logotipų spalvų reik&scaron;mės</h3>

                    <p>1.Juoda. Paslaptingumas ir drąsa. Juoda spalva ne visada suteiks teigiamas emocijas klientams, tad ją naudojant kuriant logotipus reikia panaudoti tinkamai. Tačiau puikiai suderinta su kitomis spalvomis, logotipo forma ir idėja, juoda spalva Jūsų logotipe gali atrodyti puikiai.</p>

                    <p>2. Balta. &Scaron;vara ir patikimumas. Baltas logotipas &ndash; tinkamas sprendimas, kai norite pabrėžti įmonės patikimumą ir skaidrumą. Bet pamir&scaron;kite, kad tokiam logotipui visuomet reikės fono su spalva.</p>

                    <p>3. Raudona. Aistros, energijos ir ryžto spalva. &Scaron;i spalva ir jos atspalviai daugiausiai naudojami norintiems i&scaron;siskirsti, atne&scaron;antiems į rinką kažką neįprasto ir naujo. Raudona tai tokia spalva kuri skatiną apetitą, todėl ją dažnai naudoja maisto gamybos verslininkai.</p>

                    <p>4. Žalia. Patikimumas ir gamta. Labai teigiamas emocijas kelianti žalia spalva pakankamai dažnai naudojama su gamta sąsajų turinčių įmonių logotipų kūrime.</p>

                    <p>5. Mėlyna. Profesionalumas ir konkretumas. Yra pastebima, kad gan dažnai logotipų kūrimas prasideda su &scaron;ios spalvos idėja. Tai ganėtinai populiari ir žmonėms priimtina spalva, kuri simbolizuoja įmonės patikimumą ir pastovumą.</p>

                    <p>Kai pradedamas logotipų kūrimas dažnai pasvarstoma kelias spalvas naudoti logotipe. Profesionalių logotipų kūrimo dizainerių patarimas yra paprastas &ndash; viską galima, tačiau spalvos turi tarpusavyje derėti meistri&scaron;kai. Logotipuose dažnai naudojama viena pagrindinė spalva ir dar viena &scaron;alutinė. bet įmonėms, kurios nori pabrėžti savo i&scaron;skirtinumą, galima derinti ir kelias spalvas viename logotipe. Tačiau tam reikia gero spalvų derinimo ir profesionalo patarimo.</p>

                </div>
            </div>


        </div>
    </div>
    @include('__include/footer')
</div>
@include('__include/scriptsFooter')
</body>
</html>