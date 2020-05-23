@extends('layouts.app')
@section('content')
<div class="container mt-4 ">
	<div class="container-fluid mt-3">
		<div class="row justify-content-center mt-5">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header bg-info">
						{{$post->title}} Action Center
					</div>
					<div class="card-body">
						{!!html_entity_decode(substr($post->body, 0, 450))!!}...<a href="/admin/blog/{{ $post->id }}">read all</a>
						@can('update', $user->profile)
						<a href="/admin/myposts/ActionCenter/{{$post->id}}" class="nav-link">Back</a>
						 <div class="float-right d-inline-flex">
						  <span>
						    <a href="/admin/article/edit/{{$post->id}}" class="btn btn-lg btn-info">Edit</a>
						  </span>

						  <span> <form action="/admin/article/delete/{{$post->id}}" method="POST">
						    @csrf
						    @method('DELETE')
						    <button class="btn btn-lg btn-danger" type="submit">Delete</button>
						  </form></span>
						</div> 
						 @endcan
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection