@extends('layouts.app')
@section('title')
    <title>Dać Szansę | Projekty</title>
@endsection
@section('content')
<div class="w-100">
    {{-- ARCHIWA --}}
    <projects-index :projects="{{json_encode($projects)}}" :archives='{{json_encode($archives)}}'></projects-index>
</div>
@endsection
