@extends('layouts.main')

@section('content')
    <h1>Instructie: {{ $instruction->project->name }}</h1>
    <?php
    $input = str_replace("\n","<br>",$instruction->text);
    $images = $instruction->images;
    ?>
    @foreach ($images as $key => $image )
        @if ($image->is_video == 0)            
            <?php $input = str_replace("%$image->code%", "<br><img src=\"$image->file_path\" alt=\"$image->code\" style=\"width:200px;\"><br>",$input); ?>
        @else
            <?php $input = str_replace("%$image->code%", "<br><iframe width=\"420\" height=\"315\" src=\"" . str_replace("youtube.com/watch?v=","youtube.com/embed/",$image->file_path) . "\"> </iframe><br>",$input); ?>
        @endif
    @endforeach
    <p>
    <?php echo $input ?>
    </p>
@endsection
