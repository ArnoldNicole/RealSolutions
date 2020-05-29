@extends('layouts.app')

@section('content')
<div class="row justify-content-center mt-5">
	<div class="col-md-10">
		<div class="card">
			<div class="card-body">
				<h4 class="h4 text-center text-info">Interedsted Students</h4>
				@foreach($students as $student)
					<div class="card">
						<div class="card">
							<div class="row">
								<div class="col-4 mt-2 align-items-center">
									<div class="btn-group">
										<a href="#" class="btn btn-sm btn-primary">Mail</a>
										<a href="#" class="btn btn-sm btn-success">Say Hello</a>
									</div>
								</div>
								<div class="col-8">
									<div class="pr-3">{{$student->fullname}}</div>
									<div class="pr-3">{{$student->email}}</div>
									<div class="pr-3">{{$student->language}}</div>
								</div>
							</div>
						</div>
					</div>
					<div class="dropdown-divider"></div>
				@endforeach
			</div>
		</div>
	</div>
</div>
@endsection