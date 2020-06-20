@extends('layouts.app')
@section('title')
    <title>Terapia Biofeedback</title>
@endsection
@section('content')
<div class="w-100">
    <activites-logo selected='zajecia' content='Terapia Biofeedback'></activites-logo>
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
        <gallery 
        prefix='/images/activities/bio/'
        :images='[
            "bio_1",
            "bio_2",
            "bio_3",
            "bio_4",
        ]'></gallery>
    </section>
</div>
@endsection
