<!DOCTYPE html>
<html lang="ru">

<head>
  <meta content="charset=UTF-8" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title')</title>
  <base href="/">
  <link href="/css/app.css" rel="stylesheet">
  <link rel="icon" href="/img/favicon.png" type="image/x-icon">
</head>
<body>
  <div id="app">
    @include('partials.header')
    @yield('content')
    {{-- @include('partials.subscribe') --}}
    @include('partials.footer')
  </div>
  <script src="/js/app.js?3"></script>
  <script src="/js/asyncforms.js"></script>
  @stack('js')

</body>
</html>
