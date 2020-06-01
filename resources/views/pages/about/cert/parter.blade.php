@extends('layouts.app')
@section('title')
    <title>Dać Szansę | Parter</title>
@endsection
@section('content')
<div class="w-100">
    <path-bar path='[{"header":"O nas","href":"/o-nas"}, {"header":"Budowa CERT","href":"/o-nas/budowa-cert"},{"header":"Parter","href":"#"}]'></path-bar>
    <about-logo content='Budowa CERT'></about-logo>
    {{--  --}}
    <cert-floor title='Parter' folder='parter' :structure="
    [
        {title: 'Budynek', 'images': 7, path: 'budynek',id: 'budynek'},
        {title: 'Darczyńcy', 'images': 5, path: 'darczyncy',id: 'darczyncy'},
        {title: 'Poczekalnia', 'images': 7, path: 'poczekalnia',id: 'poczekalnia'},
        {title: 'Recepcja', 'images': 4, path: 'recepcja',id: 'recepcja'},
        {title: 'Sale rehabilitacyjne', 'images': 20, path: 'sala',id: 'sala-rehabilitacyjne'},
    ]
    "></cert-floor>
</div>
@endsection
