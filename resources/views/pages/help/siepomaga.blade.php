@extends('layouts.app') @section('title')
<title>Siepomaga</title>
@endsection @section('content')
<div class="w-100">
    <path-bar path='[{"header":"Jak pomóc","href":"/jak-pomoc"},  {"header":"Siepomaga","href":"#"}]'></path-bar>
    <help-logo content='Siepomaga'></help-logo>
    <!--  -->
    <!--  -->
    <!--  -->
    <section class="ds-help-single-help-form">
        <!--  -->
       <h1 class='text-center'>Można nas także wesprzeć przez portal "Siepomaga" Zapraszamy :) </h1>
       <a href="https://www.siepomaga.pl/dacszanse" target='blank'><img src="/images/help/siepomaga/siepomaga.png" class='img-fluid'></a>
    </section>
</div>
@endsection
