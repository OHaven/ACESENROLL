<head>
    <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ACES Enrollment</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

</head>
<x-guest-layout>

        @if($stat == 0 && (strcmp(Auth::user()->role, "Student") == 1))
        @yield('pend')
        @elseif($stat == 0 && (strcmp(Auth::user()->role, "Student") == 0))
        @yield('regpend')
        @else
        @yield('rej')
        @endif
        

</x-guest-layout>
<div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

