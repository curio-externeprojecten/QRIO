@extends('layouts.main')

@section('content')
    <h1>Maak een nieuwe instructie</h1>
    <form action="{{ route('instructions.store') }}" method="POST">
        @csrf
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
        <input type="submit" value="Maak een nieuwe instructie" class="btn btn-primary">
    </form>
@endsection