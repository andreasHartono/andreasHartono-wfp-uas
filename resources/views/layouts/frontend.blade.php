<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- Meta Tag -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
    <title>APOTEKU Pharmacy</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="{{ asset('images/apoteku.png') }}">
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	
	<!-- StyleSheet -->
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}">
	<!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.min.css') }}">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.css') }}">
	<!-- Fancybox -->
	<link rel="stylesheet" href="{{ asset('frontend/css/jquery.fancybox.min.css') }}">
	<!-- Themify Icons -->
    <link rel="stylesheet" href="{{ asset('frontend/css/themify-icons.css') }}">
	<!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/niceselect.css') }}">
	<!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
	<!-- Flex Slider CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/flex-slider.min.css') }}">
	<!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('frontend/css/owl-carousel.css') }}">
	<!-- Slicknav -->
    <link rel="stylesheet" href="{{ asset('frontend/css/slicknav.min.css') }}">
	
	<!-- Eshop StyleSheet -->
	<link rel="stylesheet" href="{{ asset('frontend/css/reset.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/style.css') }}">
   <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">

	
	
</head>
<body class="js">
	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- End Preloader -->
	
	
	<!-- Header -->
	<header class="header shop">
		
		<div class="middle-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-12">
						<!-- Logo -->
						<div class="logo">
							<a href="{{ url('/') }}"><img src="{{ asset('images/apoteku.png') }}" alt="logo" height="60" width="60"></a>
						</div>
						<!--/ End Logo -->
						<div class="mobile-nav"></div>
					</div>
					<div class="col-lg-8 col-md-7 col-12">
						{{-- <div class="search-bar-top">
							<div class="search-bar">
								<form action="{{ url('/home/search') }}" method="POST">
									@csrf
									<select name="kategori">
										<option value="" selected="selected">All Category</option>
										@foreach ($category as $item)
										   <option value="{{ $item['id'] }}">{{ $item['nama'] }}</option>
										@endforeach
									</select>
									<span>
										<input name="search" placeholder="Ketikkan obat disini" type="search">
										<button type="submit" class="btnn"><i class="ti-search"></i></button>
									</span>
								</form>
							</div>
						</div> --}}
					</div>
					<div class="col-lg-2 col-md-3 col-12">
						<div class="right-bar">
							<!-- Login Form -->
								@if (Auth::check())
                           <div class="dropdown">
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                 @if (auth()->user()->sebagai === 'pegawai')
                                 <a class="dropdown-item" href="{{ url('/dashboard') }}">Dashboard</a>
                                 @endif

                              <form action="{{ url('/logout') }}" method="post">
                                 @csrf
                                 <button type="submit" class="dropdown-item">Logout</button>
                              </form>
                              </div>
                           </div>
                           <div class="sinlge-bar dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <a href="#" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i> {{ auth()->user()->username }}</a>
                           </div>
								@else
                           <div class="sinlge-bar">
                              <a href="{{ url('/login') }}" class="single-icon">Login</a>
                           </div>
								@endif

							<div class="sinlge-bar shopping">

                        <?php $total = 0; $quantity = 0;?>
                        @if (session('cart'))
                           @foreach (session('cart') as $id => $details)
                              <?php $quantity += $details['quantity']; ?>
                           @endforeach
                        @endif   
						
								@if (Auth::check())      
								<a href="#" class="single-icon"><i class="ti-bag"></i> <span class="total-count">{{ $quantity }}</span></a>
								<!-- Shopping Item -->
								<div class="shopping-item">
									<div class="dropdown-cart-header">
										<span>{{ $quantity }} Items</span>
										<a href="{{ url('cart') }}">View Cart</a>
									</div>
									<ul class="shopping-list">
								@endif
                              @if(session('cart'))
                                 @foreach (session('cart') as $id => $details)
                                    <?php $total += $details['price'] * $details['quantity']; ?>
                                    <li>
                                       <a class="cart-img" href="#"><img src="{{ asset('/images/obat/'.$details['photo']) }}" alt="#"></a>
                                       <h4>{{ $details['name'] }}</h4>
                                       <p class="quantity">{{ $details['quantity'] }} x - <span class="amount">Rp.{{ $details['price'] }}</span></p>
                                    </li>
                                 @endforeach
                              @endif	
							  
									</ul>
									@if (Auth::check())  
									<div class="bottom">
										<div class="total">
											<span>Total</span>
											<span class="total-amount">Rp. {{ $total }},00</span>
										</div>
										<a href="{{ url('cart') }}" class="btn animate">Checkout</a>
									</div>
								</div>
								@endif
								<!--/ End Shopping Item -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Header Inner -->
		<div class="header-inner">
			<div class="container">
				<div class="cat-nav-head">
					<div class="row">
						<div class="col-lg-9 col-12">
							<div class="menu-area">
								<!-- Main Menu -->
								<nav class="navbar navbar-expand-lg">
									<div class="navbar-collapse">	
										<div class="nav-inner">	
											<ul class="nav main-menu menu navbar-nav">
													<li class="active"><a href="{{ url('/') }}">Daftar Obat</a></li>
                                       @if (Auth::check())
                                          <li><a href="#">Transaksi</a>
                                             <ul class="dropdown">
                                                <li><a href="{{ url('cart') }}">Cart</a></li>
                                                <li><a href="{{ url('/history') }}">Riwayat Transaksi</a></li>
                                             </ul>
                                          </li>
                                       @endif
													
												</ul>
										</div>
									</div>
								</nav>
								<!--/ End Main Menu -->	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Header Inner -->
	</header>
	<!--/ End Header -->
		
	<!-- Start Product Area -->
    <section class="product-area section">
         <div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title">
							<h2>@yield('section-title')</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<section class="product-info">
							<div class="tab-content" id="myTabContent">
                        @yield('content')		
							</div>
						</section>
					</div>
				</div>
         </div>
    </section>
	<!-- End Product Area -->

	<!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row no-gutters">
							<div class="col-lg-6 offset-lg-3 col-12">
								<h4 style="margin-top:100px;font-size:14px; font-weight:500; color:#F7941D; display:block; margin-bottom:5px;">Eshop Free Lite</h4>
								<h3 style="font-size:30px;color:#333;">Currently You are using free lite Version of Eshop.<h3>
								<p style="display:block; margin-top:20px; color:#888; font-size:14px; font-weight:400;">Please, purchase full version of the template to get all pages, features and commercial license</p>
								<div class="button" style="margin-top:30px;">
									<a href="https://wpthemesgrid.com/downloads/eshop-ecommerce-html5-template/" target="_blank" class="btn" style="color:#fff;">Buy Now!</a>
								</div>
							</div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- Modal end -->
	
	<!-- Start Footer Area -->
	<footer class="footer">
		<!-- Footer Top -->
		<div class="footer-top section">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer about">
							<div class="logo">
								<a href="#"><img src="{{ asset('images/apoteku.png') }}" alt="Logo ApotekU" height="250" width="250"></a>
							</div>
							<p class="text">ApotekU adalah bagian dari perusahaan farmasi swasta terbesar di Surabaya.  
                        Menyediakan berbagai macam obat dari berbagai merek</p>
							<p class="call">Ada Pertanyaan Hubungi : <span><a href="tel:0312981366">031-298-1366</a></span></p>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4>Information</h4>
							<ul>
								<li><a href="#">About Us</a></li>
								<li><a href="#">Faq</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Help</a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4>Customer Service</h4>
							<ul>
								<li><a href="#">Payment Methods</a></li>
								<li><a href="#">Shipping</a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer social">
							<h4>Get In Touch</h4>
							<!-- Single Widget -->
							<div class="contact">
								<ul>
									<li>JL. Tenggilis No 1 Ubaya</li>
								</ul>
							</div>
							<!-- End Single Widget -->
							<ul>
								<li><a href="#"><i class="ti-facebook"></i></a></li>
								<li><a href="#"><i class="ti-instagram"></i></a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Footer Top -->
		<div class="copyright">
			<div class="container">
				<div class="inner">
					<div class="row">
						<div class="col-lg-6 col-12">
							<div class="left">
								<p>Copyright © 2022 APOTEK U - All Rights Reserved.</p>
							</div>
						</div>
						<div class="col-lg-6 col-12">
							<div class="right">
								<img src="{{ asset('frontend/images/payments.png') }}" alt="#">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- /End Footer Area -->
   @yield('javascript')
<!-- Jquery -->
   <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
   <script src="{{ asset('frontend/js/jquery-migrate-3.0.0.js') }}"></script>
	<script src="{{ asset('frontend/js/jquery-ui.min.js') }}"></script>
	<!-- Popper JS -->
	<script src="{{ asset('frontend/js/popper.min.js') }}"></script>
	<!-- Bootstrap JS -->
	<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
	<!-- Color JS -->
	<script src="{{ asset('frontend/js/colors.js') }}"></script>
	<!-- Slicknav JS -->
	<script src="{{ asset('frontend/js/slicknav.min.js') }}"></script>
	<!-- Owl Carousel JS -->
	<script src="{{ asset('frontend/js/owl-carousel.js') }}"></script>
	<!-- Magnific Popup JS -->
	<script src="{{ asset('frontend/js/magnific-popup.js') }}"></script>
	<!-- Fancybox JS -->
	<script src="{{ asset('frontend/js/facnybox.min.js') }}"></script>
	<!-- Waypoints JS -->
	<script src="{{ asset('frontend/js/waypoints.min.js') }}"></script>
	<!-- Jquery Counterup JS -->
	<script src="{{ asset('frontend/js/jquery-counterup.min.js') }}"></script>
	<!-- Countdown JS -->
	<script src="{{ asset('frontend/js/finalcountdown.min.js') }}"></script>
	<!-- Nice Select JS -->
	<script src="{{ asset('frontend/js/nicesellect.js') }}"></script>
	<!-- Ytplayer JS -->
	<script src="{{ asset('frontend/js/ytplayer.min.js') }}"></script>
	<!-- Flex Slider JS -->
	<script src="{{ asset('frontend/js/flex-slider.js') }}"></script>
	<!-- ScrollUp JS -->
	<script src="{{ asset('frontend/js/scrollup.js') }}"></script>
	<!-- Onepage Nav JS -->
	<script src="{{ asset('frontend/js/onepage-nav.min.js') }}"></script>
	<!-- Easing JS -->
	<script src="{{ asset('frontend/js/easing.js') }}"></script>
	<!-- Google Map JS -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnhgNBg6jrSuqhTeKKEFDWI0_5fZLx0vM"></script>	
	<script src="{{ asset('frontend/js/gmap.min.js') }}"></script>
	<script src="{{ asset('frontend/js/map-script.js') }}"></script>
	<!-- Active JS -->
	<script src="{{ asset('frontend/js/active.js') }}"></script>
</body>
</html>