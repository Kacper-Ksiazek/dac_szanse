@extends('layouts.app') @section('title')
<title>Ambasadorzy</title>
@endsection @section('content')
<div class="w-100">
    <help-logo content='Ambasadorzy' selected='ambasadorzy'></help-logo>
    <!--  -->
    <!--  -->
    <!--  -->
    <section class="ds-help-single-help-form">
        <h1>Nasi Ambasadorzy</h1>
        <p>
            Chcesz pomóc nam w budowie? Nie musisz zakładać kasku i chwytać za młot! Wystarczy, że wspomożesz nas w formie darowizny pieniężnej lub rzeczowej – to tak wiele dla nas
            znaczy! Każdy gest, każda Twoja pomoc jest dla nas jednym z tych najcenniejszych darów, jakie możemy z Twojej strony otrzymać. Zobacz Ambasadorów naszej akcji – okazane
            przez Nich wsparcie niech będzie dla Ciebie gwarancją rzetelności Naszych działań. Oni już pomogli, a Ty?
        </p>
        <!--  -->
        <gallery
            prefix="/images/help/ambasadorzy/"
            :images='[
            "ambasada_1",
            "ambasada_2",
            "ambasada_3",
            "ambasada_4",
            "ambasada_5",
            "ambasada_6",
            "ambasada_7",
        ]'
        ></gallery>
    </section>
</div>
@endsection
