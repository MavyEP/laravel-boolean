<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('page-title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
  <body>
    @yield('content')
    <script src="{{ asset('js/main.js') }}" charset="utf-8"></script>
  </body>
</html>
