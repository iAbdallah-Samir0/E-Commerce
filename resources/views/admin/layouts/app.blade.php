<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="apple-touch-icon" href="{{asset('assets/images/favicon.ico')}}">
    <link rel="icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon">
    <meta name="theme-color" content="#e87316">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Surfside Media">
    <meta name="msapplication-TileImage" content="{{asset('assets/images/favicon.ico')}}">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <!-- Favicons -->
    <link href="{{asset('assets/images/logo.png') }}" rel="icon">
    <link href="{{asset('assets/images/logo.png') }}" rel="apple-touch-icon">
    @include('admin.layouts.styles')
</head>
<body>

@include('admin.layouts.navbar')
@include('admin.layouts.sidebar')

@yield('content')

@include('admin.layouts.footer')
@include('admin.layouts.scripts')
</body>
</html>
