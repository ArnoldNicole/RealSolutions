
@extends('layouts.app')
@section('content')
<div class="container-fluid">
	<div class="row mt-5 m-0 p-0">
<div class="card w-100">
	<div class="card-header bg-light">
		Welcome <span class="text-secondary font-weight-bold">{{auth()->user()->name}}</span> 
	</div>
</div>
	<hr>
<div class="row card-body bg-transparent">
	<div class="col-md-2">		
			<a href="/admin/Messages"><span class="btn btn-outline-danger btn-block text-success font-weight-bold"><i class="fa fa-envelope"></i> {{$messages->count()}} Messages</span></a>
			<span class="btn btn-outline-danger btn-block text-danger font-weight-bold"><i class="fa fa-users"></i> {{$users->count()}} Admins</span>
			<a href="/blog" target="_blank"><span class="btn btn-outline-dark btn-block text-secondary font-weight-bold"><i class="fa fa-pencil-0"></i>  Blog</span></a>
			<a href="/admin/profile/{{auth()->user()->id}}"><span class="btn btn-outline-danger btn-block text-danger font-weight-bold"><i class="fa fa-user"></i>  My Profile</span></a>
			<a href="/admin/chat" class="btn btn-outline-info btn-block">Chat</a>
		
	</div>
	<div class="col-md-8 panel-body">
		<div class="">
			{{auth()->user()->email}} <a href="#" class="card-link">Verify</a>
		</div>
		<hr>
		<h4 class="h4 font-weight-bold text-dark">Trending in the blogs</h4>
		<div class="card panel">
			<div class="card-body bg-transparent ">
				
				@foreach($posts as $post)
				<div class="card-body mb-2 pb-0 border border-primary rounded-bottom">
				   
				  <a href="/admin/blog/{{ $post->id }}" class="w-100 h5 font-weight-bold text-info">{{$post->title}}</a> 
				  <article >
				      {!! html_entity_decode(substr($post->body, 0, 200)) !!} ... <a href="/admin/blog/{{ $post->id }}">read all</a>
				  </article>
				  <span class="text-primary font-weight-bold float-left">Author: <a href="/admin/profile/{{$post->user->id}}">{{$post->user->name}}</a></span>
				  <span class="float-right text-secondary font-weight-bold">posted {{$post->created_at->diffForHumans()}}</span>
				  <div class="dropdown-divider mt-2 mb-2"></div>
				</div>
				@endforeach
			</div>
		</div>
		{{$posts->links()}}
	</div>
	<div class="col-md-2">
		<div class="w-100">
			<h4 align="center" class="h4 text-dark text-capitalize">Social</h4>
			<a target="_blank" href="{{auth()->user()->profile->facebook ?? "#"}}"><i class="fa fa-facebook btn btn-block btn-outline-primary mt-1 "> </i></a>
			<a target="_blank" href="{{auth()->user()->profile->twitter ?? "#"}}"><i class="fa fa-twitter btn btn-block btn-outline-primary mt-1 ">  </i></a>
			<a target="_blank" href="{{auth()->user()->profile->instagram ?? "#"}}"><i class="fa fa-instagram btn btn-block btn-outline-danger mt-1 "> </i></a>
		</div>
	</div>
</div>

	</div>
@endsection
