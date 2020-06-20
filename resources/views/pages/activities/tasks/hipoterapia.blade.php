@extends('layouts.app') @section('title')
<title>Hipoterapia</title>
@endsection @section('content')
<div class="w-100">
    <activites-logo selected='zajecia' content='Hipoterapia'></activites-logo>
    {{--  --}}
    <section class="ds-single-task-wrapper">
        {{--  --}}
        <h1>Hipoterapia</h1>
        <p class="ds-single-task">
            Hipoterapia to ukierunkowane działanie terapeutyczne, mające służyć poprawie funkcjonowania człowieka w sferach fizycznej, emocjonalnej, poznawczej i społecznej.
            Podczas zajęć hipoterapii specjalnie przygotowany koń stanowi integralną część procesu terapeutycznego. To właśnie obecność konia – "współterapeuty" – sprawia, że jest
            to wyjątkowa oraz niepowtarzalna metoda terapeutyczna, dająca zupełnie nowe możliwości.
            <br />
            <strong>Głównymi celami hipoterapii są:</strong>
        </p>
        <ul class="ds-single-task">
            <li>kształtowanie prawidłowego wzorca ruchowego chodu</li>
            <li>normalizacja napięcia mięśniowego, przeciwdziałanie przykurczom mięśni i ograniczeniom ruchomości w stawach</li>
            <li>korygowanie wad postawy</li>
            <li>ćwiczenie równowagi</li>
            <li>poprawa koordynacji wzrokowo-ruchowej</li>
            <li>obniżenie pobudliwości nerwowej</li>
            <li>poprawa poczucia własnej wartości</li>
            <li>przełamywanie lęku i oporów przez kontakt z otoczeniem społecznym</li>
            <li>poprawa zachowań społecznych</li>
        </ul>
        {{--  --}}
        <p class="ds-single-task">
            Największą korzyścią wynikająca z hipoterapii jest fakt, ze dziecko odnosząc radość z jazdy konnej, nie postrzega jej jako terapii. Wysiłek włożony w zajęcia z
            wykorzystaniem koni prowadzi do lepszych efektów terapeutycznych, a negatywny stosunek dziecka do terapii zostaje wyeliminowany. Zajęcia z hipoterapii prowadzone są w
            Stadninie Koni „Jowisz” w Choczni przy ul. Tadeusza Kościuszki 204.
        </p>
        <i>Źródło: www.hipoterapia.org</i>
        {{--  --}}
        <gallery
            prefix="/images/activities/hipoterapia/"
            :images='[
            "b_hipoterapia_1",
            "b_hipoterapia_2",
            "b_hipoterapia_3",
            "b_hipoterapia_4",
            "b_hipoterapia_5",
            "b_hipoterapia_6",
            "b_hipoterapia_7",
            "b_hipoterapia_8",
            "b_hipoterapia_9",
            "b_hipoterapia_10",
            "b_hipoterapia_11",
            "b_hipoterapia_12",
            "b_hipoterapia_13",
            "b_hipoterapia_14",
            "b_hipoterapia_15",
            "b_hipoterapia_16",
            "b_hipoterapia_17",
            "b_hipoterapia_18",
            "b_hipoterapia_19",
            "b_hipoterapia_20",
            "b_hipoterapia_21",
        ]'
        ></gallery>
    </section>
</div>
@endsection
