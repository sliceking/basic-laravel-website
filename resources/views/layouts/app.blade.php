<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Basic Website</title>
</head>
<body>
    @include('inc.navbar')
    <div class="container">
        @if (Request::is('/'))
            @include('inc.showcase')
        @endif

        @include('inc.messages')

        <div class="row">
            <div class="col-md-8">
                @yield('content')
            </div>
            <div class="col-md-4">
                @include('inc.sidebar')
            </div>
        </div>
    </div>

    <footer id="footer" class="text-center">
        <p>Copyright 2019 &copy; sw</p>
    </footer>
</body>
</html>
