@extends('layouts.app')
@section('title')
    <title>Dać Szansę | Projekty</title>
@endsection
@section('content')
<div class="w-100">
    {{-- ARCHIWA --}}
    {{-- {{dd($archives)}} --}}
    <path-bar path='[{"header":"Działalność","href":"/dzialalnosc"},  {"header":"Projekty","href":"#"}]'></path-bar>
    <projects-index :projects="{{json_encode($projects)}}" :archives='{{json_encode($archives)}}'></projects-index>
</div>
@endsection
