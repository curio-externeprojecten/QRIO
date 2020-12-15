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
<body style="min-height:100%">
    <header class="row p-4 bg-dark text-light d-flex justify-content-around">
        <div class="logo_banner_index">
            @yield('index_nav')
        </div>
        <nav class="m-2 p-1 row-6 float-right">
            <a href="" class="mr-3">Een link</a>
            <a href="" class="mr-3">Een link</a>
            <a href="" class="mr-3">Een link</a>
            <a href="http://qrio.test/register" class="mr-3">Register</a>
            <a href="http://qrio.test/login" class="mr-3">Login</a>
        </nav>
        
            
    </header>
    <main style="background:url({{asset('resources/img/background.png')}})">
        <div class="container">
            @yield("content")
        </div>
    </main>
    <footer class="bg-dark text-light" style="position: absolute; bottom: 0; width: 100%; height: 70px;">
        <p class="m-3 p-2">Made by CURIO students</p>
    </footer>
</body>
</html>