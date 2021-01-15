@extends('layouts.main')

@section('content')
    <h1>Maak een nieuwe instructie</h1>
    <form action="{{ route('instructions.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Titel:</label>
            <input type="text" name="title">
        </div>
        <div class="form-group">
            <label for="text">Text van instructie:</label>
            <textarea class="form-control" name="text" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
            <label for="project">Project:</label>
            <select name="project" id="project">
                @foreach ($projects as $project)
                    <option value="{{$project->id}}">{{$project->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="is_visible">Moet het zichtbaar zijn?</label>
            <input type="checkbox" name="is_visible" id="is_visible" value="1">
        </div>
        <input type="submit" value="Maak een nieuwe instructie" class="btn btn-primary">
    </form>
@endsection