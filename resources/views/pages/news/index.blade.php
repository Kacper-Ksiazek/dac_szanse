@extends('layouts.app')
@section('title')
    <title>Dać Szansę | Aktualności</title>
@endsection
@section('content')
<div class="w-100">
    <news-logo></news-logo>
    {{--  --}}
    <news-index :data="{{json_encode($news)}}"></news-index>
</div>
@endsection
