<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/vendor/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/vendor/mdbootstrap/css/mdb.min.css" />
    <link rel="stylesheet" href="/css/common.css" />
    @yield('style')
</head>
<body>

  @include('components.sidebar')

  <main style=" margin-left:260px;">
      @yield('content')

  </main>

  

  @include('components.footer')

  <script src="/vendor/jquery/jquery.slim.min.js"></script>
  <script src="/vendor/popperjs/popper.min.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="/vendor/mdbootstrap/js/mdb.min.js"></script>
  <script src="/js/common.js"></script>
  @yield('script')

</body>
</html>