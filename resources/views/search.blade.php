<!DOCTYPE html>
<html lang="en">
<head>
	<title>search page</title>
	<meta charset="UTF-8">
	<meta name="description" content="LERAMIZ Landing Page Template">
	<meta name="keywords" content="LERAMIZ, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset('css/style.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/animate.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}"/>



	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->


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
							<a href=""><i class="fa fa-user-circle-o"></i> Register</a>
							<a href=""><i class="fa fa-sign-in"></i> Login</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="site-navbar">
						<a href="<?php Route::get('/', function () {  return view('acceuille');}); ?>/"><img src="img/logo.png" alt=""></a>
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
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg.jpg">
		<div class="container text-white">
			<h2>SINGLE LISTING</h2>
		</div>
	</section>
	<!--  Page top end -->

	<!-- Breadcrumb -->
<br><br>
	<div class="site-breadcrumb">
		<div class="container">
		</div>
	</div>


	<!-- Page -->





	<section class="page-section">
		<div class="container">
			<div class="row">

				<?php
				$mot = $_GET["mot"];
				$articles = App\Article::whereLocalite($mot)->get();
				foreach ($articles as $artsingle):
				?>

				<div class="col-lg-4 single-list-page">
					<div class="related-properties">
				       <div class="rp-item">
				      	<div class="rp-pic set-bg" data-setbg="img/feature/{{$artsingle->id}}.jpg">
					       	<div class="sale-notic">{{$artsingle->type_offre}}</div>
					      </div>
					     <div class="rp-info">
						   <h5>{{$artsingle->appelation}}</h5>
						   <p><i class="fa fa-map-marker"></i>{{$artsingle->localite}}</p>
					     </div>
					     <a href="<?php Route::get('/welcome', function () {  return view('single');}); ?>/single?id=<?php echo $artsingle->id; ?>" class="rp-price"><?php echo $artsingle->prix; ?></a>
			       	</div>
				  </div>
				</div>


			<?php endforeach ;?>

			<?php
			$ville = $_GET["ville"];
			$articles = App\Article::whereLocalite($ville)->get();
			foreach ($articles as $artsingle):
			?>

			<div class="col-lg-4 single-list-page">
				<div class="related-properties">
						 <div class="rp-item">
							<div class="rp-pic set-bg" data-setbg="img/feature/<?php echo $artsingle->id; ?>.jpg">
								<div class="sale-notic"><?php echo $artsingle->type_offre; ?></div>
							</div>
						 <div class="rp-info">
						 <h5><?php echo $artsingle->appelation; ?></h5>
						 <p><i class="fa fa-map-marker"></i><?php echo $artsingle->localite; ?></p>
						 </div>
						 <a href="<?php Route::get('/welcome', function () {  return view('single');}); ?>/single?id=<?php echo $artsingle->id; ?>" class="rp-price"><?php echo $artsingle->prix; ?></a>
						</div>
				</div>
			</div>


		<?php endforeach ;?>

		<?php
		$pays = $_GET["pays"];
		$articles = App\Article::whereLocalite($pays)->get();
		foreach ($articles as $artsingle):
		?>

		<div class="col-lg-4 single-list-page">
			<div class="related-properties">
					 <div class="rp-item">
						<div class="rp-pic set-bg" data-setbg="img/feature/<?php echo $artsingle->id; ?>.jpg">
							<div class="sale-notic"><?php echo $artsingle->type_offre; ?></div>
						</div>
					 <div class="rp-info">
					 <h5><?php echo $artsingle->appelation; ?></h5>
					 <p><i class="fa fa-map-marker"></i><?php echo $artsingle->localite; ?></p>
					 </div>
					 <a href="<?php Route::get('/welcome', function () {  return view('single');}); ?>/single?id=<?php echo $artsingle->id; ?>" class="rp-price"><?php echo $artsingle->prix; ?></a>
					</div>
			</div>
		</div>


	<?php endforeach ;?>


			</div>
		</div>
	</section>
	<!-- Page end -->






	<!-- Footer section -->
	<footer class="footer-section set-bg" data-setbg="{{asset('img/footer-bg.jpg')}}">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 footer-widget">
					<img src="{{asset('img/logo.png')}}" alt="">
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
	<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('js/masonry.pkgd.min.js')}}"></script>
	<script src="{{asset('js/magnific-popup.min.js')}}"></script>
	<script src="{{asset('js/main.js')}}"></script>
</body>
</html>
