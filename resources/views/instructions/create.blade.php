@extends('layouts.main')

@section('content')
    <h1>Maak een nieuwe instructie</h1>
    <form action="" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Titel van instructie:</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="text">Text van instructie:</label>
            <textarea class="form-control" name="text" cols="30" rows="10"></textarea>
        </div>
        <input type="submit" value="Maak een nieuwe instructie" class="btn btn-primary">
    </form>
@endsection