<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Basic Website</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @include('inc.navbar')

    <div class="container">
        @if (Request::is('home'))
            @include('inc.showcase')            
        @endif
        <div class="row">
            <div class="col-md-8 col-lg-8">
                @if (count($errors)>0)
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">
                            {{$error}}
                        </div>
                    @endforeach
                @endif
                @yield('content')
            </div>
            <div class="col-md-4 col-lg-4">
                @include('inc.sidebar')
            </div>
        </div>
    </div>

    <footer class="text-center bg-dark text-light py-2 my-5">
        <p>Copyright 2022 &copy; AyBeri Tech</p>
    </footer>
</body>
</html>