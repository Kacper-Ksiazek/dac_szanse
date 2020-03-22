@extends('layouts.app') @section('title')
<title>Zajęcia w Sali Doświadczania Świata</title>
@endsection @section('content')
<div class="w-100">
    <path-bar
        path='[{"header":"Działalność","href":"/dzialalnosc"}, {"header":"Zajęcia","href":"/dzialalnosc/zajecia"},{"header":"Zajęcia w Sali Doświadczania Świata","href":"#"}]'
    ></path-bar>
    <tasks-logo></tasks-logo>
    {{--  --}}
    <section class="ds-single-task-wrapper">
        {{--  --}}
        <h1>Zajęcia w Sali Doświadczania Świata</h1>
        <p class="ds-single-task">
            Terapia w Sali Doświadczania Świata, zwana również terapią Snoezelen (niem. „snuffelen” – węszyć, „doezelen” – drzemać) polega na zapewnianiu osobom o obniżonej
            sprawności intelektualnej wyciszenia emocjonalnego, relaksu, a co za tym idzie również wsparcia ich rozwoju. Techniki stosowane w terapii pozwalają na sensoryczną
            aktywizację dzieci z niepełnosprawnością, które proces poznawczy niejako rozpoczynają na nowo, w swoim tempie, uaktywniając często uśpione zmysły. Celem zajęć w Sali
            Doświadczania Świata jest
            <strong>
                przebywanie w pomieszczeniu, w którym dzieci z niepełnosprawnością poddawane są stymulacji zmysłów za pomocą całej gamy bodźców. Uczestniczące w terapii dziecko ma
                możliwość wyboru bodźców, których w tym momencie najbardziej potrzebuje.
            </strong>
            Terapeuta znajdujący się w pomieszczeniu czuwa nad bezpieczeństwem dziecka, wspomaga korzystanie ze specjalistycznych sprzętów oraz wartościowe spożytkowanie czasu
            przez uczestnika zajęć.
        </p>
        <!--  -->
        <!--  -->
        <!--  -->
        <p class="ds-single-task b-none">
            <strong>Stymulacja zmysłów w Sali Doświadczania Świata opiera się na dostarczaniu bodźców: </strong>
        </p>
        <!--  -->
        <!--  -->
        <!--  -->
        <p class="ds-single-task b-none">
            <strong>- wzrokowych:</strong>
        </p>
        <ul class="ds-single-task m-0">
            <li>rozwijanie świadomości i poczucia światła</li>
            <li>ćwiczenie koncentracji na bodźcach wzrokowych</li>
        </ul>
        <!--  -->
        <!--  -->
        <!--  -->
        <p class="ds-single-task b-none">
            <strong>- słuchowych:</strong>
        </p>
        <ul class="ds-single-task m-0">
            <li>ćwiczenie koncentracji na bodźcach wzrokowych</li>
            <li>zmniejszenie lęku przed nieznanymi dźwiękami</li>
            <li>poszerzanie zasobu doświadczeń słuchowych</li>
        </ul>
        <!--  -->
        <!--  -->
        <!--  -->
        <p class="ds-single-task b-none">
            <strong>- dotykowych:</strong>
        </p>
        <ul class="ds-single-task m-0">
            <li>aktywizacja zmysłu dotyku poprzez „badanie” przedmiotów o różnej fakturze</li>
            <li>ekspozycja dziecka na pracę z materiałami sypkimi oraz masami plastycznymi</li>
            <li>ćwiczenia związane z motoryką małą i dużą</li>
        </ul>
        <!--  -->
        <!--  -->
        <!--  -->
        <p class="ds-single-task b-none">
            <strong> węchowych:</strong>
        </p>
        <ul class="ds-single-task m-0">
            <li>zdobywanie doświadczeń węchowych</li>
            <li>budowanie wyobrażeń na temat otaczającego nas świata</li>
            <li>ćwiczenie zdolności kojarzenia danego zapachu z sytuacją</li>
        </ul>
        <!--  -->
        <!--  -->
        <!--  -->

        <p class="ds-single-task">
            Przestrzeń Sali Doświadczania Świata pozwala również na <strong>stymulację przedsionkową</strong> (rozwijanie i kształtowanie świadomości własnego ciała, orientacji w
            schemacie ciała oraz przestrzeni), a czasami również <strong>zmysłu smaku</strong> :).
        </p>

        {{--  --}}
        <gallery
            prefix="/images/activities/sala-swiatla/"
            :images='[
            "swiatlo1",
            "swiatlo2",
            "swiatlo3",
            "swiatlo4",
            "swiatlo5",
            "swiatlo6",
            "swiatlo7",
        ]'
        ></gallery>
    </section>
</div>
@endsection
