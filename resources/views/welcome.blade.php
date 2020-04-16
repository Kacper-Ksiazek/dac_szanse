@extends('layouts.app')
@section('title')
    <title>Dać Szansę</title>
@endsection
@section('content')
<div class="w-100">
    <welcome projects='{{$projects}}' news='{{$news}}'></welcome>
</div>
@endsection
