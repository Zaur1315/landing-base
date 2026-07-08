<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title', config('company.meta_title'))</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('description', config('company.meta_description'))">
    <meta name="robots" content="index, follow">

    <meta property="og:title" content="@yield('title', config('company.meta_title'))">
    <meta property="og:description" content="@yield('description', config('company.meta_description'))">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">

    <link rel="canonical" href="{{ url()->current() }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @include('partials.meta-pixel')
</head>
<body>
@yield('content')
</body>
</html>
