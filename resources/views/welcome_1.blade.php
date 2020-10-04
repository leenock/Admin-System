<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Infinitive Systems Academy
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="{{ asset('assets/css') }}/material-kit.css?v=2.0.7" rel="stylesheet" />
</head>

<body class="landing-page sidebar-collapse">
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="http://127.0.0.1:8000/">
        INFINITIVE ADMINISTRATION SYSTEMS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="material-icons">dashboard</i> Dashboard
            </a>
            @if (Route::has('login'))
            <div class="dropdown-menu dropdown-with-icons">
            @auth
              <a href="{{ url('/home') }}" class="dropdown-item">
                <i class="material-icons">widgets</i> HomePage
              </a>
              @else
              <a href="{{ route('login') }}" class="dropdown-item">
                <i class="material-icons">fingerprint</i> Login
              </a>
              @if (Route::has('register'))
              <a href="{{ route('register') }}" class="dropdown-item">
                <i class="material-icons">person_add</i> Create Account
              </a>
              @endif
                    @endauth
            </div>
            @endif

          </li>
         
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank" data-original-title="Follow us on Twitter" rel="nofollow">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank" data-original-title="Like us on Facebook" rel="nofollow">
              <i class="fa fa-facebook-square"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank" data-original-title="Follow us on Instagram" rel="nofollow">
              <i class="fa fa-instagram"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="page-header header-filter" data-parallax="true" style="background-image: url('../assets/img/background_images/background_1.jpg')">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="title">Your Story Starts With Us.</h1>
          <h4>Enabling Innovative Potentials</h4>
          <br>
          <a href="https://www.youtube.com/watch?v=U8r3oTVMtQ0" target="_blank" class="btn btn-danger btn-raised btn-lg">
            <i class="fa fa-play"></i> Watch video
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised">
   
  </div>
  <!--   Core JS Files   -->
  <script src="{{ asset('assets/js/core') }}/jquery.min.js" type="text/javascript"></script>
  <script src="{{ asset('assets/js/core') }}/popper.min.js" type="text/javascript"></script>
  <script src="{{ asset('assets/js/core') }}/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="{{ asset('assets/js/plugins') }}/moment.min.js"></script>

  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('assets/js') }}/material-kit.js?v=2.0.7" type="text/javascript"></script>
</body>
</html>