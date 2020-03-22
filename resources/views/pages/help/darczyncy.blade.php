@extends('layouts.app') @section('title')
<title>Darczyńcy</title>
@endsection @section('content')
<div class="w-100">
    <path-bar path='[{"header":"Jak pomóc","href":"/jak-pomoc"},  {"header":"Darczyńcy","href":"#"}]'></path-bar>
    <help-logo content='Darczyńcy'></help-logo>
    <!--  -->
    <!--  -->
    <!--  -->
    <section class="ds-help-single-help-form">
        <!--  -->
        <href-gallery prefix='/images/help/darczyncy' :content="[
            {img: 'abs bank spółdzielczy', href:'https://www.absbank.pl/bankowosc_elektroniczna,s85.html'},
            {img: 'androimpex', href:'https://androimpex.pl/'},
            {img: 'astor', href:'https://www.astor.com.pl/'},
            {img: 'bahlsen', href:'https://www.thebahlsenfamily.com/pl/'},
            {img: 'cukiernia lenia', href:''},
            {img: 'łysoń park hotel', href:'https://www.parkhotellyson.pl/'},
            {img: 'maspex wadowice', href:'https://maspex.com/'},
            {img: 'madix', href:'https://madix.com.pl/'},
            {img: 'panelstyl', href:'http://panelstyl.pl/index.php'},
            {img: 'pss spolem', href:'https://wadowice.spolem.org.pl/'},
            {img: 'zpc skawa', href:'https://www.skawa.com.pl/pl'},
            {img: 'Dinolandia', href:'http://www.dinolandia.pl/'},
            {img: 'galicjanka wadowice', href:'https://galicjanka.com/'},
            {img: 'inwałd park', href:'http://www.inwaldpark.pl/'},
            {img: 'mini zoo', href:'http://www.agrokucyk.pl/'},
            {img: 'bajka', href:''},
            {img: 'ogrod jana pawla ii', href:'http://www.ogrodjp2.pl/'},
            {img: 'salon mira', href:'https://www.facebook.com/uslugiMira'},
            {img: 'ogrodowa logo', href:'http://www.ogrodowa-wadowice.pl/Aktualnosci-3.html'},
            {img: 'only you', href:'http://www.onlyyou-studio.pl/'},
            {img: 'spektakor logo', href:'https://www.facebook.com/firma.spektator/?fref=nf'},
            {img: 'molo logo1', href:''},
            {img: 'saferna photography', href:'https://www.facebook.com/Saferna.Photography'},
            {img: 'slodycza malowane', href:'http://slodyczamalowane.blogspot.com/'},
            {img: 'czarny gron logo', href:'https://www.czarnygron.pl/'},
            {img: 'fotomix logo', href:'http://www.foto-mix.com.pl/Aktualnosci-2.html'},
            {img: 'paese logo', href:'https://paese.pl/'},
            {img: 'bielenda logo', href:'https://bielenda.pl/'},
            {img: 'inex', href:'http://inex.pl/'},
            {img: 'morawski', href:'https://www.facebook.com/morawskipracownia/'},
            {img: 'podoestetik', href:'https://podo-estetik.pl/index.html'},
            {img: 'muszyna', href:''},
            {img: 'radocza park1', href:'https://www.radoczapark.pl/'},
            {img: 'sport fuel', href:'https://www.sportfuel.pl/'},
            {img: 'indywiduali spa', href:'https://www.facebook.com/IndywidualiSPA.fanpage/info'},
            {img: 'black dragon', href:'http://www.black-dragon.pl/'},
            {img: 'mawashi', href:'https://www.mawashi.pl/'},
            {img: 'pasoa', href:'https://www.facebook.com/PASOA55/?ref=nf'},
            {img: 'u rudej', href:'https://www.facebook.com/Fryzjerstwo-u-Rudej-893702577332928/'},
            {img: 'abrakebabra', href:''},
            {img: 'kwiaciarnia grochal', href:''},
            {img: 'emi sport', href:''},
            {img: 'skarby doliny karpia', href:''},
            {img: 'hotel wadowice', href:''},
            {img: 'steakhouse', href:''},
            {img: 'dura farby', href:''},
            {img: 'chem bud wadowice', href:''},
            {img: 'wycieraczki samochodowe', href:'https://www.dipp.pl/'},
        ]"></href-gallery>
    </section>
</div>
@endsection
