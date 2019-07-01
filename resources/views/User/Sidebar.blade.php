<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>User Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="{{asset('assets/css/all.min.css')}}" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="{{asset('assets/css/sb-admin.css')}}" rel="stylesheet">

  <link href="{{asset('assets/css/admin-style.css')}}" rel="stylesheet">

  <!-- <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet"> -->

  <link href="{{asset('assets//css/all.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
  


</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">Admin Pannel</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
    <img src="{{asset('assets/img/toggle.png')}}" alt="JSOFT">
    </button>

   </nav>

   <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/admin')}}">
        <i class="fa fa-tachometer"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('addparts.create')}}">
        <i class="fa fa-motorcycle"></i>
          <span>Profile</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('partstranscation.index')}}">
        <i class="fa fa-motorcycle"></i>
          <span>Parts Transaction Details</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('book.index')}}">
        <i class="fa fa-motorcycle"></i>
          <span>Booking Details</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('transcation.index')}}">
        <i class="fa fa-cog"></i>
          <span>Renting Transaction Details</span></a>
      </li>
      <li>
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
        <i class="fa fa-power-off"></i>
          <span>Log Out</span></a>
      </li>
      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button class="btn btn-warning " href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">Logout</button>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
          </form>
        </div>
      </div>
    </div>
  </div>

</li>
    </ul>
    

    @yield('content')

    </div>
    <!-- /.content-wrapper -->

   </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('assets/js/jquery.min.js')}}"></script>
  

  <!-- Custom scripts for all pages-->
  <script src="{{asset('assets//js/sb-admin.min.js')}}"></script>

  

  <script src="{{asset('assets//js/bootstrap.bundle.min.js')}}"></script>



  

</body>

</html>
