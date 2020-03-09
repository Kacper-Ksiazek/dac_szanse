@extends('layouts.app')
@section('title')
    <title>Terapia Biofeedback</title>
@endsection
@section('content')
<div class="w-100">
    <path-bar path='[{"header":"Działalność","href":"/dzialalnosc"}, {"header":"Zajęcia","href":"/dzialalnosc/zajecia"},{"header":"Terapia Biofeedback","href":"#"}]'></path-bar>
    <tasks-logo></tasks-logo>
    {{--  --}}
    <section class="ds-single-task-wrapper">
        {{--  --}}
        <h1>Terapia Biofeedback</h1>
        <p class="ds-single-task">
            EEG-Biofeedback to rodzaj terapii, dzięki której pacjent w sposób świadomy uczy się zmieniać wzorzec wytwarzanych fal w mózgu, tak aby mózg pracował wydajniej i szybciej. Sygnał z jednego punktu na głowie pacjenta jest przetwarzany na zrozumiałą dla pacjenta formę graficzną (wykresu, animacji bądź gry wideo). Dzięki temu sprzężeniu zwrotnemu pacjent wie, kiedy jest skoncentrowany, a kiedy przestaje się koncentrować. Pozwala to nauczyć się reakcji własnego mózgu i tak zmodyfikować jego pracę, aby funkcjonował efektywnie.

            <strong>Metoda EEG-Biofeedback jest polecana dzieciom, którym towarzyszą problemy takie jak:</strong>
        </p>
        <ul class="ds-single-task">
            <li>zaburzenia pamięci i koncentracji uwagi</li>
            <li>zbyt mała szybkość uczenia się</li>
            <li>nadpobudliwość psychoruchowa (ADHD)</li>
            <li>problemy szkolne</li>
            <li>dysleksja, dysortografia</li>
            <li>trema, reakcje stresowe, agresja</li>
        </ul>
        {{--  --}}
        <p class="ds-single-task">
            Terapia Biofeedback jest też stosowana w przypadku chęci chęć poprawy wyników w dziedzinach wymagających koncentracji (sport, muzyka).
            Amerykańska Akademia Pediatrii uznała Biofeedback za jedną z najbardziej rekomendowanych form terapii dla pacjentów z ADHD. W literaturze opisano bardzo dobre rezultaty, będące wynikiem tej właśnie formy terapii. Warto jednak pamiętać, że dobór metody ostatecznie zależy od dziecka i jego możliwości psychofizycznych.
            <strong>Certyfikowana metoda EEG-Biofeedback znalazła zastosowanie w pracy z osobami o następujących trudnościach i zaburzeniach:</strong>
        </p>
        <ul class="ds-single-task">
            <li>lęk/zaburzenia emocjonalne</li>
            <li>astma</li>
            <li>ADHD</li>
            <li>autyzm</li>
            <li>ból chroniczny</li>
            <li>depresja</li>
            <li>epilepsja</li>
            <li>zaburzenia odżywiania</li>
            <li>migrena</li>
            <li>nadciśnienie</li>
            <li>bezsenność</li>
            <li>szumy uszne</li>
        </ul>
        
        <i>Źródło: materiały udostępnione przez firmę BioMed</i>
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
