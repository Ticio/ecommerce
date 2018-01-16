<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <title>@yield('title')</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="application-name" content="C-Market">
    <meta name="author" content="Ticio Victoriano">
    <meta name="keywords" content="ecommerce, shops, snacks, shops, sellers, buyers, php, html, bootstrap ...">
    <meta name="description:" content="">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    @yield('links')
    <title>@yield('page-title')</title>
  </head>

  <body>
    @yield('nav-section')
      
    <div class="container-fluid" id="slider">
      @yield('container-one-section-one')
    </div>

    <div class="container-fluid">
      @yield('container-one-section-two')
    </div>

    <div class="container">
      @yield('container-two-section-one')
      @yield('container-two-section-two')
    </div>

    @yield('footer-section')

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    @yield('js-links')
  </body>
</html>
