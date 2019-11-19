
<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title> Lotteria </title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Favicon --}}
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('lotteria_logo.png') }}">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('template/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Fontawesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('fontawesome/css/all.min.css') }}">

    <!-- Data Table CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('template/datatables/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('template/datatables/buttons.bootstrap4.min.css') }}">
    
    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('template/js/jquery.min.js') }}"></script>
    <script src="{{ asset('template/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Data Table JS -->
    <script type="text/javascript" src="{{ asset('template/datatables/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('template/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('template/datatables/dataTables.buttons.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('template/datatables/buttons.bootstrap4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('template/datatables/jszip.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('template/datatables/pdfmake.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('template/datatables/vfs_fonts.js') }}"></script>
    <script type="text/javascript" src="{{ asset('template/datatables/buttons.html5.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('template/datatables/buttons.print.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('template/datatables/buttons.colVis.min.js') }}"></script>

  <script type="text/javascript">
      $(document).ready(function() {
      var table = $('#example').DataTable( {
          lengthChange: false,
          buttons: [ 'copy', 'csv', 'excel', 'pdf', 'print' ]
      } );
   
      table.buttons().container()
          .appendTo( '#example_wrapper .col-md-6:eq(0)' );
      });
    </script>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="{{ asset('template/css/footer.css') }}" rel="stylesheet">
  </head>
  <body class="d-flex flex-column h-100">
    <header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-danger">
    <div class="container">
      <a class="navbar-brand" href="#"> <img src="{{ asset('lotteria_logo_white.png') }}" class="img-fluid" style="width: 50px; height: 50px;"> Lotteria
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          @hasrole('admin')
          <li class="nav-item {{ Request::segment(1) === 'home' ? 'active' : '' }}">
            <a class="nav-link" href="{{ asset('home') }}">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>

          <li class="nav-item {{ Request::segment(1) === 'report' ? 'active' : '' }}">
            <a class="nav-link" href="{{ asset('report') }}"> Report
              <span class="sr-only">(current)</span>
            </a>
          </li>

          <li class="nav-item {{ Request::segment(1) === 'category' ? 'active' : '' }}">
            <a class="nav-link" href="{{ asset('category') }}"> Category </a>
          </li>

          <li class="nav-item {{ Request::segment(1) === 'item' ? 'active' : '' }}">
            <a class="nav-link" href="{{ asset('item') }}"> Menus </a>
          </li>
          
          <li class="nav-item {{ Request::segment(1) === 'staff' ? 'active' : '' }}">
            <a class="nav-link" href="{{ asset('staff') }}"> Staff </a>
          </li>

          @endrole

          @hasrole('staff')
          

          <li class="nav-item {{ Request::segment(1) === 'sale' ? 'active' : '' }}">
            <a class="nav-link" href="{{ asset('sale') }}"> Sale </a>
          </li>

          @endrole


          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" > Logout </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>

          </li>

          <li class="nav-item float-right">
            <a class="nav-link" href="{{ route('logout') }}">
              {{ Auth::user()->name }}  
              <img src="{{ Auth::user()->photo }}" class="img-fluid" style="width: 30px; height: 30px"> 
              
            </a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
</header>

<!-- Begin page content -->
<main role="main" class="flex-shrink-0 mt-5">
  @yield("content")
</main>

<footer class="footer mt-auto py-3">
  <div class="container-fluid">
    <div class="row">
      <div class="col-10 py-3">
        <span class="text-muted"> Copyright &copy; 2019 </span>
      </div>
      <div class="col-2 float-right">
        <img src="{{ asset('lotteria_voucher.png') }}" class="img-fluid">
      </div>
    </div>
  </div>
    
</footer>

</body>
</html>
