@extends('../layout')

@section('content')
	<!-- Page -->

	

	<section class="page-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 single-list-page">

					<div class="single-list-slider owl-carousel" id="sl-slider">
 						<div class="sl-item set-bg" data-setbg="/img/<?php echo $article->image; ?>">
 							<div class="sale-notic"><?php echo  $article->type_offre; ?></div>
 						</div>
 					</div>

					<div class="single-list-content">
						<div class="row">
							<div class="col-xl-8 sl-title">
								<h2> <?php echo  $article->appelation; ?></h2>
								<p><i class="fa fa-map-marker"></i><?php echo  $article->localite; ?></p>
							</div>
							<div class="col-xl-4">
								<a href="" class="price-btn"><?php echo  $article->prix; ?> FCFA</a>
							</div>
						</div>


						<h3 class="sl-sp-title">Caractéristiques</h3>
						<div class="row property-details-list">
							<div class="col-md-4 col-sm-6">
								<p><i class="fa fa-th-large"></i> <?php echo  $article->superficie; ?></p>
								<p><i class="fa fa-bed"></i> <?php echo  $article->chambre; ?> chambre(s)</p>
							</div>
							<div class="col-md-4 col-sm-6">
								<p><i class="fa fa-car"></i> <?php echo  $article->garage; ?> Garage(s)</p>
								<p><i class="fa fa-home"></i> <?php echo  $article->salon; ?> salon(s)</p>
							</div>
							<div class="col-md-4">
								<p><i class="fa fa-bath"></i> <?php echo  $article->douche; ?> salle de bain(s)</p>
								<p><i class="fa fa-map-marker"></i><?php echo $article->localite; ?></p>
							</div>
						</div>

						<h3 class="sl-sp-title">Description</h3>
						<div class="description">
							<p><?php echo $article->info; ?></p>
						</div>

					</div>
				</div>
				<!-- sidebar -->



				<div class="col-lg-4 col-md-7 sidebar">
					<div class="author-card">
						<div class="author-img set-bg" data-setbg="img/avatar.png"></div>
						<div class="author-info">
							<h5><?php echo $article->nom; ?></h5>
							<p><?php echo $article->prenom; ?></p>
						</div>
						<div class="author-contact">
							<p><i class="fa fa-phone"></i><?php echo $article->tel; ?></p>
							<p><i class="fa fa-envelope"></i><?php echo $article->email; ?></p>
						</div><br>
						<center> <h6>Contacte du propriétaire</h6></center>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Page end -->
@endsection