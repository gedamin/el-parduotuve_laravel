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
    <meta content="{{ route ('AprasymaiOC15') }}" property="og:url"/>
    <meta content="{{ url('assets/img/misc/logo.png') }}" property="og:image"/>
    <link rel="canonical" href="{{ route ('AprasymaiOC15') }}"/>
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
                                class="active"><a itemprop="item" href="{{ route ('dokumentacija15') }}"><span itemprop="name">E-parduotuvėms kurtoms iki 2015-04-01</span></a>
                                <meta itemprop="position" content="2"/>
                            </li>
                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="active"><a itemprop="item" href="{{ route ('AprasymaiOC15') }}"><span itemprop="name">Aprašymai</span></a>
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
                            <h2 class="mb-sm">Internetinės parduotuvės dokumentacija - Aprašymai</h2>
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
                                                        <a target="_blank" href="{{route('NuoKoPradetiOC15')}}">
                                                        <img class="img-responsive" src="{{ url('assets/img/dokumentacija/opencart-parduotuves-valdymas_kaegorija.png') }}" alt="Opencart parduotuvės valdymas">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="post-content">
                                            <h3 class="mb-xs"><a target="_blank" href="{{route('NuoKoPradetiOC15')}}">Įsigijus el-parduotuvę. Nuo ko pradėti?</a></h3>
                                            <div class="justify-p"><p>Patikrinkite el-parduotuvę! Ar ji gerai veikia? Įsigijus el-parduotuvę, jūsų parduotuvėje bus įkelta pavyzdinės prekės. Pabandykite įsigyti/užsakyti (kaip pirkėjas) bet kokią prekę. (Pirkdami prekę įrašykite savo el-paštą). Įsigijus Jūs turite gauti el-laišką apie prekės užsakymą. Taip pat Jūs (kaip parduotuvės administratorius) turėtumėte gauti el-laišką, kad kažkas užsisakė prekę ...</p></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="post-meta">
                                            <a target="_blank" href="{{route('NuoKoPradetiOC15')}}" class="btn btn-xs btn-primary pull-right">Detaliau...</a>
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
                                                    <a target="_blank" href="{{route('KategorijaOC15')}}">
                                                        <img class="img-responsive" src="{{ url('assets/img/dokumentacija/opencart-parduotuves-valdymas_kaegorija.png') }}" alt="Opencart parduotuvės valdymas">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="post-content">
                                        <h3 class="mb-xs"><a target="_blank" href="{{route('KategorijaOC15')}}">Kaip pridėti prekių kategoriją?</a></h3>
                                        <div class="justify-p"><p>Kaip pridėti prekių kategoriją Eikite į http://www.jusuPuslapis.lt/admin Eikite į Katalogas – Kategorijos. Spauskite mygtuką Pridėti. Matote kategorijos valdymo langą: Bendrieji: Atkreipkite dėmesį ar Jūsų elektroninė parduotuvė turi vieną ar kelias kalbas. Jeigu turi kelias kalbas, o naudosite tik vieną – vistiek privaloma užpildyti kategorijos pavadinimą abiejose kalbose ...</p></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="post-meta">
                                        <a target="_blank" href="{{route('KategorijaOC15')}}" class="btn btn-xs btn-primary pull-right">Detaliau...</a>
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
                                                        <img class="img-responsive" src="{{ url('assets/img/dokumentacija/opencart-parduotuves-valdymas_kaegorija.png') }}" alt="Opencart valdymo dokumentacija">
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
                                                    <a target="_blank" href="{{route('PrekeOC15')}}">
                                                        <img class="img-responsive" src="{{ url('assets/img/dokumentacija/opencart-parduotuves-valdymas_kaegorija.png') }}" alt="Opencart valdymo dokumentacija">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="post-content">
                                        <h3 class="mb-xs"><a target="_blank" href="{{route('PrekeOC15')}}">Kaip pridėti prekę?</a></h3>
                                        <div class="justify-p"><p>Kaip pridėti prekes elektroninės parduotuvės administravimo aplinkoje: Eikite į http://www.jusuPuslapis.lt/admin Eikite į Katalogas – Produktai. Spauskite mygtuką Pridėti. Opencart internetinės parduotuvės produktų lentelėje "Bendrieji": Prekės pavadinimas: Įrašykite prekės pavadinimą Puslapio antraštę (angl. Meta title): žr. Kategorijos aprašymą ...</p></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="post-meta">
                                        <a target="_blank" href="{{route('PrekeOC15')}}" class="btn btn-xs btn-primary pull-right">Detaliau...</a>
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
                                                    <a target="_blank" href="{{route('GamintojasOC15')}}">
                                                        <img class="img-responsive" src="{{ url('assets/img/dokumentacija/opencart-parduotuves-valdymas_kaegorija.png') }}" alt="Opencart valdymo dokumentacija">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="post-content">
                                        <h3 class="mb-xs"><a target="_blank" href="{{route('GamintojasOC15')}}">Kaip pridėti gamintoją?</a></h3>
                                        <div class="justify-p"><p>Kaip pridėti gamintoją prie prekės aprašymo? Eikite į savo internetinės parduotuvės TVS: www.jusuparduotuve.lt/admin Prisijunkite prie internetinės parduotuvės TVS. Toliau eikite į Katalogas---Gamintojai. Spauskite Pridėti. Gamintojo lango meniu: Url galūnė arba <a target="_blank" href="http://www.seopaslaptys.lt">SEO</a> raktažodis: galite palikti tuščią arba jeigu turite modulį SEO generatorius, tuomet jis sugeneruos draugišką URL ...</p></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="post-meta">
                                        <a target="_blank" href="{{route('GamintojasOC15')}}" class="btn btn-xs btn-primary pull-right">Detaliau...</a>
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
                                                    <a target="_blank" href="{{route('LogotipasOC15')}}">
                                                        <img class="img-responsive" src="{{ url('assets/img/dokumentacija/opencart-parduotuves-valdymas_kaegorija.png') }}" alt="Opencart valdymo dokumentacija">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="post-content">
                                        <h3 class="mb-xs"><a target="_blank" href="{{route('LogotipasOC15')}}">Kaip pakeisti logotipą</a></h3>
                                        <div class="justify-p"><p>Detali informacija, kaip įkelti naują logotipą į elektroninę parduotuvės sistemą. Kai pasinaudojate paslauga <a target="_blank" href="{{route('logotipu-kurimas.list.view')}}">logotipų kūrimas</a> ir turite jau sukurtą Jūsų firminį logotipą, tuomet reikia jį pakeisti. Taigi, šiame trumpame straipsnyje ir sužinosite kaip tai padaryti ...</p></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="post-meta">
                                        <a target="_blank" href="{{route('LogotipasOC15')}}" class="btn btn-xs btn-primary pull-right">Detaliau...</a>
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
                                                    <a target="_blank" href="{{route('NemokamasPristatymasOC15')}}">
                                                        <img class="img-responsive" src="{{ url('assets/img/dokumentacija/opencart-parduotuves-valdymas_kaegorija.png') }}" alt="Opencart valdymo dokumentacija">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="post-content">
                                        <h3 class="mb-xs"><a target="_blank" href="{{route('NemokamasPristatymasOC15')}}">Modulis: „Nemokamas pristatymas“</a></h3>
                                        <div class="justify-p"><p>Modulis: „Nemokamas pristatymas“ Su šiuo moduliu Jūs patys galėsite nustatyti sumą už kurią perkant Jūsų internetinėje parduotuvėje bus taikomas nemokamas pristatymas. Eikite į savo elektroninės parduotuvės TVS: www.jusuparduotuve.lt/admin Prisijunkite prie internetinės parduotuvės TVS. Toliau eikite į Plėtiniai---Pristatymas. Susiraskite modulį „Nemokamas pristatymas“ ir paspauskite Taisyti. Suma: įrašykite sumą, reikalingą norint aktyvuoti nemokamą pristatymą ..</p></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="post-meta">
                                        <a target="_blank" href="{{route('NemokamasPristatymasOC15')}}" class="btn btn-xs btn-primary pull-right">Detaliau...</a>
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
                                                    <a target="_blank" href="{{route('PervedimasPerBankaOC15')}}">
                                                        <img class="img-responsive" src="{{ url('assets/img/dokumentacija/opencart-parduotuves-valdymas_kaegorija.png') }}" alt="Opencart valdymo dokumentacija">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="post-content">
                                        <h3 class="mb-xs"><a target="_blank" href="{{route('PervedimasPerBankaOC15')}}">Modulis: „Pervedimas per banką“</a></h3>
                                        <div class="justify-p"><p>Modulis: „Pervedimas per banką“ Eikite į savo elektroninės parduotuvės TVS: www.jusuparduotuve.lt/admin Prisijunkite prie internetinės parduotuvės TVS. Toliau eikite į Plėtiniai ⇒ Mokėjimai. Susiraskite modulį Pervedimas per banką ir paspauskite Taisyti. Toliau modulyje užpildykite Pervedimo per banką instrukcijas (English vietoje, kur yra Anglijos vėliavėlė: rašykite angliškai jeigu jūsų svetainė sukonfiguruota ir ...</p></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="post-meta">
                                        <a target="_blank" href="{{route('PervedimasPerBankaOC15')}}" class="btn btn-xs btn-primary pull-right">Detaliau...</a>
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
                                                    <a target="_blank" href="{{route('SkaidrineReklamaOC15')}}">
                                                        <img class="img-responsive" src="{{ url('assets/img/dokumentacija/opencart-parduotuves-valdymas_kaegorija.png') }}" alt="Opencart valdymo dokumentacija">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="post-content">
                                        <h3 class="mb-xs"><a target="_blank" href="{{route('SkaidrineReklamaOC15')}}">Modulis: „Skaidrinė reklama“</a></h3>
                                        <div class="justify-p"><p>Modulis: „Skaidrinė reklama“ Skaidrinė reklama – tai toks modulis, kuris jums leis reklamuoti norimus produktus ar prekes arba tiesiog bet kokia kita informacija išreikšta nuotraukų/paveiksliukų pavidalu ir įdedama bet kurioje Jūsų internetinės parduotuvės vietoje. Pagrindinės modulio fukcijos ir galimybės: Automatinė nuotraukų paveiksliukų kaita. Išdėstoma bet kurioje internetinės parduotuvės vietoje. Lengvai keičiamas paveiksliukų/nuotraukų dydis per ...</p></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="post-meta">
                                        <a target="_blank" href="{{route('SkaidrineReklamaOC15')}}" class="btn btn-xs btn-primary pull-right">Detaliau...</a>
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
                                                    <a target="_blank" href="{{route('AkcijosOC15')}}">
                                                        <img class="img-responsive" src="{{ url('assets/img/dokumentacija/opencart-parduotuves-valdymas_kaegorija.png') }}" alt="Opencart valdymo dokumentacija">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="post-content">
                                        <h3 class="mb-xs"><a target="_blank" href="{{route('AkcijosOC15')}}">Modulis: „Akcijos/Specialūs“</a></h3>
                                        <div class="justify-p"><p>Modulis: „Akcijos/Specialūs“ Akcijos/Specialūs – tai toks modulis, kuris Jus suteiks galimybę prekes su nuolaida išdėstyti norimoje Jūsų internetinės parduotuvės vietoje. Pagrindinės funkcijos ir galimybės: Automatiškai atrenka visas akcijines prekes. Leidžiama nustatyti kiek akcijinių prekių rodyti norimoje el-parduotuvės ...</p></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="post-meta">
                                        <a target="_blank" href="{{route('AkcijosOC15')}}" class="btn btn-xs btn-primary pull-right">Detaliau...</a>
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
                                                    <a target="_blank" href="{{route('FiltrasOC15')}}">
                                                        <img class="img-responsive" src="{{ url('assets/img/dokumentacija/opencart-parduotuves-valdymas_kaegorija.png') }}" alt="Opencart valdymo dokumentacija">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="post-content">
                                        <h3 class="mb-xs"><a target="_blank" href="{{route('FiltrasOC15')}}">Modulis: „Filtras“</a></h3>
                                        <div class="justify-p"><p>Kad aktyvuoti standartinį filtrą reikia atlikti šiuos veiksmus:1.Pridėti filtro parametrus. Tai yra nustatyti pagal ką norėsite filtruoti prekes. 2. Pridėti prie prekės (-ių) Jūsų sukurtus filtro parametrus (pavadinimus). Filtruos tik tas prekes prie kurių bus pridėtas filtravimas. 3. Pridėti prie norimos prekių kategorijos (-jų) Jūsų sukurtus filtro parametrus (pavadinimus). Prie kiekvienos kategorijos ar sub ...</p></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="post-meta">
                                        <a target="_blank" href="{{route('FiltrasOC15')}}" class="btn btn-xs btn-primary pull-right">Detaliau...</a>
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
                                                    <a target="_blank" href="{{route('ValiutaOC15')}}">
                                                        <img class="img-responsive" src="{{ url('assets/img/dokumentacija/opencart-parduotuves-valdymas_kaegorija.png') }}" alt="Opencart valdymo dokumentacija">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="post-content">
                                        <h3 class="mb-xs"><a target="_blank" href="{{route('ValiutaOC15')}}">Valiutų valdymas</a></h3>
                                        <div class="justify-p"><p>Trumpas aprašymas, kai pridėti papildomą valiutą Jūsų elektroninėje parduotuvėje. Jūs, kaip el-parduotuvės administratorius, galėsite pridėti neribotą kiekį valiutų, o sistema automatiškai visas kainas perskaičiuos į reikiamą valiutą. Kiekvienas apsilankęs elektroninėje parduotuvėje galės lengvai pasirinkti pageidaujamą valiutą ...</p></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="post-meta">
                                        <a target="_blank" href="{{route('ValiutaOC15')}}" class="btn btn-xs btn-primary pull-right">Detaliau...</a>
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