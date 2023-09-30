<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @extends('assets.styles')
    <link rel="stylesheet" href="{{ asset('assets/css/auth.css') }}">
    <title>@yield('page-title')</title>
</head>
<body>

    <nav>
        <a href="{{ route('getLoginPage') }}" class="flex items-center">
            <img src="{{ asset('assets/img/app-logo.gif') }}" alt="" class="app-logo">
            <p class="font-bold text-xl">WeConnect</p>
        </a>
    </nav>

    @yield('content')

</body>
</html>
