@extends('layouts.app')

@section('content')
<div class="row mt-5 justify-content-center">
	<div class="col-lg-12">
		
		{{-- Introduction Row --}}
		<div class="row mt-4 justify-content-center">
			<div class="col-md-8">
				<h4 class="text-center text-dark font-weight-bold">REAL SOLUTIONS Programming Tutorials Centre</h4>
				<div>
					At <em>REAL SOLUTIONS</em> we believe anyone can be a programmer. We are glad that you want to learn.
				</div>
			</div>
		</div>

		{{-- Form Here --}}
		<div class="row justify-content-center">
			<div class="col-md-7">
				
			</div>
			<div class="col-md-5 border border-info">
				<div class="form mt-2 mb-2">
					<div class="row justify-content-center">
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
					<form action="/worldTutorialsCentre/requestTutorial" method="post">
						<h5 class="text-dark font-weight-bold h5">Fill the form below to get started</h5>
						@csrf
						<div class="form-group row">
							<label for="" class="col-md-4 col-form-label text-md-right">Email Adress</label>
							<div class="col-md-8 input-group">
								<input type="email" name="email" class="form-control @error('email')is-invalid @enderror" value="{{old('email')}}" required/>
								@error('email')
								<span class="text-danger">{{$message}}</span>
								@enderror
							</div>
						</div>

						<div class="form-group row">
							<label for="" class="col-md-4 col-form-label text-md-right">Full Name</label>
							<div class="col-md-8 input-group">
								<input type="text" name="fullname" class="form-control @error('fullname')is-invalid @enderror" value="{{old('fullname')}}" required/>
								@error('fullname')
								<span class="text-danger">{{$message}}</span>
								@enderror
							</div>
						</div>

						<div class="form-group row">
							<label for="" class="col-md-4 col-form-label text-md-right">Prefered Language</label>
							<div class="col-md-8 input-group">
								<select class="form-control @error('language')is-invalid @enderror" name="language">
									<option value="Php">Php</option>
									<option value="Laravel">Laravel</option>
									<option value="HTML-CSS">HTML & CSS</option>
									<option value="Javascript">Javascript</option>
									<option value="Jquery">Jquery</option>
								</select>
								@error('language')
								<span class="text-danger">{{$message}}</span>
								@enderror
							</div>
						</div>

						<div class="form-group row">
							<label for="" class="col-md-4 col-form-label text-md-right">Programming level</label>
							<div class="col-md-8 input-group">
								<select class="form-control @error('level')is-invalid @enderror" name="level">
									<option value="Beginner">Beginner</option>
									<option value="Amateur">Amateur</option>
									<option value="Semi-Pro">Semi-Pro</option>
									<option value="Professional">Professional</option>
								</select>
								@error('level')
								<span class="text-danger">{{$message}}</span>
								@enderror
							</div>
						</div>
						<div class="form-group-row">
							<div class="col-md-8 float-right">
								<button class="btn btn-block btn-secondary text-white font-weight-bold">Submit Request</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection