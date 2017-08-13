<!DOCTYPE html>
<html>
<head>
    <?php $active = 'meniuElParduotuveKurimas';?>
    <meta charset="UTF-8">
    <title>Kompiuterinė grafika</title>
    <meta content="Kompiuterinė grafika" property="og:title"/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <meta name="description" content="Kompiuterinė grafika">
    <meta content="Kompiuterinė grafika" property="og:description"/>
    <meta property="og:type" content="website"/>
    <meta content="{{route('KompiuterineGrafika')}}" property="og:url"/>
    <meta content="{{route('KompiuterineGrafika')}}" property="og:image"/>
    <link rel="canonical" href="{{route('KompiuterineGrafika')}}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="author" content="Gediminas">
    <!-- Twiter-->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@elparduotuve">
    <meta name="twitter:creator" content="@elparduotuve">
    <meta name="twitter:title" content="Kompiuterinė grafika">
    <meta name="twitter:description" content="Kompiuterinė grafika">
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
                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="active"><a itemprop="item" href="{{route('KompiuterineGrafika')}}"><span itemprop="name">Kompiuterinė grafika</span></a>
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
                    <p style="text-align:justify">Kompiuterinė grafika (angl. computer graphics) &ndash; vaizduojamojo skaičiavimo sritis, kur kompiuteriai panaudojami kurti grafinius vaizdus, imituojančius realų pasaulį. Kompiuterinės grafikos sąvoka atsirado 1962 m., kai MIT darbuotojas Ivanas Saterlendas (JAV) sukūrė pirmąjį grafinį redaktorių Sketchpad, skirtą Lincoln TX-2 kompiuteriui.</p>

                    <p style="text-align:justify">&nbsp;</p>

                    <hr />
                    <p style="text-align:center"><strong><a href="{{route('logotipu-kurimas.list.view')}}">logotipų kūrimas</a></strong></p>

                    <hr />
                    <p style="text-align:justify">&Scaron;iuo metu kompiuterinės grafikos mokslas taikomas įvairiose srityse, pavyzdžiui, animacijos bei modelių atvaizdavime, trimačių vaizdų generavime realiu laiku (realtime 3D rendering) ir t. t. Tačiau pagrindinė &scaron;io mokslo paskirtis &ndash; vaizdi, st&aacute;tinė i&scaron;vestis kompiuteriniuose įrenginiuose.</p>

                    <p style="text-align:center"><img alt="kompiuterine grafika" src="{{ url('assets/img/logotipu-kurimas/grafinis-dizainas.jpg') }}" /></p>

                    <h3>Kompiuterinės grafikos taikymas</h3>

                    <h3>Dvimatė (2D) grafika</h3>

                    <p style="text-align:justify">&Scaron;ios rū&scaron;ies grafika pradėta naudoti tada, kai buvo i&scaron;rastas elektroninis vamzdis (angl. CRT). Tokia grafika turi du porū&scaron;ius: vektorinė ir rastrinė (ta&scaron;kelinė) grafika. Rastrinėje grafikoje vaizdai susideda i&scaron; daugelio dviejų matavimų (x ir y) plok&scaron;tumoje esančių ta&scaron;kų, vadinamų pikseliais (angl. pixels). Vektorinė grafika susideda i&scaron; įvairaus ilgio, padėties bei orientacijos linijų (vektorių). Žinomi tiek vektoriniai, tiek ir rastriniai grafinės informacijos i&scaron;vedimo monitoriai, spausdintuvai bei kitokie įrenginiai.</p>

                    <h3>Grafinių objektų vaizdavimo ypatumai</h3>

                    <p style="text-align:justify">Vaizduojant objektus kompiuterio ekrane, labai svarbu nustatyti, kuri vaizdo dalis prireikus turi būti perpie&scaron;ta. Jei rodoma lentelė, Interneto puslapis, paveikslėlis ar kitas grafinis objektas yra didelis, jis paprastai talpinamas į ekrano galimybes atitinkantį rėmelį su slankjuostėmis. Traukiant slankjuostes, perpie&scaron;iamas tik nedidelis naujai atsiradęs plotelis, likusi rodoma vaizdo dalis tiesiog &bdquo;patraukiama&ldquo; į naują vietą. Svarbu neperpie&scaron;ti per daug ir jei pasikeičia grafinio objekto turinys. &Scaron;ių taisyklių nepaisančiose programose grafiniai objektai vaizduojami pernelyg lėtai net ir esant dabartiniams dideliems procesoriaus veikimo greičiams.</p>

                    <p style="text-align:justify">Nors dabartinių ekranų skiriamoji geba gana didelė, neretai tenka vaizduoti &scaron;riftus ar kitokius objektus, kurie sukurti didesnės skiriamosios gebos įrangai. Smulkios detalės rastrinio displėjaus ekrane gerai atrodo tik naudojant įvairius glodinimo algoritmus.</p>

                    <h3>Dvimatės grafikos formatai</h3>

                    <p style="text-align:justify">Rastrinių iliustracijų saugojimas laikmenose yra neefektyvus, todėl sukurta saugojimo formatų, naudojančių suspaudimo algoritmus, pvz., JPEG, Portable Network Graphics, CompuServe GIF.Vektorinė grafika &ndash; prakti&scaron;kesnis porū&scaron;is, kurio formatų rinkmenose yra tikslūs geometriniai duomenys: ta&scaron;kų i&scaron;dėstymas, topologija, stilius, storis, spalvos, užpildai, linijų jungimo stilius. Tokia grafika yra netinkama saugoti fotonuotraukoms; ji paprastai naudojama brėžiniams, knygų i&scaron;dėstymams, 2D animacijai, be to, vektoriniai vaizdai gali būti paversti į rastrinį pavidalą. Vektorinių vaizdų saugojimo formatai &ndash; Portable Document Format, Shockwave Flash Player, Scalable Vector Graphics ir kiti.</p>

                    <p style="text-align:justify">Saugojimo formatas nėra tiesiogiai susijęs su vaizdavimo metodu: vektorinės grafikos vaizdai neretai atvaizduojami įprastiniuose rastriniuose monitoriuose.</p>

                    <h3>Trimatė (3D) grafika</h3>

                    <p style="text-align:justify">Trimatė grafika &ndash; vektorinės grafikos plėtinys trimatėje erdvėje &ndash; trimačio modelio ta&scaron;kai yra i&scaron;sidėstę menamoje erdvėje (x, y ir z). I&scaron; &scaron;ių ta&scaron;kų galima sudaryti plok&scaron;tumas, primityvias figūras. Siekiant vaizdingumo modeliuose, plok&scaron;tumos dengiamos ra&scaron;tais (angl. texturing), kuriami menami &scaron;viesos &scaron;altiniai (shading). Trimatė grafika prakti&scaron;kai taikoma &scaron;iuolaikinių žaidimų bei programinės įrangos gamyboje, medicinoje, architektūroje ir t. t. Žinomiausios trimatės grafikos kūrimo programos yra 3ds max, Maya, Blender (nemokama), SketchUp.</p>


                </div>
            </div>
        </div>
    </div>
    @include('__include/footer')
</div>
@include('__include/scriptsFooter')
</body>
</html>