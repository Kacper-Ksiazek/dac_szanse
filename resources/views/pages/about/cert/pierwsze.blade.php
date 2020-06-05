@extends('layouts.app')
@section('title')
    <title>Budowa CERT | Pierwsze piętro</title>
@endsection
@section('content')
<div class="w-100">
    <about-logo content='Budowa CERT' selected='cert'></about-logo>
    {{--  --}}
    <cert-floor title='Pierwsze piętro' folder='pierwsze' :structure="
    [
        {title: 'Dyrektor', 'images': 1, path: 'dyrektor', id: 'dyrektor'},
        {title: 'Gabinety', 'images': 13, path: 'gabinety', id: 'gabinety'},
        {title: 'OREW', 'images': 5, path: 'OREW', id: 'orew'},
        {title: 'Poczekalnia', 'images': 7, path: 'poczekalnia', id: 'poczekalnia'},
        {title: 'Sekretariat', 'images': 1, path: 'sekretariat', id: 'sekretariat'}
    ]
    "></cert-floor>
</div>
@endsection
