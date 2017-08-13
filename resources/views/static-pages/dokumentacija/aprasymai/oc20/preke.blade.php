<!DOCTYPE html>
<html xmlns:fb="http://www.w3.org/1999/xhtml">
<head>
    <?php $active = 'meniuDokumentacija';?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kaip pridėti prekę Opencart</title>
    <meta content="Kaip pridėti prekę Opencart" property="og:title"/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <meta name="description" content="Kaip pridėti prekę Opencart">
    <meta content="Kaip pridėti prekę Opencart" property="og:description"/>
    <meta property="og:type" content="website"/>
    <meta content="{{ route('PrekeOC20') }}" property="og:url"/>
    <meta content="{{ url('assets/img/misc/logo.png') }}" property="og:image"/>
    <link rel="canonical" href="{{ route('PrekeOC20') }}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="author" content="Gediminas">
    <!-- Twiter-->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@elparduotuve">
    <meta name="twitter:creator" content="@elparduotuve">
    <meta name="twitter:title" content="Kaip pridėti prekę Opencart">

    <meta name="twitter:description" content="Kaip pridėti prekę Opencart">

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
                            class="active"><a itemprop="item" href="{{ route('PrekeOC20') }}"><span itemprop="name">Kaip pridėti prekę?</span></a>
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
                                <h3>Kaip pridėti prekę?</h3>
                            </div>

                            <ul>
                                <li>Eikite į http://www.jusuPuslapis.lt/admin</li>
                                <li>Eikite į <strong><em><u>Katalogas</u></em></strong> &ndash; <strong><em><u>Produktai</u></em></strong>.</li>
                                <li>Spauskite mygtuką <strong><em><u>Pridėti</u></em></strong>.</li>
                            </ul>

                            <p><img class="img-responsive" alt="produktai opencart" src="{{ url('assets/img/dokumentacija/produktai.png') }}" /></p>
                            <p>&nbsp;</p>
                            <h4>Opencart internetinės parduotuvės prekės lentelė <strong>&quot;Bendrieji&quot;</strong>:</h4>

                            <p><img class="img-responsive" alt="produktai opencart" src="{{ url('assets/img/dokumentacija/produktai-bendrieji.png') }}" /></p>

                            <ul>
                                <li><strong>Prekės pavadinimas:</strong> Įra&scaron;ykite prekės pavadinimą</li>
                                <li><strong>Meta žymos apra&scaron;ymas (angl. meta description):</strong> žr. Kategorijos apra&scaron;ymą.</li>
                                <li><strong>Meta žymos raktažodžiai (angl. meta kaywords):</strong> žr. Kategorijos apra&scaron;ymą.</li>
                                <li><strong>Apra&scaron;ymas:</strong> Detalus prekės ar prekės apra&scaron;ymas, patartina kuo detaliau ir daugiau, nes jei pirkėju bus neai&scaron;ku jis gali pirkti pas jūsų konkurentus, be to detalus apra&scaron;ymas padės i&scaron;kelti į auk&scaron;tesnę vietą google.</li>
                                <li><strong>Prekės žymos:</strong> pagrindiniai produkto raktažodžiai. Galite palikti ir tu&scaron;čią, o jei turite SEO generatorių, tuomet jis žymas automati&scaron;kai sugeneruos.</li>
                            </ul>
                            <p>&nbsp;</p>
                            <h4>Opencart internetinės parduotuvės prekės lentelė <strong>&quot;Duomenys&quot;:</strong></h4>

                            <p><img class="img-responsive" alt="prekės duomenys opencart" src="{{ url('assets/img/dokumentacija/produktai-duomenys.png') }}" /></p>

                            <ul>
                                <li><strong>Nuotrauka:</strong> žr. Kategorijos apra&scaron;ymą.</li>
                                <li><strong>Prekės kodas:</strong> Įra&scaron;omas prekės kodas, kuris matomas tiek Jums, kaip parduotuvės administratoriui, tiek parduotuvės lankytojams.</li>
                                <li><strong>SKU, UPC, EAN, JAN, ISBN, MPN, Vietovė:</strong> &Scaron;iuos langelius galite palikti tu&scaron;čius arba įveskite reikamus duomenis pagal poreikį.</li>
                                <li><strong>Kaina:</strong> įra&scaron;oma prekės kaina</li>
                                <li><strong>Mokesčių klasė:</strong> Esant poreikiui galima priskirti reikiamus mokesčius. Pavyzdžiui PVM. Sistema automati&scaron;kai pridėtų PVM procentą prie įvestos kainos ir tuomet jūsų klientai elektroninėje parduotuvėje matys dvi kainas: vieną be PVM, o kitą su PVM.</li>
                                <li><strong>Kiekis:</strong> Para&scaron;ykite kiek tokių prekių turite sandėlyje ir jums &scaron;i internetinė parduotuvė automati&scaron;kai skaičiuos jūsų prekių likutį. Tačiau pasitikrinkite ar nustatymuose pažymėta, kad likutis bus sumažintas po prekės nupirkimo.</li>
                                <li><strong>Minimalus kiekis:</strong> Galite nustatyti minimalų prekių užsakymo kiekį.</li>
                                <li><strong>Sumažinti prekių kiekio likutį po nupirkimo:</strong> pasirinkite TAIP arba NE.</li>
                                <li><strong>Neturimos prekės būsena:</strong> Pasirinkite būseną kuri bus rodoma, kai prekės nėra. Tai yra jeigu Jūs nustatėte, kad po nupirktos prekės prekių likutis bus mažinamas, tuomet kaip prekių likutis bus lygus nuliui TUOMET pasikeis į Jūsų pasirinktą būseną. Paprastai parenkama būsena &bdquo;Laikinai nėra&ldquo;.</li>
                                <li><strong>Ar reikalingas pristatymas:</strong> Būtinai nurodykite ar bus reikalingas prekės pristatymas (pa&scaron;tu ir pan.). O jeigu prekiausite tokiomis prekėmis kaip elektroninės knygos ir pana&scaron;iai tuomet žymėkite NE, nes tokias prekes sistema leis klientams atsisiųsti i&scaron; &scaron;ios internetinės parduotuvės.</li>
                                <li><strong>Domeno URL plėtinys: </strong> žr. Kategorijos apra&scaron;ymą (galite palikti ir tu&scaron;čią).</li>
                                <li><strong>Pasirodymo data:</strong> Galite nustatyti datą, kada &scaron;i prekė bus rodoma Jūsų internetinėje parduotuvėje. Nustačius rytdienos datą, tuomet &scaron;iandien jos klientai nematys parduotuvėje, o prekė automati&scaron;kai įsijuks (aktyvuosis) Jūsų nustatytu laiku.</li>
                                <li><strong>I&scaron;matavimai (I x P x A):</strong> Jeigu Jūsų prekė turi i&scaron;matavimus, tuomet galite juos suvesti čia. &Scaron;ios langelius pildyti tik tuomet jeigu tai aktualu. Pavyzdžiu kai prekių pristatymo kaina priklauso nuo pakuotės dydžio, tuomet &scaron;i informacija ir bus aktuali.</li>
                                <li><strong>Ilgio vienetas:</strong> pasirinkite ilgio vienetą.</li>
                                <li><strong>Svoris:</strong> Įveskite prekės svorį. Atkreipiu dėmesį, jeigu Jūs pasirinksite prekių siuntimo apmokestinimą pagal svorį, tuomet atidžiai ir taisyklingai įra&scaron;ykite prekės svorį. Sistema automati&scaron;kai suskaičiuos visą pirkėjų svorį ir pagal Jūsų nustatytus tarifus automati&scaron;kai priskirs kainą.</li>
                                <li><strong>Būsena:</strong> norint aktyvuoti pasirinkite <em>Aktyvuotą</em>.</li>
                                <li><strong>Rikiavimo eili&scaron;kumas:</strong> čia nustatomas prekių rikiavimo eili&scaron;kumas kategorijoje.</li>
                            </ul>

                            <hr />
                            <p>www.el-parduotuve.lt - <strong><a href="{{route('home')}}" title="elektroninių parduotuvių kūrimas">elektroninių parduotuvių kūrimas</a></strong> ir nemokami SEO patarimai.</p>

                            <hr />
                            <p>&nbsp;</p>

                            <h4>Opencart internetinės parduotuvės prekių lentelė <strong>Nuorodos:</strong></h4>

                            <p><img class="img-responsive" alt="produktai opencart" src="{{ url('assets/img/dokumentacija/produktai-nuorodos.png') }}" /></p>

                            <ul>
                                <li><strong>Gamintojas:</strong> jeigu jau suvedėte gamintojus (<strong><em><u>Katalogas &ndash; Gamintojai</u></em></strong>), tuomet galite pasirinkti prekės gamintoją ir priskirti &scaron;iai prekei. Priskyrus gamintoją prie prekės gamintojas (jo pavadinimas) atsispindės prekės apra&scaron;yme, taip pat klientai galės rū&scaron;iuoti prekes pagal gamintoją.</li>
                                <li><strong>Kategorijos:</strong> priskyrikite prekę norimai kategorijai arba kategorijoms.</li>
                                <li><strong>Filtrai:</strong> esant poreikiui priskyrikite norimą filtro elementą, tačiau prie&scaron; tai turite parengti filtrų sąra&scaron;ą (Katalogas &ndash; Filtrai).</li>
                                <li><strong>Parduotuvės:</strong> palikite Numatytoji pasirinktis.</li>
                                <li><strong>Parsisiuntimai:</strong> čia aktualu tiems kas pardavinės elektronines knygas ar pana&scaron;iai. Jeigu prekė yra kažkoks failas tuome čia yra ta vieta kur reikia pažimėti t.y. susieti prekę su parduodamu failu (failai įkeliami: <strong><em><u>Katalogas &ndash; Siuntiniai (failu)).</u></em></strong></li>
                                <li><strong>Susijusios prekės:</strong> galite prie prekės pridėti ir susijusias t.y. pana&scaron;ias prekes, kad klientai galėtų lengviau atrasti norimą produktą. Čia tiesiog pradėkite ra&scaron;yti prekę ir jums sistema automati&scaron;kai i&scaron;mes jau suvestų prekių sąra&scaron;ą.</li>
                            </ul>
                            <p>&nbsp;</p>
                            <h4>Lentelė Atributai (atributų/specifikacijos įterpimas)</h4>

                            <p>Kas yra atributas? Atributas &ndash; tai vaizdus, lentelės pavidalo prekės apra&scaron;ymo būdas. Labai tinka tokioms prekėms, kurios turi daug techninių duomenų ar pana&scaron;iai (pavyzdžiui kompiuteris). Jeigu Jūs turite daug prekių, kurios turės tą patį apra&scaron;ymo elementą su skirtingai duomenimis, tuomet galite pasinaudoti atributais, kurie atsispindės prekės apra&scaron;ymo specifikacijoje.</p>

                            <p>Papildomai atributai gali būti panaudoti prekių filtravime (jeigu įsigysite specialų prekių filtravimo modulį). Tai labai paranku turint labai daug prekių, nes prekių filtravimas naudoja ir atributus.</p>

                            <p>Atributo pavaizdavimo pavyzdys prekių apra&scaron;yme lange &bdquo;<strong><em><u>Specifikacija</u></em></strong>&ldquo;:</p>

                            <p><img class="img-responsive" alt="produktai opencart" src="{{ url('assets/img/dokumentacija/produktai-specifikacija.png') }}"/></p>

                            <ul>
                                <li>Techniniai duomenys (atributų grupės vardas) &ndash; Žodį &quot;Techniniai duomenys&quot; galėsite pakesiti Jums reikiamu žodžiu.</li>
                                <li>Dažnis (atributas) &ndash; atributo reik&scaron;mė (pvz.: 100mhz).</li>
                                <li>Rai&scaron;ka (atributas) &ndash; atributo reik&scaron;mė (pvz.: 50:000).</li>
                                <li>Ir t.t. ..</li>
                            </ul>
                            <p>&nbsp;</p>
                            <h4>Norint į prekės apra&scaron;ymo specifikaciją įtraukti atributus, visų pirma reikia sukurti:</h4>

                            <ul>
                                <li>Atributų grupę</li>
                                <li>Atributą (Priskiriant tam tikrai atributų grupei).</li>
                            </ul>
                            <p>&nbsp;</p>
                            <h4><strong>Atributų grupės sukūrimas:</strong></h4>

                            <ul>
                                <li>Eikite į <strong><em><u>Katalogas</u></em></strong> &ndash; <strong><em><u>Atributai &ndash; Atributų grupės</u></em></strong></li>
                                <li>Spauskite mygtuką <strong><em><u>Pridėti</u></em></strong>.</li>
                            </ul>

                            <p><img class="img-responsive" alt="produktai opencart" src="{{ url('assets/img/dokumentacija/atributai.png') }}" /></p>

                            <ul>
                                <li><strong>Atributų grupės vardas</strong>: įra&scaron;ykite atributų grupės pavadinimą (pvz.: Techniniai duomenys)</li>
                                <li><strong>Rikiavimo eili&scaron;kumas:</strong> skaičių, tam kad suru&scaron;iuoti eilės tvarką.</li>
                            </ul>

                            <p>&nbsp;</p>

                            <h4>Atributo pridėjimo lentelė:</h4>

                            <p><img class="img-responsive" alt="produktai opencart" src="{{ url('assets/img/dokumentacija/atributas.png') }}" /></p>

                            <ul>
                                <li><strong>Atributas:</strong> įra&scaron;ykite atributą (pvz.: Dažnis).</li>
                                <li><strong>Atributo grupė:</strong> parinkite, kuriai atributų grupei priklausys &scaron;is atributas (Dažnis).</li>
                                <li><strong>Rikiavimo eili&scaron;kumas:</strong> skaičių, tam kad suru&scaron;iuoti eilės tvarką.</li>
                            </ul>
                            <p>&nbsp;</p>
                            <h4>Dabar grįžtame prie prekių redagavimo ir einame į <strong><em><u>&bdquo;Atributas&ldquo;:</u></em></strong></h4>

                            <p><img class="img-responsive" alt="produktai opencart" src="{{ url('assets/img/dokumentacija/produktas-atributas.png') }}" /></p>

                            <ul>
                                <li><strong>Atributas:</strong> Pradėkite ra&scaron;yti atributą (pvz.: jau įvestą &quot;Dažnis&quot;) ir jums automati&scaron;kai i&scaron;mes sąra&scaron;ą su jau sukūrtais atributais ir atributų grupėmis.</li>
                                <li><strong>Tekstas:</strong> Įra&scaron;ykite norimą tekstą (pav.: Raudona ar bet ką kitą kas atitinką atrubuto pavadinimą).</li>
                            </ul>
                            <p>&nbsp;</p>
                            <h4>Lentelė &quot;Pasirinkimas&quot;:</h4>

                            <p>&Scaron;is langas Jums suteiks papildomų galimybių suteikiant prekei reikiamus pasirinkimus.</p>

                            <p><strong><u>1 PAVYZDYS:</u></strong></p>

                            <p><strong><u>Situacija:</u></strong> Jūs prekiaujate drabužiais ir turite prekę su skirtingomis spalvomis. Kad Jums nereikėtų tos pačios prekės kartoti internetinėje parduotuvėje tik su skirtingomis spalvomis Jums &scaron;i funkcija labai pravers.</p>

                            <p><strong>Kaip tai padaryti:</strong></p>

                            <ul>
                                <li>Eikite į http://www.jusuPuslapis.lt/admin/li&gt;</li>
                                <li>Eikite į <strong><em><u>Katalogas</u></em></strong> &ndash; <strong><em><u>Pasirinkimai</u></em></strong>.</li>
                                <li>Spauskite mygtuką <strong><em><u>Pridėti</u></em></strong>.</li>
                            </ul>
                            <p>&nbsp;</p>
                            <h4><strong>Pasirinkimų lentelė:</strong></h4>

                            <p><img class="img-responsive" alt="katalogas opencart" src="{{ url('assets/img/dokumentacija/katalogas-nustatymai.png') }}" /></p>

                            <ul>
                                <li><strong>Pasirinkimo pavadinimas:</strong> įra&scaron;ykite reikalingą žodį ar frazę (&scaron;iuo atveju mums reikia, kad klientai galėtų pasirinkti norimą prekės dydį todėl ra&scaron;ome <strong><em><u>Pasirinkti</u></em></strong>).</li>
                                <li><strong>Tipas:</strong> pasirinkite <strong><em><u>Pasirinkimo laukas</u></em></strong>, o kitus tipus galėsite i&scaron;bandyti patys vėliau.</li>
                                <li><strong>Rikiavimo eili&scaron;kumas:</strong> eilės tavraka, kurios galite ir nepildyti, o atlikti ir užpildyti vėliau jegu Jums tai bus aktualu.</li>
                                <li>Toliau parenkame Pasirinkimo reik&scaron;mes (pvz: raudona, mėlyna, žalia ir t.t.)</li>
                                <li>Spaudžiame: <strong><em><u>I&scaron;saugoti</u></em></strong>.</li>
                            </ul>
                            <p>&nbsp;</p>
                            <h4>Dabar einame į tą prekę prie kurios norime nustatyti prekės spalvas</h4>

                            <ul>
                                <li>Eikite į http://www.jusuPuslapis.lt/admin</li>
                                <li>Eikite į <strong><em><u>Katalogas</u></em></strong> &ndash; <strong><em><u>Produktai</u></em></strong>.</li>
                                <li>Pasirinkite produktą ir spauskite <strong><em><u>Redaguoti</u></em></strong>, bei eikite į langą <strong><em><u>Pasirinkimai:</u></em></strong></li>
                            </ul>

                            <p><img class="img-responsive" alt="katalogas opencart" src="{{ url('assets/img/dokumentacija/produktai-pasirinkimas.png') }}" /></p>

                            <ul>
                                <li>Laukelyje pradėkite ra&scaron;yti Pasirinkimo pavadinimą (&scaron;iuo atveju <strong><em><u>Pasirinkti</u></em></strong>)&nbsp; ir jums i&scaron;mes Jūsų sukonfiguruotą nustatymų reik&scaron;mę <strong><em><u>Pasirinkti</u></em></strong>.</li>
                                <li>Pasirinkite Pasirinkti.</li>
                                <li><strong>Reikalaujama:</strong> TAIP &ndash; tai rei&scaron;kia, kad klientas negalės pirkti &scaron;ios prekės nepasirinkęs norimos spalvos. NE &ndash; rei&scaron;kia, kad klientas, kad ir nepasirinks norimos spalvos, bet vistiek gales formuoti užsakymą.</li>
                                <li><strong>Pasirinkimo reik&scaron;mė:</strong> automati&scaron;kai jums leis pasirinkti i&scaron; jau sukurtų pasirinkimų reik&scaron;mių (&scaron;iuo atveju raudonas, mėlynas, žalias)</li>
                                <li><strong>Kiekis:</strong> nurodykite kiek turite prekių konkreęios spalvos, kad klientas nenusipirktų daugiau tokio prekės su tokia pačia spalva nei Jūs turite pas save.</li>
                                <li><strong>Sumažinti prekių kiekio likutį po nupirkimo:</strong> Taip arba NE.</li>
                                <li><strong>Kaina:</strong> Jūs turite galimybę pridėti arba sumažinti kainą nuo nustatytos (kurią įra&scaron;ėte lange Duomenys). Taigi jeigu kaina kinta priklausomai nuo spalvos Jūs čia galte tai koreguoti. Jei nieks nekinta palikite langelį tu&scaron;čią. Kad pridėti prie esamos kainos papildomai reikia, kad vir&scaron; kainos būtų + ženklas, o jei atimti tai -.</li>
                                <li><strong>Ta&scaron;kai:</strong> toks pat valdymas kaip ir kainos.</li>
                                <li><strong>Svoris:</strong> toks pat valdymas kaip ir kainos.</li>
                            </ul>
                            <p>&nbsp;</p>
                            <h4>Gavome prie prekės papildomą pasirinkimą, kuris bus pridėtas prie prekės duomenų.</h4>

                            <p><img class="img-responsive" alt="katalogas opencart" src="{{ url('assets/img/dokumentacija/pasirinkimai.png') }}"/></p>

                            <hr />
                            <p>www.el-parduotuve.lt - <strong><a href="http://www.el-parduotuve.lt/" title="elektroninių parduotuvių kūrimas">elektroninių parduotuvių kūrimas</a></strong>.</p>
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