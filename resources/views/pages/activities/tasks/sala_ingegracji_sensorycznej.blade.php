@extends('layouts.app')
@section('title')
    <title>Zajęcia w Sali Ingegracji Sensorycznej</title>
@endsection
@section('content')
<div class="w-100">
    <path-bar path='[{"header":"Działalność","href":"/dzialalnosc"}, {"header":"Zajęcia","href":"/dzialalnosc/zajecia"},{"header":"Zajęcia w Sali Ingegracji Sensorycznej","href":"#"}]'></path-bar>
    <tasks-logo></tasks-logo>
    {{--  --}}
    <section class="ds-single-task-wrapper">
        {{--  --}}
        <h1>Zajęcia Integracji Sensorycznej</h1>
        <p class="ds-single-task">
            Integracja sensoryczna to proces, podczas którego układ nerwowy dziecka odbiera informacje z receptorów wszystkich zmysłów, a następnie organizuje je i interpretuje tak, aby mogły być wykorzystane w celowym i efektywnym działaniu. <strong>Terapia SI jest wskazana dla dzieci, które:</strong>

        </p>
        <ul class="ds-single-task">
            <li>mają zaburzenia przetwarzania sensorycznego</li>
            <li>unikają lub poszukują wrażeń sensorycznych</li>
            <li>mają obniżone umiejętności ruchowe</li>
        </ul>
        {{--  --}}
        <p class="ds-single-task">
            Terapia zaburzeń Integracji Sensorycznej polega na takim stymulowaniu układu nerwowego, aby dać mu możliwość właściwej pracy, czyli prawidłowego odbierania, przetwarzania i odpowiedzi na bodźce płynące ze środowiska i własnego ciała. Zajęcia z integracji sensorycznej prowadzone są w sali wyposażonej w specjalistyczny sprzęt przez specjalistów posiadających niezbędne uprawnienia i kwalifikacje. 
        </p>
        
        {{--  --}}
        <gallery 
        prefix='/images/activities/sala-sensory/'
        :images='[
            "sensory1",
            "sensory2",
            "sensory3",
            "sensory4",
            "sensory5",
        ]'></gallery>
    </section>
</div>
@endsection
