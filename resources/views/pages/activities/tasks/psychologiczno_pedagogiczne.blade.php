@extends('layouts.app')
@section('title')
    <title>Zajęcia psychologiczno-pedaogiczno-logopedyczne</title>
@endsection
@section('content')
<div class="w-100">
    <path-bar path='[{"header":"Działalność","href":"/dzialalnosc"}, {"header":"Zajęcia","href":"/dzialalnosc/zajecia"},{"header":"Psychologiczno Pedaogiczno Logopedyczne","href":"#"}]'></path-bar>
    <tasks-logo></tasks-logo>
    {{--  --}}
    <section class="ds-single-task-wrapper">
        {{--  --}}
        <h1>Zajęcia psychologiczno-pedaogiczno-logopedyczne:</h1>
        <p class="ds-single-task">
            Ponieważ warunkiem skutecznej i efektywnej terapii jest jej kompleksowość, Stowarzyszenie dba o to, by cały czas uzupełniać bazę potrzebnych i atrakcyjnych dla dzieci zajęć.Ogromnie ważna jest praca z psychologiem, pedagogiem, logopedą. Istotą pracy z psychologiem jest udzielanie wsparcia psychicznego dziecku o obniżonej sprawności umysłowej. Zajęcia w formie indywidualnych spotkań prowadzi doświadczony psycholog. <strong>Mają one na celu:</strong>
        </p>
        <ul class="ds-single-task">
            <li>rozpoznawanie możliwości psychofizycznych i potrzeb edukacyjnych dzieci niepełnosprawnych</li>
            <li>prowadzenie obserwacji w zakresie całościowo rozumianego funkcjonowania dzieci</li>
            <li>opracowanie i realizacja indywidualnych  planów terapeutyczno-rozwojowych</li>
            <li>prowadzenie zajęć terapeutycznych, rewalidacyjnych, - propagowanie nowych metod pracy</li>
            <li>wspomaganie dzieci ze specyficznymi potrzebami edukacyjnymi podczas zajęć grupowych</li>
        </ul>
        {{--  --}}
        <h1 class='mt-5 pt-5'>Zajęcia pedagogiczne</h1>
        <p class="ds-single-task">
            Zajęcia pedagogiczne z dzieckiem prowadzi pedagog specjalny. Mają one formę rewalidacyjno-wychowawczą i są adresowane do dzieci o obniżonej sprawności umysłowej. <strong>Obejmują takie obszary rozwoju dziecka jak:</strong>
        </p>
        <ul class="ds-single-task">
            <li>nauka komunikowania się z otoczeniem</li>
            <li>rozwijanie sprawności ruchowych i psychoruchowych (duża i mała motoryka)</li>
            <li>kształtowanie orientacji przestrzennej oraz w schemacie własnego ciała</li>
            <li>umożliwienie osiągnięcia optymalnej samodzielności w podstawowych sferach życia codziennego</li>
            <li>rozwój zainteresowania otoczeniem</li>
            <li>nauka życia  w grupie</li>
        </ul>
        <p class="ds-single-task">
            Pedagog opracowuje indywidualny program pracy, dostosowany do możliwości i potrzeb dziecka. Takie działanie zapewnia podopiecznemu osiągnięcie możliwie najwyższego poziomu rozwoju, a także rozwijanie jego naturalnych umiejętności i pasji. Zajęcia pedagogiczne mają formę spotkań indywidualnych lub grupowych. Pedagodzy wykorzystują różnorodne metody pracy z dziećmi niepełnosprawnymi, m. in. Metodę Ruchu Rozwijającego Weroniki Sherborne, Metodę Dobrego Startu, Poranny Krąg, arteterapię.
        </p>
        {{--  --}}
        <h1 class='mt-5 pt-5'>Infoterapia</h1>
        <p class="ds-single-task">
            Dodatkowym elementem terapii pedagogicznej jest infoterapia. Terapia informacyjna jest prowadzona z wykorzystaniem komputera wyposażonego w specjalną klawiaturę edukacyjną oraz multimedialne programy edukacyjne. <strong>Główne cele infoterapii to:</strong>
        </p>
        <ul class="ds-single-task">
            <li>kształtowanie umiejętności percepcyjno-motorycznych: ćwiczenie umiejętności posługiwania się myszką w różnych grach edukacyjnych, programach rysunkowych</li>
            <li>kształtowanie umiejętności percepcyjnych słuchowych oraz wzrokowych: kształtowanie oraz utrwalanie prawidłowej wymowy, wspomaganie procesu uczenia się czytania, koordynowanie zaburzeń głosu, terapia w zakresie szczególnych trudności w pisaniu i czytaniu</li>
            <li>kształtowanie umiejętności intelektualnych:  zdobywanie wiedzy o otaczającym świecie, pomoc w rozwijaniu różnych uzdolnień, eliminacja zaburzeń w rozwoju intelektualnym, wspomaganie w procesie uczenia się, dzięki specjalnym programom, np. wspomagającymi naukę czytania różnymi metodami oraz rozwijanie umiejętności rozumienia tekstów, schematów, rysunków</li>
            <li>działanie o charakterze psychoterapeutycznym: ćwiczenie koncentracji uwagi, działanie uspakajające oraz aktywizujące do nauki, zachęcanie do nauki oraz do rozszerzenia swojej wiedzy, rozwijanie odpowiednich postaw oraz przeciwdziałanie trudnościom w nauce</li>
            <li>Dzieci dzięki programom edukacyjnym uczą się poznawać otaczający świat, zdobywają wiedzę o życiu codziennym, poznają tajniki ortografii, uczą się liczyć i odnajdywać trudne hasła – a także wykorzystywać szeroko dziś dostępne techniki cyfrowe w wartościowy sposób</li>
        </ul>
        {{--  --}}
        <single-task-gallery 
        prefix='/images/activities/psychologiczno-pedaogiczno-logopedyczne/'
        :images='[
            "b_parzadka_stycze_1",
            "b_parzadka_stycze_2",
            "b_parzadka_stycze_3",
            "b_parzadka_stycze_4",
            "b_parzadka_stycze_5",
            "b_parzadka_stycze_6",
            "b_parzadka_stycze_7",
            "b_parzadka_stycze_8",
            "b_parzadka_stycze_9",
            "b_parzadka_stycze_10",
            "b_parzadka_stycze_11",
            "b_parzadka_stycze_12",
            "b_parzadka_stycze_13",
            "b_parzadka_stycze_14",
            "b_parzadka_stycze_15",
            "b_parzadka_stycze_16",
            "b_parzadka_stycze_17",
            "b_parzadka_stycze_18",
            "b_parzadka_stycze_19",
            "b_parzadka_stycze_20",
            "b_parzadka_stycze_21",
            "b_parzadka_stycze_22",
            "b_parzadka_stycze_23",
            "b_parzadka_stycze_24",
            "b_parzadka_stycze_25",
        ]'></single-task-gallery>
    </section>
</div>
@endsection
