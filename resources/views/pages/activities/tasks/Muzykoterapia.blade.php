@extends('layouts.app') @section('title')
<title>Muzykoterapia</title>
@endsection @section('content')
<div class="w-100">
    <path-bar path='[{"header":"Działalność","href":"/dzialalnosc"}, {"header":"Zajęcia","href":"/dzialalnosc/zajecia"},{"header":"Muzykoterapia","href":"#"}]'></path-bar>
    <tasks-logo></tasks-logo>
    {{--  --}}
    <section class="ds-single-task-wrapper">
        {{--  --}}
        <h1>Muzykoterapia</h1>
        <!--  -->
        <!--  -->
        <!--  -->
        <p class="ds-single-task b-none mb-5">
            - jest metodą terapii, z której korzystają specjaliści z różnych dziedzin.
            <br /><br />
            Terapia przez muzykę prowadzi przede wszystkim do zmniejszenia napięcia psychofizycznego i relaksacji.
        </p>
        <p class="ds-single-task">
            Muzyka stosowana jako środek terapeutyczny stwarza możliwość oddziaływania nie tylko na wybrane sfery rozwoju człowieka i obszary jego funkcjonowania, ale oddziałuje na
            człowieka jako całość – integruje ciało, umysł i psychikę. Muzyka jest jednym z niewerbalnych sposobów wyrażania siebie; daje możliwość odbioru miłych i przyjemnych
            doznań, może również być źródłem kreatywnych zachowań człowieka. Pomaga w nawiązywaniu kontaktu ze światem, z innymi ludźmi, inspiruje i wspomaga rozwój; przezwycięża
            smutek i monotonię, daje radość i siłę do pokonania słabości i lęku. W trakcie zajęć muzykoterapeutycznych dzieci mają możność przeżycia radości i uwolnienia się od
            paraliżującego lęku, czasami bardzo destrukcyjnie wpływającego na ich zachowania.
            <strong>Podstawowe cele muzykoterapii:</strong>
        </p>
        <!--  -->
        <!--  -->
        <!--  -->
        <ul class="ds-single-task">
            <li>Wzbudzanie pożądanych emocji (uczuć, stanów afektywnych, nastrojów) oraz kształtowanie umiejętności nazywania ich i sterowania nimi</li>
            <li>Wzbudzanie gotowości do kontaktu oraz inspirowanie i odpowiednio kierowane rozwijanie prawidłowej międzyludzkiej komunikacji;</li>
            <li>
                Wzbogacanie osobowości dziecka, głównie poprzez doznania estetyczne, wyrabianie w nim postawy twórczej, pomnażanie zasobu jego doświadczeń emocjonalnych i
                intelektualnych
            </li>
            <li>Wpływanie na stan pobudzenia psychomotorycznego oraz napięcia emocjonalnego i mięśniowego</li>
            <li>Ogólne korzystne wpływanie na stan psychofizycznego samopoczucia</li>
            <li>Wzbogacenie oraz wspomaganie metod diagnostycznych</li>
            <li>Wzbudzanie określonych reakcji fizjologicznych (przede wszystkim wegetatywnych) oraz wpływanie na przemiany biochemicznie zachodzące w ustroju</li>
        </ul>
        <!--  -->
        <!--  -->
        <!--  -->
        <p class="ds-single-task">
            <!--  -->
            <strong>Zajęcia muzyczne grupowe </strong> w Stowarzyszeniu odbywają się w ramach zajęć na świetlicy terpeutyczno-intergracyjnej.
        </p>
        <!--  -->
        <!--  -->
        <!--  -->
        <i>Źródło: <a href="https://www.szkolnictwo.pl/" target="blank">www.szkolnictwo.pl</a></i>
        {{--  --}}
        <gallery
            prefix="/images/activities/muzykoterapia/"
            :images='[
            "b_muzyczne_1",
            "b_muzyczne_2",
            "b_muzyczne_3",
            "b_muzyczne_4",
            "b_muzyczne_5",
            "b_muzyczne_6",
            "b_muzyczne_7",
            "b_muzyczne_8",
            "b_muzyczne_9",
            "b_muzyczne_10",
            "b_muzyczne_11",
            "b_muzyczne_12",
            "b_muzyczne_13",
            "b_muzyczne_14",
            "b_muzyczne_15",
            "b_muzyczne_16",
            "b_muzyczne_17",
            "b_muzyczne_18",
            "b_muzyczne_19",
            "b_muzyczne_20",
            "b_muzyczne_21",
            "b_muzyczne_22",
            "b_muzyczne_23",
            "b_muzyczne_24",
            "b_muzyczne_25",
            "b_muzyczne_26",
            "b_muzyczne_27",
        ]'
        ></gallery>
    </section>
</div>
@endsection
