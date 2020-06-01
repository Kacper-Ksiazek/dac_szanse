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
        {title: 'Administracja', 'images': 3, path: 'administracja',id: 'administracja'},
        {title: 'Gabinety', 'images': 16, path: 'gabinety',id: 'gabinety'},
        {title: 'Księgowy', 'images': 1, path: 'ksiegowy',id: 'ksiegowy'},
        {title: 'Księgowość', 'images': 1, path: 'ksiegowosc',id: 'ksiegowy'},
        {title: 'Wice Prezes Zarządu', 'images': 1, path: 'wice_prezes_zarzadu',id: 'zarzad'},
        {title: 'Zarząd', 'images': 10, path: 'zarzad',id: 'zarzad'}
    ]
    "></cert-floor>
</div>
@endsection
