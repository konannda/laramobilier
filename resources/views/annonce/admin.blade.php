@extends('../layout')

@section('content')

<!-- page -->
	<section class="page-section blog-page">
		<div class="container">
			<div class="section-title">
				<h3>panel admin</h3>
				<p>Publiez toutes vos annonces immobilières ici</p>
			</div>


	    <table style="width:70%">
		
			     <tr>
				     <th width="30%">Apercu</th>
				     <th width="20%">Nom</th>
					 <th width="10%">Numero</th>
					 <th width="20%">Localité</th>
					 <th width="20%">Action</th>
				 </tr>
@foreach($articles as $article)
<tr>
	<td>
	<div class="media">
	  <div class="media-left media-middle">
	    <a href="#">
	      <img class="media-object" src="/img/<?php echo $article->image; ?>" alt="...">
	    </a>
	  </div>
	</div>
	</td>
	<td>{{$article->nom}}</td>
	<td>{{$article->tel}}</td>
	<td>{{$article->localite}}</td>
	<td>
		<a href="single/{{$article->slug}}"><button class="btn btn-primary"><i class="fa fa-eye"></i></button></a>
		
		<a href="/delete/{{$article->slug}}"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
	</td>
	</tr>
	@endforeach
		
		</table>
		</div>
			</div>
		</div>
	</section>
	<!-- page end -->
		@endsection