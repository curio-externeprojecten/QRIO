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
            <div class="align-middle">
                <a href="http://qrio.test">
                    <img src="{{asset('resources/img/QRlogo.png')}}" alt="logo" width="125">
                </a>
            </div>
        </div>
        <nav class="m-2 p-1 row-6 float-right navbar navbar-expand-sm navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link mr-3" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a href="{{ url('/instructions') }}" class="mr-3 nav-link">Instructies</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/dashboard')}}" class="mr-3 nav-link">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a href=" {{ url('/register') }} " class="mr-3 nav-link">Register</a>
                    </li>
                    <li class="nav-item">
                        <a href=" {{ url('/login') }} " class="mr-3 nav-link">Login</a>
                    </li>
                </ul>
              
            </div>
        </nav>
    </header>
    <main style="background:url({{asset('resources/img/background.png')}})">
        <div class="container">
            @yield("content")
        </div>
    </main>
    <footer class="site-footer bg-dark text-light ">
        <div class="container">
            <p class="m-3 p-2">Made by CURIO students</p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>