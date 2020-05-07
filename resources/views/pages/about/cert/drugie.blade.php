@extends('layouts.app')
@section('title')
    <title>Budowa CERT | Drugie piętro</title>
@endsection
@section('content')
<div class="w-100">
    <path-bar path='[{"header":"O nas","href":"/o-nas"}, {"header":"Budowa CERT","href":"/o-nas/budowa-cert"},{"header":"Pierwsze piętro","href":"#"}]'></path-bar>
    <about-logo content='Budowa CERT'></about-logo>
    {{--  --}}
    <cert-floor title='Parter' folder='drugie' :structure="
    [
        {title: 'Administracja', 'images': 3, path: 'administracja'},
        {title: 'Gabinety', 'images': 16, path: 'gabinety'},
        {title: 'Ksiegowosc', 'images': 1, path: 'ksiegowosc'},
        {title: 'Wice Prezes Zarządu', 'images': 1, path: 'wice_prezes_zarzadu'},
        {title: 'Zarząd', 'images': 10, path: 'zarzad'}
    ]
    "></cert-floor>
</div>
@endsection
