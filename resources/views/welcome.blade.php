<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('landing_page/img') }}/apple-icon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Infinitive Systems Academy</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Local Files -->
  <link href="{{ asset('landing_page/css') }}/bootstrap.min.css" rel="stylesheet" />
  <link href="{{ asset('landing_page/css') }}/paper-kit.css?v=2.2.0" rel="stylesheet" />
  <link href="{{ asset('landing_page/css') }}/font-awesome.min.css" rel="stylesheet" />
  <link href="{{ asset('landing_page/css') }}/font-family.min.css" rel="stylesheet" />
</head>
<body class="index-page sidebar-collapse">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="300">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="http://127.0.0.1:8000/">
          Infinitive Administration Systems 
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation">
        <ul class="navbar-nav">
            <div class="dropdown">
              <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dashboard
              </a>
                  @if (Route::has('login'))
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  @auth
                <a class="dropdown-item" href="{{ url('/infinitive_systems') }}">Admin-Panel</a>
                @else
                <a class="dropdown-item" href="{{ route('login') }}">login</a>
                @endauth
              </div>
              @endif
            </div>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="#" target="_blank">
              <i class="fa fa-twitter"></i>
              <p class="d-lg-none">Twitter</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="#" target="_blank">
              <i class="fa fa-facebook-square"></i>
              <p class="d-lg-none">Facebook</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="#" target="_blank">
              <i class="fa fa-instagram"></i>
              <p class="d-lg-none">Instagram</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Star on GitHub" data-placement="bottom" href="#" target="_blank">
              <i class="fa fa-github"></i>
              <p class="d-lg-none">GitHub</p>
            </a>
          </li>    
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="page-header section-dark" style="background-image: url('./landing_page/img/antoine-barres.jpg')">
    <div class="filter"></div>
    <div class="content-center">
      <div class="container">
        <div class="title-brand">
          <h1 class="presentation-title">Infinitive Systems Academy</h1>
          <div class="fog-low">
            <img src="{{ asset('landing_page/img') }}/fog-low.png" alt="">
             </div>
             <div class="fog-low right">
            <img src="{{ asset('landing_page/img') }}/fog-low.png" alt="">
          </div>
        </div>
        <h2 class="presentation-subtitle text-center">Enabling Innovative Potentials </h2>
      </div>
    </div>
   <div class="moving-clouds" style="background-image: url('{{ asset('landing_page/img') }}/clouds.png'); "></div>
  </div>
    <!--   Core JS Files   -->
   <script src="{{ asset('landing_page/js/core') }}/jquery.min.js" type="text/javascript"></script>
   <script src="{{ asset('landing_page/js/core') }}/bootstrap.min.js" type="text/javascript"></script>
    <!-- Control Center for Paper Kit: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('landing_page/js/') }}/paper-kit.js?v=2.2.0" type="text/javascript"></script>
</body>
</html>
