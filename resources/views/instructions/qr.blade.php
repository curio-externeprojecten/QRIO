<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        svg {
            transform: scale(6);
            margin-left: 45%;
            margin-top: 20%;
        }
    </style>
</head>
<body>
    <h1>{{$instruction->title}}</h1>
    <?php
    $route = route('instructions.show', $instruction->id);
    $qr = QRCode::text($route,'public/resources/img/qr/test.png')->svg();
    ?>
</body>
</html>