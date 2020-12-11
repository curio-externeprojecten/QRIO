@extends('layouts.main')

@section('content')
    <h1>Projects</h1>
    <ul class="list-group">
        @foreach ($projects as $project)
        <li class="list-group-item">
            {{ $project->name }} Created at: {{ $project->created_at }}
        </li>
        @endforeach
    </ul>   
@endsection