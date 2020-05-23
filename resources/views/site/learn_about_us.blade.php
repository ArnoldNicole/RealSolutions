@extends('layouts.app')
@section('content')
<div class="container-fluid">
<div class="dropdown-divider"></div>
<div class="row mt-4">
	<div class="col-md-2">
		<img src="images/logo.png" alt="UV LOGO" class="w-75">
	</div>
<div class="col-md-10">
	<div class="card">
		<div class="card-body">
			<h4 class="font-weight-bold h">Why UnitingVisions ?</h4>
			<div class="text-info">
				Everyone has got a dream, a vision, a purpose in life. UnitingVisions is a team of young enthusiastic youths ready to achive their dreams together as a family. The team was formed in January 2020 and with a purpose to work together.
				We Work together to help you also realize your dream and vision with the little or much we can do.
				Our team has members from different fields from mass communication, Information Technology and Mass Media and journalism.

			</div>
		</div>
	</div>
</div>
</div>

<div class="row">
<div class="text-center">
	<h4 class="font-weight-bold float-right text-primary">
Team Leaders</h4>
</div>

</div>
<div class="row">
	<div class="col-md-4" style="border:2px solid #333; border-style: dashed;">
		<span class="text-warning h4">Arnold Wamae<strong> Operations Manager</strong></span><br>
		<img src="{{asset('/images/wamae.jpg')}}" class="w-50" alt="ArnoldWamae"><br>
		With a <em class="font-weight-bold text-dark">dream at sight</em>, Am tasked to ensure that As a team we move together in the right ways. Am glad to be part of this big dream and help each one of us get to where they dreamt being. 
		For our clients am glad to be working with you also achieve your dreams
		<hr>
		<div class="w-100">
			<a target="_blank" href=#><i class="fa fa-facebook"> Wamae Dev</i></a>
			<a target="_blank" href=#><i class="fa fa-twitter"> Wamae Dev</i></a>
			<a target="_blank" href=#><i class="fa fa-google-plus"> Wamae Dev</i></a>
		</div>
	</div>


<div class="col-md-4" style="border:2px solid #333; border-style: dashed;">
	<span class="text-danger h4 ">Elizabeth Murugi <strong>Human Resource</strong></span><br>
		<img src="{{asset('/images/ceo.JPG')}}" class="w-50" alt="LizKil"><br>
		<em class="font-weight-bold text-dark">Am delighted</em> to be part of a great team. Uniting Visions is  reality and a real thing to do. Together we will achieve our vision and help  every one achieve their visions. We are happy and would like many people coming on board for a good  Course.<br>
		I thank everyone behind the hardwork and love of the family
		<hr>
		<div class="w-100">
			<a target="_blank" href=#><i class="fa fa-facebook">Liz Kilonzo</i></a>
			<a target="_blank" href=#><i class="fa fa-twitter"> Liz Kilonzo</i></a>
			<a target="_blank" href=#><i class="fa fa-google-plus"> Liz Kilonzo</i></a>
		</div>
</div>


<div class="col-md-4" style="border:2px solid #333; border-style: dashed; background-blend-mode: overlay;">
	<span class="text-success h4 ">George Gichuhi<strong> Director</strong></span><br>
		<img src="{{asset('/images/george.JPG')}}" class="w-50" alt="George"><br>
		Uniting Visions is a team that <em class="font-weight-bold text-dark">exceeds my imagination</em>. I never thought myself working for such a goal. We are ere to build each other as we build the community and the globe at large. I look forward to working with everyone who comes our path.
		<hr>
		<div class="w-100">
			<a target="_blank" href=#><i class="fa fa-facebook"> Casi Casino</i></a>
			<a target="_blank" href=#><i class="fa fa-twitter">  Casi Casino</i></a>
			<a target="_blank" href=#><i class="fa fa-google-plus"> Casi Casino</i></a>
		</div>
</div>

	</div>
<hr>
<div class="row">
	<div class="col-md-3" style="border-right:2px solid red;">
		<div class="text-center"><h3 class="text-info font-weight-bold">Vision</h3></div>
		<p>To grow to a leading organization with a huge positive impact on the community</p>
	</div>
	<div class="col-md-6">
		<div class="text-center"><h3 class="text-info font-weight-bold">Our Objectives</h3></div>
		<div  class="text-success align-items-center">
			<ul>
				<li style="list-style-type: square;">Support every talent in aim to grow an all round community</li>
				<li style="list-style-type: square;">Develop together as a group and develop our skills to meet the requirements of the current world</li>
				<li style="list-style-type: square;">Be a leading firm in technology, communication and music</li>

			</ul>
		</div>
	</div>
	<div class="col-md-3" style="border-left:2px solid red;">
		<div class="text-center"><h3 class="text-info font-weight-bold">Mission</h3></div>
		<p>To build and grow together as a family without any form of discrimination.</p>
	</div>
</div>

</div>
@endsection
