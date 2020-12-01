@extends('layouts.main')

@section('content')
    <h1>Projects List</h1>
    <ul class="list-group">
        @foreach ($projects as $project)
    <li class="list-group-item"> <div class="row"> <div class="col-sm">{{ $project['name'] }}</div> <div class="col-sm"> Created: {{ $project['createdate'] }} </div>  </div> </li>
        @endforeach
    </ul>
@endsection