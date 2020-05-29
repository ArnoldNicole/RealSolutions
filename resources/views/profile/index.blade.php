 @extends('layouts.app')

@section('content')
<div class="row justify-content-center">
   <div class="col-md-12">


         <div class="row justify-content-center mt-5">


            <div class="col-md-3 p-5">
             <h4>My Social Links</h4>
               <span style="border-right: 3px black"> <a href="{{$user->profile->facebook ?? '#'}}" style="font-size: xx-large; border-right: 3px"><i class="fa fa-facebook"></i></a> </span>
               <span style="border-right: 3px black"> <a href="{{$user->profile->twitter ?? '#'}}" style="font-size: xx-large; border-right: 3px" class="rounded-circle"><i class="fa fa-twitter"></i></a> </span>
              <span style="border-right: 3px black">  <a href="{{$user->profile->instagram ?? '#'}}" style="font-size: xx-large; border-right: 3px" class="rounded-circle text-warning"><i class="fa fa-instagram"></i></a> </span>
               <span style="border-right: 3px black">  <a href="/home" style="font-size: xx-large; border-right: 3px" class="rounded-circle text-dark"><i class="fa fa-home"></i></a> </span>
             </div> 

             <div class="col-md-2">
               <img src="{{asset('/storage/'.$user->image->photo)}}" alt="{{$user->name}}" class="img-fluid img-thumbnail rounded-circle w-100 mt-3">
              @can("update", $user->profile)
              <div class="row justify-content-center mt-2">
                <div class="col-md-8">
                  <a href="/editPhoto/{{$user->id}}" class="btn btn-block btn-sm btn-outline-success">Edit</a>
                </div>
              </div>
              @endcan
             </div>

             <div class="col-md-6 pt-5">
               @if($message = Session::get('error'))
                <div class="alert alert-dismissible alert-danger row justify-content-center">
                  <span class="close" data-dismiss="alert">&times;</span>
                  {{$message}}
                </div>                    
                @endif
            <div class="d-flex justify-content-between align-items-baseline">
             <div class="d-flex align-items-center pb-3">
                 <div class="h4 font-weight-bold text-primary">{{$user->name}}</div> 
               </div>               
           </div> 
                 @can('update', $user->profile)
                 <a href="/admin/profile/edit/{{$user->id}}" >Edit Profile</a> 
                 <a href="/admin/blog/newPost/{{$user->id}}" class="float-right btn btn-outline-primary ml-1"><span>New Blog Post</span></a>
                  <a href="/admin/newsDesk" class="float-right btn btn-outline-success ml-1"><span>Write Site News</span></a>
                 @endcan
             {{-- <div class="d-flex">
                 <div class="pr-5"><strong>{{ $postCount }}</strong> Posts</div>
                  </div>  --}} 
             <div class="pt-4 font-weight-bold">{{$user->profile->title ?? 'Uniting Visions'}}</div>
             <div>{{$user->profile->description ?? 'Uniting Visions: Beyond Rising Horizons'}}</div> 
             <div><a href="{{$user->profile->url ?? 'https://arnoldwamae.simplesite.com' }}">{{$user->profile->url ?? 'arnoldwamae.simplesite.com' }}</a></div>
         </div>


     </div>


     <hr>



     <div class="row justify-content-center mt-1">
       <div class="col-md-12">
         @foreach($user->posts as $post)
         <div class="row justify-content-center mb-2">
           <div class="col-md-10">
            <div class="card">
              
              <div class="card-header bg-info text-center font-weight-bold">
                <h4 class="text-white"> <a href="/admin/blog/{{ $post->id }}"> {{$post->title}}</a> </h4>
              </div>
                 
               <div class="card-body">
                 
                  
                      {!!html_entity_decode(substr($post->body, 0, 150))!!}
                      <a href="/admin/blog/{{ $post->id }}">read all</a>
                  
                  @can('update', $user->profile)
                  <a href="/admin/myposts/ActionCenter/{{$post->id}}" class=" text-danger font-weight-bold">Action Center</a>
                 
                   @endcan
                  
               </div>
            </div>
            
           </div>
         </div>
         @endforeach
       </div>  
     </div>


   </div>
</div>
@endsection
 