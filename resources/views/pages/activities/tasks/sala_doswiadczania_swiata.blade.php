@extends('layouts.app')
@section('title')
    <title>Zajęcia w Sali Doświadczania Świata</title>
@endsection
@section('content')
<div class="w-100">
    <path-bar path='[{"header":"Działalność","href":"/dzialalnosc"}, {"header":"Zajęcia","href":"/dzialalnosc/zajecia"},{"header":"Zajęcia w Sali Doświadczania Świata","href":"#"}]'></path-bar>
    <tasks-logo></tasks-logo>
    {{--  --}}
    <section class="ds-single-task-wrapper">
        {{--  --}}
        <h1>Zajęcia w Sali Doświadczania Świata</h1>
        <p class="ds-single-task">
            Terapia w Sali Doświadczania Świata, zwana również terapią Snoezelen (niem. „snuffelen” – węszyć, „doezelen” – drzemać) polega na zapewnianiu osobom o obniżonej sprawności intelektualnej wyciszenia emocjonalnego, relaksu, a co za tym idzie również wsparcia ich rozwoju. Techniki stosowane w terapii pozwalają na sensoryczną aktywizację dzieci niepełnosprawnych, które proces poznawczy niejako rozpoczynają na nowo, w swoim tempie, uaktywniając często uśpione zmysły. Założeniem zajęć w Sali Doświadczania Świata jest przebywanie w pomieszczeniu, w którym dzieci niepełnosprawne poddawane są stymulacji zmysłów za pomocą całej gamy bodźców. Oddziaływanie bodźców jest dobierane przez terapeutę w taki sposób, aby jak najpełniej odpowiedzieć na potrzeby dziecka znajdującego się w pomieszczeniu. <strong>Terapia w Sali Doświadczania Świata wpływa na wszechstronny rozwój poprzez stymulację zmysłów i dostarczanie bodźców: </strong>
        </p>
        <ul class="ds-single-task">
            <li>wzrokowych:  rozwijanie koordynacji wzrokowo-ruchowej, rozwijanie spostrzegawczości</li>
            <li>słuchowych: rozwijanie koordynacji słuchowo-ruchowej i słuchowo-wzrokowej, rozwijanie i usprawnianie koncentracji na bodźcach słuchowych</li>
            <li>dotykowych: aktywizacja zmysłu dotyku poprzez „badanie” przedmiotów o różnej fakturze</li>
            <li>węchowych: zdobywanie doświadczeń zapachowych </li>
        </ul>
        {{--  --}}
        <p class="ds-single-task">
            Przestrzeń Sali Doświadczania Świata pozwala również na stymulowanie zmysłu równowagi poprzez rozwijanie orientacji w przestrzeni oraz doświadczanie aktywności i ruchu. 
            erapia prowadzona jest w specjalistycznie wyposażonej Sali znajdującej się w Wadowicach przy os. XX–lecia 1.
        </p>
        
        {{--  --}}
        <single-task-gallery 
        prefix='/images/activities/sala-swiatla/'
        :images='[
            "swiatlo1",
            "swiatlo2",
            "swiatlo3",
            "swiatlo4",
            "swiatlo5",
            "swiatlo6",
            "swiatlo7",
        ]'></single-task-gallery>
    </section>
</div>
@endsection
