<aside class="sidebar" id="sidebar" data-plugin-sticky data-plugin-options="{'minWidth': 991, 'containerSelector': '.container', 'padding': {'top': 110}}">
    <h4 class="heading-primary"><strong>KATEGORIJOS</strong></h4>
    <ul class="nav nav-list mb-xlg sort-source">
        <li class="@if($active == 'meniuElParduotuveKurimas')active @endif"><a href="{{route('elektronines-parduotuves-kurimas')}}">El-parduotuvės kūrimas</a></li>
        <ul class="secondUL">
            <li class=""><a href="{{route('elektronines-parduotuves-kaina')}}">Kaina</a></li>
            <li class=""><a href="{{route('elektronines-parduotuves-galimybes')}}">Galimybės</a></li>
            <li class=""><a href="{{route('elektronines-parduotuves-dizainas')}}">Dizainai</a></li>
            <li class=""><a href="{{route('elektronines-parduotuves-kurimo-etapai')}}">Kūrimo etapai</a></li>
            <li class=""><a href="{{route('demonstracija')}}">DEMO parduotuvė</a></li>
            <li class=""><a href="{{route('paruostaJournalParduotuve')}}">Įsigyk paruoštą E-parduotuvę</a></li>
            <li class=""><a href="{{route('Moduliai')}}">Papildomi moduliai</a></li>
        </ul>
        <li class="@if($active == 'meniuDokumentacija')active @endif"><a href="{{route('dokumentacija')}}">Dokumentacija</a></li>
        <ul class="secondUL">
            <li class=""><a href="{{route('AprasymaiOC20')}}">Aprašymai</a></li>
            <li class=""><a href="{{route('VideoDokOC20')}}">Video dokumentacija</a></li>
            <li class=""><a href="{{route('dokumentacija15')}}">Dokumentacija e-parduotuvėms kurtoms iki 2015-04-01</a></li>
        </ul>
        <li class="@if($active == 'meniuElParduotuveKurimas')active @endif"><a href="{{route('logotipu-kurimas.list.view')}}">Logotipų kūrimas</a></li>
        <li class="@if($active == 'meniu_SEO-optimizacija')active @endif "><a href="{{route('SEO-optimizacija')}}">SEO Optimizacija</a></li>
        <li class=""><a href="{{route('atlikti-darbai')}}">Atlikti darbai</a></li>
        <li><a href="{{route('kontaktai')}}">Kontaktai</a></li>
    </ul>
</aside>
