<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('styles/dashboard/styles.css') }}">

    <title>@yield('title')</title>
</head>
<body>
    @yield('content')
    <script src="{{ asset('javascripts/app.js') }}"></script>
    @yield('scripts')
</body>
</html>
