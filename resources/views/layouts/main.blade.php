<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="css/page.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="icon" href="img/favicon.png">

    <!--  Open Graph Tags -->
    <meta property="og:title" content="TheDocs — Online Documentation Template">
    <meta property="og:description" content="A powerful, responsive, and high-performance html online documentation template which can help you rapidly develop your next software’s documentation.">
    <meta property="og:image" content="thedocs/assets/img/og-img.jpg">
    <meta property="og:url" content="thedocs/">
    <meta name="twitter:card" content="summary_large_image">
  </head>

  <body>
    <style type="text/css">
        .header {
            background-image: url(img/bg-header.jpg);
            background-position: right bottom;
            height: 600px;
        }
    </style>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-stick-dark" data-navbar="sticky">
      <div class="container">

        <div class="navbar-left">
          <button class="navbar-toggler" type="button">&#9776;</button>
          <a class="navbar-brand" href="../index.html">
            <img class="logo-dark" src="img/logo.png" alt="logo" width="82" height="82">
            <img class="logo-light" src="img/logo.png" alt="logo" width="82" height="82">
          </a>
        </div>

        <section class="navbar-mobile">
          <ul class="nav nav-navbar">
            
          </ul>
        </section>

        <a class="btn btn-sm btn-round btn-primary" href="" target="_blank">Get Started</a>

      </div>
    </nav><!-- /.navbar -->

    @yield('contents')

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row gap-y align-items-center">

                <div class="col-md-9">
                    <div class="nav justify-content-center justify-content-md-start">
                        <a class="nav-link" href="/">Home</a>
                        <a class="nav-link" href="">Docs</a>
                        <a class="nav-link" href="">Changelog</a>
                    </div>
                </div>

                <div class="col-md-3 text-center text-md-right">
                    <a href="/">© Cavidel Limited</a>
                </div>
            </div>
        </div>
    </footer><!-- /.footer -->


    <!-- Scripts -->
    <script src="js/page.min.js"></script>
    <script src="js/script.js"></script>
    @yield('scripts')
  </body>
</html>