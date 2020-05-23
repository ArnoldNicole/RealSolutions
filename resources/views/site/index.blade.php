@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row mt-5 m-0 p-0">
		<div class="col-md-12">
					<div class="font-weight-bold text-info bg-transparent  p-0 m-0 btn-outline-primary mt-3">
						<div class="text-center bg-white font-weight-bold h3 animated swing ">Uniting Together to make visions realities with <strong>Real Solutions</strong> for you.</div>
					</div>

				<div class="row justify-content-center bg-secondary">
					<div class="col-md-12">
						<div class="row justify-content-center">
							<div class="col-md-12">
								<h3 style="font-size: 50px;" class="font-weight-bold text-center h3 text-danger">MUSIC</h3>
							</div>
						</div>
						<div class="row justify-content-center mb-4" >
							<div class="col-md-8  animated fadeInUp delay-1s" >	
									
										<p style="font-size: 22px;" class="font-weight-bold">With talents within us, we have guitarists and  pianists. Ready to perform at your events as you wish. Customise an offer for yourself and feel the vision.
										<span class="font-weight-bold text-secondary font-weight-bold">We Play</span>
											<ul style="list-style-type:circle; ; font-size: 20px;">
												<li >Guitar</li>
												<li>Piano</li>
												<li>DrumSets</li>
												<li>Band</li>
											</ul>
											<a class="text-success font-weight-bold text-small" href="#" target="_blank">watch our team perform at previous events</a>
										</p>
									
								
							</div>
							<div class="col-md-3 w-auto no-outline m-1 p-0">
								<img src="{{asset('/images/Self_Paced.png')}}" class="img-fluid w-100 float-right img-circle mt-4 mb-4 align-content-center">
							</div>
							
							
						</div>
						<div class="dropdown-divider"></div>
					</div>
				</div>

					<div class="row container-fluid mb-3 " >
						<div class="col-md-3 w-auto no-outline m-1 p-0">
							<img src="{{asset('/images/operation.JPG')}}" class="img-fluid w-100 float-left mt-4 mb-4">
						</div>
						<div class="col-md-8  no-outline   animated fadeInUp delay-2s">
							
								<h3  style="font-size: 48px;" class="font-weight-bold text-secondary text-center h3">Communication</h3>
								
									<p  style="font-size: 24px;" class="font-weight-bold text-white">Do you ever wished a certain message was gotten clear by your audience?
									Did you ever wish your audience was larger? Wanted to commmunicate to a deaf person?
								If yes! We got you covered.
							We have articulate sign interpreters who will pass the message for you. No fuss! We will get your information passed as you wish and you will love us.</p>
								
							</div>
						</div>

			<div class="row bg-white justify-content-center">
				<div class="col-md-12">
					<div class="row justify-content-center ">	
						<div class="col-md-12">
							<h2   class="text-center font-weight-bold text-danger">INFORMATION TECHNOLOGY</h2>		
						</div>
					</div>
						<div class="row justify-content-center mb-4">				
								<div class="col-md-8  animated fadeInUp delay-3s" >		
										
										
											<p  style="font-size: 22px;" class="font-weight-bold">We want to be your ultimate tech partner</p>
											<p  style="font-size: 20px;">With a vigourous Tech Department, we are capable of
												<ul class="h5"  style="font-size: 20px;">								
													<li class="text-success font-weight-bold">Web development</li>
													<li class="text-success font-weight-bold">Networking</li>
													<li class="text-success font-weight-bold">Graphics design</li>
													<li class="text-success font-weight-bold">Video shooting and editing</li>
													<li class="text-success font-weight-bold">Film Animation</li>
													<li class="text-success font-weight-bold">Advertisemnts -<em>Video and audio</em></li>
													<li class="text-success font-weight-bold">Data analysis</li>
													<li class="text-success font-weight-bold">IT Consultation</li>
												</ul>
												<a class="text-dark font-weight-bold h4" href="mailto:arnoldwamae2@gmail.com" target="_blank">Get in touch with us</a>
											</p>
										
									
								</div>
								<div class="col-md-4  mt-4  p-0">
									<img src="{{asset('/images/tech.jpg')}}" class="img-fluid img-thumbnail w-100 float-right mt-4 mb-4">
						
									</div>
								
								
					</div>
				</div>
			</div>
			
					<div class="row justify-content-center mb-1 ">
						<div class="col-md-4 w-auto no-outline m-1 p-0">
							<img src="{{asset('/images/tools.JPG')}}" class="img-fluid w-100 mt-4 mb-4 ">
						</div>
						<div class="col-md-8 w-auto no-outline animated fadeInUp delay-4s">
							
								<h3 style="font-size: 48px;" class="font-weight-bold text-secondary text-center h3">Mass Media & Journalism</h3>
								
									<p style="font-size: 24px;" class="font-weight-bold text-primary">Do you ever wished a certain message was gotten clear by your audience?
									Did you ever wish your audience was larger? Wanted to commmunicate to a deaf person?
								If yes! We got you covered.
							We have articulate sign interpreters who will pass the message for you. No fuss! We will get your information passed as you wish and you will love us.</p>
							<h5 class="h5 font-weight-bold text-primary" style="font-size: 24px">We got you covered for</h5>
							<ul class="list-type-none h5 text-left" style="font-size: 20px;">
								<li class="text-success">professional Photograpy</li>
								<li class="text-success">Video shooting</li>
								<li class="text-success">TV content creators</li>
								<li class="text-success">Script Writers</li>
								<li class="text-success">News writing</li>					
							</ul>
								
							</div>
						</div>

						<div class="row mb-3 justify-content-center">
							<div class="col-md-12">
								<div class="carousel slide" data-ride="carousel" id="NewsCarousel">
									{{-- <ol class="carousel-indicators">
										<li class="active" data-target="#NewsCarousel" data-slide-to="0"></li>
										<li data-target="#NewsCarousel" data-slide-to="1"></li>
										<li data-target="#NewsCarousel" data-slide-to="2"></li>
										<li data-target="#NewsCarousel" data-slide-to="3"></li>
									</ol> --}}
									
									<div class="carousel-inner mt-2">
										<div class="carousel-item active">
											<img src="/images/white.jpg" class="d-block w-100" alt="" width="1100">
											<div class="carousel-caption">
												<h1 class="h1 font-weight-bold text-success"><a href="">
													TRENDING</a></h1>
											</div>
										</div>
										@foreach($news as $trend)
										<div class="carousel-item">
											<img src="/images/white.jpg" class="img-fluid  w-100" alt="{{$trend->title}}">
											<div class="carousel-caption">
												<h3 class="h3 font-weight-bold text-info"><a href="/news#{{$trend->id}}">
													{{$trend->title}}</a></h3>
											</div>
										</div>
										@endforeach
									</div>
									
									<a class="carousel-control-prev" href="#NewsCarousel" data-slide="prev" title="Previous">
									  <span class="carousel-control-prev-icon"></span>
									</a>
									<a class="carousel-control-next" href="#NewsCarousel" data-slide="next" title="next">
									  <span class="carousel-control-next-icon"></span>
									</a>
								</div>
							</div>
						</div>
						
		</div>			
		</div>
	</div>
</div>
@endsection
