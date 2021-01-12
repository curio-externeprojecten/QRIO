@extends('layouts.main')

@section('content')
    <h1>Instructie: {{ $instruction->name }}</h1>
    <p>{{ $instruction->text }}</p>
@endsection