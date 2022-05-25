<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titlePage')</title>

    <link rel="stylesheet" href="{{ asset('css/app.css')}}">

    <script src="{{ asset('js/app.js')}}" defer></script>
</head>
<body>
    @include('partials.header')

    @yield('content')

    @include('partials.footer')


</body>
</html>
