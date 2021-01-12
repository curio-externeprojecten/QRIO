@extends('layouts.main')

@section('content')
    <h1>Instructies</h1>
    <a href="{{ route('instructions.create') }}" class="btn btn-primary" style="margin-bottom:10px;">Nieuwe instructie</a>
    <ul class="list-group">
        @foreach ($instructions as $instruction)
            <li class="list-group-item">
                <a href="{{route('instructions.show', $instruction->id)}}">{{ $instruction->project->name }} Created at: {{ $instruction->created_at }}</a>
            </li>
        @endforeach
    </ul>
@endsection