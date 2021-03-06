<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>
    @yield('title', 'My Website')
    </title>
</head>

<body>

<header>
@include('layout.header')
</header>

    <div class="content">
        @yield('content')
    </div>
<footer>
@include('layout.footer')
</footer>
</body>

</html>
