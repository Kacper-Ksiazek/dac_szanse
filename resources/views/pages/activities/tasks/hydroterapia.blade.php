@extends('layouts.app')
@section('title')
    <title>Hydroterapia</title>
@endsection
@section('content')
<div class="w-100">
    <activites-logo selected='zajecia' content='Hydroterapia'></activites-logo>
    {{--  --}}
    <section class="ds-single-task-wrapper">
        {{--  --}}
        <h1>Hydroterapia</h1>
        <p class="ds-single-task">
            Rehabilitacja prowadzona w basenie pozwala wykorzystać właściwości fizyko-chemiczne wody do zwiększenia efektywności terapii.
            <br/>
            <strong>Zajęcia w wodzie:</strong>

        </p>
        <ul class="ds-single-task">
            <li>są zabawą, relaksującą zarówno fizycznie jak i psychicznie</li>
            <li>są gimnastyką dla mięśni i stawów (zmniejszają napięcie mięśniowe, pobudzają prawidłowy rozwój gorsetu mięśniowego oraz aparatu kostno-stawowego)</li>
            <li>wspomagają proces rehabilitacji korzystnie oddziałując na ruchomość stawów</li>
            <li>wpływają pobudzająco na tempo i jakość rozwoju fizycznego i umysłowego</li>
        </ul>
        {{--  --}}
        <p class="ds-single-task">
            Zajęcia z hydroterapii są prowadzone na terenie Krytej Pływalni „Delfin” w Wadowicach przez rehabilitantów oraz instruktorów pływania. Mają formę indywidualną i grupową. Obiekt jest przystosowany do potrzeb osób niepełnosprawnych. Dodatkowo korzystający z tej formy zajęć muszą posiadać zaświadczenie lekarskie o braku przeciwwskazań do rehabilitacji na basenie.
        </p>
        
        {{--  --}}
        <gallery 
        prefix='/images/activities/hydroterapia/'
        :images='[
            "b_basen_styczen_1",
            "b_basen_styczen_2",
            "b_basen_styczen_3",
            "b_basen_styczen_4",
            "b_basen_styczen_5",
            "b_basen_styczen_6",
            "b_basen_styczen_7",
            "b_basen_styczen_8",
            "b_basen_styczen_9",
            "b_basen_styczen_10",
            "b_basen_styczen_11",
            "b_basen_styczen_12",
            "b_basen_styczen_13",
            "b_basen_styczen_14",
            "b_basen_styczen_15",
            "b_basen_styczen_16",
            "b_basen_styczen_17",
            "b_basen_styczen_18",
            "b_basen_styczen_19",
            "b_basen_styczen_20",
            "b_basen_styczen_21",
            "b_basen_styczen_22",
            "b_basen_styczen_23",
            "b_basen_styczen_24",
            "b_basen_styczen_25",
            "b_basen_styczen_26",
            "b_24_luty_1",
            "b_24_luty_2",
            "b_24_luty_3",
            "b_24_luty_4",
            "b_24_luty_5",
            "b_24_luty_6",
            "b_24_luty_7",
            "b_24_luty_8",
            "b_24_luty_9",
            "b_24_luty_10",
            "b_24_luty_11",
            "b_24_luty_12",
            "b_24_luty_13",
        ]'></gallery>
    </section>
</div>
@endsection
