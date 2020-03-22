@extends('layouts.app')
@section('title')
    <title>Zajęcia rehabilitacyjne</title>
@endsection
@section('content')
<div class="w-100">
    <path-bar path='[{"header":"Działalność","href":"/dzialalnosc"}, {"header":"Zajęcia","href":"/dzialalnosc/zajecia"},{"header":"Zajęcia rehabilitacyjne","href":"#"}]'></path-bar>
    <tasks-logo></tasks-logo>
    {{--  --}}
    <section class="ds-single-task-wrapper">
        {{--  --}}
        <h1>Rehabilitacja indywidualna</h1>
        <p class="ds-single-task">
            Rehabilitacja polega na kompleksowym i zespołowym działaniu, które ma na celu przywrócenie pełnej lub maksymalnej do osiągnięcia sprawności fizycznej. Celem rehabilitacji dziecka niepełnosprawnego jest jak najpełniejsze włączenie go w codzienność oraz uczenie go sprostania zadaniom dnia codziennego. Usprawnianie poprzez rehabilitację polega przede wszystkim na systematycznym pobudzaniu do psychoruchowego rozwoju dziecka <strong>w następującym zakresie:</strong>

        </p>
        <ul class="ds-single-task">
            <li>kontroli postawy oraz ruchów lokomocyjnych</li>
            <li>koordynacji w zakresie ruchowo-czuciowo-słuchowej</li>
            <li>odczuwanie własnego ciała oraz orientacja w czasie i przestrzeni</li>
            <li>odczuwanie własnego ciała</li>
        </ul>
        {{--  --}}
        <p class="ds-single-task">
            <strong>Zajęcia z rehabilitacji obejmują:</strong> kinezyterapię czyli leczenie ruchem (ćwiczenia o działaniu miejscowym i o działaniu ogólnoustrojowym), fizykoterapię (stosowanie w celach leczniczych różnego rodzaju energii wytwarzanej za pomocą aparatury) i masaż. Do dyspozycji dzieci niepełnosprawnych są również basen z kulkami i trampolina.

        </p>
        
        {{--  --}}
        <gallery 
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
            "b_rehabilitacja_kwiecie_23",
            "b_rehabilitacja_kwiecie_24",
            "b_rehabilitacja_kwiecie_25",
            "b_rehabilitacja_kwiecie_26",
        ]'></gallery>
    </section>
</div>
@endsection
