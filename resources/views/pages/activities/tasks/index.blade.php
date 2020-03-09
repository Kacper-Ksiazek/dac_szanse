@extends('layouts.app')
@section('title')
    <title>Dać Szansę | Zajęcia</title>
@endsection
@section('content')
<div class="w-100">
    <path-bar path='[{"header":"Działalność","href":"/dzialalnosc"},  {"header":"Zajęcia","href":"#"}]'></path-bar>
    <our-tasks></our-tasks>
</div>
@endsection
