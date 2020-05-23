@extends('layouts.app')

@section('content')
<div class="container-fluid mt-5">
  <div class="card">
    <div class="card-header bg-transparent">
      <span class="h3 text-info">{{$post->title}} </span> By <small><a href="/admin/profile/{{$post->user->id}}">{{$post->user->name}}</small></a>
      <span class="float-right">{{$post->created_at->diffForHumans()}}</span>
    </div>
    <div class="card-body border border-info">
      {!!html_entity_decode($post->body)!!}
      <div class="dropdown-divider"></div>
      <h5 class="text-info">Public Comments</h5>


        <div class="row mt-3 mr-3 ml-3 ">
          @foreach($comments as $comment)
          
            <div class="card">
              <div class="card-body">
                <span class="float-left font-weight-bold text-warning">{{$comment->name}}</span> <span class="float-right font-weight-bold text-danger">{{$comment->created_at->diffForHumans()}}</span>
               <hr>
                <p class="font-weight-bold text-dark">{{$comment->comment}}</p>
              </div>
            </div>
        
          @endforeach
        </div>
        <div class="dropdown-divider"></div>
        <div class="card w-100">
          <p class="font-weight-bold text-success">Add your comments</p>
          <div class="card-body">
            <form method="POST" action="/post_comment/{{$post->id}}">
              @csrf
              <div class="row form-group">
                <div class="col-md-6">
                  <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                  <input type="text" id="name" name="name"  class="form-control @error('name') is-invalid @enderror" placeholder="Enter your name to use publicly" value="{{old('name')}}" required>
                  @error('')
                  <span>{{$message}}</span>
                  @enderror  
                </div>
                <div class="col-md-6">
                  <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
                  <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{old('name')}}" placeholder="Email Here" required>
                  @error('')
                  <span>{{$message}}</span>
                  @enderror
                </div>
                           
              </div>

              

              <div class="row form-group">
                <label for="comment" class="col-md-4 col-form-label text-md-right">Comment</label>
                <textarea name="comment" id="comment" class="form-control @error('comment') is-invalid @enderror" rows="4" placeholder="Lets Know your thoughts" required></textarea>
                @error('')
                <span>{{$message}}</span>
                @enderror
              </div>
              <div class="row">
                <button class="btn btn-primary" type="submit">Send Comment</button>
              </div>
            </form>
          </div>
        </div>

      
    </div>
  </div>
  </div>
@endsection

 