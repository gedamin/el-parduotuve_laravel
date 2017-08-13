<!DOCTYPE html>
<html xmlns:fb="http://www.w3.org/1999/xhtml">
<head>
    <?php $active = 'meniuDokumentacija';?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Paysera mokėjimo modulio nustatymai</title>
    <meta content="Paysera mokėjimo modulio nustatymai" property="og:title"/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <meta name="description" content="Paysera mokėjimo modulio nustatymai">
    <meta content="Paysera mokėjimo modulio nustatymai" property="og:description"/>
    <meta property="og:type" content="website"/>
    <meta content="{{ route('PayseraOC20') }}" property="og:url"/>
    <meta content="{{ url('assets/img/misc/logo.png') }}" property="og:image"/>
    <link rel="canonical" href="{{ route('PayseraOC20') }}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="author" content="Gediminas">
    <!-- Twiter-->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@elparduotuve">
    <meta name="twitter:creator" content="@elparduotuve">
    <meta name="twitter:title" content="Paysera mokėjimo modulio nustatymai">

    <meta name="twitter:description" content="Paysera mokėjimo modulio nustatymai">

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
                            class="active"><a itemprop="item" href="{{ route('PayseraOC20') }}"><span itemprop="name">Paysera mokėjimo modulio nustatymai</span></a>
                            <meta itemprop="position" content="4"/>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>Paysera mokėjimo modulio nustatymai</h1>
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
                            <h2 class="heading-primary" itemprop="name"><strong>Paysera mokėjimo modulio nustatymai</strong></h2>
                            <div class="post-meta">
                                <span><i class="fa fa-user"></i> Parengė <a target="_blank" rel="nofollow" href="https://plus.google.com/u/0/117284839973334834336?rel=author"><span itemprop="author">Gediminas</span></a> </span>
                            </div>

                            <div class="heading heading-border heading-bottom-border">
                                <h3>PAYSERA AKTYVINIMO ŽINGSNIAI OPENCART EL-PARDUOTUVĖJE:</h3>
                            </div>
                            <h4><strong>I. UŽSIREGISTRUOKITE WWW.PAYSERA.LT IR SUKURKITE PROJEKTĄ</strong></h4>
                            <h4><strong>II. AKTYVUOKITE PAYSERA MOKĖJIMO MODULĮ IR ĮVESKITE KODUS IR SLAPTAŽODŽIUS</strong></h4>
                            <h4><strong>III. SISTEMOJE WWW.PAYSERA.LT PATEIKITE PROJEKTĄ PERŽIŪRAI</strong></h4>
                            <div class="heading heading-border heading-bottom-border">
                                <h3>PAYSERA AKTYVINIMO ŽINGSNIAI OPENCART EL-PARDUOTUVĖJE:</h3>
                            </div>

                            <h4><strong>I. UŽSIREGISTRUOKITE WWW.PAYSERA.LT IR SUKURKITE PROJEKTĄ</strong></h4>
                            <p>Apsilankykite puslapyje www.paysera.lt ir lengvai užsiregistruosite. Tačiau norint gauti pajamas Jums dar reikia sukurti projektą. Kad sukurti Jums reikia eiti į meniu Įmokų surinkimo&mdash;Projektai ir spausti mygtuką Pridėti naują projektą.</p>

                            <p><img class="img-responsive" alt="paysera integracija" src="{{ url('assets/img/dokumentacija/paysera1.png') }}"/></p>

                            <p>&nbsp;</p>

                            <hr />
                            <p>www.el-parduotuve.lt - <strong><a href="{{route('home')}}" title="elektroninių parduotuvių kūrimas">elektroninių parduotuvių kūrimas</a></strong>, nemokami SEO patarimai.</p>

                            <hr />
                            <p><strong>JUMS REIKĖS UŽPILDYTI SEKANČIĄ INFORMACIJĄ</strong></p>

                            <ul>
                                <li><strong>Projekto adresas</strong> &ndash; įra&scaron;ote Jūsų elektroninė parduotuvės adresą. Pvz.: http://www.manodomenas.lt</li>
                                <li><strong>Logotipas</strong> &ndash; jeigu jau turite logotipą tuomet galite pridėti ir logotipą.</li>
                                <li><strong>Katalogas</strong> &ndash; nurodote, kuriam katalogui bus priskirta Jūsų elektroninė parduotuvė.</li>
                                <li><strong>Paslaugos apra&scaron;ymas:</strong>
                                    <ul>
                                        <li><strong>Projekto / paslaugų pavadinimas (trumpas apra&scaron;ymas)</strong> &ndash; trumpas apra&scaron;ymas, kurio pavyzdžius pamatysite vesdami apra&scaron;ymą.</li>
                                        <li><strong>Detalus projekto esmės pristatymas, pagal kurį bet kuriam jūsų klientui būtų ai&scaron;ku ką jis čia galėtų rasti</strong> &ndash; detalesnė informaciją apie Jūsų projektą. Tai pat bus pateiktas ir pavyzdys.</li>
                                        <li><strong>Prekių pristatymo sąlygos (trumpai apra&scaron;ykite, arba pateikite tiesioginę nuoroda į Jūsų svetainėje esančią informaciją)</strong> &ndash; Apra&scaron;ykite kaip bus pristatomo prekės arba tiesiog patekite nuorodą į Jūsų elektroninę parduotuvę, kur jau yra apra&scaron;yta kaip bus pristatomos prekės.</li>
                                        <li><strong>&ndash; Apra&scaron;ykite kaip bus pristatomo prekės arba tiesiog patekite nuorodą į Jūsų elektroninę parduotuvę, kur jau yra apra&scaron;yta kaip bus pristatomos prekės.</strong></li>
                                        <li><strong>Grąžinimo taisyklės (trumpai apra&scaron;ykite arba pateikite tiesioginę nuorodą į Jūsų svetainėje esančią informaciją)</strong> &ndash; informacija apie prekių grąžinimą arba atitinkama nuoroda į Jūsų elektroninės parduotuvės grąžinimo sąlygas.</li>
                                    </ul>
                                </li>
                                <li><strong>Kontaktinė informacija</strong> &ndash; pateiksite kontaktinius duomenis</li>
                                <li><strong>Projekto patvirtinimas </strong> &ndash; nukopijuokite &scaron;į kodą ir i&scaron;sisaugokite. &Scaron;į kodą reiks patalpinti į elektroninę parduotuvę. Kaip tai padaryti parodysiu sekančiame žingsnyje.</li>
                                <li><strong>Spauskite i&scaron;saugoti</strong></li>
                            </ul>

                            <p>&nbsp;</p>

                            <p><strong>I&Scaron;SISAUGOKITE SEKANČIUS KETURIS KODUS (PATARTINA ATSKIRAME DOKUMENTE):</strong></p>

                            <ul>
                                <li><strong>ProjectID</strong> &ndash; kurį rasite projekto informaciniame lauke. PVZ.: ProjectID: 70729</li>
                                <li><strong>Svetainės nuosavybės patikrinimo kodą</strong> &ndash; PVZ: &lt;meta name=&quot;verify-paysera&quot; content=&quot;5d8d389772b58913bce3e49951091d13&quot;&gt;</li>
                            </ul>

                            <p><img class="img-responsive" alt="paysera integracija" src="{{ url('assets/img/dokumentacija/paysera2.png') }}"/></p>

                            <p>&nbsp;</p>

                            <ul>
                                <li><strong>Projekto slaptažodis: </strong> &Scaron;į kodą rasite nuėję į Bendri nustatymai:</li>
                            </ul>

                            <p><img class="img-responsive" alt="paysera integracija" src="{{ url('assets/img/dokumentacija/paysera3.png') }}"/></p>

                            <p>&nbsp;</p>

                            <ul>
                                <li><strong>Kokybės ženklo kodą: </strong> &Scaron;į kodą rasite nuėję į Bendri nustatymai:</li>
                            </ul>

                            <p><img class="img-responsive" alt="paysera integracija" src="{{ url('assets/img/dokumentacija/paysera4.png') }}"/></p>

                            <p><br />
                                &nbsp;</p>

                            <h4><strong>II. AKTYVUOKITE PAYSERA MOKĖJIMO MODULĮ IR ĮVESKITE KODUS IR SLAPTAŽODŽIUS</strong></h4>

                            <p>Kad aktyvinti Paysera mokėjimo modulį Jums reikia atlikti sekančius veiksmus:</p>

                            <ul>
                                <li>Prisijunkite prie savo elektroninės parduotuvės: www.manodomenas.lt/admin</li>
                                <li>Eikite į MODULIAI&mdash;MOKĖJIMAI susiraskite Paysera (mokėjimai.lt) atsiskaitymo modulį. Spauskite redaguoti (jeigu neįdiegtas tuomet pirma paspauskite įdiegti, o po to redaguoti</li>
                            </ul>

                            <p><img class="img-responsive" alt="paysera integracija" src="{{ url('assets/img/dokumentacija/paysera5.png') }}"/></p>

                            <p>&nbsp;</p>

                            <ul>
                                <li>Paysera (mokėjimai.lt) modulio lentelės langas:</li>
                            </ul>

                            <p><img class="img-responsive" alt="paysera integracija" src="{{ url('assets/img/dokumentacija/paysera6.png') }}"/></p>

                            <p>&nbsp;</p>

                            <ul>
                                <li><strong>Paysera modulyje užpildykite sekančią informaciją:</strong>

                                    <ul>
                                        <li><strong>Projekto ID:</strong> &ndash; kurį i&scaron;sisaugojote atskirame dokumente, o jeigu ne, tuomet rasite prisijungę prie paysera.lt sistemos.</li>
                                        <li><strong>Slaptažodis:</strong> - tai yra projekto slaptažodis, kurį i&scaron;sisaugojote atskirame dokumente, o jeigu ne, tuomet rasite prisijungę prie paysera.lt sistemos.</li>
                                        <li><strong>Kalba:</strong> - parinkite reikiamą kalbą.</li>
                                        <li><strong>Testinis režimas.</strong> &Scaron;is rėžimas skirtas tam, kad galėtumėte i&scaron;bandyti sistemą ar ji tinkamai veikia. TAČIAU norint pratestuoti Jums reikia testinį rėžimą įjungti dviejose vietose. PIRMA - &scaron;ioje vietoje (t.y. jūsų elektroninėje parduotuvėje Paysera mokėjimo modulyje) ANTRA pačioje paysera.lt sistemoje. Prisijungus prie paysera Jums taip pat reikės įjungti testinį rėžimą.TAGI svarbu atminti, kad jeigu norėsite testuoti tuomet reikia testavimą įjungti abiejuose sistemose, o atlikus testavimą i&scaron;jungti testavimo rėžimą.</li>
                                        <li><strong>Užsakymo statusas po mokėjimo:</strong> - pasirinkite koks bus užsakymo statusas, kai atsiskaitoma paysera sistema.</li>
                                        <li><strong>Geo zona:</strong> - pasirinkite kokiose Geo zonose &scaron;is mokėjimo būdas bus aktyvinamas arba pasirinkite visas.</li>
                                        <li><strong>Statusas:</strong> Aktyvuotas arba Deaktyvuotas (i&scaron;jungtas) modulis.</li>
                                        <li><strong>Rodyti mokėjimo būdų sąra&scaron;ą:</strong> - pasirinkite ar rodyti ar ne. Kaip tai atrodys pasirinkus vieną ar kitą variantą i&scaron;bandykite patys ir pasirinkite Jums priimtinesnį variantą</li>
                                        <li><strong>Rikiavimas:</strong> Paysera mokėjimo būdo eilės tvarka palygimus su kitais aktyvuotais mokėjimo būdais.</li>
                                    </ul>
                                </li>
                                <li>TOLIAU eikite į SISTEMA&mdash;NUSTATYMAI: redaguoti</li>
                                <li>Nustatymų puslapyje eikite į lentelę &bdquo;Google ir Paysera kodai&ldquo; ir jame įterpkite LIKUSIUS KODUS:
                                    <ul>
                                        <li><strong>Paysera nuosavybės patikrinimo kodą</strong></li>
                                        <li><strong>Paysera kokybės ženklo kodą</strong></li>
                                    </ul>
                                </li>
                            </ul>

                            <p><img class="img-responsive" alt="paysera integracija" src="{{ url('assets/img/dokumentacija/paysera7.png') }}"/></p>

                            <pre>Jeigu šių nustatymų nėra e-parduotuvėje, tuomet kreipkitės į programuotoją pagalbos.</pre>

                            <p><strong>Visi nustatymai baigti, eikite prie sekančio žingsnio: projekto pateikimas paysera.lt</strong></p>

                            <p>&nbsp;</p>

                            <h4><strong>III. SISTEMOJE WWW.PAYSERA.LT PATEIKITE PROJEKTĄ PERŽIŪRAI</strong></h4>

                            <p>Prisiregistruokite prie savo paysera.lt paskyros ir eikite į Jūsų sukurtą projektą. Projekte pamatysite mygtuką PATEIKTI PERŽIŪRAI. Kaip pateiksite peržiūrai tuomet paysera vadybininkas peržiūrės Jūsų projektą ir jeigu viskas bus tinkamai suvesta tuomet patvirtins. O jeigu nepatvirtins, tuomet para&scaron;ys priežastis kodėl ir pasakys ką reikia pakoreguoti. Paredagavę galėsite vėl teikti tikrinimui.</p>

                            <p><strong>Atkreipiu dėmesį. Kad i&scaron;karto patvirtintų projektą pasitikrinkite &scaron;iuos dalykus:</strong></p>

                            <ul>
                                <li>Ar tinkamai įvedėte visus kodus (dažna klaida, kai įvedami kodai su klaidom, tiesiog darykite copy/paste ir i&scaron;vengsite klaidų).</li>
                                <li>Ar aktyvuotas Paysera mokėjimo modulis.</li>
                                <li>Ar elektroninė parduotuvė įjungta (t.y. ar neįjungtas elektroninės parduotuvės techninio aptarnavimo rėžimas)</li>
                                <li>Ar suvedėte Pristatymo, gražinimo, atsiskaitymo sąlygas el-parduotuvėje ir / arba paysera.lt sistemoje.</li>
                                <li>Ar elektroninė parduotuvė tinkamai paruo&scaron;ta prekybai. Turi būti suvestos realios prekės su kainomis (negali būti demo prekių ir pan.)</li>
                            </ul>


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