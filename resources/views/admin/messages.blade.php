
@extends('layouts.app')
@section('content')
<div class="container-fluid">
	<div class="row mt-5 m-0 p-0">
<div class="card w-100">
	<div class="card-header bg-light">
		Welcome <span class="text-secondary font-weight-bold">{{auth()->user()->name}}</span> 
	
	<span class="float-right font-weight-bold "><a href="/home">Back</a></span></div>
</div>
	<hr>
<div class="row card-body bg-transparent">
	<div class="col-md-2">		
			<a href="/admin/Messages"><span class="btn btn-outline-danger btn-block text-success font-weight-bold"><i class="fa fa-envelope"></i> {{$messages->count()}}</span></a>
			<span class="btn btn-outline-danger btn-block text-danger font-weight-bold"><i class="fa fa-users"></i> {{$users->count()}} Admins</span>
		
	</div>
	<div class="col-md-8">
		<div class="">
			{{auth()->user()->email}} <a href="#" class="card-link">Change email</a>
		</div>
		<hr>
		<div class="card-block">
			@foreach($messages as $message)
			<div class="card-body border border-danger mb-2">
				<div><span>From :{{$message->name}}</span> <span class="float-right">{{$message->email}}</span><hr></div>
				<div><blockquote class="blockquote h5">
					{{$message->message}}
				</blockquote></div>
				<a href="mailto:{{$message->email}}?subject=feedback">Reply Via Email</a> <span>|</span>
				<form action="/admin/MessageRead/{{$message->id}}" method="POST">
					@csrf
					@method('DELETE')

					<button class="btn btn-outline-danger">Mark as read</button>
				</form>
			</div>
			@endforeach
			{{$messages->links()}}
		</div>
	</div>
	<div class="col-md-2">
		<div class="w-100">
			<h4 align="center" class="h4 text-dark text-capitalize">Social</h4>
			<a target="_blank" href=#><i class="fa fa-facebook btn btn-block btn-outline-primary mt-1 "> Wamae Dev</i></a>
			<a target="_blank" href=#><i class="fa fa-twitter btn btn-block btn-outline-primary mt-1 "> Wamae Dev</i></a>
			<a target="_blank" href=#><i class="fa fa-google-plus btn btn-block btn-outline-danger mt-1 "> Wamae Dev</i></a>
		</div>
	</div>
</div>

	</div>
@endsection
