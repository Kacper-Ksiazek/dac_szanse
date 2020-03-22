@extends('layouts.app') @section('title')
<title>Współprace</title>
@endsection @section('content')
<div class="w-100">
    <path-bar path='[{"header":"Jak pomóc","href":"/jak-pomoc"},  {"header":"Współprace","href":"#"}]'></path-bar>
    <help-logo content='Współprace'></help-logo>
    <!--  -->
    <!--  -->
    <!--  -->
    <section class="ds-help-single-help-form">
        <!--  -->
        <href-gallery prefix='/images/help/wspolprace' :content="[
            {img: 'beskidzka 24', href:''},
            {img: 'powiat live', href:''},
            {img: 'wadowice online', href:''},
            {img: 'wck wadowice', href:''},
            {img: 'kultura andrychów2', href:''},
            {img: 'ckst kalwaria', href:''},
            {img: 'tvk hd', href:''},
            {img: 'mama tez kobieta', href:'http://mamatezkobieta.pl/'},
            {img: 'kampanie społeczne logo', href:'https://kampaniespoleczne.pl/'},
            {img: 'mamnewsa1', href:'http://www.mamnewsa.pl/'},
        ]"></href-gallery>
    </section>
</div>
@endsection
