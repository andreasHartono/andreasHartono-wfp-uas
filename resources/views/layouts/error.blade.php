
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Aviato | E-commerce template</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Constra HTML Template v1.0">
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/apoteku.png') }}" />
  
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="{{ asset('error/plugins/themefisher-font/style.css') }}">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="{{ asset('error/plugins/bootstrap/css/bootstrap.min.css') }} ">
  
  <!-- Animate css -->
  <link rel="stylesheet" href="{{ asset('error/plugins/animate/animate.css') }} ">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="{{ asset('error/plugins/slick/slick.css') }} ">
  <link rel="stylesheet" href="{{ asset('error/plugins/slick/slick-theme.css') }} ">
  
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{ asset('error/css/style.css') }}">

</head>

<body id="body">
	<section class="page-404">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<a href="{{ url('/') }}">
						<img src="{{ asset('images/apoteku.png') }}" alt="site logo" height="250" width="250"/>
					</a>
					<h1>@yield('error')</h1>
					<h2>@yield('show ')</h2>
					<a href="{{ url('/') }}" class="btn btn-main"><i class="tf-ion-android-arrow-back"></i> Back To Katalog</a>
					<p class="copyright-text">© 2022 ApotekU</p>
				</div>
			</div>
		</div>
	</section>
    <!-- 
    Essential Scripts
    =====================================-->
    
    <!-- Main jQuery -->
    <script src="{{ asset('error/plugins/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap 3.1 -->
    <script src="{{ asset('error/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- Bootstrap Touchpin -->
    <script src="{{ asset('error/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js') }}"></script>
    <!-- Instagram Feed Js -->
    <script src="{{ asset('error/plugins/instafeed/instafeed.min.js') }}"></script>
    <!-- Video Lightbox Plugin -->
    <script src="{{ asset('error/plugins/ekko-lightbox/dist/ekko-lightbox.min.js') }}"></script>
    <!-- Count Down Js -->
    <script src="{{ asset('error/plugins/syo-timer/build/jquery.syotimer.min.js') }}"></script>

    <!-- slick Carousel -->
    <script src="{{ asset('error/plugins/slick/slick.min.js') }}"></script>
    <script src="{{ asset('error/plugins/slick/slick-animation.min.js') }}"></script>

    <!-- Google Mapl -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
    <script type="text/javascript" src="plugins/google-map/gmap.js"></script>

    <!-- Main Js File -->
    <script src="{{ asset('error/js/script.js') }}"></script>
    


  </body>
  </html>
