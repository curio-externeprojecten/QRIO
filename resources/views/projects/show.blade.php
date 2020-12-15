@extends('layouts.main')

@section('content')
    <h1>Instructie: {{ $project->name }}</h1>
    <p>{{ $project->text }}</p>
@endsection