 @extends('layouts.app')

@section('content')
            <div class="container-fluid w-100 mt-4">


              <div class="row mt-4 justify-content-center">
                <div class="col-md-12 mt-3">
                      <h4 class="text-center">Search our blog</h4>
                      <div class="form-group row justify-content-center">
  <div class="col-md-10">
                        <div class="input-group">
                            <div class="input-group-prepend">
                              <i class="fa fa-search font-weight-bold text-info input-group-addon" style="font-size: xx-large;"></i>
                            </div>
                            <input id="title" type="text" class="form-control" name="title"  autocomplete="off"> 
                          </div>
</div>

                         {{--  <label for="title" class="col-md-2 col-form-label text-md-right input-group">
                            <i class="fa fa-search font-weight-bold text-info input-group-addon" style="font-size: xx-large;"></i>
                          </label>
                          <div class="col-md-10">
                              <input id="title" type="text" class="form-control" name="title"  autocomplete="off">               
                          </div> --}}
                      </div>                                         
                  </div>                  
              </div>

              <div class="row justify-content-center">
                <div class="col-md-12" id="blog_list">
                  
                </div>
              </div> 



              <div class="row card justify-content-center p-3">
                <div class="row justify-content-center">
                  <div class="col-md-9">
                  <h3 class="h3 text-info font-weight-bold text-center">{{$post->title}}</h3>
                  <div class="card-body justify-content-center mr-3 ml-3  bg-light">                
                      {!! html_entity_decode($post->body)!!}               
                    </div>  
                    </div>

                    <div class="col">
                      <div class="card">                        
                        <div class="card bg-light">
                          <h4 class="text-center "></h4>
                          <a href="https://pefachurchnjiru.org/a_word" class="btn-link alert card-body  animated flash  infinite">
                            <span class="text-danger float-right close" data-dismiss="alert">&times;</span>
                            <p>New Articles on at Pefa Church Njiru Official Website</p>
                          </a>
                          <a href="/worldTutorialsCentre/requestTutorial" class="btn-link alert card-body  animated flash  infinite">
                            <span class="text-danger float-right close" data-dismiss="alert">&times;</span>
                            <p>REAL SOLUTIONS now offering tutorials. Learn More</p>
                          </a>

                          <a href="/worldTutorialsCentre/requestAdvertWithUs" class="btn-link alert card-body  animated flash  infinite">
                            <span class="text-danger float-right close" data-dismiss="alert">&times;</span>
                            <p>Advertise Here</p>
                          </a>
                        </div>
                      </div>

                       
                    </div>
                </div>
                <div class="row justify-content-center m-2">
                    <div class="col-md-10">
                        <div class="card-body">   
                         
                          <h5 class="text-info">Comments</h5>
                            <div class="row mt-3 mr-3 ml-3 ">
                              @foreach($comments as $comment)                      
                               
                                  <div class="card-body" style="border-bottom:2px solid red;">
                                    <p class=" text-sm-center text-dark mb-2">{{$comment->comment}}</p>
                                    <span class="float-left font-weight-bold text-primary">{{$comment->name}}</span>
                                    <span class="float-right font-weight-bold text-success">{{$comment->created_at->diffForHumans()}}</span>
                                                             
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
                                 
                <div class="row justify-content-center">
                  <h3>{{$verb}} </h3>
                  @foreach($userPosts as $otherpost)
                  @if($otherpost->id!=$post->id)
                  <div class="col-4 pb-0 mb-2 bg-transparent animated fadeInUp">                     
                    <a href="/blog/{{$otherpost->id }}" class="h5 font-weight-bold text-info">{{$otherpost->title}}</a> 
                    
                        {!! html_entity_decode(substr($otherpost->body, 0, 200)) !!}...<a href="/blog/{{ $otherpost->id }}">See all</a>
                    

                  </div>
                  @endif
                  @endforeach                 
                 
                </div>
      <div class="row justify-content-center">
        <div class="col-md-4">{{$userPosts->links()}}</div>
      </div>
             </div>
            </div>

            <script type="text/javascript">
                // jQuery wait till the page is fullt loaded
                $(document).ready(function () {
                    // keyup function looks at the keys typed on the search box
                    $('#title').on('keyup',function() {
                        // the text typed in the input field is assigned to a variable 
                        var query = $(this).val();
                        // call to an ajax function
                        $.ajax({
                            // assign a controller function to perform search action - route name is search
                            url:"{{ url('search') }}",
                            // since we are getting data methos is assigned as GET
                            type:"GET",
                            // data are sent the server
                            data:{'title':query},
                            // if search is succcessfully done, this callback function is called
                            success:function (data) {
                                // print the search results in the div called country_list(id)
                                $('#blog_list').html(data);
                            }
                        })
                        // end of ajax call
                    });

                    // initiate a click function on each search result
                    $(document).on('click', 'li', function(){
                        // declare the value in the input field to a variable
                        var value = $(this).text();
                        // assign the value to the search box
                        $('#country').val(value);
                        // after click is done, search results segment is made empty
                        $('#country_list').html("");
                    });
                });
            </script>
           @endsection