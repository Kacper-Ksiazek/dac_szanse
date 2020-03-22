@extends('layouts.app')
@section('title')
    <title>Archiwum {{$year}}</title>
@endsection
@section('content')
<div class="w-100">
    {{-- {{dd(json_decode($project))}} --}}
    {{-- <projects-logo message='Archiwum {{$year}}'></projects-logo> --}}
<path-bar path='[{"header":"Działalność","href":"/dzialalnosc"},  {"header":"Projekty","href":"/dzialalnosc/projekty"},{"header":"Archiwum {{$year}}","href":"#"}]'></path-bar>
    <projects-index :projects="{{json_encode($projects)}}" :auth='{{json_encode(Auth::check())}}' logo_message="Archiwum {{$year}}"></projects-index>

    {{-- <single-project :title="{{json_encode($project->title)}}" :content="{{json_encode($project->content)}}" :img="{{json_encode($project->image)}}" type="view" :since="{{json_encode($project->since)}}" :till="{{json_encode($project->till)}}" :next='{{json_encode($next)}}' :prev='{{json_encode($previous)}}'></single-project> --}}
    {{-- <single-project :project='{{json_encode($project)}}' :next='{{json_encode($next)}}' :previous='{{json_encode($previous)}}'></single-project> --}}
</div>
@endsection
