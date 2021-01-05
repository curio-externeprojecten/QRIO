@extends('layouts.main')

@section('content')
    <h1>Projects</h1>
    <ul class="list-group">
        @foreach ($projects as $project)
        <li class="list-group-item">
            <a href="{{route('projects.show', $project->id)}}">{{ $project->name }} Created at: {{ $project->created_at }}</a>
        </li>
        @endforeach
    </ul>   
@endsection