@extends('layouts.app')
@section('title')
    <title>{{$data->title}}</title>
@endsection
@section('content')
<div class="w-100">
    <path-bar path='[{"header":"Aktualności","href":"/aktualnosci"},  {"header":"{{$data->title}}","href":"#"}]'></path-bar>
    <news-logo></news-logo>

    <single-news type='view' :modal='true' :gallery="{{json_encode($data->gallery)}}" :content="{{json_encode($data->content)}}" title="{{$data->title}}" directory="{{$data->directory}}"></single-news>

    <section class="ds-news-list-wrapper on-single-element">
        <h1>Zobacz również</h1>
        @foreach ($recommended as $item)
            @if ($item)
            <news-on-list
                type="view"
                date="{{$item->date}}"
                title="{{$item->title}}"
                logo="{{$item->logo}}"
                content="{{$item->content}}"
                directory="{{$item->directory}}"
            ></news-on-list>
            @endif
        @endforeach
    </section>
        
    
</div>
@endsection
