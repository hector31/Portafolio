<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hector Narvaez</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/blog-home.css')}}" rel="stylesheet">


    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href={{asset("css/open-iconic-bootstrap.min.css")}}>
    <link rel="stylesheet" href={{asset("css/animate.css")}}>
    <link rel="stylesheet" href={{asset("css/owl.carousel.min.css")}}>
    <link rel="stylesheet" href={{asset("css/owl.theme.default.min.css")}}>
    <link rel="stylesheet" href={{asset("css/magnific-popup.css")}}>
    <link rel="stylesheet" href={{asset("css/aos.css")}}>
    <link rel="stylesheet" href={{asset("css/ionicons.min.css")}}>
    <link rel="stylesheet" href={{asset("css/bootstrap-datepicker.css")}}>
    <link rel="stylesheet" href={{asset("css/jquery.timepicker.css")}}>
    <link rel="stylesheet" href={{asset("css/flaticon.css")}}>
    <link rel="stylesheet" href={{asset("css/icomoon.css")}}>
    <link rel="stylesheet" href={{asset("css/style.css")}}>

</head>

<body>

  <div class="KW_progressContainer">
    <div class="KW_progressBar">

    </div>
  </div>
  <div class="page">
  <nav id="colorlib-main-nav" role="navigation">
    <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle active"><i></i></a>
    <div class="js-fullheight colorlib-table">
      <div class="img" style="background-image: url(images/foto_perfil.jpg);"></div>
      <div class="colorlib-table-cell js-fullheight">
        <div class="row no-gutters">
          <div class="col-md-12 text-center">
            <h1 class="mb-4"><a href="{{route('home')}}" class="logo">Hector Narvaez</a></h1>
            <ul class="navbar-nav">
              <li class="active"><a href="{{route('home')}}"><span><small>01</small>Inicio</span></a></li>
              <li><a href="{{route('resume')}}"><span><small>02</small>Hoja de Vida</span></a></li>
              <li><a href="{{route('services')}}"><span><small>03</small>Servicios</span></a></li>
              <li><a href="{{route('portfolio')}}"><span><small>04</small>Portafolio</span></a></li>
              {{-- <li><a href="blog.html"><span><small>05</small>Blog</span></a></li> --}}
              <li><a href="{{route('contact')}}"><span><small>05</small>Contacto</span></a></li>
              @if(Auth::check())
                  <li class="nav-item">
                      <a href="{{route('admin.index')}}" ><span><small>06</small>Administrador</span></a>
                  </li>
              @else
                  
                  <li class="nav-item">
                    <a href="/login" ><span><small>06</small>Ingresar</span></a>
                  </li>
                  <li class="nav-item">
                    <a href="/register" ><span><small>07</small>Registrarse</span></a>
                  </li>
              @endif
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>
  
  <div id="colorlib-page">
    <header>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="colorlib-navbar-brand">
              <a class="colorlib-logo" href="{{route('home')}}"><span class="logo-img" style="background-image: url(images/foto_perfil2.jpg);"></span>Hector Narvaez</a>
            </div>
            <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
          </div>
        </div>
      </div>
    </header>
  


     @yield('content') {{--Depende de menu puede ser home,services,portafolio --}}

    
    
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-5 text-center">
            <div class="ftco-footer-widget mb-5">
              <ul class="ftco-footer-social list-unstyled">
                <li class="ftco-animate"><a href="https://twitter.com/hectorn3131"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="https://www.facebook.com/hector.narvaez.397"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/hector_.31/"><span class="icon-instagram"></span></a></li>
                <li class="ftco-animate"><a href="https://www.linkedin.com/in/hector-eduardo-narvaez-pantoja-40a415a0/"><span class="icon-linkedin"></span></a></li>
                <li class="ftco-animate"><a href="https://github.com/hector31"><span class="icon-github"></span></a></li>
              </ul>
            </div>
            <div class="ftco-footer-widget">
              <h2 class="mb-3">Contacta me</h2>
              <p class="h3 email"><a  href="#">desarrollos@inghectornarvaez.com</a></p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
{{-- 
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true" style="color: red;"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p> --}}
          </div>
        </div>
      </div>
    </footer>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

    </div>

  </div>
 

  <script src={{asset("js/jquery.min.js")}}></script>
  <script src={{asset("js/jquery-migrate-3.0.1.min.js")}}></script>
  <script src={{asset("js/popper.min.js")}}></script>
  <script src={{asset("js/bootstrap.min.js")}}></script>
  <script src={{asset("js/jquery.easing.1.3.js")}}></script>
  <script src={{asset("js/jquery.waypoints.min.js")}}></script>
  <script src={{asset("js/jquery.stellar.min.js")}}></script>
  <script src={{asset("js/owl.carousel.min.js")}}></script>
  <script src={{asset("js/jquery.magnific-popup.min.js")}}></script>
  <script src={{asset("js/aos.js")}}></script>
  <script src={{asset("js/jquery.animateNumber.min.js")}}></script>
  <script src={{asset("js/scrollax.min.js")}}></script>
  <script src={{asset("js/bootstrap-datepicker.js")}}></script>
  <script src={{asset("js/jquery.timepicker.min.js")}}></script>
  <script src={{asset("https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false")}}></script>
  <script src={{asset("js/google-map.js")}}></script>
  <script src={{asset("js/main.js")}}></script>
  
</body>

</html>
