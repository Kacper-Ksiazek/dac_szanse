@extends('layouts.app')
@section('title')
    <title>Muzykoterapia</title>
@endsection
@section('content')
<div class="w-100">
    <path-bar path='[{"header":"Działalność","href":"/dzialalnosc"}, {"header":"Zajęcia","href":"/dzialalnosc/zajecia"},{"header":"Muzykoterapia","href":"#"}]'></path-bar>
    <tasks-logo></tasks-logo>
    {{--  --}}
    <section class="ds-single-task-wrapper">
        {{--  --}}
        <h1>Muzykoterapia</h1>
        <p class="ds-single-task">
            Muzyka stosowana jako środek terapeutyczny stwarza możliwość oddziaływania nie tylko na wybrane sfery rozwoju człowieka i obszary jego funkcjonowania, ale oddziałuje na człowieka jako całość – integruje ciało, umysł i psychikę. Muzyka jest jednym z niewerbalnych sposobów wyrażania siebie; daje możliwość odbioru miłych i przyjemnych doznań, może również być źródłem kreatywnych zachowań człowieka. Pomaga w nawiązywaniu kontaktu ze światem, z innymi ludźmi, inspiruje i wspomaga rozwój; przezwycięża smutek i monotonię, daje radość i siłę do pokonania słabości i lęku. W trakcie zajęć muzykoterapeutycznych dzieci mają możność przeżycia radości i uwolnienia się od paraliżującego lęku, czasami bardzo destrukcyjnie wpływającego na ich zachowania.
            <strong>Podstawowe cele muzykoterapii:</strong>
        </p>
        <ul class="ds-single-task">
            <li>Wzbudzanie pożądanych emocji (uczuć, stanów afektywnych, nastrojów) oraz kształtowanie umiejętności nazywania ich i sterowania nimi</li>
            <li>Wzbudzanie gotowości do kontaktu oraz inspirowanie i odpowiednio kierowane rozwijanie prawidłowej międzyludzkiej komunikacji;</li>
            <li>Wzbogacanie osobowości dziecka, głównie poprzez doznania estetyczne, wyrabianie w nim postawy twórczej, pomnażanie  zasobu jego doświadczeń emocjonalnych i intelektualnych</li>
            <li>Wpływanie na stan pobudzenia psychomotorycznego oraz napięcia emocjonalnego i mięśniowego</li>
            <li>Ogólne korzystne wpływanie na stan psychofizycznego samopoczucia</li>
            <li>Wzbogacenie oraz wspomaganie metod diagnostycznych</li>
            <li>Wzbudzanie określonych reakcji fizjologicznych (przede wszystkim wegetatywnych) oraz wpływanie na przemiany biochemicznie zachodzące w ustroju</li>
        </ul>
        <i>Źródło:  www.szkolnictwo.pl</i>
        {{--  --}}
        <single-task-gallery 
        prefix='/images/activities/rehabilitacja/'
        :images='[
            "b_rehabilitacja_kwiecie_1",
            "b_rehabilitacja_kwiecie_2",
            "b_rehabilitacja_kwiecie_3",
            "b_rehabilitacja_kwiecie_4",
            "b_rehabilitacja_kwiecie_5",
            "b_rehabilitacja_kwiecie_6",
            "b_rehabilitacja_kwiecie_7",
            "b_rehabilitacja_kwiecie_8",
            "b_rehabilitacja_kwiecie_9",
            "b_rehabilitacja_kwiecie_10",
            "b_rehabilitacja_kwiecie_11",
            "b_rehabilitacja_kwiecie_12",
            "b_rehabilitacja_kwiecie_13",
            "b_rehabilitacja_kwiecie_14",
            "b_rehabilitacja_kwiecie_15",
            "b_rehabilitacja_kwiecie_16",
            "b_rehabilitacja_kwiecie_17",
            "b_rehabilitacja_kwiecie_18",
            "b_rehabilitacja_kwiecie_19",
            "b_rehabilitacja_kwiecie_20",
            "b_rehabilitacja_kwiecie_21",
            "b_rehabilitacja_kwiecie_22",
        ]'></single-task-gallery>
    </section>
</div>
@endsection
