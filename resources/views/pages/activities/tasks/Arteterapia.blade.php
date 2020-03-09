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
