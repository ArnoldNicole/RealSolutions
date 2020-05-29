<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf_token" content="{{csrf_token()}}">
        <title>UnitingVisions</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{asset('/css/app.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('/css/custom.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('/css/font-awesome/css/font-awesome.css')}}">         
         <link rel="stylesheet" href="{{asset('/css/animate.css')}}">
         <script src="{{asset('js/app.js')}} " async defer></script>
        {{--  jquery --}}
     <script src="{{asset('js/jquery3.1.js')}}"></script> 
        {{-- popper.min.js --}}
      {{--   <script src="{{asset('js/popper.min.js')}}"></script> --}}
        {{-- bootstrap.min.js --}}
        @yield('links')
        @yield('additional-links')
        <style>
  div.backstretch{
    filter: blur(10px);
  }

  
    .chat {
      list-style: none;
      margin: 0;
      padding: 0;
    }

    .chat li {
      margin-bottom: 10px;
      padding-bottom: 5px;
      border-bottom: 1px dotted #B3A9A9;
    }

    .chat li .chat-body p {
      margin: 0;
      color: #777777;
    }

    .panel-body {
      overflow-y: scroll;
      height: 350px;
    }

    ::-webkit-scrollbar-track {
      -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
      background-color: #F5F5F5;
    }

    ::-webkit-scrollbar {
      width: 12px;
      background-color: #F5F5F5;
    }

    ::-webkit-scrollbar-thumb {
      -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
      background-color: #555;
    }
 
</style>
    </head>
    <body>

       <div class="container-fluid">
        <header id="header" class="bg-transparent">
        <div class="row">           
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
                  <div class="container">
                    <a class="navbar-brand text-warning font-weight-bold" href="/">
                          REAL SOLUTIONS
                        </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon  text-light"></span>
                        </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                      <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                          <a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" href="/"><span class="text-primary font-weight-bold">Home</span>
                                <span class="sr-only">(current)</span>
                              </a>
                        </li>           
                        <li class="nav-item">
                          <a class="nav-link {{ (request()->is('what_we_do')) ? 'active' : '' }}" href="/what_we_do"><span class="text-primary font-weight-bold">Services</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link {{ (request()->is('Gallery')) ? 'active' : '' }}" href="/Gallery"><span class="text-primary font-weight-bold">Our gallery</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link {{ (request()->is('learn_about_us')) ? 'active' : '' }}" href="/learn_about_us"><span class="text-primary font-weight-bold">About us</span></a>
                        </li> 
                        <li class="nav-item">
                          <a class="nav-link {{ (request()->is('contact_us')) ? 'active' : '' }}" href="/contact_us"><span class="text-primary font-weight-bold">Contact us</span></a>
                        </li>
                                                <li class="nav-item">
                          <a class="nav-link {{ (request()->is('blog')) ? 'active' : '' }}" href="/blog"><span class="text-primary font-weight-bold">Blog</span></a>
                        </li>
                            <li class="nav-item">
                          <a class="nav-link {{ (request()->is('news')) ? 'active' : '' }}" href="/news"><span class="text-primary font-weight-bold">News</span></a>
                        </li>

                        <li class="nav-item dropdown">
                          <a id="navbarDropdown" class="nav-link dropdown-toggle font-weight-bold" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  <span class="caret text-white">Actions</span>
                                </a>
                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                @guest
                                  @if (Route::has('register'))
                                  <a class="dropdown-item" href="{{ route('register') }}"><span class="text-primary font-weight-bold">{{ __('Register') }}</span></a>
                                @endif
                                <a class="dropdown-item" href="{{ route('login') }}"><span class="text-primary font-weight-bold">{{ __('Login') }}</span></a>
                                @else
                                <a class="dropdown-item" href="/admin/profile/{{Auth::user()->id}}"><span class="text-primary font-weight-bold">My Profile</span></a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                              </div>

                              @endif



                        </li>

                        
                      </ul>
                     </div>
                 
                </nav>
            </div>
        </div>
        
    </header><!-- /header -->   
       <main class="py-4"  id="app">
            @yield('content')
        </main>






<div>
  <footer class="footer w-100 bg-dark" style="width: 100%"> 
    <div class="row card-body justify-content-center">
      <div class="col-md-4">
        <span class="text-center h4 font-weight-bold card-header text-white">Quick Links</span>
        <div class="dropdown-divider"></div>
        <ul class="bg-transparent list-group">
          <a href=""><li class="list-group-item text-center bg-transparent">FAQS</li></a>
          <a href="/contact_us"> <li class="list-group-item text-center bg-transparent">Contacts</li></a>
        </ul>
      </div>
      <div class="col">
        <span class="text-center h4 text-white">REAL SOLUTIONS<br>
               Copyright &copy;<script>document.write(new Date().getFullYear());</script>    </span>
               <hr>
               <div class="row">
                 <div class="float-left col-md-6">
                   <img src="{{asset('images/logo.png')}}" alt="" class="w-75 img-fluid rounded-circle" title="REAL SOLUTION LOGO" class="w-100">
                 </div>
                 <div class="float-right col-md-6">
                   <h3 class="text-white font-weight-bold"><i class="fa fa-arrow-right text-success"></i>Professional</h3>
                   <h3 class="text-white font-weight-bold"><i class="fa fa-arrow-right text-success"></i>Timely</h3>
                   <h3 class="text-white font-weight-bold"><i class="fa fa-arrow-right text-success"></i>Transparent</h3>
                 </div>
               </div>
      </div>
                 
                                 
            </div>
            <div class="row justify-content-center">
               <span class="text-center text-sm-center text-success">Real Solutions is a subsidiary of Uniting Visions a project spearheaded by <a href="https://twitter.com/wamae_arnold" target="_blank" title="Arnold`s Profile">Arnold</a>, <a href="">George</a> and <a href=""> Liz</a></span>
            </div>
      
    </footer>
</div>

   
        
          
        <script type="text/javascript" src="{{asset('lib/jquery.backstretch.min.js')}}"></script>
         {{-- <script src="{{asset('css/lib/common-scripts.js')}}"></script> --}}
        
         
    <!-- Popper js -->   
  <script>
    $.backstretch("{{asset('images/hero-bg.jpg')}}", {
      speed: 500
    });
  </script>
@yield('scripts')

    </body>

</html>
