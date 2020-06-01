@extends('layouts.app')
@section('title')
    <title>Dać Szansę</title>
@endsection
@section('content')
<div class="w-100">
    <landing-page news='{{$news}}'></landing-page>
</div>
@endsection
