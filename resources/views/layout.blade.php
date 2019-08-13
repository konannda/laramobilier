<!DOCTYPE html>
<html lang="fr">
<head>
	<title>LERAMIZ - Landing Page Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="LERAMIZ Landing Page Template">
	<meta name="keywords" content="LERAMIZ, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="{{asset('frontend')}}/img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset('frontend')}}/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="{{asset('frontend')}}/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="{{asset('frontend')}}/css/animate.css"/>
	<link rel="stylesheet" href="{{asset('frontend')}}/css/owl.carousel.css"/>
	<link rel="stylesheet" href="{{asset('frontend')}}/css/style.css"/>
	<link rel="stylesheet" href="{{asset('frontend')}}/css/feu.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder 
	<div id="preloder">
		<div class="loader"></div>
	</div>-->
	
	<!-- Header section -->
	<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 header-top-left">
						<div class="top-info">
							<i class="fa fa-phone"></i>
							(+225) 53535353
						</div>
						<div class="top-info">
							<i class="fa fa-envelope"></i>
							info@stage.uvci.edu.ci
						</div>
					</div>
					<div class="col-lg-6 text-lg-right header-top-right">
	
						<div class="user-panel">
							<a href="/annonce/ajout"><i class="fa fa-user-circle-o"></i> Annonceurs</a>
							<a href="/annonce/admin"><i class="fa fa-sign-in"></i> Admin</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="site-navbar">
						<a href="/" class="site-logo"><img src="{{asset('frontend')}}/img/logo.png" alt=""></a>
						<div class="nav-switch">
							<i class="fa fa-bars"></i>
						</div>
						<ul class="main-menu">
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="{{asset('frontend')}}/img/page-top-bg.jpg">
		<div class="container text-white">
			<h2>Laramobilier</h2>
		</div>
	</section>
	<!--  Page top end -->

	<!-- Breadcrumb -->
	<div class="site-breadcrumb">
		<div class="container">
			@if(Session::has('success'))
				<div class="alert alert-success">{{ Session::get('success') }}</div>
			@endif
		</div>
	</div>

	<!-- page -->
	@yield('content')
	<!-- page end -->

	<!-- Footer section -->
	<footer class="footer-section set-bg" data-setbg="{{asset('frontend')}}/img/footer-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 footer-widget">
					<img src="{{asset('frontend')}}/img/logo.png" alt="">
					<p>Lorem ipsum dolo sit azmet, consecter dipise consult  elit. Maecenas mamus antesme non anean a dolor sample tempor nuncest erat.</p>
					<div class="social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 footer-widget">
					<div class="contact-widget">
						<h5 class="fw-title">CONTACTEZ NOUS</h5>
						<p><i class="fa fa-map-marker"></i>3711-2880 Abidjan Tribunal du Commerce </p>
						<p><i class="fa fa-phone"></i>(+225) 53535353</p>
						<p><i class="fa fa-envelope">info@stage.uvci.edu.ci</i></p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 footer-widget">
					<div class="double-menu-widget">
						<h5 class="fw-title">NOS BASES</h5>
						<ul>
							<li>Abidjan</li>
							<li>San Pedro</li>
							<li>Washington</li>
							<li>Los Angeles</li>
							<li>Chicago</li>
						</ul>
						<ul>
							<li>St Louis</li>
							<li>Jacksonville</li>
							<li>San Jose</li>
							<li>San Diego</li>
							<li>Houston</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6  footer-widget">
					<div class="newslatter-widget">
						<h5 class="fw-title">NEWSLETTER</h5>
						<p>Subscribe your email to get the latest news and new offer also discount</p>
						<form class="footer-newslatter-form">
							<input type="text" placeholder="Email address">
							<button><i class="fa fa-send"></i></button>
						</form>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="copyright">
					<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer section end -->
                                        
	<!--====== Javascripts & Jquery ======-->
	<script src="{{asset('frontend')}}/js/jquery-3.2.1.min.js"></script>
	<script src="{{asset('frontend')}}/js/bootstrap.min.js"></script>
	<script src="{{asset('frontend')}}/js/owl.carousel.min.js"></script>
	<script src="{{asset('frontend')}}/js/masonry.pkgd.min.js"></script>
	<script src="{{asset('frontend')}}/js/magnific-popup.min.js"></script>
	<script src="{{asset('frontend')}}/js/main.js"></script>
</body>
</html>