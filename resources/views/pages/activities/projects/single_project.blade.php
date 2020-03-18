@extends('layouts.app')
@section('title')
    <title>{{$project->title}}</title>
@endsection
@section('content')
<div class="w-100">
    {{-- {{dd(json_decode($project))}} --}}
    <projects-logo></projects-logo>
    <single-project :title="{{json_encode($project->title)}}" :content="{{json_encode($project->content)}}" :img="{{json_encode($project->image)}}" type="view" :since="{{json_encode($project->since)}}" :till="{{json_encode($project->till)}}" :next='{{json_encode($next)}}' :prev='{{json_encode($previous)}}'></single-project>
    {{-- <single-project :project='{{json_encode($project)}}' :next='{{json_encode($next)}}' :previous='{{json_encode($previous)}}'></single-project> --}}
</div>
@endsection
