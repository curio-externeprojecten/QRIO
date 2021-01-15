@extends('layouts.main')

@section('content')
    <h1>Instructies</h1>
    <a href="{{ route('instructions.create') }}" class="btn btn-primary" style="margin-bottom:10px;">Nieuwe instructie</a>
    <ul class="list-group">
        @foreach ($instructions as $instruction)
            <li class="list-group-item">
                <a href="{{route('instructions.show', $instruction->id)}}">{{ $instruction->title }} Created at: {{ $instruction->created_at }}</a> 
                @if (Auth::id() == $instruction->user_id)
                <a href="{{route('instructions.images.create', $instruction->id)}}" class="btn btn-info float-right">Voeg afbeelding toe</a>
                <a href="{{route('instructions.edit', $instruction->id)}}" class="btn btn-warning float-right" style="margin:0 10px;">Pas aan</a>
                <a href="{{route('instructions.delete', $instruction->id)}}" class="btn btn-danger float-right" style="margin:0 10px;">Verwijder</a>
                @endif
                <a href="{{route('instructions.show.qr', $instruction->id)}}" style="margin:0 10px;">
                <?php
                    $route = route('instructions.show', $instruction->id);
                    $qr = QRCode::text($route,'public/resources/img/qr/test.png')->svg();
                ?>
                </a>
            </li>
            
            {{$qr}}
        @endforeach
    </ul>
@endsection