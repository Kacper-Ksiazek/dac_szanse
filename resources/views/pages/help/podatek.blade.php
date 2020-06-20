@extends('layouts.app') @section('title')
<title>Przekaż 1% podatku</title>
@endsection @section('content')
<div class="w-100">
    <help-logo content='Przekaż 1% podatku' selected='przekaz-1%-podatku'></help-logo>
    <!--  -->
    <!--  -->
    <!--  -->
    <section class="ds-help-single-help-form tax">
        <!--  -->
        <div class="ds-redirect-tax-wrapper">
            <div class="info">
                <h1>
                    Pomaganie jest proste - wystarczy jeden wpis w Twoim zeznaniu podatkowym PIT !
                </h1>
                <p>
                    Drodzy Państwo,
                    <br>
                    Dzięki przekazaniu <strong>1 % podatku</strong> przez osoby wielkiegoserca, nasze dzieci mogą uczestniczyć w zajęciach, które są dla nichjednocześnie zabawą, ale i ciężką pracą terapeutyczną. 
                </p>
                <p class='mt-4'>
                    <strong>1 % podatku</strong> spływający od Podatników umożliwia nam prowadzenia działalności na tak szeroką skalę. Potrzebujących dzieci w naszym otoczeniu jest coraz więcej.
                    Na naszych oczach stają się one : bardziej samodzielne, zaczynają stawiać pierwsze kroki, mówić pierwsze słowa.
                    Dzięki specjalistycznym zajęciom mają one szanse żyć tak jak ich zdrowi rówieśnicy. 
                    Uśmiech naszych pociech jest dla nas jedyną gwarancją sukcesu.
                </p>
                <p class='mt-4'>
                    Aby okazać wsparcie, wystarczy w zeznaniu PIT wpisać
                    <strong>numer KRS Stowarzyszenia- 0000146813</strong>
                </p>
                <img src="/images/help/podatek/log.jpg" alt="" class="tax-log">
            </div>
            <div class="img"></div>
        </div>

        <div class="ds-tax-download">
            <h1>Pamiętaj - Ciebie to nic nie kosztuje.</h1>
            <i>
                Do podarowania 1 % zachęcamy również Podatników, którzy są Emerytami - dziadków, babcie i innych znajomych. Nie muszą oni składać zeznania podatkowego, tylko wypełnić krótki druk PIT-OP i złożyć go w Urzędzie Skarbowym. 
            </i>
            <div class="download-item">
                <strong>Program do rozliczeń PIT- TaxMachine PIT 2019/2020</strong>
                <a href="https://ftpa.pl/program-pity/program-pit.html" target='_blank'>Wyswietl stronę producenta</a>
                <a href="/files/download-pit" class='download'><i class="fa fa-download"></i></a>
            </div>
        </div>
    </section>
</div>
@endsection
