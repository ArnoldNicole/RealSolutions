@extends('layouts.app')

@section('content')
<div class="container mt-4">
      
       <form action="/admin/profile/{{$user->id}}" enctype="multipart/form-data" method="post">
           @csrf
           @method('PATCH')
       <div class="row">
           <div class="col-8 offset-2">
               <div class="row mt-2">
                   <h3 class="h-3">Edit your profile</h3>
               </div>
    <div class="form-group row">
        <label for="title" class="col-md-4 col-form-label ">Title</label>     
            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $user->profile->title }}"  autocomplete="title">

            @error('title')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        
    </div>
    <div class="form-group row">
        <label for="title" class="col-md-4 col-form-label ">Description or Bio</label>     
            <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') ?? $user->profile->description }}"  autocomplete="description">

            @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        
    </div>

    <div class="form-group row">
        <label for="url" class="col-md-4 col-form-label ">Website</label>     
            <input id="url" type="url" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ old('url') ?? $user->profile->url }}"  autocomplete="url">

            @error('url')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        
    </div>

    <div class="row form-group">
      <div class="col">
         <label for="facebook" class="col-md-4 col-form-label ">Facebook | <i class="fa fa-facebook"></i></label>     
            <input id="facebook" type="url" class="form-control @error('facebook') is-invalid @enderror" name="facebook" value="{{ old('facebook') ?? $user->profile->facebook }}"  autocomplete="url">

            @error('facebook')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
      </div>
       <div class="col">
         <label for="facebook" class="col-md-4 col-form-label ">Twitter | <i class="fa fa-twitter"></i></label>     
            <input id="twitter" type="twitter" class="form-control @error('twitter') is-invalid @enderror" name="twitter" value="{{ old('twitter') ?? $user->profile->twitter }}"  autocomplete="twitter">

            @error('twitter')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
      </div>
       <div class="col">
         <label for="instagram" class="col-md-4 col-form-label ">Instagram | <i class="fa fa-instagram "></i></label>     
            <input id="instagram" type="instagram" class="form-control @error('instagram') is-invalid @enderror" name="instagram" value="{{ old('instagram') ?? $user->profile->instagram }}"  autocomplete="instagram">

            @error('instagram')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
      </div>
    </div>

   <div class="row pt-4">
   <button class="btn btn-primary" type="submit">Save profile</button>
   </div>
    </div>
   </form>
</div>
@endsection
 