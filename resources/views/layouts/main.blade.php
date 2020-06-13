<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/page.min.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/content-tools.min.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('css/style.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('css/froala.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/codemirrow.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.datatable.css') }}" rel="stylesheet">
    <link href="{{ asset('css/alertify.min.css') }}" rel="stylesheet">

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
    <input type="hidden" id="token" value="{{ csrf_token() }}" name="">
    <style type="text/css">
        .header {
            background-image: url(img/bg-header.jpg);
            background-position: right bottom;
            height: 600px;
        }

        .fr-toolbar {
            border: none;
        }

        .fr-box.fr-basic .fr-wrapper {
            border: none;
        }

        .second-toolbar {
            border: none;
        }

        .second-toolbar a#logo {
            display: none;
        }
        
    </style>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-stick-dark" data-navbar="sticky">
      <div class="container">

        <div class="navbar-left">
          <button class="navbar-toggler" type="button">&#9776;</button>
          <a class="navbar-brand" href="/">
            <img class="logo-dark" src="{{ asset('img/logo.png') }}" alt="logo" width="82" height="82">
            <img class="logo-light" src="{{ asset('img/logo.png') }}" alt="logo" width="82" height="82">
          </a>
        </div>

        @if(Auth::user())
            <div class="navbar-right">
                <a href="#" class="mr-5">
                <i class="fa fa-user"></i> {{ Auth::user()->name }}
            </a>

            <a href="{{ route('logout') }}" class="mr-5"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
               <i class="fa fa-sign-out"></i> {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            </div>
        @endif
      </div>
    </nav><!-- /.navbar -->

    @yield('contents')

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row gap-y align-items-center">

                <div class="col-md-9">
                    <div class="nav justify-content-center justify-content-md-start">
                        <a class="nav-link" href="/">{{ date("Y") }} © Cavidel Limited</a>
                        <a class="nav-link" href="">Docs</a>
                        <a class="nav-link" href="">Changelog</a>
                    </div>
                </div>

                <div class="col-md-3 text-center text-md-right">
                    
                </div>
            </div>
        </div>
    </footer><!-- /.footer -->

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/page.min.js') }}"></script>
    <script src="{{ asset('js/froala.min.js') }}"></script>
    <script src="{{ asset('js/codemirrow.min.js') }}"></script>
    <script src="{{ asset('js/codemirrow-xml.min.js') }}"></script>
    <script src="{{ asset('js/page.min.js') }}"></script>
    <script src="{{ asset('js/jquery.datatable.js') }}"></script>
    <script src="{{ asset('js/bootstrap.datatable.js') }}"></script>
    <script src="{{ asset('js/alertify.min.js') }}"></script>
    {{-- <script src="{{ asset('js/content-tools.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('js/script.js') }}"></script> --}}
    @yield('scripts')
  </body>
</html>