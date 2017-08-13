<!DOCTYPE html>
<html>
<head>
    <?php $active = 'meniuDokumentacija';?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Internetinės parduotuvės dokumentacija (aprašymai)</title>
    <meta content="Internetinės parduotuvės dokumentacija (aprašymai)" property="og:title"/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <meta name="description" content="Internetinės parduotuvės dokumentacija (aprašymai)">
    <meta content="Internetinės parduotuvės dokumentacija (aprašymai)" property="og:description"/>
    <meta property="og:type" content="website"/>
    <meta content="{{ route ('AprasymaiOC20') }}" property="og:url"/>
    <meta content="{{ url('assets/img/misc/logo.png') }}" property="og:image"/>
    <link rel="canonical" href="{{ route ('AprasymaiOC20') }}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="author" content="Gediminas">
    <!-- Twiter-->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@elparduotuve">
    <meta name="twitter:creator" content="@elparduotuve">
    <meta name="twitter:title" content="Internetinės parduotuvės dokumentacija (aprašymai)">
    <meta name="twitter:description" content="Internetinės parduotuvės dokumentacija (aprašymai)">
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
                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"
                                class="active"><a itemprop="item"  href="{{ url('dokumentacija.php') }}"><span itemprop="name">Dokumentacija</span></a>
                                <meta itemprop="position" content="2"/>
                            </li>
                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="active"><a itemprop="item" href="{{ route ('AprasymaiOC20') }}"><span itemprop="name">Aprašymai</span></a>
                                <meta itemprop="position" content="3"/>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h1>Internetinės parduotuvės dokumentacija</h1>
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
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="mb-sm">Internetinės parduotuvės - Aprašymai</h2>
                            <p class="justify lead">Internetinės parduotuvės valdymo ir administravimo dokumentacija (aprašymai). Priklausomai nuo turimų parduotuvės funkcijų, administracinė aplinka gali šiek tiek skirtis nuo esamų aprašymų, tačiau valdymo principas praktiškai vienodas.</p>
                        </div>
                    </div>
                    <hr class="tall">
                    <div class="blog-posts">
                            <article class="post post-medium">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="post-image">
                                            <div>
                                                <div>
                                                    <div class="img-thumbnail">
                                                        <a target="_blank" href="{{route('NuoKoPradetiOC20')}}">
                                                        <img class="img-responsive" src="{{ url('assets/img/dokumentacija/opencart-parduotuves-valdymas_kaegorija.png') }}" alt="Opencart parduotuvės valdymas">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="post-content">
                                            <h3 class="mb-xs"><a target="_blank" href="{{route('NuoKoPradetiOC20')}}">Įsigijus el-parduotuvę. Nuo ko pradėti?</a></h3>
                                            <div class="justify-p"><p>Patikrinkite el-parduotuvę! Ar ji gerai veikia? Įsigijus el-parduotuvę, jūsų parduotuvėje bus įkelta pavyzdinės prekės. Pabandykite įsigyti/užsakyti (kaip pirkėjas) bet kokią prekę. (Pirkdami prekę įrašykite savo el-paštą). Įsigijus Jūs turite gauti el-laišką apie prekės užsakymą. Taip pat Jūs (kaip parduotuvės administratorius) turėtumėte gauti el-laišką, kad kažkas užsisakė prekę ...</p></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="post-meta">
                                            <a target="_blank" href="{{route('NuoKoPradetiOC20')}}" class="btn btn-xs btn-primary pull-right">Detaliau...</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        <article class="post post-medium">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="post-image">
                                        <div>
                                            <div>
                                                <div class="img-thumbnail">
                                                    <a target="_blank" href="{{route('KategorijaOC20')}}">
                                                        <img class="img-responsive" src="{{ url('assets/img/dokumentacija/opencart-parduotuves-valdymas_kaegorija.png') }}" alt="Opencart parduotuvės valdymas">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="post-content">
                                        <h3 class="mb-xs"><a target="_blank" href="{{route('KategorijaOC20')}}">Kaip pridėti prekių kategoriją?</a></h3>
                                        <div class="justify-p"><p>Kaip pridėti prekių kategoriją Eikite į http://www.jusuPuslapis.lt/admin Eikite į Katalogas – Kategorijos. Spauskite mygtuką Pridėti. Matote kategorijos valdymo langą: Bendrieji: Atkreipkite dėmesį ar Jūsų elektroninė parduotuvė turi vieną ar kelias kalbas. Jeigu turi kelias kalbas, o naudosite tik vieną – vistiek privaloma užpildyti kategorijos pavadinimą abiejose kalbose ...</p></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="post-meta">
                                        <a target="_blank" href="{{route('KategorijaOC20')}}" class="btn btn-xs btn-primary pull-right">Detaliau...</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="post post-medium">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="post-image">
                                        <div>
                                            <div>
                                                <div class="img-thumbnail">
                                                    <a target="_blank" href="{{route('KategorijuRekomendacijos')}}">
                                                        <img class="img-responsive" src="{{ url('assets/img/dokumentacija/opencart-parduotuves-valdymas_kaegorija.png') }}" alt="Opencart kategorijų kūrimo rekomendacijos">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="post-content">
                                        <h3 class="mb-xs"><a target="_blank" href="{{route('KategorijuRekomendacijos')}}">Kategorijų kūrimo rekomendacijos</a></h3>
                                        <div class="justify-p"><p>Prieš užsakant tokias paslaugas kaip <a target="_blank" href="{{route('home')}}">elektroninių parduotuvių kūrimas</a> vienas iš darbų, kuriuos reikia padaryti NAUJAI el-parduotuvei tai – TINKAMAS PREKIŲ KATEGORIJŲ SUKŪRIMAS. Tinkamas – tai reiškia, kad sudaryta prekių kategorijų struktūra leistų klientams lengvai orientuotis el-parduotuvėje. Dažnai netinkamas el-parduotuvės struktūros padaro didelį atmetimo rodiklį (angl. Bounce rate). Bounce rate galite stebėti ... Tinkamas – tai reiškia, kad reikėtų gerai pagalvoti ir sudaryti kategorijas taip, kad ...</p></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="post-meta">
                                        <a target="_blank" href="{{route('KategorijuRekomendacijos')}}" class="btn btn-xs btn-primary pull-right">Detaliau...</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="post post-medium">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="post-image">
                                        <div>
                                            <div>
                                                <div class="img-thumbnail">
                                                    <a target="_blank" href="{{route('PrekeOC20')}}">
                                                        <img class="img-responsive" src="{{ url('assets/img/dokumentacija/opencart-parduotuves-valdymas_kaegorija.png') }}" alt="Opencart kategorijų kūrimo rekomendacijos">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="post-content">
                                        <h3 class="mb-xs"><a target="_blank" href="{{route('PrekeOC20')}}">Kaip pridėti prekę?</a></h3>
                                        <div class="justify-p"><p>Kaip pridėti prekes elektroninės parduotuvės administravimo aplinkoje: Eikite į http://www.jusuPuslapis.lt/admin Eikite į Katalogas – Produktai. Spauskite mygtuką Pridėti. Opencart internetinės parduotuvės produktų lentelėje "Bendrieji": Prekės pavadinimas: Įrašykite prekės pavadinimą Puslapio antraštę (angl. Meta title): žr. Kategorijos aprašymą ...</p></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="post-meta">
                                        <a target="_blank" href="{{route('PrekeOC20')}}" class="btn btn-xs btn-primary pull-right">Detaliau...</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="post post-medium">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="post-image">
                                        <div>
                                            <div>
                                                <div class="img-thumbnail">
                                                    <a target="_blank" href="{{route('GamintojasOC20')}}">
                                                        <img class="img-responsive" src="{{ url('assets/img/dokumentacija/opencart-parduotuves-valdymas_kaegorija.png') }}" alt="Opencart kategorijų kūrimo rekomendacijos">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="post-content">
                                        <h3 class="mb-xs"><a target="_blank" href="{{route('GamintojasOC20')}}">Kaip pridėti gamintoją?</a></h3>
                                        <div class="justify-p"><p>Kaip pridėti gamintoją prie prekės aprašymo? Eikite į savo internetinės parduotuvės TVS: www.jusuparduotuve.lt/admin Prisijunkite prie internetinės parduotuvės TVS. Toliau eikite į Katalogas---Gamintojai. Spauskite Pridėti. Gamintojo lango meniu: Url galūnė arba <a target="_blank" href="http://www.seopaslaptys.lt">SEO</a> raktažodis: galite palikti tuščią arba jeigu turite modulį SEO generatorius, tuomet jis sugeneruos draugišką URL ...</p></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="post-meta">
                                        <a target="_blank" href="{{route('GamintojasOC20')}}" class="btn btn-xs btn-primary pull-right">Detaliau...</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="post post-medium">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="post-image">
                                        <div>
                                            <div>
                                                <div class="img-thumbnail">
                                                    <a target="_blank" href="{{route('LogotipasOC20')}}">
                                                        <img class="img-responsive" src="{{ url('assets/img/dokumentacija/opencart-parduotuves-valdymas_kaegorija.png') }}" alt="Opencart kategorijų kūrimo rekomendacijos">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="post-content">
                                        <h3 class="mb-xs"><a target="_blank" href="{{route('LogotipasOC20')}}">Kaip pakeisti logotipą</a></h3>
                                        <div class="justify-p"><p>Detali informacija, kaip įkelti naują logotipą į elektroninę parduotuvės sistemą. Kai pasinaudojate paslauga <a target="_blank" href="{{route('logotipu-kurimas.list.view')}}">logotipų kūrimas</a> ir turite jau sukurtą Jūsų firminį logotipą, tuomet reikia jį pakeisti. Taigi, šiame trumpame straipsnyje ir sužinosite kaip tai padaryti ...</p></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="post-meta">
                                        <a target="_blank" href="{{route('LogotipasOC20')}}" class="btn btn-xs btn-primary pull-right">Detaliau...</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="post post-medium">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="post-image">
                                        <div>
                                            <div>
                                                <div class="img-thumbnail">
                                                    <a target="_blank" href="{{route('PayseraOC20')}}">
                                                        <img class="img-responsive" src="{{ url('assets/img/dokumentacija/opencart-parduotuves-valdymas_kaegorija.png') }}" alt="Paysera modulio valdymas">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="post-content">
                                        <h3 class="mb-xs"><a target="_blank" href="{{route('PayseraOC20')}}">Paysera mokėjimo modulio nustatymai</a></h3>
                                        <div class="justify-p"><p>Detalus aprašymas, kaip sukonfigūruoti ir suderinti elektroninę parduotuvę ir Paysera.lt sistemą. Paysera nustatymai padaromi per TRIS ŽINGSNIUS. 1- registravimas Paysera.lt, 2-kodų ir slaptažodžių suvedimas, 3-projekto teikimas peržiūrai ir patvirtinimas. ...</p></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="post-meta">
                                        <a target="_blank" href="{{route('PayseraOC20')}}" class="btn btn-xs btn-primary pull-right">Detaliau...</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @include('__include/footer')
</div>
@include('__include/scriptsFooter')
</body>
</html>