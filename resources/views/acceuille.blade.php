<!DOCTYPE html>
<html lang="en">
<head>
	<title>Laramobile </title>
	<meta charset="UTF-8">
	<meta name="description" content="LERAMIZ Landing Page Template">
	<meta name="keywords" content="LERAMIZ, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>


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
						<div class="top-social">
							<a href=""><i class="fa fa-facebook"></i></a>
							<a href=""><i class="fa fa-twitter"></i></a>
							<a href=""><i class="fa fa-instagram"></i></a>
							<a href=""><i class="fa fa-pinterest"></i></a>
							<a href=""><i class="fa fa-linkedin"></i></a>
						</div>
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
						<a href="#" class="site-logo"><img src="img/logo.png" alt=""></a>
						<div class="nav-switch">
							<i class="fa fa-bars"></i>
						</div>
						<ul class="main-menu">
							<li><a href="<?php Route::get('/', function () {  return view('ajout');}); ?>annonce/ajout" >Voire Annonce</a></li>
							<li><a href="<?php Route::get('/', function () {  return view('ajout');}); ?>annonce/ajout" class="btn btn-success">Annonceur</a></li>
							<li><a href="contact.html">CONCTACTE</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Hero section -->
	<section class="hero-section set-bg" data-setbg="img/bg.jpg">
		<div class="container hero-text text-white">
			<h2>trouvez votre place avec notre style de vie local</h2>
			<p>Recherchez des enregistrements de biens immobiliers, des maisons, des condos, des terrains et plus sur Laramobilier.com®.<br>Recherchez des informations sur les propriétés à partir des données source les plus complètes.</p>
			<a href="<?php Route::get('/', function () {  return view('interface');}); ?>/interface" class="site-btn">NOUVEAUTES</a>
		</div>
	</section>
	<!-- Hero section end -->


	<!-- Filter form section -->
	<div class="filter-search">
		<div class="container">

			<form method="GET" action="<?php Route::get('/', function () {  return view('search');}); ?>/search" class="filter-form">
				<input name="mot" type="text" placeholder="votre recherche">
				<select name="ville">
					<option value="">Ville</option>
					<option value="tanda">Tanda</option>
					<option value="abidjan">Abidjan</option>
					<option value="city">Bouaké</option>
					<option value="city">Sabalou</option>
				</select>
				<select name="pays">
				  <option value="">pays</option>
					<option value="benin">Bénin</option>
			 	  <option value="cote d'ivoire">Cote d'Ivoire</option>
          <option value="city">Ghana</option>
          <option value="city">Niger</option>
				</select>
				  <button name="search" type="submit" class="site-btn fs-submit">RECHERCHE</button>
			</form>


		</div>
	</div>
	<!-- Filter form section end -->



	<!-- Properties section -->
	<section class="properties-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h3>RÉCENTES PROPRIÉTÉS</h3>
				<p>Découvrez les dernières propriétés les plus sollicitées</p>
			</div>

			<div class="row">






				<?php
				$articles = App\Article::all();
				foreach ($articles as $article):
        ?>

				<div class="col-md-6">
					<div class="propertie-item set-bg" data-setbg="img/feature/{{ $article->id }}.jpg">
						<div class="sale-notic">{{ $article->type_offre }}</div>
						<div class="propertie-info text-white">
							<div class="info-warp">
								<h5>{{ $article->appelation}}</h5>
								<p><i class="fa fa-map-marker"></i>{{$article->localite}}</p>
							</div>
							<a href="<?php Route::get('/welcome', function () {  return view('single');}); ?>/single?id=<?php echo $article->id; ?>" class="price"><?php echo $article->prix; ?> FCFA</a>
						</div>
					</div>
				</div>
   <?php endforeach ;?>

			</div>
		</div>
	</section>
	<!-- Properties section end -->


	<!-- Services section -->
	<section class="services-section spad set-bg" data-setbg="img/service-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<img src="img/service.jpg" alt="">
				</div>
				<div class="col-lg-5 offset-lg-1 pl-lg-0">
					<div class="section-title text-white">
						<h3>NOS SERVICES</h3>
						<p>Nous fournissons le service parfait pour </p>
					</div>
					<div class="services">
						<div class="service-item">
							<i class="fa fa-comments"></i>
							<div class="service-text">
								<h5>Service de consultation</h5>
								<p>Nous assurrons, mais aussi assumons votre projet de construction du début q la fin.</p>
							</div>
						</div>
						<div class="service-item">
							<i class="fa fa-home"></i>
							<div class="service-text">
								<h5>Gestion des propriétés</h5>
								<p>Pour dégager du temps personnel, vous souhaitez trouver un professionnel de confiance spécialisé dans la gestion de propriétés ?</p>
							</div>
						</div>
						<div class="service-item">
							<i class="fa fa-briefcase"></i>
							<div class="service-text">
								<h5>Location et vente</h5>
								<p>La location ainsi que la vente sont porter principalement sur les biens immobiliers</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Services section end -->



	<!-- feature category section -->
	<section class="feature-category-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h3>NOUS SOMMES LA POUR VOUS</h3>
				<p>Quel type de propriété recherches-tu? Nous allons t'aider</p>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6 f-cata">
					<img src="img/feature-cate/1.jpg" alt="">
					<h5>Appartement a louer</h5>
				</div>
				<div class="col-lg-3 col-md-6 f-cata">
					<img src="img/feature-cate/2.jpg" alt="">
					<h5>Maison familliale</h5>
				</div>
				<div class="col-lg-3 col-md-6 f-cata">
					<img src="img/feature-cate/3.jpg" alt="">
					<h5>Villas</h5>
				</div>
				<div class="col-lg-3 col-md-6 f-cata">
					<img src="img/feature-cate/4.jpg" alt="">
					<h5>Immeuble de bureaux</h5>
				</div>
			</div>
		</div>
	</section>
	<!-- feature category section end-->


	<!-- Footer section -->
	<footer class="footer-section set-bg" data-setbg="img/footer-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 footer-widget">
					<img src="img/logo.png" alt="">
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
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
