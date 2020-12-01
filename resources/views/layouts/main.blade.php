<!DOCTYPE html>
<html lang="en" style="height: 100%;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>QRIO</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('resources/css/style.css')}}">
    <link rel="icon" href="{{asset('resources/img/square_logo.png')}}">
</head>
<<<<<<< Updated upstream
<body style="position: relative; height: 100%; width: 100%; padding-bottom: 200px; margin: 0; min-height: 100%;">
    <header class="p-4 bg-dark text-light d-flex justify-content-around">
        <h1><img src="{{asset('resources/img/logo.png')}}" style="width: 18%!important" alt=""></h1>
        <nav class="m-2 p-1 float-right">
=======
<body style="min-height:100%">
    <header class="row p-4 bg-dark text-light d-flex justify-content-around">
        <img class="row-6" src="{{asset('resources/img/logo.png')}}" alt="">
        <nav class="m-2 p-1 row-6 float-right">
>>>>>>> Stashed changes
            <a href="" class="mr-3">Een link</a>
            <a href="" class="mr-3">Een link</a>
            <a href="" class="mr-3">Een link</a>
            <a href="" class="mr-3">Een link</a>
            <a href="" class="mr-3">Een link</a>
            
        </nav>
        <div class="logo_banner_index col-12">
            @yield('index_nav')
        </div>
            
    </header>
<<<<<<< Updated upstream
    <main style="height: 100%; background:url({{asset('resources/img/background.png')}})">
=======
    <main style="background:url({{asset('resources/img/background.png')}})">
>>>>>>> Stashed changes
        <div class="container">
            @yield("content")
        </div>
    </main>
    <footer class="bg-dark text-light" style="position: absolute; bottom: 0; width: 100%; height: 70px;">
        <p class="m-3 p-2">Made by CURIO students</p>
    </footer>
</body>
</html>