<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">


  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('lotteria_logo.png') }}">

  <title> Lotteria </title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('template/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Fontawesome -->
  <link rel="stylesheet" type="text/css" href="{{ asset('fontawesome/css/all.min.css') }}">

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('template/js/jquery.min.js') }}"></script>
  <script src="{{ asset('template/js/bootstrap.bundle.min.js') }}"></script>

  

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-danger static-top">
    <div class="container">
      <a class="navbar-brand" href="#"> Lotteria </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="category"> Category </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="sale"> Sale </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="item"> Menus </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout"> Logout </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  @yield("content")
  

  

</body>

</html>
