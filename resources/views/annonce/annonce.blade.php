@extends('../layout')

@section('content')

	<!-- page -->
	<section class="page-section categories-page">
		<div class="container">
			<div class="row">
				@foreach($articles as $article)
				<div class="col-lg-4 col-md-6">
					<!-- feature -->
					<div class="feature-item">
						<div class="feature-pic set-bg" data-setbg="img/<?php echo $article->image; ?>">
							<div class="sale-notic">en {{$article->type_offre}}</div>
						</div>
						<div class="feature-text">

							<div class="text-center feature-title">
								<h5>{{$article->appelation}}</h5>
								<p><i class="fa fa-map-marker"></i> {{$article->localite}}</p>
							</div>
							<div class="room-info-warp">
								<div class="room-info">
									<div class="rf-left">
										<p><i class="fa fa-th-large"></i> {{$article->superficie}} km²</p>
										<p><i class="fa fa-bed"></i> {{$article->chambre}} Chambres</p>
									</div>
									<div class="rf-right">
										<p><i class="fa fa-car"></i> {{$article->garage}} Garages</p>
										<p><i class="fa fa-bath"></i> {{$article->douche}} Douches</p>
									</div>	
								</div>
								<div class="room-info">
									<div class="rf-left">
										<p><i class="fa fa-user"></i> {{$article->nom}}</p>
									</div>
									<div class="rf-right">
										<p><i class="fa fa-phone"></i> {{$article->tel}}</p>
									</div>	
								</div>
							</div>
							<a href="/annonce/single/{{$article->slug}}" class="room-price">{{$article->prix}} FCFA</a>
						</div>
					</div>
				</div>
				@endforeach
				</div>
				</div>
			</div>
		</div>
	</section>
	<!-- page end -->

@endsection
