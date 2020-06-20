@extends('layouts.app') @section('title')
<title>Nowożeńcy dają szansę!</title>
@endsection @section('content')
<div class="w-100">
    <help-logo content='Nowożeńcy dają szansę!' selected='nowozency'></help-logo>
    <!--  -->
    <!--  -->
    <!--  -->
    <section class="ds-help-single-help-form">
        <!--  -->
        <h1>Młoda Para uszczęśliwia dzieci!</h1>
        <p class='mb-5'>
            Dzień ślubu może być najszczęśliwszym dniem nie tylko dla Państwa Młodych i ich bliskich. Jeśli szukacie oryginalnej alternatywy dla tradycyjnie kupowanych Państwu Młodym  kwiatów, mamy dla Was pewną propozycję.
        </p>
        <p class='mb-5'>
            Stowarzyszenie Rodziców i Opiekunów Dzieci Niepełnosprawnych „Dać Szansę” w Wadowicach działa od 2002 roku. Naszymi podopiecznymi są dzieci niepełnosprawne, o specjalnych potrzebach edukacyjnych i wychowawczych, wymagające terapii oraz rehabilitacji. Nasz działania opierają się nie tylko na działaniu terapeutycznym – organizujemy zajęcia świetlicowe, podczas których powstają piękne dzieła własnoręcznie tworzone przez naszych podopiecznych, wyjeżdżamy z dziećmi na wycieczki, integrujemy się ze społeczeństwem lokalnym. Nasza działalność w dużej mierze opiera się na działalności wolontaryjnej. Ponadto, rozpoczęliśmy budowę jedynego w Wadowicach Centrum Edukacyjno-Rehabilitacyjno-Terapeutycznego dla wszystkich dzieci, które objęliśmy swoją opieką. Dzięki tej inwestycji możemy spełniać marzenia i wywołać uśmiech na twarzach dzieci – tak dla nas cenny.
        </p>
        <p class='mb-5'>
            Byłoby nam niezmiernie miło, gdyby zachęcili Państwo swoich gości weselnych, by zamiast kwiatów, kuponów lotka czy innych drobiazgów podarowali szczęście naszym podopiecznym. Pomóc nam można na różne sposoby: poprzez darowiznę pieniężną - zbiórkę publiczną w trakcie przyjęcia weselnego, zabawki, gry planszowe, artykuły plastyczne i wiele, wiele innych.
        </p>
        <p class='mb-5'>
            Zastanawiacie się, w jaki sposób poinformować gości weselnych o swej niecodziennej decyzji? W tej sytuacji najlepiej sprawdzą się okolicznościowe wierszyki dołączane do zaproszenia.
        </p>
        <div class="d-flex justify-content-center align-items-center flex-column">
            <h2 class='mb-3'>Jeżeli chcecie uzyskać więcej informacji, zapraszamy do kontaktu:</h2>
            <h4><i>Joanna Szymańska</i></h4>
            <h4>
                <strong>tel. </strong>695 727 833
            </h4>
            <h4>
                <strong>tel. </strong>33 873 18 87
            </h4>
            <h4>
                <strong>e-mail: </strong>stowarzyszenie@dacszanse.pl
            </h4>
        </div>
        <gallery
            :extensions='true'
            prefix="/images/help/nowozency/"
            :images='[
            "nowozency_1",
            "nowozency_2",
            "nowozency_3",
            "nowozency_4",
            "nowozency_5",
            "nowozency_6",
            "nowozency_7",
            "nowozency_8",
            "nowozency_9",
            "nowozency_10",
        ]'
        ></gallery>
    </section>
</div>
@endsection
