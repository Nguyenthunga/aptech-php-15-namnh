<html>

<head>
  <title>App Name - @yield('title')</title>
</head>

<body>
  <header>
    Hehe header
  </header>
  @include('master.whoops')
  <div class="container">
    @yield('content')
  </div>

  <footer>
    hehe footer
  </footer>
</body>

</html>
