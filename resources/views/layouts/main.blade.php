<!DOCTYPE html>
<html lang="en" style="height: 100%">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>QRIO</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('resources/css/style.css')}}">

</head>
<body style="min-height:100%">
    <header class="row p-4 bg-dark text-light d-flex justify-content-around">
        <img src="{{asset('resources/img/logo.png')}}" alt="">
        <nav class="m-2 p-1 float-right">
            <a href="" class="mr-3">Een link</a>
            <a href="" class="mr-3">Een link</a>
            <a href="" class="mr-3">Een link</a>
            <a href="" class="mr-3">Een link</a>
            <a href="" class="mr-3">Een link</a>
        </nav>
    </header>
    <main style="background:url({{asset('resources/img/background.png')}})">
        <div class="container" style="background:rgba(245,245,245,0.7)">
            @yield("content")
        </div>
    </main>
    <footer>
        <p>Made by CURIO students</p>
    </footer>
</body>
</html>