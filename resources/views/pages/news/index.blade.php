@extends('layouts.app')
@section('title')
    <title>Dać Szansę | Aktualności</title>
@endsection
@section('content')
<div class="w-100">
    <news-logo></news-logo>
    {{-- <section class="ds-news-list-wrapper">
        @foreach ($news as $item)
        <news-on-list date="{{$item->date}}" title="{{$item->title}}" logo="{{$item->logo}}" content="{{$item->content}}" type='view' directory="{{$item->directory}}"></news-on-list>
        @endforeach
    </section> --}}
    <news-index :data="{{json_encode($news)}}"></news-index>
    {{-- {{dd($news)}}
    @foreach($news as $singleNew)
        <h1>{{$singleNew->title}}</h1>
    @endforeach
    {{$news->render()}} --}}
</div>
@endsection
