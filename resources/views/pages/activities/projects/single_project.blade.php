@extends('layouts.app')
@section('title')
    <title>{{$project->title}}</title>
@endsection
@section('content')
<div class="w-100">
    {{--  --}}
    {{--  --}}
    <activites-logo content="Projekty" selected="projekty"></activites-logo>

    {{--  --}}
    {{--  --}}
    {{--  --}}
    <single-project :title="{{json_encode($project->title)}}" :content="{{json_encode($project->content)}}" :img="{{json_encode($project->image)}}" type="view" :since="{{json_encode($project->since)}}" :till="{{json_encode($project->till)}}" :next='{{json_encode($next)}}' :prev='{{json_encode($previous)}}' :directory='{{json_encode($project->directory)}}'></single-project>
    {{--  --}}
    {{--  --}}
    {{--  --}}
</div>
@endsection
