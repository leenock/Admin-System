<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Infinitive Systems</title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=yes' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="{{ asset('assets_dashboard/css') }}/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <link href="{{ asset('assets_dashboard/css') }}/material-dashboard2.css?v=2.1.2" rel="stylesheet" />

  <!-- CSS Just for demo purpose, don't include it in your project -->
</head>
<body class="">
  <div class="wrapper ">
  <div class="sidebar" data-color="azure">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
    -->
      <div class="logo"><a href="https://www.infinitive.co.ke/" class="simple-text logo-normal">
          Dashboard
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="#">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#">
              <i class="material-icons">person</i>
              <p>Dummys</p>
            </a>
          </li> 
        </ul>
      </div>
    </div>

<div class="main-panel">
 <!-- Navbar -->
 <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#">Infinitive Administrator System</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
       
            <ul class="navbar-nav">
            @guest
            <li class="nav-item">
              <a class="nav-link" href="#">
              <i class="material-icons">fingerprint</i>Login
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
                </li>
              @else
              <li class="nav-item dropdown">
              <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
               
              
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
               
                  <a class="dropdown-item" href="{{ route('users.index') }}">Manage Users</a>
                  <a class="dropdown-item" href="{{ route('roles.index') }}">Manage Roles</a>
                  <a class="dropdown-item" href="{{ route('dummys.index') }}">Manage Dummy</a>
             
                </div>

                
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Mike John responded to your email</a>
                  <a class="dropdown-item" href="#">You have 5 new tasks</a>
                  <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="#">Another Notification</a>
                  <a class="dropdown-item" href="#">Another One</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">{{ Auth::user()->name }} </a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>

                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                  
                  </a>


                </div>
              </li>
              @endguest
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
      <main >
            @yield('content')
        </main>
     </div>
     <footer class="footer">
					<div class="container">
					
					<div class="copyright float-right">
						&copy;
						<script>
							document.write(new Date().getFullYear())
						</script>, made with <i class="material-icons">favorite</i> by
						<a href="https://leenock.co.ke/" target="_blank">leenocks</a>
					</div>
					</div>
				</footer>
</div>
</div>

 <!--   Core JS Files   -->
 <script src="{{ asset('assets_dashboard/js/core') }}/jquery.min.js" type="text/javascript"></script>
  <script src="{{ asset('assets_dashboard/js/core') }}/popper.min.js" type="text/javascript"></script>
  <script src="{{ asset('assets_dashboard/js/core') }}/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="{{ asset('assets_dashboard/js/plugins') }}/moment.min.js"></script>

<!-- Plugin for the momentJs  -->
  <script src="{{ asset('assets_dashboard/js/plugins') }}/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="{{ asset('assets_dashboard/js/plugins') }}/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="{{ asset('assets_dashboard/js/plugins') }}/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="{{ asset('assets_dashboard/js/plugins') }}/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="{{ asset('assets_dashboard/js/plugins') }}/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="{{ asset('assets_dashboard/js/plugins') }}/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="{{ asset('assets_dashboard/js/plugins') }}/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="{{ asset('assets_dashboard/js/plugins') }}/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="{{ asset('assets_dashboard/js/plugins') }}/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="{{ asset('assets_dashboard/js/plugins') }}/fullcalendar.min.js"></script>
  
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{ asset('assets_dashboard/js/plugins') }}/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="{{ asset('assets_dashboard/js/plugins') }}/arrive.min.js"></script>

  <!-- Chartist JS -->
  <script src="{{ asset('assets_dashboard/js/plugins') }}/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="{{ asset('assets_dashboard/js/plugins') }}/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('assets_dashboard/js') }}/material-dashboard.js?v=2.1.2" type="text/javascript"></script>


  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets_dashboard/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>
  <script>
    $(document).ready(function() {
      $('#datatables').DataTable({
        "pagingType": "full_numbers",
        "lengthMenu": [
          [10, 25, 50, -1],
          [10, 25, 50, "All"]
        ],
        responsive: true,
        language: {
          search: "_INPUT_",
          searchPlaceholder: "Search records",
        }
      });

      var table = $('#datatable').DataTable();

      // Edit record
      table.on('click', '.edit', function() {
        $tr = $(this).closest('tr');
        var data = table.row($tr).data();
        alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
      });

      // Delete a record
      table.on('click', '.remove', function(e) {
        $tr = $(this).closest('tr');
        table.row($tr).remove().draw();
        e.preventDefault();
      });

      //Like record
      table.on('click', '.like', function() {
        alert('You clicked on Like button');
      });
    });
  </script>
</body>
</html>