@extends('layouts.app')
@section('content')
<div class="row justify-content-center mt-5">
	<div class="col-md-8">
		<div class="card">
			<div class="card-header h4 bg-info text-center text-white font-weight-bold">{{$user->name}} Update your profile Picture</div>
			<div class="card-body">
				<form action="/editPhoto/savephoto/{{$user->id}}" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="row">
						<label for="photo" class="col-form-label text-md-right col-md-4">Select Photo</label>
						<div class="input-group col-md-8">
							<input type="file" name="photo" class="form-control @error('photo') is-invalid @enderror">
						</div>
					</div>
					 @error('photo') 
					<div class="row">
						<label class="col-form-label text-md-right col-md-4 text-danger font-weight-bold"></label>
						<div class="input-group col-md-8 float-right">
							<span class="text-danger font-weight-bold">{{$message}}</span>
						</div>
					</div>
					@enderror

					<div class="row">
						<div class="input-group col-md-8 float-right">
							<button class="btn btn-primary font-weight-bold text-white">Save Photo</button>
						</div>
					</div>

					
				</form>
			</div>
		</div>
	</div>
</div>
@endsection