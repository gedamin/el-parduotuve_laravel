<!DOCTYPE html>
<html>
<head>
    <?php $active = 'meniuElParduotuveKurimas';?>
    <meta charset="UTF-8">
    <title>Logotipų kūrimas | Logotipai | Kaina | Susikūrk Nemokamai</title>
    <meta content="Logotipų kūrimas | Logotipai" property="og:title"/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <meta name="description"
          content="Logotipų kūrimas ir kitos grafinio dizaino paslaugos. Rasite ir priemonę leidžiančią susikūrti NEMOKAMĄ logotipą vos per kelias sekundes">
    <meta content="Logotipų kūrimas ir kitos grafinio dizaino paslaugos. Rasite ir priemonę leidžiančią susikūrti NEMOKAMĄ logotipą vos per kelias sekundes"
          property="og:description"/>
    <meta property="og:type" content="website"/>
    <meta content="http://www.el-parduotuve.lt/logotipu-kurimas.php" property="og:url"/>
    <meta content="{{ url('assets/img/misc/logo.png') }}" property="og:image"/>
    <link rel="canonical" href="{{ url('logotipu-kurimas.php') }}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <meta name="author" content="Gediminas">
    <!-- Twiter-->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@elparduotuve">
    <meta name="twitter:creator" content="@elparduotuve">
    <meta name="twitter:title" content="Logotipų kūrimas | Logotipai">
    <meta name="twitter:description"
          content="Logotipų kūrimas ir kitos grafinio dizaino paslaugos. Rasite ir priemonę leidžiančią susikūrti NEMOKAMĄ logotipą vos per kelias sekundes">
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
                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                        itemprop="item" href="{{ url('/') }}"><span itemprop="name">Pradžia</span></a>
                                <meta itemprop="position" content="1"/>
                            </li>
                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"
                                class="active"><a itemprop="item" href="{{ url('logotipu-kurimas.php') }}"><span
                                            itemprop="name">Logotipų kūrimas</span></a>
                                <meta itemprop="position" content="2"/>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h1>Logotipų kūrimas</h1>
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
                    <h2>Pasirink <strong>Logotipo Dizainerį</strong></h2>
                    <hr>
                    {{--Add disainer--}}
                    <section class="call-to-action mb-xl">
                        <div class="call-to-action-content">
                            <h3>Kuriate <strong>Logotipus</strong> ?</h3>
                            <p><strong>Būkit matomi</strong> įkelkite savo darbus ir pavyzdžius!</p>
                        </div>
                        <div class="call-to-action-btn">
                            <a href="{{ route('register') }}" target="_blank" class="btn btn-lg btn-primary">Įkelti</a>
                        </div>
                    </section>

                    <div class="sort-destination-loader-showing">
                        @foreach($disainers_lists as $disainer)
                            @if(($disainer->is_active_disainer) != 1 )
                        <div class="row mt-xlg">
                            <div class="col-md-12">
                                <div class="LogoDisainerList">
                                    <a href="{{ route('logotipu-kurimas.disainer.view', $disainer->slug) }}">
                                        <span class="spanas"></span>
                                    </a>
                                    <div class="col-md-2 col-sm-2 col-xs-3">
                                        <div class="">

                                            @if( ($disainer->disainer_avatar) == '')
                                                <img src="{{ url('assets/img/misc/team-1.jpg') }}" class="img-responsive img-circle" alt="{{$disainer->disainer_name}}">
                                            @else
                                                <img src="/images/disainer_avatar/{{$disainer->disainer_avatar}}" class="img-responsive img-circle" alt="{{$disainer->disainer_name}}">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-9">
                                        <p><strong>{{$disainer->disainer_name}}</strong></p>
                                        <h3><strong>{{$disainer->disainer_title}}</strong></h3>
                                        <p class="desc">{{strip_tags(str_limit($disainer->disainerShort_description, 110))}}</p>
                                    </div>
                                    <div class="listLogoImg">
                                        <div class="col-md-2 col-sm-2 hidden-xs" >
                                            <div class="img1" style="background: url('/images/disainer_avatar/{{$disainer->disainer_avatar}}')  no-repeat center center ">
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2 hidden-xs">
                                            <div class="img2">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                            @endif

                        @endforeach
                </div>
            </div>
{{--                {{dd($disainers_lists)}}--}}
            {{ $disainers_lists->links() }}
        </div>
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-9">
                    <div class="heading heading-border heading-middle-border">
                        <h2>Logotipų <strong>kūrimas</strong></h2>
                    </div>
                    <p>Logotipas &ndash; svarbiausias bet kurios įmonės firminis elementas. Tai įmonės veidas ir simbolis, perteiktas grafi&scaron;kai.</p>

                    <p>Logotipas (dažnai vadinamas logo) &ndash; grafinis ženklas, kurį gali sudaryti:</p>

                    <ul>
                        <li>Specialiai pasirinktu &scaron;riftu para&scaron;ytas (pagražintas) pavadinimas arba jo santrumpa</li>
                        <li>Pavadinimas arba santrumpa, sudaranti visumą su grafiniu elementu ar simboliu</li>
                        <li>Tik grafinis elementas arba simbolis be teksto ar santrumpos</li>
                    </ul>

                    <p><strong>Logotipų kūrimas</strong>, kokia logotipo esmė &ndash; įkūnyti kompanijos (įmonės, organizacijos, bendrijos ir t.t.) dvasią, i&scaron;skirti ją i&scaron; konkurentų tarpo, būti lengvai suvokiamu ir atpažįstamu bei lengvai pritaikomu visuose media kanaluose (nuo spaudos iki interneto). Logotipai dažnai yar derinami su įmonių &scaron;ūkiais. Logotipas ir firminis stilius &ndash; sudėtinė kompanijos, produkto ar institucijos komunikacijos ir rinkodaros dalis.</p>
                    <div class="heading heading-border heading-middle-border">
                        <h3><strong>Koks</strong> turi būti logotipas?</h3>
                    </div>

                    <p>Geras logotipas turi būti konceptualus, stilizuotas, i&scaron;mąstytas, kažkuo i&scaron;siskiriantis t.y. originalus, įsimintinas, įskaitomas ir ai&scaron;kus ir pan..</p>

                    <h3>Ko dažnaiusiai klausiama kuriant logotipą:</h3>

                    <ul>
                        <li>Kokia veikla užsiima objektas kuriam reikalingas logotipas?</li>
                        <li>Kokia objekto verslo ar veiklos vizija?</li>
                        <li>Ar yra logotipo vizija? Jei taip, kokia ji?</li>
                        <li>Ar yra pageidautinos spalvos ar kiti elementai, kurie turėtų dominuoti logotipe?</li>
                        <li>Kiek laiko galite skirti dizaineriui?</li>
                        <li>Koks yra logotipo biudžetas?</li>
                        <li>Papildoma informacija.</li>
                    </ul>

                    <p>&nbsp;</p>
                    <div class="heading heading-border heading-middle-border">
                        <h3><strong>Logotipų kūrimas</strong></h3>
                    </div>

                    <h4><strong>Logotipas</strong> ir įmonės atspindys bei vizualus prekinis vardas</h4>

                    <p>Viena i&scaron; svarbių rinkodaros paslaugų yra&nbsp;<strong>logotipų kūrimas</strong>, kuris, kaip pasiūlymas, mūsų kra&scaron;to rinkoje dar nėra itin paplitęs, bet niekas nepaneigs to, kad, jog &scaron;i paslauga turi gan didelę svarbą ir kompanijoms bei įmonėms gali suteikti i&scaron;ties nemažai naudos. &Scaron;iame straipsnyje norime pabrėžti kokias privilegijas puikiai atrodantis prekinis vardas (logotipas) kompanijai galėtų atne&scaron;ti. Žinome, kad mūsų &scaron;alyje i&scaron;ties yra pakankamai didelė visuomenės dalis (ypač jaunoji/i&scaron;manioji karta) galvojanti apie verslą, o galimai jau ir turi, ir stengiasi &scaron;į plėtoti. Esame įsitikinę, jog visiems logotipų kūrimo tema turėtų būti aktuali, bei naudinga &ndash; jeigu ne verslo tikslais, tai bent jau turite puikią progą i&scaron;siai&scaron;kinti, kaip jus veikia puikiai ir reprezentatyviai atrodantis prekinis vardas.</p>

                    <p>Kaip ir tikriausiai pastebėjote, užsienio kompanijos, tokios, kaip pavyzdžiui Adidas, Nike, American Express ir kt., i&scaron; tiesų &scaron;ioje situacijoje turi itin didelį prana&scaron;umą, prie&scaron; konkurentus. Turime omenyje tai, kad visame pasaulyje įvardytų kompanijų logotipai yra labai lengvai atpažįstami, o viso to priežastis &ndash; ne vien tik puiki produkcija, bet ir puikiai atrodanti prekinio vardo vizualizacija.</p>

                    <p>Taigi tai leidžia daryti prielaidą, kad tokios paslaugos, kaip&nbsp;<strong>logotipų kūrimas</strong>, jūsų įmonei galėtų leisti įgyti didelį prana&scaron;umą, ypač, jeigu jūsų siūloma paslauga ar produkcija yra materiali. Tarkime, jeigu jūs pardavinėtumėte tokius produktus kaip drabužius, avalynę, ar specifinius prabangius laikrodžius, ir be viso to jūsų logotipas vizualiai atrodytų i&scaron;ties nepakartojamai, tuomet galime garantuoti, jog tai tikrai leistų padidinti pardavimų (ar paslaugų) skaičių, leistų priartėti prie nuolatinių klientų rinkos ir tokiu būdu plėsti žinią apie jūsų kompaniją, įmonę ar bendrovę.</p>

                    <p>Dažnai vartotojų pirkiniai yra pasirenkami pagal prekinį vardą, kurį puikiai žino ir atpažįsta. Todėl logotipas turėtų būti toks, kuris lengvai įsimenamas, bei pats logotipas nusakytų apie pačią įmonę ir jos veiklą, produkciją.</p>

                    <p>Taigi galima daryti i&scaron;vadą, kad logotipų sukūrimo paslauga turėtų būti prioritetinėje vietoje.</p>
                    <div class="heading heading-border heading-middle-border">
                    <h3>Gerų <strong>logotipų kūrimo</strong> požymiai</h3>
                    </div>

                    <p>Pastaruoju metu yra pastebima, kad kompiuterinės grafikos programos yra sukuriamos arba i&scaron;tobulinamos taip, kad būtų galima kuo paprasčiau jas valdyti. Kadangi &scaron;ios programos ir lengvai valdomos ir netgi per ganėtinai trumpą laiką galime i&scaron;mokti gan profesionaliai valdyti jas pasinaudojus video &bdquo;tutorials&ldquo; per youtube kanalą, todėl skelbimuose matoma vis didėjanti logotipų kūrimo paslaugų ganėtinai nedidelėmis kainomis. Tačiau kompiuterinės grafikos programos tai tik pagalbinės priemonės ir kompiuterinė programa dažniausiai naudojama tik paskutiniame logotipo kūrimo etape. Taigi logotipo kūrimas tai ne tik specifinės programos valdymas, bet tai kur kas daugiau norint sukruti gerą logotipą.<br />
                        I&scaron;skirtinės gero logotipo savybės yra &scaron;ios:</p>
                    <div class="heading heading-border heading-middle-border">
                        <h3>1. PAPRASTUMAS. <strong>Logotipų kūrimas ir paprastumas</strong></h3>
                    </div>
                    <p>Kaip ir daugelyje sričių taip ir logotipų kūrime paprastumas yra itin svarbus akcentas. Pastebima tokių logotipų, kuriuose gausu smulkių detalių, formų ar specifinių efektų, tačiau ar tokį komplikuotą logo gebėsite pritaikyti įvairiuose vietose? Logotipas turėtų būti nesudėtingai pritaikomas internetiniuose projektuose, spaudoje, vitrinose, ant prekės ir kituose reklamos formose, tačiau turint komplikuotą su sudėtingais efektais logotipą ne visuomet bus lengva arba pareikalaus nemažai papildomų investicijų ir laiko. Bet paprastumas neturi pereiti iki banalumo arba nuobodumo, taig kad ir kaip paprastai skamba &bdquo;paprastumas&ldquo; jį i&scaron;gauti ne visada taip parasta ir lengva. Kaip puikus to pavyzdys Apple:</p>

                    <p><img class="img-responsive" alt="Logotipu kurimas" src="{{ url('assets/img/logotipu-kurimas/logotipu-kurimas.png') }}" /></p>
                    <div class="heading heading-border heading-middle-border">
                        <h3>2. SUDOMINANTIS. <strong>Logotipų kūrimas ir tikslinės auditorijos sudominimas</strong></h3>
                    </div>
                    <p>Vienas i&scaron; sudėtingiausių, tačiau svarbiausių logotipų kūrimo požymių yra gebėjimas sudominti tikslinę auditoriją (tai yra tą auditorija, kuri ir būtent reikalinga konkrečiai įmonei ar organizacijai). Logotipas neturi būti per daug pasakantis, tačiau turi nusakyti įmonės veiklą ar prekės ženklą. Tačiau labai svarbu palikti galimybę pačiam žmogui nusakyti galutinę logotipo reik&scaron;mę ir tokiu būdu galima pasiekti tai, kad žmonės susidomės ir logotipų kūrimo vienas i&scaron; svarbių tikslų bus įgyvendintas.</p>
                    <div class="heading heading-border heading-middle-border">
                        <h3>3. ILGAAMŽIS. <strong>Logotipų kūrimas ir jų ilgaamži&scaron;kumas</strong></h3>
                    </div>
                    <p>Niekada nerekomenduojama pasiduoti &scaron;iandieninėmis madomis ir kurti tokį logo, kuris bus aktualus tik keletą metų ar net trumpiau (nebent logotipas aktualus tik tam tikram laikotarpiui). Taigi būtina pagalvoti kaip Jūsų įmonė atrodys po keliolikos arba po keliasde&scaron;imties metų ar net daugiau. Gal veiklą labai i&scaron;plėsite ir todėl verta pamąstyti apie tai, kad nebūtinai akcentuotis į &scaron;ių dienų populiariausią prekę ar veiklą. Yra pastebėta, kad didžiosios kompanijos logotipus koreguoja, tačiau nežymiai ir tik kas 10 ar 15 metų. Kaip pavyzdys Shell logotipas:</p>

                    <p><img class="img-responsive" alt="Logotipu kurimas" src="{{ url('assets/img/logotipu-kurimas/logotipu-kurimas_2.png') }}" /></p>
                    <div class="heading heading-border heading-middle-border">
                    <h3>4. ĮSIMENANTIS. <strong>Logotipų kūrimas ir įsimintinumas.</strong></h3>
                </div>
                    <p>Kuriant Logotipą taip pat keliamas labai svarbus, kad jis būtų lengvai įsimenamas. Kuo lengviau įsimename tuo lengviau atpažįstame ir tuo labiau tampame populiaresniais. Taigi, kad įsiminti naują logotipą reikėtų pagalvoti apie i&scaron;skirtinumą tarp gausybės kitų, todėl nereikia bijoti netradicinių sprendimų ir kad pasiekti įsimenamumą būtinas ir i&scaron;skirtinumas.</p>
                    <hr>
                    <p><a href="{{route('LogotipoSpalva')}}">Logotipo spalva</a>  | <a href="{{route('GrafinisDizainas')}}">Grafinis dizainas</a> | <a href="{{route('KompiuterineGrafika')}}">Kompiuterinė grafika</a></p>
                    <hr>
                </div>

            </div>
    </div>
    @include('__include/footer')
</div>
@include('__include/scriptsFooter')
</body>
</html>