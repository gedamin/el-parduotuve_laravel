<!DOCTYPE html>
<html xmlns:fb="http://www.w3.org/1999/xhtml">
<head>
    <?php $active = 'meniuDokumentacija';?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kaip pridėti prekę?</title>
    <meta content="Kaip pridėti prekę?" property="og:title"/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <meta name="description" content="Kaip pridėti prekę?">
    <meta content="Kaip pridėti prekę?" property="og:description"/>
    <meta property="og:type" content="website"/>
    <meta content="{{ route('PrekeOC15') }}" property="og:url"/>
    <meta content="{{ url('assets/img/misc/logo.png') }}" property="og:image"/>
    <link rel="canonical" href="{{ route('PrekeOC15') }}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="author" content="Gediminas">
    <!-- Twiter-->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@elparduotuve">
    <meta name="twitter:creator" content="@elparduotuve">
    <meta name="twitter:title" content="Kaip pridėti prekę?">

    <meta name="twitter:description" content="Kaip pridėti prekę?">

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
                            class="active"><a itemprop="item"  href="{{ route('dokumentacija15') }}"><span itemprop="name"> E-parduotuvėms kurtoms iki 2015-04-01</span></a>
                            <meta itemprop="position" content="2"/>
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"
                            class="active"><a itemprop="item" href="{{ route('AprasymaiOC15') }}"><span itemprop="name">Aprašymai</span></a>
                            <meta itemprop="position" content="3"/>
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"
                            class="active"><a itemprop="item" href="{{ route('PrekeOC15') }}"><span
                                        itemprop="name">Kaip pridėti prekę?</span></a>
                            <meta itemprop="position" content="4"/>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>Kaip pridėti prekę?</h1>
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
                            <h2 class="heading-primary" itemprop="name"><strong>Kaip pridėti prekę?</strong></h2>
                            <div class="post-meta">
                                <span><i class="fa fa-user"></i> Parengė <a target="_blank" rel="nofollow" href="https://plus.google.com/u/0/117284839973334834336?rel=author"><span itemprop="author">Gediminas</span></a> </span>
                            </div>

                            <div class="heading heading-border heading-bottom-border">
                                <h4><strong>Kaip pridėti naują prekę?</strong></h4>
                            </div>
                            <ul>
                                <li>Eikite į http://www.jusuPuslapis.lt/admin</li>
                                <li>Eikite į <strong><em><u>Katalogas</u></em></strong> &ndash; <strong><em><u>Produktai</u></em></strong>.</li>
                                <li>Spauskite mygtuką <strong><em><u>Pridėti</u></em></strong>.</li>
                            </ul>

                            <p><img class="img-responsive" alt="produktai opencart" src="{{ url('assets/img/dokumentacija15/produktai.png') }}"/></p>

                            <h4>Opencart internetinės parduotuvės produktų&nbsp; langas <strong>Bendrieji</strong>:</h4>

                            <p><img class="img-responsive" alt="produktai opencart" src="{{ url('assets/img/dokumentacija15/produktai-bendrieji.png') }}"/></p>

                            <ul>
                                <li><strong>Produkto pavadinimas:</strong> Įra&scaron;ykite produkto pavadinimą</li>
                                <li><strong>Meta žymos apra&scaron;ymas (angl. meta description):</strong> žr. Kategorijos apra&scaron;ymą.</li>
                                <li><strong>Meta žymos raktažodžiai (angl. meta kaywords):</strong> žr. Kategorijos apra&scaron;ymą.</li>
                                <li><strong>*Apra&scaron;ymas:</strong> Detalus produkto ar prekės apra&scaron;ymas, patartina kuo detaliau ir daugiau, nes jei pirkėju bus neai&scaron;ku jis gali pirkti pas jūsų konkurentus, be to detalus apra&scaron;ymas padės i&scaron;kelti į auk&scaron;tesnę vietą google.</li>
                                <li><strong>Produkto žymos:</strong> pagrindiniai produkto raktažodžiai. Galite palikti ir tu&scaron;čią, o jei turite SEO generatorių, tumet jis žymas automati&scaron;kai sugeneruos.</li>
                            </ul>

                            <p>REKOMENDUOJAME APARA&Scaron;YMUS DARYTI MsWord (ar kitokio tipo) formate, kad bet kada galėtumėte atstayti duomenis.</p>

                            <h4>Opencart internetinės parduotuvės produktų&nbsp; langas <strong>Data:</strong></h4>

                            <p><img class="img-responsive" alt="produktai opencart" src="{{ url('assets/img/dokumentacija15/produktai-duomenys.png') }}"/></p>

                            <ul>
                                <li><strong>Modelis:</strong> Prekės modelis</li>
                                <li><strong>SKU, UPC, EAN, JAN, ISBN, MPN, Vietovė:</strong> galite palikti tu&scaron;čius ir įveskite pagal poreikį.</li>
                                <li><strong>Kaina:</strong> prekės ar produkto kaina (p.s. nepalikite nulio)</li>
                                <li><strong>Mokesčių klasė:</strong> galima priskirti nurodytai prekei mokesčius. Pavyzdžiui PVM. Sistema automati&scaron;kai pridėtų PVM ir jūsų klientai galėtų matyti kiek moka PVM.</li>
                                <li><strong>Kiekis:</strong> Para&scaron;ykite kiek tokių prekių turite sandėlyje ir jums &scaron;i internetinė parduotuvė automati&scaron;kai skaičiuos jūsų prekių likutį.</li>
                                <li><strong>Minimalus kiekis:</strong> Galite nustatyti minimalų prekių užsakymo kiekį.</li>
                                <li><strong>Sumažinti prekių kiekio likutį po nupirkimo:</strong> pasirinkite TAIP arba NE.</li>
                                <li><strong>Neturimos prekės būsena:</strong> Pasirinkite būseną kuri bus rodoma, kai prekės nėra.</li>
                                <li><strong>Reikalingas pristatymas:</strong> Būtinai nurodykite ar bus reikalingas prekės pristatymas (pa&scaron;tu ir pan.). O jeigu prekiausite tokiomis prekėmis kaip elektroninės knygos ir pana&scaron;iai tuomet žymėkite NE, nes tokias prekes sistema leis klienatms atsisiųsti i&scaron; &scaron;ios internetinės parduotuvės.</li>
                                <li><strong>Url galūnė (arba SEO raktažodis):</strong> žr. Kategorijos apra&scaron;ymą (galite palikti ir tu&scaron;čią).</li>
                                <li><strong>Atvaizdas:</strong> žr. Kategorijos apra&scaron;ymą.</li>
                                <li><strong>Pasirodymo data:</strong> Galite nustatyti datą, kada &scaron;i prekė bus rodoma Jūsų internetinėje parduotuvėje. Nustačius rytdienos datą, tuomet &scaron;iandien jos klientai nematys parduotuvėje, o prekė automati&scaron;kai pasirodys Jūsų nustatytu laiku.</li>
                                <li><strong>I&scaron;matavimai (I x P x A):</strong> Jeigu Jūsų prekė turi i&scaron;matavimus, tuomet galite juos suvesti čia.</li>
                                <li><strong>Ilgio vienetas:</strong> pasirinkite ilgio vienetą.</li>
                                <li><strong>Svoris:</strong> Įveskite prekės svorį. Atkreipiu dėmesį, jeigu Jūs pasirinksite prekių siuntimo apmokestinimą pagal svorį, tuomet atidžiai ir taisyklingai įra&scaron;ykite prekės svorį. Sistema automati&scaron;kai suskaičiuos visą pirkėjų svoriį ir pagal Jūsų nustatytus tarifus automati&scaron;kai priskirs kainą.</li>
                                <li><strong>Būsena:</strong> norint aktyvuoti pasirinkite <em>Aktyvuotą</em>.</li>
                                <li><strong>Rikiavimo eili&scaron;kumas:</strong> čia nustatomas prekių rikiavimo eili&scaron;kumas kategorijoje.</li>
                            </ul>

                            <h4>Opencart internetinės parduotuvės produktų&nbsp; langas <strong>Nuorodos:</strong></h4>

                            <p><img class="img-responsive" alt="produktai opencart" src="{{ url('assets/img/dokumentacija15/produktai-nuorodos.png') }}"/></p>

                            <ul>
                                <li><strong>Gamintojas:</strong> jeigu jau suvedėte gamintojus (<strong><em><u>Katalogas &ndash; Gamintojai</u></em></strong>), tuomet galite pasirinkti prekės gamintoją. Gamintojas atsispindės prekės apra&scaron;yme.</li>
                                <li><strong>Kategorijos:</strong> priskyrikite prekę norimai kategorijai arba kategorijoms.</li>
                                <li><strong>Filtrai:</strong> esant poreikiui priskyrikite filtro elementą.</li>
                                <li>Parduotuvės: palikite Numatytoji pasirinktis.</li>
                                <li>Siuntiniai (failu): čia aktualu tiems kas pardavinės elektronines knygas ar pana&scaron;iai. Jeigu prekė yra kažkoks failas tuome čia yra ta vieta kur reikia pažimėti t.y. susieti prekę su parduodamu failu (failai įkeliami: <strong><em><u>Katalogas &ndash; Siuntiniai (failu)).</u></em></strong></li>
                                <li>Susiję produktai: galite prie prekės pridėti ir susijusius t.y. pana&scaron;ias prekes, kad klientai galėtų lengviau atrasti norimą produktą. Čia tiesiog pradėkite ra&scaron;yti prekę ir jums sistema automati&scaron;kai i&scaron;mes sąra&scaron;ą prekių.</li>
                            </ul>

                            <h4>Atributo langas (atributų/specifikacijos įterpimas)</h4>

                            <p>Kas yra atributas? Atributas &ndash; tai vaizdus, lentelės pavidalo prekės apra&scaron;ymo būdas. Labai tinka tokioms prekėms, kurios turi daug techninnių duomenų ar pana&scaron;iai (pavyzdžiui kompiuteris). Jeigu Jūs turite daug prekių, kurios turės tą patį apra&scaron;ymo elementą su skirtingu apra&scaron;ymu, tuomet galite pasinaudoti atributais, kurie atsispindės prekės apra&scaron;ymo specifikacijoje.</p>

                            <p>Papildomai atributai gali būti panaudoti prekių filtravime (jeigu įsigysite specialų prekių filtravimo modulį). Tai labai paranku turint labai daug prekių, nes prekių filtravimas naudoja ir atributus.</p>

                            <p>Atributo pavaizdavimo pavyzdys prekių apra&scaron;yme lange &bdquo;<strong><em><u>Specifikacija</u></em></strong>&ldquo;:</p>

                            <p><img class="img-responsive" alt="produktai opencart" src="{{ url('assets/img/dokumentacija15/produktai-specifikacija.png') }}"/></p>

                            <ul>
                                <li>Duomenys (atributų grupės vardas) &ndash; Žodį &quot;Duomenys&quot; galėsite pakesiti Jums reikiamu žodžiu.</li>
                                <li>I&scaron;matavimai (atributas) &ndash; Prekės apra&scaron;ymo pavadinimas. (pvz.: 100*70*8).</li>
                                <li>Spalva (atributas) Atributo tekstas (pvz.: Raudona).</li>
                                <li>Ir t.t. ..</li>
                            </ul>

                            <h4>Norint į prekės apra&scaron;ymo specifikaciją įtraukti atributus, visų pirma reikia sukurti:</h4>

                            <ul>
                                <li>Atributų grupę</li>
                                <li>Atributą (Priskiriant tam tikrai atributų grupei).</li>
                            </ul>

                            <h4><strong>Atributų grupės sukūrimas:</strong></h4>

                            <ul>
                                <li>Eikite į <strong><em><u>Katalogas</u></em></strong> &ndash; <strong><em><u>Atributai &ndash; Atributų grupės</u></em></strong></li>
                                <li>Spauskite mygtuką <strong><em><u>Pridėti</u></em></strong>.</li>
                            </ul>

                            <p><img class="img-responsive" alt="produktai opencart" src="{{ url('assets/img/dokumentacija15/atributai.png') }}"/></p>

                            <ul>
                                <li><strong>Atributų grupės vardas</strong>: įra&scaron;ykite atributų grupės pavadinimą (pvz.: Duomenys)</li>
                                <li><strong>Rū&scaron;iavimo eili&scaron;kumas:</strong> skaičių, tam kad suru&scaron;iuoti eilės tvarką.</li>
                            </ul>

                            <p>&nbsp;</p>

                            <h4>Atributo pridėjimo langas:</h4>

                            <p><img class="img-responsive" alt="produktai opencart" src="{{ url('assets/img/dokumentacija15/atributas.png') }}"/></p>

                            <ul>
                                <li><strong>Atributas:</strong> įra&scaron;ykite atributą (pvz.: Spalva).</li>
                                <li><strong>Atributo grupė:</strong> parinkite, kuriai atributų grupei priklausys &scaron;is atributas (Spalva).</li>
                                <li><strong>Rū&scaron;iavimo eili&scaron;kumas:</strong> skaičių, tam kad suru&scaron;iuoti eilės tvarką.</li>
                            </ul>

                            <h4>Dabar grįžtame prie prekių/produktų apra&scaron;ymo ir pereina prie lango <strong><em><u>&bdquo;Atributas&ldquo;:</u></em></strong></h4>

                            <p><img class="img-responsive" alt="produktai opencart" src="{{ url('assets/img/dokumentacija15/produktas-atributas.png') }}"/></p>

                            <ul>
                                <li><strong>Atributas:</strong> Pradėkite ra&scaron;yti atributą (pvz.: jau įvestą &quot;Spalva&quot;) ir jums automati&scaron;kai i&scaron;mes sąra&scaron;ą su jau sukūrtais atributais ir atributų grupėmis.</li>
                                <li><strong>Tekstas:</strong> Įra&scaron;ykite norimą tekstą (pav.: Raudona ar bet ką kitą kas atitinką atrubuto pavadinimą).</li>
                            </ul>

                            <h4>Langas &quot;Pasirinkimas&quot;:</h4>

                            <p>&Scaron;is langas Jums suteiks papildomų galimybių apra&scaron;ant prekes.</p>

                            <p><strong><u>1 PAVYZDYS:</u></strong></p>

                            <p><strong><u>Situacija:</u></strong> Jūs prekiaujate drabužiais ir turite prekę su skirtingais dydžias. Kad Jums nereikėtų tos pačios prekės kartoti internetinėje parduotuvėje tik su skirtingais dydžiais Jums &scaron;i funkcija labai pravers.</p>

                            <p><strong>Kaip tai padaryti:</strong></p>

                            <ul>
                                <li>Eikite į http://www.jusuPuslapis.lt/admin/li&gt;</li>
                                <li>Eikite į <strong><em><u>Katalogas</u></em></strong> &ndash; <strong><em><u>Pasirinkimai (Prekės) ARBA Nustatymai</u></em></strong>.</li>
                                <li>Spauskite mygtuką <strong><em><u>Pridėti</u></em></strong>.</li>
                            </ul>

                            <h4><strong>Nustatymų langas:</strong></h4>

                            <p><img class="img-responsive" alt="katalogas opencart" src="{{ url('assets/img/dokumentacija15/katalogas-nustatymai.png') }}"/></p>

                            <ul>
                                <li><strong>Nustatymo pavadinimas:</strong> įra&scaron;ykite reikalingą žodį ar frazę (&scaron;iuo atveju mums reikia, kad klientai galėtų pasirinkti norimą prekės dydį todėl ra&scaron;ome <strong><em><u>Dydis</u></em></strong>).</li>
                                <li><strong>Tipas:</strong> pasirinkite <strong><em><u>Pasirinkti</u></em></strong>, o kitus tipus galėsite i&scaron;bandyti patys vėliau.</li>
                                <li><strong>Rū&scaron;iavimo eili&scaron;kumas:</strong> eilės tavraka, kurios galite ir nepildyti, o atlikti ir užpildyti vėliau jegu Jums tai bus aktualu.</li>
                                <li>Toliau parenkame Nustatymo reik&scaron;mes (pvz: didelis, vidutinis, mažas ir t.t.)</li>
                                <li>Spaudžiame: <strong><em><u>I&scaron;saugoti</u></em></strong>.</li>
                            </ul>

                            <h4>Dabar einame į tą produktą/prekę prie kurios norime nustatyti dydžius</h4>

                            <ul>
                                <li>Eikite į http://www.jusuPuslapis.lt/admin</li>
                                <li>Eikite į <strong><em><u>Katalogas</u></em></strong> &ndash; <strong><em><u>Produktai</u></em></strong>.</li>
                                <li>Pasirinkite produktą ir spauskite <strong><em><u>Taisyti</u></em></strong>, bei eikite į langą <strong><em><u>Pasirinkimas:</u></em></strong></li>
                            </ul>

                            <p><img class="img-responsive" alt="katalogas opencart" src="{{ url('assets/img/dokumentacija15/produktai-pasirinkimas.png') }}"/></p>

                            <ul>
                                <li>Laukelyje pradėkite ra&scaron;yti Nustatymo pavadinimą (&scaron;iuo atveju <strong><em><u>Dydis</u></em></strong>)&nbsp; ir jums i&scaron;mes Jūsų sukonfiguruotą nustatymų reik&scaron;mę <strong><em><u>Dydis</u></em></strong>.</li>
                                <li>Pasirinkite Dydis.</li>
                                <li><strong>Reikalaujama:</strong> TAIP &ndash; tai rei&scaron;kia, kad klientas negalės pirkti &scaron;ios prekės nepasirinkęs vorimo dydžio. NE &ndash; rei&scaron;kia, kad klientas, kad ir nepasirinks norimo dydžio, bet vistiek gales formuoti užsakymą.</li>
                                <li><strong>Pasirinkimo reik&scaron;mė:</strong> automati&scaron;kai jums leis pasirinkti i&scaron; jau sukurtų pasirinkimų reik&scaron;mių (&scaron;iuo atveju Didelis, Vidutinis ir Mažas)</li>
                                <li><strong>Kiekis:</strong> nurodykite kiek turite prekių konkretaus dydžio, kad klientas nenusipirktų daugiau tokio prekės su tokiu dydžiu nei Jūs turite pas save.</li>
                                <li><strong>Sumažinti prekių kiekio likutį po nupirkimo:</strong> Taip arba NE.</li>
                                <li><strong>Kaina:</strong> Jūs turite galimybę pridėti arba sumažinti kainą nuo nustatytos (kurią įra&scaron;ėte lange Duomenys). Taigi jeigu kaina kinta priklausomai nuo dydžio Jūs čia galte tai koreguoti. Jei nieks nekinta palikite langelį tu&scaron;čią. Kad pridėti prie esamos kainos papildomai reikia, kad vir&scaron; kainos būtų + ženklas, o jei atimti tai -.</li>
                                <li><strong>Ta&scaron;kai:</strong> toks pat valdymas kaip ir kainos.</li>
                                <li><strong>Svoris:</strong> toks pat valdymas kaip ir kainos.</li>
                            </ul>

                            <h4>Gavome prie prekės papildomą pasirinkimą, kuris bus pridėtas prie prekės apra&scaron;ymo:</h4>

                            <p><img class="img-responsive" alt="katalogas opencart" src="{{ url('assets/img/dokumentacija15/pasirinkimai.png') }}" style="width:250px" /></p>
                            <hr />
                            <p>www.el-parduotuve.lt - <strong><a href="{{route('home')}}" title="elektroninių parduotuvių kūrimas">elektroninių parduotuvių kūrimas</a></strong>, nemokami SEO patarimai.</p>

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