@extends('layouts.app')
@section('content')
<div class="container-fluid mt-4">
	<div class="row mt-5 mb-3 justify-content-center">
		<div class="col-md-8">
			@if(\Session::has('success'))
				<div class="alert alert-warning">
				    <div class="float-right"><button class="close" data-dismiss="alert" title="Close">&times;</button></div>
				    <div class="text-center"></div>
				        <span class="text-danger">
				        	{!!\Session::get('success')!!}
				        </span>
				</div>
				@endif
		</div>
	</div>
<div id="MagicCarousel" class="carousel slide mt-4"  data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#MagicCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#MagicCarousel" data-slide-to="1"></li>
		<li data-target="#MagicCarousel" data-slide-to="2"></li>
		<li data-target="#MagicCarousel" data-slide-to="3"></li>
	{{-- 	<li data-target="#MagicCarousel" data-slide-to="4"></li> --}}
	</ol>
	<div class="carousel-inner mt-5">
		<div class="carousel-item active">
			<img src="/images/wamae.jpg" class="d-block w-100" alt="Wamae Arnold" style="max-height: 500px" width="1100">
			<div class="carousel-caption">
				<h3>Our Web Systems Expert</h3>
			</div>
		</div>
		<div class="carousel-item">
			<img src="/images/george.JPG" class="d-block w-100" alt="George Gichugi" style="max-height: 500px" width="1100">
			<div class="carousel-caption">
				<h3>Photographer and Graphic Designer</h3>
			</div>
		</div>
		<div class="carousel-item">
			<img src="/images/ceo.JPG" class="d-block w-100" alt="Liz Murugi" style="max-height: 500px" width="1100">
			<div class="carousel-caption" >
				<h3>Sign Language Interpretor</h3>
			</div>
		</div>
		<div class="carousel-item">
			<img src="/images/ceo.JPG" class="d-block w-100" alt="Liz Murugi" style="max-height: 500px" width="1100">
			<div class="carousel-caption" >
				<h3>f</h3>
			</div>
		</div>
		{{-- <div class="carousel-item">
			<img src="/images/location.png" class="d-block w-100" alt="Location" style="max-height: 500px" width="1100">
			<div class="carousel-caption">
				<h3>We are based in Nairobi And Embu Kenya</h3>
			</div>
		</div> --}}
		<div class="carousel-item">
			<img src="/images/tools.JPG" class="d-block w-100" alt="Canon" style="max-height: 500px" width="1100">
			<div class="carousel-caption">
				<h3>Quality Tools For Quality Work</h3>
			</div>
		</div>

	</div>
	<!-- Left and right controls -->
	   <a class="carousel-control-prev" href="#MagicCarousel" data-slide="prev" title="Previous">
	     <span class="carousel-control-prev-icon"></span>
	   </a>
	   <a class="carousel-control-next" href="#MagicCarousel" data-slide="next" title="next">
	     <span class="carousel-control-next-icon"></span>
	   </a>
</div>

	<div class="row justify-content-center ml-1 mr-1">
		<div class="col-md-12">
			
		</div>
	</div>


	<div class="row pt-5">
	
	<div class="col-4 pb-2">
	    <a href="/img/george.JPG" target="_blank">
	  <img src="/images/george.JPG" class="w-100 img-fluid img-thumbnail" title="Gallery Item"> 
	  </a> 
	</div>

	<div class="col-4 pb-2">
	    <a href="/img/wamae.jpg" target="_blank">
	  <img src="/images/wamae.jpg" class="w-100 img-fluid img-thumbnail" title="Gallery Item"> 
	  </a> 
	</div>

	<div class="col-4 pb-2">
	    <a href="/img/website.png" target="_blank">
	  <img src="/images/website.png" class="w-100 img-fluid img-thumbnail" title="website.jpg"> 
	  </a> 
	</div>

	<div class="col-4 pb-2">
	    <a href="/img/tools.JPG" target="_blank">
	  <img src="/images/tools.JPG" class="w-100 img-fluid img-thumbnail" title="Gallery Item"> 
	  </a> 
	</div>

	

	<div class="col-4 pb-2">
	    <a href="/img/ceo.JPG" target="_blank">
	  <img src="/images/ceo.JPG" class="w-100 img-fluid img-thumbnail" title="Gallery Item"> 
	  </a> 
	</div>

	<div class="col-4 pb-2">
	    <a href="/img/laravel.jpg" target="_blank">
	  <img src="/images/laravel.jpg" class="w-100 img-fluid img-thumbnail" title="Gallery Item"> 
	  </a> 
	</div>

	<div class="col-4 pb-2">
	    <a href="/img/music.png" target="_blank">
	  <img src="/images/music.png" class="w-100 img-fluid img-thumbnail" title="Gallery Item"> 
	  </a> 
	</div>

	<div class="col-4 pb-2">
	    <a href="/img/phplogo.png" target="_blank">
	  <img src="/images/phplogo.png" class="w-100 img-fluid img-thumbnail" title="Gallery Item"> 
	  </a> 
	</div>


	
	</div>
</div>
@endsection
