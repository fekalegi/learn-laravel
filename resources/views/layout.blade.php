<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">{{ config('app.name') }}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{url('/') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/item') }}">Item</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/meal') }}">Meals</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/student') }}">Students</a>
            </li>
        </ul>
    </div>
</nav>

<div class="flex-center position-ref full-height">
    <div class="container text-center">
        <div class="col-12">
            <h1>Aplikasi Web Lanjut</h1>
        </div>
        @yield('content')
    </div>
</div>
</body>
</html>
