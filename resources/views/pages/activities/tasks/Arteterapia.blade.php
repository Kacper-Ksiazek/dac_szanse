@extends('layouts.app')
@section('title')
    <title>Arteterapia</title>
@endsection
@section('content')
<div class="w-100">
    <path-bar path='[{"header":"Działalność","href":"/dzialalnosc"}, {"header":"Zajęcia","href":"/dzialalnosc/zajecia"},{"header":"Arteterapia","href":"#"}]'></path-bar>
    <tasks-logo></tasks-logo>
    {{--  --}}
    <section class="ds-single-task-wrapper">
        {{--  --}}
        <h1>Arteterapia</h1>
        <p class="ds-single-task">
            Arteterapia to – w najbardziej podstawowym wymiarze – "terapia przez sztukę". Nazywana jest także "terapią przez twórczość" lub "twórczą terapia". Polega nie tylko na wykorzystaniu w procesie terapeutycznym różnorodnych technik plastycznych, ale również – w szerszym znaczeniu – wykorzystuje muzykę, plastykę, choreografię, teatr, taniec, poezję, prozę, baśń...
            <br><br>
            Arteterapia posiada walory relaksacyjne, odprężające i stymulacyjne, ponieważ rozbudza pozytywne emocje i dodatnio wpływa na samopoczucie. Staje więc ona otworem nie tylko dla dzieci i młodzieży z niepełnosprawnością, ale również dla dzieci obciążonych na co dzień nauką, rehabilitacją i ciągłą pracą nad podnoszeniem jakości swojego funkcjonowania.
            <br>
            <strong>Do głównych zadań wynikających z arteterapii należą:</strong>
        </p>
        <ul class="ds-single-task">
            <li>diagnoza pozwalająca rozpoznać potrzeby emocjonalne, poznawczo-rozwojowe oraz możliwości manualne u dzieci</li>
            <li>terapia polegająca na wzroście zdolności percepcyjno-poznawczych, socjalizacji, uzewnętrznianiu przeżyć i doznań, usprawnianiu możliwości ruchowych</li>
            <li>relaksacja pozwalająca na odreagowanie wewnętrznych napięć, niepowodzeń, frustracji i agresji</li>
        </ul>
        {{--  --}}
        <p class="ds-single-task">
            Arteterapia kształtuje wrażliwość na piękno i buduje świadomość estetyczną; jest przy tym doskonałym środkiem stymulującym naturalną ciekawość poznawczą oraz świetnym sposobem na odpoczynek.
        </p>
        
        {{--  --}}
        <gallery 
        prefix='/images/activities/arteterapia/'
        :images='[
            "b_andrychow_1",
            "b_andrychow_2",
            "b_andrychow_3",
            "b_andrychow_4",
            "b_andrychow_5",
            "b_andrychow_6",
            "b_andrychow_7",
            "b_andrychow_8",
            "b_andrychow_9",
            "b_andrychow_10",
            "b_andrychow_11",
            "b_andrychow_12",
            "b_andrychow_13",
            "b_andrychow_14",
            "b_andrychow_15",
            "b_andrychow_16",
            "b_andrychow_17",
            "b_andrychow_18",
            "b_andrychow_19",
            "b_andrychow_20",
            "b_andrychow_21",
            "b_andrychow_22",
            "b_andrychow_23",
            "b_andrychow_24",
            "b_andrychow_25",
            "b_andrychow_26",
            "b_andrychow_27",
            "b_andrychow_28",
            "b_andrychow_29",
            "b_andrychow_30",
            "b_andrychow_31",
            "b_andrychow_32",
            "b_andrychow_33",
            "b_andrychow_34",
            "b_andrychow_35",
            "b_andrychow_36",
            "b_andrychow_37",
            "b_andrychow_38",
            "b_andrychow_39",
            "b_andrychow_40",
            "b_andrychow_41",
            "b_andrychow_42",
        ]'></gallery>
    </section>
</div>
@endsection
