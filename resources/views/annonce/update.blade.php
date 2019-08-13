@extends('../layout')

@section('content')
	<!-- page -->
	<section class="page-section blog-page">
		<div class="container">
			<div class="section-title">
				<h3>Espace Admin</h3>
				<p>Modifier un article</p>
			</div>
			<form class="contact-form" method="post" action="/annonce/update" enctype="multipart/form-data">
				@csrf
				<div class="row">
					<div class="col-md-6">
						<label for="nom">Nom :</label>
						<input type="text" name="nom" required="" class="form-control" placeholder="Votre name" value="{{isset($article) ? $article->nom : ''}}">
					</div>
					<div class="col-md-6">
						<label for="email">Email :</label>
						<input type="emal"  name="email" class="form-control" required="" placeholder="Votre email" value="{{isset($article) ? $article->email : ''}}">
					</div>
					<div class="col-md-6">
						<label for="prenom">Prenoms :</label>
						<input type="text"  name="prenom" class="form-control" required="" placeholder="Votre prenom" value="{{isset($article) ? $article->prenom : ''}}">
					</div>
					<div class="col-md-6">
						<label for="tel">Téléphone :</label>
						<input type="text"  name="tel" class="form-control" required="" placeholder="Votre numero de téléphpne" value="{{isset($article) ? $article->tel : ''}}">
					</div>
					<div class="col-md-6">
						<label for="appelation">Appelation :</label>
						<input type="text" required="" name="appelation" class="form-control" placeholder="L'appelation de la maison. Exemple: duplexe..." value="{{isset($article) ? $article->appelation : ''}}">
					</div>
					<div class="col-md-6">
						<label for="description">Description</label>
						<input type="text" name="description" class="form-control" placeholder="Donnez une description de la maison" required="" value="{{isset($article) ? $article->description : ''}}">
					</div>
					<div class="col-md-6">
						<label for="localite">Localité :</label>
						<input type="text" name="localite" class="form-control" placeholder="Veuillez entrer la localisation de la maison" required="" value="{{isset($article) ? $article->localite : ''}}">
					</div>
					<div class="col-md-6">
						<label for="prix">Prix :</label>
						<input type="text" name="prix" class="form-control" placeholder="Entrez le prix de vente TTC de la maison" required="" value="{{isset($article) ? $article->prix : ''}}">
					</div>
					<div class="col-md-6">
						<label for="superficie">Superficie :</label>
						<input type="text" name="superficie" class="form-control" placeholder="Donnez La superficie de la maison" required="" value="{{isset($article) ? $article->superficie : ''}}">
					</div>
					<div class="col-md-6">
						<label for="chambre">Chambre :</label>
						<input type="text" name="chambre" class="form-control" placeholder="Donnez le nombre de chambres de la maison" required="" value="{{isset($article) ? $article->chambre : ''}}">
					</div>
					<div class="col-md-6">
						<label for="salon">Salon :</label>
						<input type="text" name="salon" class="form-control" placeholder="Donnez le nombre de salon de la maison" required="" value="{{isset($article) ? $article->salon : ''}}">
					</div>
					<div class="col-md-6">
						<label for="douche">Douche :</label>
						<input type="text" name="douche" class="form-control" placeholder="Donnez le nombre de douche de la maison" value="{{isset($article) ? $article->douche : ''}}">
					</div>
					<div class="col-md-6">
						<label for="garage">Garage :</label>
						<input type="text" name="garage" class="form-control" placeholder="Donnez le nombre de garage de la maison" required="" value="{{isset($article) ? $article->garage : ''}}">
					</div>
					<div class="col-md-6">
						<label for="type_offre">Type d'offre :</label>
						<select name="type_offre" class="form-control">
							<option value="vente">Vente</option>
							<option value="location">Location</option>
						</select>
					</div>
					<div class="col-md-6">
						<label for="">Image :</label>
						<input type="file" required="" name="image" class="form-control" placeholder="veuillez selectionner une image svp!!" value="{{isset($article) ? $article->image : ''}}">
					</div>
					<input type="hidden" name="slug" value="{{isset($article) ? $article->slug : ''}}">
					<div class="col-md-8">
						<button type="submit" class="site-btn">Publier</button>
					</div>
				</div>
			</form>
		</div>
	</section>
	<!-- page end -->
	@endsection