@extends('layouts.main')

@section('content')
    <h1>Instructies</h1>
    <ul class="list-group">
        @foreach ($instructions as $instruction)
        <li class="list-group-item">
            <a href="{{route('instructions.show', $instruction->id)}}">{{ $instruction->name }} Created at: {{ $instruction->created_at }}</a>
        </li>
        @endforeach
    </ul>
@endsection