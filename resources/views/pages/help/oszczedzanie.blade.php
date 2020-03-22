@extends('layouts.app') @section('title')
<title>Pomóż nam zaoszczędzić</title>
@endsection @section('content')
<div class="w-100">
    <path-bar path='[{"header":"Jak pomóc","href":"/jak-pomoc"},  {"header":"Pomóż nam zaoszczędzić","href":"#"}]'></path-bar>
    <help-logo content='Pomóż nam zaoszczędzić'></help-logo>
    <!--  -->
    <!--  -->
    <!--  -->
    <section class="ds-help-single-help-form">
        <!--  -->
       <h1>Przekazując Stowarzyszeniu "Dać Szansę" usługi lub produkty pomożesz nam przeznaczyć więcej pieniędzy na pomaganie.</h1>
       <p>
            Stowarzyszenie "Dać Szansę" obecną działalność realizuje w 10 budynkach rozmieszczonych w różnych miejscach na terenie miasta Wadowice, w wynajmowanych od osób prywatnych.
            Spoczywają na nas koszty utrzymania tych placówek oraz biura z którego korzystają nasi pracownicy. 
            To duże ale niezbędne wydatki, bez których nasz Stowarzyszenie nie mogłoby prawidłowo funkcjonować.
       </p>
       <div class="text-center mt-5">
           {{--  --}}
            <h2 class="green">Przekaż produkty i usługi !</h2>
           {{--  --}}
           <p class='b-none'>Nasze potrzeby są bardzo duże, dlatego z radością przyjmiemy każdą pomoc. 
            Jeśli Twoja firma chciałaby przekazać nam wsparcie w takiej formie, skontaktuj się z nami : stowarzyszenie@dacszanse.pl</p>
            {{--  --}}
            <h2 class="green">Co jest nam potrzebne ?</h2>
            <ul class='d-flex justify-content-between green'>
                <li>Art. higieniczne</li>
                <li>Art. i sprzęt biurowy</li>
                <li>Sprzęt rehabilitacyjny</li>
                <li>Infrastruktura techniczna</li>
            </ul>
        </div>
    </section>
</div>
@endsection
