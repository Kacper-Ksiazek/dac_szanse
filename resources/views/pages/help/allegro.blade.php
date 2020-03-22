@extends('layouts.app') @section('title')
<title>Allegro Charytatywni</title>
@endsection @section('content')
<div class="w-100">
    <path-bar path='[{"header":"Jak pomóc","href":"/jak-pomoc"},  {"header":"Allegro Charytatywni","href":"#"}]'></path-bar>
    <help-logo content='Allegro Charytatywni'></help-logo>
    <!--  -->
    <!--  -->
    <!--  -->
    <section class="ds-help-single-help-form">
        <!--  -->
        <div class="text-center">
            <h2><strong>Wystawiając przedmioty na aukcji Allegro Charytatywni wspierasz budowę naszego ośrodka - Centrum Edukacyjno - Rehabilitacyjno - Terapeutycznego (CERT) w Wadowicach.</strong></h2>
            <br>
            <h3>
                Przyciskając ikonkę poniżej przejdą Państwo do serwisu Allegro Charytatywni.
            </h3>
            <div class='mt-5'>
                <a href="https://charytatywni.allegro.pl/cele?charityOrganizationId=1876"><img src="/images/help/allegro/allegro.png" alt=""></a>
            </div>
        </div>
    </section>
</div>
@endsection
