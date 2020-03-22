@extends('layouts.app') @section('title')
<title>Dogoterapia</title>
@endsection @section('content')
<div class="w-100">
    <path-bar path='[{"header":"Działalność","href":"/dzialalnosc"}, {"header":"Zajęcia","href":"/dzialalnosc/zajecia"},{"header":"Dogoterapia","href":"#"}]'></path-bar>
    <tasks-logo></tasks-logo>
    {{--  --}}
    <section class="ds-single-task-wrapper">
        {{--  --}}
        <h1>Dogoterapia</h1>
        <p class="ds-single-task">
            Dogoterapia to – najprościej rzecz ujmując – terapia z udziałem psa. Jest jedną z metod alternatywnych i wspomagających rehabilitację osób z niepełnosprawnością.
            Skierowana głównie do dzieci i młodzieży, stanowi wspaniałą propozycję kreatywnych zajęć, polegających na wieloprofilowym usprawnianiu osób borykających się z różnego
            rodzaju deficytami. Istotą dogoterapii jest bezpośredni kontakt podopiecznego z psem i terapeutą – dlatego jest ona terapią kontaktową. Poprzez dogoterapię możliwe jest
            wspieranie zarówno sfery fizycznej, jak i psychicznej; terapia może mieć formę indywidualną bądź grupową. Zajęcia z psem dostosowuje się każdorazowo do potrzeb i
            możliwości uczestnika (lub uczestników) zajęć. Ważne jest, aby terapia miała swój cel, którego osiągnięcie przyniesie radość korzystającym – wzmocni ich poczucie
            własnej wartości, wspomoże ich rozwój oraz poczucie sprawstwa.
            <br />
            <strong>Dzięki dogoterapii można osiągnąć konkretne cele, do których zaliczają się:</strong>
        </p>
        <ul class="ds-single-task">
            <li>poprawa funkcji motorycznych w zakresie motoryki dużej i małej</li>
            <li>podniesienie kompetencji komunikacyjnych oraz poprawa w zakresie koncentracji uwagi</li>
            <li>obniżenie lęku, poczucia izolacji; podniesienie poziomu samooceny</li>
            <li>usprawnienie pamięci oraz wzbogacenie mowy biernej i czynnej; tworzenie pojęć opisujących rzeczywistość</li>
            <li>ułatwienie nawiązywania kontaktów z innymi osobami, poprawa interakcji w grupie</li>
            <li>wzrost poczucia własnej wartości</li>
        </ul>
        {{--  --}}
        <p class="ds-single-task">
            Ponadto zajęcia w obecności psa wpływają pozytywnie na przełamanie lęku przed kontaktem z psem, na pobudzenie zmysłów wzroku, słuchu, dotyku, węchu, propriocepcji,
            poprawę w zakresie somatognozji, a także ogólne wyciszenie i relaksacja.
        </p>
        <p class="ds-single-task mt-5">
            Korzystający z zajęć dogoterapii podnoszą swoje kompetencje w zakresie wykonywania czynności pielęgnacyjnych, uczą się rozpoznawać i nazywać własne emocje oraz emocje,
            które przeżywa pies. Podczas terapii ważna jest atmosfera – zadaniem terapeuty jest dbałość o poszanowanie i zrozumienie zarówno potrzeb uczestników zajęć, jak i psa.
            Uczestnicy na każdym etapie rozwoju szybko uczą się prawidłowych zachowań w obecności psa, stają się empatyczni, otwarci oraz ufni we własne możliwości.
            <br />
            <strong>5 powodów, dla których warto zaprzyjaźnić się z psem (wg B. Kulisiewicz):</strong>
        </p>
        <ul class="ds-single-task">
            <li>Pies nie ocenia – pies akceptuje! Nie zwraca uwagi na niedoskonałości wyglądu, mowy czy ruchów. Zawsze nas wysłucha i nigdy nie skrytykuje</li>
            <li>Pies nie wyznacza reguł i granic – oczekuje i reaguje na każdą próbę nawiązania kontaktu i na każdy sygnał do zabawy.</li>
            <li>Pies nie oczekuje – pies daje. Niczego nie przyrzeka, ale wszystko spełnia.</li>
            <li>Pies nie zabrania – pies pozwala. Nie mówi "bądź grzeczny", nie wydaje poleceń.</li>
            <li>Pies nie stawia warunków – pies kocha nas bezwarunkowo. Niezależnie, czy odniesiemy sukces, czy porażkę. (B. Kulisiewicz)</li>
        </ul>

        {{--  --}}
        <gallery
            prefix="/images/activities/dogoterapia/"
            :images='[
            "b_dogo_maj_1",
            "b_dogo_maj_2",
            "b_dogo_maj_3",
            "b_dogo_maj_4",
            "b_dogo_maj_5",
            "b_dogo_maj_6",
            "b_dogo_maj_7",
            "b_dogo_maj_8",
            "b_dogo_maj_9",
            "b_dogo_maj_10",
            "b_dogo_maj_11",
            "b_dogo_maj_12",
            "b_dogo_maj_13",
            "b_dogo_maj_14",
            "b_dogo_maj_15",
            "b_dogo_maj_16",
            "b_dogo_maj_17",
        ]'
        ></gallery>
    </section>
</div>
@endsection
