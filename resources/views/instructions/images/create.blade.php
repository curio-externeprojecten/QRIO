@extends('layouts.main')

@section('content')
    <h1>Voeg Image toe</h1>
    @if ($message == "success")
        <p>Successvol toegevoegd</p>
    @endif
    <form action="{{ route('instructions.images.store', ['id' => $instruction->id]) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="link">De link</label>
            <input type="text" name="link" id="link">
        </div>
        <div class="form-group">
            <label for="code">De code</label>
            <input type="text" name="code" id="code">
        </div>
        <div class="form-group">
            <label for="is_video">Is het een video?</label>
            <input type="checkbox" name="is_video" id="is_video" value="1">
        </div>
        <input type="submit" value="Voeg bijlage toe aan instructie" class="btn btn-primary">
    </form>
    <a href="{{ route('instructions.show', ['id' => $instruction->id]) }}" class="btn btn-primary" style="margin:5px 0;">Bekijk instructie</a>
@endsection