@extends('layouts.app') @section('title')
<title>Współprace</title>
@endsection @section('content')
<div class="w-100">
    <help-logo content='Współprace' selected='wspolpraca'></help-logo>
    <!--  -->
    <!--  -->
    <!--  -->
    <section class="ds-help-single-help-form hrefs">
        <!--  -->
        <href-gallery prefix='/images/help/wspolprace' :content="[
            {image:'1.png',description:'Regionalny Portal Informacyjny, który wydawany jest przez Wydawnictwo Prasa Beskidzka', link:'https://beskidzka24.pl/'},
            {image:'2.png',description:'Serwis informacyjny powiatu wadowickiego. Najświeższe wiadomości, relacje i opis wydarzeń.', link:'http://powiatlive.pl/'},
            {image:'3.png',description:'Portal informacyjny lokalnej społeczności, przedstawia najświeższe wydarzenia z Wadowic i okolic', link:'https://wadowiceonline.pl/'},
            {image:'4.png',description:'Centrum kulturalne Wadowic, które powstało w mieście w 2000 roku z połączenia Wadowickiego Domy Kultury oraz Zbiorów Historycznych Ziemi Wadowickiej', link:'https://wck.wadowice.pl/'},
            {image:'5.png',description:'Centrum Kultury i Wypoczynku mieszczące się w Andrychowie. To miejsce organizacji imprez kulturalnych, wystaw oraz wernisaży i spektakli', link:'http://andrychow.eu/'},
            {image:'6.png',description:'Centrum Kultury, Sportu i Turystyki w Kalwarii Zebrzydowskiej. To centrum wydarzeń kulturalnych i sportowych, organizator imprez cyklicznych, wystaw i wernisaży', link:'http://ckstkalwaria.com/nowa/'},
            {image:'7.png',description:'Portal Informacyjny, telewizja nadaje od 2011 roku, w sieciach kablowych oraz online', link:'https://www.tvk.pl/'},
            {image:'8.png',description:'Blog parentingowo-lifestyl’owy, prowadzony przez kobietę, matkę i żonę łączącą w swej osobie wszystkie te role. Na blogu publikuje różnorodne artykuły inspirujące do samorozwoju na każdym etapie życia', link:'http://mamatezkobieta.pl/'},
            {image:'9.png',description:'Największy, codziennie aktualizowany serwis o kampaniach społecznych. Dzięki najświeższym informacjom otrzymywany przez serwis, liczba opisywanych kampanii codziennie rośnie', link:'https://kampaniespoleczne.pl/'},
            {image:'10.png',description:'Niezależny portal informacyjny przedstawiający najświeższe wydarzenia z regionu', link:'http://www.mamnewsa.pl/'},
            {image:'11.png',description:'Celem Spółdzielni jest przywrócenie (reintegracja) na rynek pracy, poprzez prowadzenie wspólnego przedsiębiorstwa w oparciu o osobistą pracę członków, osób zagrożonych wykluczeniem społecznym, osób których kwalifikacje zawodowe mogą być niewystarczające dla samodzielnego poruszania się po rynku pracy oraz umożliwienie osobom bezrobotnym aktywizację zawodową.', link:'http://spoldzielniaamicus.pl/'},
        ]"></href-gallery>
    </section>
</div>
@endsection
