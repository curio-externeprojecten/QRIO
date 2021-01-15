@extends('layouts.main')

@section('content')
    <h1>Pas de instructie aan</h1>
    <form action="{{ route('instructions.update', $instruction->id) }}" method="POST">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="text">Text van instructie:</label>
            <textarea class="form-control" name="text" cols="30" rows="10">{{ $instruction->text }}</textarea>
        </div>
        <div class="form-group">
            <label for="project">Project:</label>
            <select name="project" id="project">
                @foreach ($projects as $project)
                    <option value="{{$project->id}}" @if ($project->id == $instruction->project->id) selected @endif}>{{$project->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="is_visible">Moet het zichtbaar zijn?</label>
            <input type="checkbox" name="is_visible" id="is_visible" value="1" @if ($instruction->visible == 1) checked @endif>
        </div>
        <input type="submit" value="Update de instructie" class="btn btn-primary">
    </form>
@endsection