@extends('layouts.app')
@section('title')
    <title>Archiwum {{$year}}</title>
@endsection
@section('content')
<div class="w-100">
    {{--  --}}
    <projects-index :projects="{{json_encode($projects)}}" :auth='{{json_encode(Auth::check())}}' logo_message="Archiwum {{$year}}"></projects-index>
    {{--  --}}
</div>
@endsection
