<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Administration Systems</title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=yes' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="{{ asset('assets_dashboard/css') }}/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <link href="{{ asset('assets_dashboard/css') }}/material-dashboard2.css?v=2.1.2" rel="stylesheet" />
 

<style>
/*Profile Pic Start*/
.picture-container{
    position: relative;
    cursor: pointer;
    text-align: center;
}
.picture{
    width: 106px;
    height: 106px;
    background-color: #999999;
    border: 4px solid #CCCCCC;
    color: #FFFFFF;
    border-radius: 50%;
    margin: 0px auto;
    overflow: hidden;
    transition: all 0.2s;
    -webkit-transition: all 0.2s;
}
.picture:hover{
    border-color: #df2869;
}
.content.ct-wizard-green .picture:hover{
    border-color: #05ae0e;
}
.content.ct-wizard-blue .picture:hover{
    border-color: #3472f7;
}
.content.ct-wizard-orange .picture:hover{
    border-color: #ff9500;
}
.content.ct-wizard-red .picture:hover{
    border-color: #ff3b30;
}
.picture input[type="file"] {
    cursor: pointer;
    display: block;
    height: 100%;
    left: 0;
    opacity: 0 !important;
    position: absolute;
    top: 0;
    width: 100%;
}

.picture-src{
    width: 100%;
    
}
/*Profile Pic End*/
</style>

  <!-- CSS Just for demo purpose, don't include it in your project -->
</head>
<body class="">
  <div class="wrapper ">
  <div class="sidebar" data-color="azure" data-background-color="black">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
    -->
      <div class="logo"><a href="https://www.infinitive.co.ke/" class="simple-text logo-normal">
          Dashboard
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active">
            <a class="nav-link" href="http://127.0.0.1:8000/infinitive_systems">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link collapsed" data-toggle="collapse" href="#students" aria-expanded="false">
              <i class="material-icons">view_module</i>
              <p> Admissions
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="students" style="">
              <ul class="nav">
              @can('student-create')
                <li class="nav-item ">
                  <a class="nav-link" href="{{ route('students.create') }}">
                    <span class="sidebar-mini"> ADM </span>
                    <span class="sidebar-normal"> Register </span>
                  </a>
                </li>
                @endcan
                <li class="nav-item ">
                  <a class="nav-link" href="{{ route('students.index') }}">
                    <span class="sidebar-mini"> ST </span>
                    <span class="sidebar-normal"> Students </span>
                  </a>
                </li>
                
              </ul>
            </div>
          </li>
          <li class="nav-item ">
            <a class="nav-link collapsed" data-toggle="collapse" href="#finance" aria-expanded="false">
              <i class="material-icons">qr_code_scanner</i>
              <p> Finance
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="finance" style="">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href="#">
                    <span class="sidebar-mini"> S.F </span>
                    <span class="sidebar-normal"> Student finance </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="#">
                    <span class="sidebar-mini"> C.F </span>
                    <span class="sidebar-normal"> course finance </span>
                  </a>
                </li>
                
              </ul>
            </div>
          </li>
          <li class="nav-item ">
            <a class="nav-link collapsed" data-toggle="collapse" href="#system_users" aria-expanded="false">
              <i class="material-icons">people_outline</i>
              <p> system Users
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="system_users" style="">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href="{{ route('users.index') }}">
                    <span class="sidebar-mini"> M.U </span>
                    <span class="sidebar-normal">Manage Users </span>
                  </a>
                </li>
                @can('user-create')
                <li class="nav-item ">
                  <a class="nav-link" href="{{ route('users.create') }}">
                    <span class="sidebar-mini"> N.U </span>
                    <span class="sidebar-normal"> Create New Users </span>
                  </a>
                </li>
                @endcan
              </ul>
            </div>
          </li>
          <li class="nav-item ">
            <a class="nav-link collapsed" data-toggle="collapse" href="#system_roles" aria-expanded="false">
              <i class="material-icons">group_work</i>
              <p> user Roles
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="system_roles" style="">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href="{{ route('roles.index') }}">
                    <span class="sidebar-mini"> M.R </span>
                    <span class="sidebar-normal">Manage Roles </span>
                  </a>
                </li>
                @can('role-create')
                <li class="nav-item ">
                  <a class="nav-link" href="{{ route('roles.create') }}">
                    <span class="sidebar-mini"> C.N.R </span>
                    <span class="sidebar-normal"> create new Role </span>
                  </a>
                </li>
                @endcan
              </ul>
            </div>
          </li>
          <li class="nav-item ">
            <a class="nav-link collapsed" data-toggle="collapse" href="#examinations" aria-expanded="false">
              <i class="material-icons">sticky_note_2</i>
              <p> Examinations (EMS)
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="examinations" style="">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href="#">
                    <span class="sidebar-mini"> E.MS </span>
                    <span class="sidebar-normal"> Exams </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="#">
                    <span class="sidebar-mini"> A.S.S </span>
                    <span class="sidebar-normal"> Assingment </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="#">
                    <span class="sidebar-mini"> A.T.T </span>
                    <span class="sidebar-normal"> Attendance </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="#">
                    <span class="sidebar-mini"> T.T </span>
                    <span class="sidebar-normal"> Timetable </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item ">
            <a class="nav-link collapsed" data-toggle="collapse" href="#reports" aria-expanded="false">
              <i class="material-icons">topic</i>
              <p> Reports
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="reports" style="">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href="#">
                    <span class="sidebar-mini"> S.I </span>
                    <span class="sidebar-normal">Students List Report </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="#">
                    <span class="sidebar-mini"> S.I </span>
                    <span class="sidebar-normal"> Sub item </span>
                  </a>
                </li>
                
              </ul>
            </div>
          </li>

          <li class="nav-item ">
            <a class="nav-link" href="#">
              <i class="material-icons">directions_walk</i>
              <p>Visitors log</p>
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
            <a class="navbar-brand" href="#"> Admission System</a>
          </div>
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
                  <i class="material-icons">settings</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
               
              
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                   
                  <a class="dropdown-item" href="#"><i class="material-icons">power_settings_new</i> Edit& configuration</a>   
                  <a class="dropdown-item" href="#"><i class="material-icons">supervised_user_circle</i> Summary</a>
             
                </div>

                
              </li>
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

  <script src="{{ asset('assets_dashboard/js/core') }}/bootstrap-confirmation.js" type="text/javascript"></script>

  <script src="{{ asset('assets_dashboard/js/plugins') }}/perfect-scrollbar.jquery.min.js"></script>
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
 <!-- Place this tag in your head or just before your close body tag. -->
 <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Chartist JS -->
  <script src="{{ asset('assets_dashboard/js/plugins') }}/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="{{ asset('assets_dashboard/js/plugins') }}/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('assets_dashboard/js') }}/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
  <script src="{{ asset('assets_dashboard/demo') }}/demmo.js" type="text/javascript"></script>

 <!-- Sharrre libray -->
 <script src="{{ asset('assets_dashboard/js/core') }}/jquery.sharrre.js" type="text/javascript"></script>



  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets_dashboard/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>


<script>
  function myFunction() {
      if(!confirm("confirm you want to edit"))
      event.preventDefault();
  }
 </script>

<script>
    $('.delete-user').click(function(e){
        e.preventDefault() // Don't post the form, unless confirmed
        if (confirm('Are you sure you want to delete user?')) {
            // Post the form
            $(e.target).closest('form').submit() // Post the surrounding form
        }
    });
</script>

<script>
    $('.delete-role').click(function(e){
        e.preventDefault() // Don't post the form, unless confirmed
        if (confirm('Are you sure you want to delete role?')) {
            // Post the form
            $(e.target).closest('form').submit() // Post the surrounding form
        }
    });
</script>

<script>
    $('.delete-student').click(function(e){
        e.preventDefault() // Don't post the form, unless confirmed
        if (confirm('Are you sure you want to delete student?')) {
            // Post the form
            $(e.target).closest('form').submit() // Post the surrounding form
        }
    });
</script>

<script>

function allLetter(inputtxt) {
    var letters = /^[a-z]*$/i;
    if (!inputtxt.value.match(letters)) {
        alert('Kindly  input letters only');
    }
}
</script>
<script>
function allnumbers(inputtxt){

  var numbers = /^[0-9]+$/;
  if (!inputtxt.value.match(numbers)) {
        alert('Please input numeric characters only');
    }

}
</script>
<script>
 function required(inputtx) 
   {
     if (inputtx.value.length == 0)
      { 
         alert("message");  	
         return false; 
      }  	
      return true; 
    } 
</script>

 <script>
    $(document).ready(function() {
      // Initialise the wizard
      demo.initWizard();
      setTimeout(function() {
        $('.card.card-wizard').addClass('active');
      }, 600);
    });

    $(document).ready(function(){
// Prepare the preview for profile picture
    $("#wizard-picture").change(function(){
        readURL(this);
    });
});
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
        }
        reader.readAsDataURL(input.files[0]);
    }
}
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
  <script>
    $(document).ready(function() {
      // initialise Datetimepicker and Sliders
      md.initFormExtendedDatetimepickers();
      if ($('.slider').length != 0) {
        md.initSliders();
      }
    });
  </script>

</body>
</html>