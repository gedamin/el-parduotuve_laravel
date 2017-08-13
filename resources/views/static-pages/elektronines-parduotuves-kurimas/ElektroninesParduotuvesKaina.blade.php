<!DOCTYPE html>
<html>
<head>
    <?php $active = 'meniuElParduotuveKurimas';?>
    <meta charset="UTF-8">
    <title>==Elektroninės parduotuvės kaina==</title>
    <meta content="==Elektroninės parduotuvės kaina==" property="og:title"/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <meta name="description" content="Elektroninės parduotuvės kaina. Pateikiama el-parduotuvę su svarbiausiomis funkcijomis ir galimybėmis, kurių pilnai užteks e-prekybai vykdyti."/>
    <meta content="Elektroninės parduotuvės kaina. Pateikiama el-parduotuvę su svarbiausiomis funkcijomis ir galimybėmis, kurių pilnai užteks e-prekybai vykdyti."
          property="og:description"/>
    <meta property="og:type" content="website"/>
    <meta content="{{route('elektronines-parduotuves-kaina')}}" property="og:url"/>
    <meta content="{{ url('assets/img/misc/logo.png') }}" property="og:image"/>
    <link rel="canonical" href="{{route('elektronines-parduotuves-kaina')}}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="author" content="Gediminas">
    <!-- Twiter-->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@elparduotuve">
    <meta name="twitter:creator" content="@elparduotuve">
    <meta name="twitter:title" content="==Elektroninės parduotuvės kaina==">
    <meta name="twitter:description" content="Elektroninės parduotuvės kaina. Pateikiama el-parduotuvę su svarbiausiomis funkcijomis ir galimybėmis, kurių pilnai užteks e-prekybai vykdyti.">
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
                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="active"><a itemprop="item" href="{{ route('elektronines-parduotuves-kurimas') }}"><span itemprop="name">Elektroninės parduotuvės kūrimas</span></a>
                                <meta itemprop="position" content="2"/>
                            </li>
                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="active"><a itemprop="item" href="{{ route('elektronines-parduotuves-kaina') }}"><span itemprop="name">Elektroninės parduotuvės kaina</span></a>
                                <meta itemprop="position" content="3"/>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h1>Elektroninės parduotuvės kaina</h1>
                    </div>
                </div>
            </div>
        </section>
        <div role="main" class="main shop">
            <div itemscope itemtype="http://schema.org/Product">
            <div class="container">
            <div class="row">
                <div class="col-md-12 mb-xlg mt-xlg">
                    <h3>Elektroninės parduotuvės <strong>kaina</strong></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="owl-carousel owl-theme" data-plugin-options="{'items': 1, 'singleItem': false, 'autoPlay': true}">
                        <div>
                            <div class="thumbnail">
                                <img itemprop="image" alt="elektroninės parduotuvės kaina" class="img-responsive img-rounded" src="{{ url('assets/img/el-parduotuviu-kurimas/journal-2-demo1.png') }}">
                            </div>
                        </div>
                        <div>
                            <div class="thumbnail">
                                <img alt="elektroninės parduotuvės kaina" class="img-responsive img-rounded" src="{{ url('assets/img/el-parduotuviu-kurimas/journal-2-demo2.png') }}">
                            </div>
                        </div>
                        <div>
                            <div class="thumbnail">
                                <img alt="elektroninės parduotuvės kaina" class="img-responsive img-rounded" src="{{ url('assets/img/el-parduotuviu-kurimas/journal-2-demo1.png') }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="summary entry-summary">
                        <h3 class="mb-xs" itemprop="name"><strong>E-parduotuvė su JOURNAL dizainu</strong></h3>

                        <div class="review_num">
                            <span class="count">5</span> atsiliepimai
                        </div>
                        <div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating" class="star-rating">
                            <span style="width:100%"><strong class="rating"><span itemprop="ratingValue">5.00</span></strong> atsižvelgiant į <span itemprop="reviewCount">5</span></span>
                        </div>

                        <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                        <p class="price">
                            <span>KAINA: </span><span class="amount" itemprop="price" content="@include('__include/price')">@include('__include/price')<span itemprop="priceCurrency" content="EUR"> €</span></span>
                        </p>
                            <link itemprop="availability" href="http://schema.org/InStock" />
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
                        <p class="lead justify " itemprop="description">Elektroninė paduotuvė su itin funkciuonaliu JOURNAL dizainu. Tai yra dizaino šablonas TAČIAU šis dizainas yra labai funkciuonalus, todėl Jūs kaip parduotuvės administratorius galėsite patys (be programuotojo pagalbos) redaguoti daugumą dizaino elementų (šriftus, spalvas, fonus, išdėstymus, meniu ir t.t.) </p>
                        <div class="featured-box featured-box-quaternary mt-sm" style="height: 377px;">
                            <div class="box-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        {{--<i class="icon-featured fa fa-cogs m-none"></i>--}}
                                        <h3 class="mb-lg">JOURNAL dizaino pavyzdžiai</h3>
                                        <p class="lead justify">Peržiūrėkite visus JOURNAL dizainų pavyzdžius ir išsirinkite Jums tinkamiausią. TAČIAU atkreipiame dėmesį, kad Jūs patys galėsite redaguoti dizaino išvaizdą.</p>
                                        <div class="divider divider-small divider-small-center">
                                            <hr>
                                        </div>
                                        <a class="btn btn-lg btn-quaternary mr-xs mb-lg" target="_blank" href="{{route('elektronines-parduotuves-dizainas')}}">Peržiūrėti dizainus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="featured-box featured-box-tertiary mt-sm" style="height: 390px;">
                            <div class="box-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3 class="mb-lg">Prisijunkite prie JOURNAL dizaino ADMIN aplinkos</h3>
                                        <p class="lead text-center">Siūlome prisijngti prie vieno iš JOURNAL dizaino Administracinės aplinkos ir apsidairyti kaip valdoma elektroninė parduotuvė.</p>
                                        <div class="divider divider-longer divider-longer-center">
                                            <hr>
                                        </div>

                                        <div class="col-md-6">
                                            <a class="btn btn-lg btn-primary  mr-md mb-lg" target="_blank" href="http://www.journal-2.el-parduotuve.lt/">Peržiūrėti JOURNAL dizainą</a>
                                        </div>
                                        <div class="col-md-6">
                                            <a class="btn btn-lg btn-primary  ml-md mb-lg" target="_blank" href="http://www.journal-2.el-parduotuve.lt/admin">Prisijungti prie ADMIN aplinkos</a>
                                            <p class=" text-center">Vartotojo vardas: <span class="label label-dark">demo</span> Slaptažodis: <span class="label label-dark">demo</span></p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="tabs tabs-product">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#productDescription" data-toggle="tab">Aprašymas</a></li>
                                <li><a href="#productInfo" data-toggle="tab">Galimybės</a></li>
                                <li><a href="#productReviews" data-toggle="tab">Atsiliepimai (5)</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="productDescription">
                                    <p class="justify drop-caps drop-caps-style-2">JOURNAL yra vienas iš funkcionaliausių dizainų, kadangi Jūs kaip el-parduotuvės administratorius (be programuotojo pagalbos) galėsite pakeisti itin daug elementų (spalvas, šriftus, išdėstymus ir t.t.). Kadangi šis dizainas turi labai daug nustatymų, todėl valdyti šį dizainą yra šiek tiek sudėtingiau, tačiau be programuotojo pagalbos Jūs galėsite redaguoti labai daug dizaino elementų. Ir visa tai galėsite padaryti per elektroninės parduotuvės administracinę aplinką.</p>
                                    <p>Ypač rekomenduotinas dizainas ir todėl, kad kartu su juo yra integruojamos elektroninei parduotuvei labai svarbios papildomos funkcijos. Kaip pavyzdžiui BLOG (straipsnių modulis), greito prekių atsiskaitymo modulis, modulis skirtas optimizuoti elektroninės parduotuvės greitį ir kiti moduliai, kurie tiek prideda naujų funkcijų, tiek optimizuoja programinį kodą.</p>
                                </div>
                                <div class="tab-pane" id="productInfo">
                                    <div class="row">
                                        <div class="pricing-table mt-xlg">
                                            <div class="col-md-6 col-sm-6 center">
                                                <div class="plan most-popular">
                                                    <div class="plan-ribbon-wrapper"><div class="plan-ribbon">Popular</div></div>
                                                    <h3>E-parduotuvė su <strong>JOURNAL</strong> dizainu<span>@include('__include/price') €</span></h3>
                                                    <br/>
                                                    <ul>
                                                        <li class="li_bg"><strong>PAGRINDINIAI PRIVALUMAI</strong></li>
                                                        <li><strong>Responsive dizainas</strong> - prisitaikantis prie mobilių įrenginių</li>
                                                        <li><strong>Neribotas</strong> prekių ir kategorijų kiekis</li>
                                                        <li><strong>Nesudėtinga</strong> TVS (turinio valdymo sistema)</li>
                                                        <li><strong>Nebūtinas</strong> galingas (dedikuotas) serveris (hostingas)</li>
                                                        <li><strong>NEMOKAMA</strong> Google Analytic integracija</li>
                                                        <li><strong>Galimybė</strong> pridėti papildomų funkcijų</li>
                                                        <li><strong>Paruošta </strong> SEO optimizacijai</li>
                                                        <li><strong>Prekės su pasirinkimo variantais (Dydis, spalva ir t.t.)</strong></li>
                                                        <li><strong>Prekės su atributais</strong></li>
                                                        <li class="li_bg"><strong>Pagrindiniai prekės duomenys:</strong></li>
                                                        <li>Prekės kodas</li>
                                                        <li>SKU ir kiti produkto kodai priskiriami prekei</li>
                                                        <li></li>Kaina</li>
                                                        <li>Mokesčių klasė (galima, kad skaičiuotų PVM ir kitus mokesčius)</li>
                                                        <li>Kiekis (nurodomas turimų prekių kiekis, kuris sumažės nupirkus prekę)</li>
                                                        <li>Minimalus kiekis (Nustatyti minimalų užsakomą kiekį)</li>
                                                        <li>Pasirodymo data (prekės aktyvavimo datos nustatymas)</li>
                                                        <li>Prekės išmatavimai (I x P x A)</li>
                                                        <li>Prekės svoris</li>
                                                        <li>Susijusių produktų priskyrimas prie prekės</li>
                                                        <li>Prekės pasirinkimai (pagal porekį: spalvą, dydį ir t.t.)</li>
                                                        <li>Nuolaidos (klientų grupėms - VIP klientams, didmeninikams ir t.t.)</li>
                                                        <li>Akcijos</li>
                                                        <li>Lojalumo taškų skaičiavimo galimybė</li>
                                                        <li>Kitos funkcijos ir galimybės</li>
                                                        <li class="li_bg"><strong>ATSISKAITYMO BŪDAI:</strong></li>
                                                        <li><strong>Apmokėjimas Banko pavedimu.</strong>Klientas El-paštu gaus apmokėjimo instrukcijas. Atsiskaityti galės per savo banko el-bankinikystę ar banko skyrius. Pigiausias, paprasčiausias ir populiariausias atsiskaitymo būdas</li>
                                                        <li><strong>Apmokėjimas Kredito ir debeto kortelėmis.</strong>CRD Mokėjimų Vartai yra programinė įranga internetinėms parduotuvėms, kurios dėka yra autorizuojami mokėjimai elektroniniam verslui kredito ir debeto kortelėmis. Tai yra virtualus terminalas, kuris sujungia e-parduotuvę su mokėjimo korteles aptarnaujančiu Cardinity kortelių nuskaitymo servisu, ir leidžia jiems keistis informacija, susijusia su elektroninių pirkimų apmokėjimu.</li>
                                                        <li><strong>Atsiskaitymas grynais</strong>(prekybos vietoje, ar atvežus kurjeriui)</li>
                                                        <li><strong>Per Paysera.lt sistemą.</strong> Klientas galės atsiskaityti iškart pasirinkęs savo banką. Tai greitas atsiskaitymo būdas per bet kurį Lietuvos banką. Privalumas: nereikia daryti atskirų sutarčių su kiekvienu banku atskirai, o klientai atsiskaito per pasirinktą banką ir pinigai pervedami nedelsiant. Žinoma yra ir mokesčiai. Daugiau apie šį būdą skaitykite www.mokejimai.lt puslapy</li>
                                                        <li><strong>Per Paypal atsiskaitymo sistemą.</strong>Klientas automatiškai nukreipiamas į paypal sistemą, kur įvykdomas atsiskaitymas iškart</li>
                                                        <li><strong>Per Opay.lt sistemą.</strong>Klientas galės atsiskaityti iškart, pasirinkęs savo banką. Tai greitas atsiskaitymo būdas per bet kurį Lietuvos banką. Privalumas: nereikia daryti atskirų sutarčių su kiekvienu banku atskirai, o klientai atsiskaito per pasirinktą banką ir pinigai pervedami nedelsiant. Žinoma yra mokesčiai. Daugiau apie šį būdą skaitykite www.opay.lt puslapyje</li>
                                                        <li class="li_bg"><strong>PAPILDOMOS FUNKCIJOS SU JOURNAL DIZAINU</strong></li>
                                                        <li><strong>Daugiau kaip 2000 redagavimo galimybių</strong> be programuotojo pagalbos</li>
                                                        <li><strong>BLOG - </strong> Integruotas straipsnių rašymo modulis</li>
                                                        <li><strong>Header dalies redagavimo galimybė </strong></li>
                                                        <li><strong>Footer dalies redagavimo galimybė </strong></li>
                                                        <li><strong>Vieno puslapio atsiskaitymo funkcionalumas</strong></li>
                                                        <li><strong>Puslapio pasikrovimo greičio optimizavimas</strong></li>
                                                        <li><strong>MEGA meniu</strong></li>
                                                        <li><strong>REVOLIUTION baneriai</strong> Įvairiapusis baerių konfiguravimas</li>
                                                        <li><strong>Akcijų modulis</strong> su laikmačių</li>
                                                        <li><strong>Naujausių prekių modulis</strong> galima išdėstymas (kairė, dešinė, viršus, apačia)</li>
                                                        <li><strong>Perkamiausių prekių modulis</strong> galima išdėstymas (kairė, dešinė, viršus, apačia)</li>
                                                        <li><strong>Neseniai žiūrėtų prekių modulis</strong> galima išdėstymas (kairė, dešinė, viršus, apačia)</li>
                                                        <li><strong>Pasirinktų prekių modulis</strong> galima išdėstymas (kairė, dešinė, viršus, apačia)</li>
                                                        <li><strong>Lengvai valdomas prekių FILTRAVIMAS</strong></li>
                                                        <li><strong>Neribotas spalvų pasirinkimas</strong></li>
                                                        <li><strong>Galimi visi google font'ai (šriftai)</strong></li>
                                                        <li><strong>Puslapio fono redagavimas</strong> (spalva, nuotrauka)</li>
                                                        <li><strong>Didelis ikonų pasirinkimas</strong></li>
                                                        <li><strong>Atskira nuotraukų galerijos funkcija</strong></li>
                                                        <li><strong>POP up langai</strong> - pasiteiravimui apie prekę, iššokantys baneriai, naujienlaiškių prenumeravimas</li>
                                                        <li><strong>IR DAUG KITŲ FUNKCIJŲ</strong></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <div class="plan">
                                                    <h3>E-parduotuvė su <strong>DEMO</strong> dizainu<span>@include('__include/price-demo') €</span></h3>
                                                    <br/>
                                                    <ul>
                                                        <li class="li_bg"><strong>PAGRINDINIAI PRIVALUMAI</strong></li>
                                                        <li><strong>Responsive dizainas</strong> - prisitaikantis prie mobilių įrenginių</li>
                                                        <li><strong>Neribotas</strong> prekių ir kategorijų kiekis</li>
                                                        <li><strong>Nesudėtinga</strong> TVS (turinio valdymo sistema)</li>
                                                        <li><strong>Nebūtinas</strong> galingas (dedikuotas) serveris (hostingas)</li>
                                                        <li><strong>NEMOKAMA</strong> Google Analytic integracija</li>
                                                        <li><strong>Galimybė</strong> pridėti papildomų funkcijų</li>
                                                        <li><strong>Paruošta </strong> SEO optimizacijai</li>
                                                        <li><strong>Prekės su pasirinkimo variantais (Dydis, spalva ir t.t.)</strong></li>
                                                        <li><strong>Prekės su atributais</strong></li>
                                                        <li class="li_bg"><strong>Pagrindiniai prekės duomenys:</strong></li>
                                                        <li>Prekės kodas</li>
                                                        <li>SKU ir kiti produkto kodai priskiriami prekei</li>
                                                        <li></li>Kaina</li>
                                                        <li>Mokesčių klasė (galima, kad skaičiuotų PVM ir kitus mokesčius)</li>
                                                        <li>Kiekis (nurodomas turimų prekių kiekis, kuris sumažės nupirkus prekę)</li>
                                                        <li>Minimalus kiekis (Nustatyti minimalų užsakomą kiekį)</li>
                                                        <li>Pasirodymo data (prekės aktyvavimo datos nustatymas)</li>
                                                        <li>Prekės išmatavimai (I x P x A)</li>
                                                        <li>Prekės svoris</li>
                                                        <li>Susijusių produktų priskyrimas prie prekės</li>
                                                        <li>Prekės pasirinkimai (pagal porekį: spalvą, dydį ir t.t.)</li>
                                                        <li>Nuolaidos (klientų grupėms - VIP klientams, didmeninikams ir t.t.)</li>
                                                        <li>Akcijos</li>
                                                        <li>Lojalumo taškų skaičiavimo galimybė</li>
                                                        <li>Kitos funkcijos ir galimybės</li>
                                                        <li class="li_bg"><strong>ATSISKAITYMO BŪDAI:</strong></li>
                                                        <li><strong>Apmokėjimas Banko pavedimu.</strong>Klientas El-paštu gaus apmokėjimo instrukcijas. Atsiskaityti galės per savo banko el-bankinikystę ar banko skyrius. Pigiausias, paprasčiausias ir populiariausias atsiskaitymo būdas</li>
                                                        <li><strong>Apmokėjimas Kredito ir debeto kortelėmis.</strong>CRD Mokėjimų Vartai yra programinė įranga internetinėms parduotuvėms, kurios dėka yra autorizuojami mokėjimai elektroniniam verslui kredito ir debeto kortelėmis. Tai yra virtualus terminalas, kuris sujungia e-parduotuvę su mokėjimo korteles aptarnaujančiu Cardinity kortelių nuskaitymo servisu, ir leidžia jiems keistis informacija, susijusia su elektroninių pirkimų apmokėjimu.</li>
                                                        <li><strong>Atsiskaitymas grynais</strong>(prekybos vietoje, ar atvežus kurjeriui)</li>
                                                        <li><strong>Per Paysera.lt sistemą.</strong> Klientas galės atsiskaityti iškart pasirinkęs savo banką. Tai greitas atsiskaitymo būdas per bet kurį Lietuvos banką. Privalumas: nereikia daryti atskirų sutarčių su kiekvienu banku atskirai, o klientai atsiskaito per pasirinktą banką ir pinigai pervedami nedelsiant. Žinoma yra ir mokesčiai. Daugiau apie šį būdą skaitykite www.mokejimai.lt puslapy</li>
                                                        <li><strong>Per Paypal atsiskaitymo sistemą.</strong>Klientas automatiškai nukreipiamas į paypal sistemą, kur įvykdomas atsiskaitymas iškart</li>
                                                        <li><strong>Per Opay.lt sistemą.</strong>Klientas galės atsiskaityti iškart, pasirinkęs savo banką. Tai greitas atsiskaitymo būdas per bet kurį Lietuvos banką. Privalumas: nereikia daryti atskirų sutarčių su kiekvienu banku atskirai, o klientai atsiskaito per pasirinktą banką ir pinigai pervedami nedelsiant. Žinoma yra mokesčiai. Daugiau apie šį būdą skaitykite www.opay.lt puslapyje</li>
                                                        <li class="li_bg"><strong>-</strong></li>
                                                        <li><strong>-</strong></li>
                                                        <li><strong>-</strong></li>
                                                        <li><strong>-</strong></li>
                                                        <li><strong>-</strong></li>
                                                        <li><strong>-</strong></li>
                                                        <li><strong>-</strong></li>
                                                        <li><strong>-</strong></li>
                                                        <li><strong>-</strong></li>
                                                        <li><strong>-</strong></li>
                                                        <li><strong>-</strong></li>
                                                        <li><strong>-<br/><br/></strong></li>
                                                        <li><strong>-<br/><br/></strong></li>
                                                        <li><strong>-</strong></li>
                                                        <li><strong>-</strong></li>
                                                        <li><strong>-</strong></li>
                                                        <li><strong>-</strong></li>
                                                        <li><strong>-</strong></li>
                                                        <li><strong>-</strong></li>
                                                        <li><strong>-</strong></li>
                                                        <li><strong>-<br/><br/></strong></li>
                                                        <li><strong>-</strong></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane" id="productReviews">
                                    <ul class="comments">
                                        <li>
                                            <div class="comment" itemprop="review" itemscope itemtype="http://schema.org/Review">
                                                <div class="img-thumbnail">
                                                    <img class="avatar" alt="" src="{{ url('assets/img/ico/avatar.png') }}">
                                                </div>
                                                <div class="comment-block">
                                                    <div class="comment-arrow"></div>
                                                    <span class="comment-by">
															<strong itemprop="author">Eligijus</strong>
															<span class="pull-right">
																<div  itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating" class="star-rating">
                                                                    <meta itemprop="worstRating" content = "1">
																	<span style="width:100%"><strong class="rating" itemprop="ratingValue">5</strong> iš <span itemprop="bestRating">5</span></span>
																</div>
															</span>
														</span>
                                                    <p itemprop="description">Nepriekaištingas darbas, o ypač puikus palaikykas. Prireikė keletą naujų internetinės parduotuvės funkcijų ir nustebau, kad tai praktiškai nieko nekainavo, o maniau kad bus solidi suma. Ačiū.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="comment" itemprop="review" itemscope itemtype="http://schema.org/Review">
                                                <div class="img-thumbnail">
                                                    <img class="avatar" alt="" src="{{ url('assets/img/ico/avatar.png') }}">
                                                </div>
                                                <div class="comment-block">
                                                    <div class="comment-arrow"></div>
                                                    <span class="comment-by">
															<strong itemprop="author">Jurgita</strong>
															<span class="pull-right">
																<div  itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating" class="star-rating">
                                                                    <meta itemprop="worstRating" content = "1">
																	<span style="width:100%"><strong class="rating" itemprop="ratingValue">5</strong> iš <span itemprop="bestRating">5</span></span>
																</div>
															</span>
														</span>
                                                    <p itemprop="description">Svetainė sukūrta laiku ir viskas padaryta pagal mūsų pageidavimus ir norus. Taip pat labai džiaugiamės, kad gavome ir papildomą konsultaciją dėl reklamos ir SEO optimizacijos. Todėl drąsiai rekomenduoju ir kitiems ...</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="comment" itemprop="review" itemscope itemtype="http://schema.org/Review">
                                                <div class="img-thumbnail">
                                                    <img class="avatar" alt="" src="{{ url('assets/img/ico/avatar.png') }}">
                                                </div>
                                                <div class="comment-block">
                                                    <div class="comment-arrow"></div>
                                                    <span class="comment-by">
															<strong itemprop="author">Neringa</strong>
															<span class="pull-right">
																<div  itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating" class="star-rating">
                                                                    <meta itemprop="worstRating" content = "1">
																	<span style="width:100%"><strong class="rating" itemprop="ratingValue">5</strong> iš <span itemprop="bestRating">5</span></span>
																</div>
															</span>
														</span>
                                                    <p itemprop="description">Elektroninė parduotuvė sukūrta laiku pagal JOURNAL dizainą, atlikti nestandartiniai pataisymai, konsultacija kaip naudotis el-parduotuve buvo teikiama visą mėnesį ilgiau nei sutarėme sutartyje, tad viskas puiku ...</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="comment" itemprop="review" itemscope itemtype="http://schema.org/Review">
                                                <div class="img-thumbnail">
                                                    <img class="avatar" alt="" src="{{ url('assets/img/ico/avatar.png') }}">
                                                </div>
                                                <div class="comment-block">
                                                    <div class="comment-arrow"></div>
                                                    <span class="comment-by">
															<strong itemprop="author">Oksana</strong>
															<span class="pull-right">
																<div  itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating" class="star-rating">
                                                                    <meta itemprop="worstRating" content = "1">
																	<span style="width:100%"><strong class="rating" itemprop="ratingValue">5</strong> iš <span itemprop="bestRating">5</span></span>
																</div>
															</span>
														</span>
                                                    <p itemprop="description">Puikus darbas!!! konsultavimas, bendravimas ir atlikto darbo greitis aukščiausio lygio,kylant neaiškumams visada patarta bei papildomai konsultuota. Rekomenduoju,tikrai nenusivilsite! Ačiū</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="comment" itemprop="review" itemscope itemtype="http://schema.org/Review">
                                                <div class="img-thumbnail">
                                                    <img class="avatar" alt="" src="{{ url('assets/img/ico/avatar.png') }}">
                                                </div>
                                                <div class="comment-block">
                                                    <div class="comment-arrow"></div>
                                                    <span class="comment-by">
															<strong itemprop="author">Ignas</strong>
															<span class="pull-right">
																<div  itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating" class="star-rating">
                                                                    <meta itemprop="worstRating" content = "1">
																	<span style="width:100%"><strong class="rating" itemprop="ratingValue">5</strong> iš <span itemprop="bestRating">5</span></span>
																</div>
															</span>
														</span>
                                                    <p itemprop="description">Darbai atlikti laiku ...</p>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                    <hr class="tall">
                                    <h4 class="heading-primary">Parašykite atsiliepimą</h4>
                                    <div class="row">
                                        <div class="col-md-12">

                                            <form action="{{route('JournalFormMail')}}" id="submitReview" method="post">
                                                {{ csrf_field() }}
                                                <div class="row">
                                                    <div class="form-group">
                                                        <div class="col-md-6">
                                                            <label>Jūsų vardas *</label>
                                                            <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label>Jūsų elektroninio pašto adresas *</label>
                                                            <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label>Atsiliepimas *</label>
                                                            <textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" id="message"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input type="submit" value="Siųsti" class="btn btn-primary" data-loading-text="Kraunasi...">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>





        </div>
            </div>
        </div>

        <section class="call-to-action call-to-action-primary mt-xlg mb-xlg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="call-to-action-content align-left pb-md mb-xl ml-none">
                            <h3 class="text-color-light mb-xlg mt-xlg">Turite klausimų, nedelskite <strong> rašykite...</strong></h3>
                        </div>
                        <div class="call-to-action-btn">
                            <a href="{{route('kontaktai')}}"
                               class="btn btn-lg btn-primary btn-primary-scale-2 mr-md">Susisiekite ...</a>
                            <span class="mr-md text-color-light hidden-xs">Nedelskite<span class="arrow arrow-light hlb"style="top: -88px; right: -47px;"></span></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div role="main" class="main shop">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-xlg mt-xlg">
                        <h3>Elektroninės parduotuvės <strong>kaina</strong> su DEMO dizainu</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">

                            <div>
                                <div class="thumbnail">
                                    <img alt="elektroninės parduotuvės kaina" class="img-responsive img-rounded" src="{{ url('assets/img/el-parduotuviu-kurimas/demo-el-parduotuve.png') }}">
                                </div>
                            </div>
                        </div>
                    <div class="col-md-6">
                        <div class="summary entry-summary">
                            <h3 class="mb-xs"><strong>E-parduotuvė su DEMO dizainu</strong></h3>
                            <p class="price mb-xlg mt-xlg">
                                <span>KAINA: </span><span class="amount">@include('__include/price-demo')<span> €</span></span>
                            </p>

                            <p class="lead justify">DEMO Elektroninė paduotuvė yra pilnai paruošta prekybai internete ir su visu reikalingu funkcionalumu, tačiau turi žymiai mažiau funkcijų nei JOURNAL dizainas. </p>
                            <div class="featured-box featured-box-quaternary mb-xlg mt-xlg" style="height: 355px;">
                                <div class="box-content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3 class="mb-lg">DEMO dizainas</h3>
                                            <p class="lead justify">Taip pat galite išbandyti ir elektroninę parduotuvę su DEMO dizainu ir įvertinti jos funkciuonalumą.</p>
                                            <div class="divider divider-small divider-small-center">
                                                <hr>
                                            </div>
                                            <div class="col-md-6">
                                                <a class="btn btn-lg btn-primary  mr-md mb-lg" target="_blank" href="http://www.demooc2.el-parduotuve.lt/">DEMO dizainas</a>
                                            </div>
                                            <div class="col-md-6">
                                                <a class="btn btn-lg btn-primary  ml-md mb-lg" target="_blank" href="http://www.demooc2.el-parduotuve.lt/admin/">DEMO ADMIN aplinka</a>

                                            </div>
                                            <p class="text-center">Vartotojo vardas: <span class="label label-dark">demo</span> Slaptažodis: <span class="label label-dark">demo</span></p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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