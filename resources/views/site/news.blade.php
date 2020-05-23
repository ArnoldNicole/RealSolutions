@extends('layouts.app')
@section('content')
<div class="container-fluid mt-5">
	<div class="row justify-content-center mt-5">		
		<div class="col-md-8">
			@foreach($news as $new)
				<div class="row card bg-white mt-5" id="{{$new->id}}">
					<div class="text-info font-weight-bold bg-transparent h2 text-center card-header">
						<h4>{{$new->title}}. <span class="text-danger float-right">{{$new->category}}</span></h4>
						<p class="float-right  text-white h-100"><span></span></p>
					</div>
					<div class="card-body">
						<p style="font-size: x-large;">{!! html_entity_decode($new->body) !!}</p>
					</div>
					<div class="card-footer bg-transparent">
						
						{{-- @if($new->user_id==$userid)
						<span class="btn btn-outline-primary">Edit</span>	
						@endif --}}


						
						
						<span class="float-right text-sm text-dark">REAL-SOLUTIONS Author: {{$new->user->name}}</span>
					</div>
				</div>
				<div class="dropdown-divider"></div>
			@endforeach
		</div>
		<div class="col-md-4 mt-4">
			<h4 class="font-weight-bold text-primary">Also in the News...</h4>
			<ul class="list-group">
				@foreach($others as $other)
				<li class="list-group-item"><a href="/news#{{$other->id}}">{{$other->title}} .{!! html_entity_decode(substr($other->body, 0, 80)) !!}</a></li>
				@endforeach
			</ul>
		</div>
		
	</div>
	<div class="row justify-content-center">
			<div class="col-md text-center">
				{{$news->links()}}
			</div>
		</div>
</div>
@endsection