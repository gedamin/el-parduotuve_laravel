<aside class="sidebar" id="sidebar" data-plugin-sticky data-plugin-options="{'minWidth': 991, 'containerSelector': '.container', 'padding': {'top': 110}}">

    <h4 class="heading-primary"><strong>KATEGORIJOS</strong></h4>

    <ul class="nav nav-list mb-xlg sort-source">
        <li class="@if($active == 'meniuElParduotuveKurimas')active @endif"><a href="{{route('logotipu-kurimas.list.view')}}">Logotipų kūrimas</a></li>
        <li class="@if($active == 'meniu_SEO-optimizacija')active @endif "><a href="{{route('SEO-optimizacija')}}">SEO blogas</a></li>
        <li class=""><a href="{{route('atlikti-darbai')}}">Atlikti darbai</a></li>
        <li><a href="{{route('kontaktai')}}">Kontaktai</a></li>

    </ul>

</aside>