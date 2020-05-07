@extends('layouts.app')
@section('title')
    <title>Dać Szansę | Budowa CERT</title>
@endsection
@section('content')
<div class="w-100">
    <path-bar path='[{"header":"O nas","href":"/o-nas"},  {"header":"Budowa CERT","href":"#"}]'></path-bar>
    <about-logo content='Budowa CERT'></about-logo>
    <cert-index></cert-index>
</div>
@endsection
