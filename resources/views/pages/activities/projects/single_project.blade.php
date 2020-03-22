@extends('layouts.app')
@section('title')
    <title>{{$project->title}}</title>
@endsection
@section('content')
<div class="w-100">
    <path-bar path='[{"header":"Działalność","href":"/dzialalnosc"},  {"header":"Projekty","href":"/dzialalnosc/projekty"},{"header":"{{$project->title}}","href":"#"}]'></path-bar>
    {{--  --}}
    {{--  --}}
    <projects-logo></projects-logo>
    {{--  --}}
    {{--  --}}
    {{--  --}}
    <single-project :title="{{json_encode($project->title)}}" :content="{{json_encode($project->content)}}" :img="{{json_encode($project->image)}}" type="view" :since="{{json_encode($project->since)}}" :till="{{json_encode($project->till)}}" :next='{{json_encode($next)}}' :prev='{{json_encode($previous)}}'></single-project>
    {{--  --}}
    {{--  --}}
    {{--  --}}
</div>
@endsection
