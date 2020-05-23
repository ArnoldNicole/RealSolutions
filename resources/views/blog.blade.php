<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf_token" content="{{csrf_token()}}">
        <title>UnitingVisions</title>

        <!-- Fonts -->
       {{--  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> --}}

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{asset('/css/app.css')}}">      
        <link rel="stylesheet" type="text/css" href="{{asset('/css/font-awesome/css/font-awesome.css')}}">         
         <link rel="stylesheet" href="{{asset('/css/animate.css')}}">        
         <script src="{{ asset('js/app.js') }}" defer></script>
        
        
        <style>
  div.backstretch{
    filter: blur(10px);
  }
</style>
    </head>
    <body>

    <div id="app">
      <div class="container-fluid row justify-content-center">
        <div>
          <navbar></navbar>         
        </div>
        <div class="mt-4">

          <div class="row justify-content-center">
            <div class="col-md-10">
               <blog class="mt-5 ml-1"></blog>
            </div>
            <div class="col-md-2 mt-5">
              {{-- <upvote></upvote> --}}
            </div>
          </div>
          
          
        </div>
      </div>
    </div>
<script src="{{ asset('js/jquery3.1.js') }}"></script>        
<script type="text/javascript" src="{{asset('lib/jquery.backstretch.min.js')}}"></script>        
  <script>
    $.backstretch("{{asset('images/hero-bg.jpg')}}", {
      speed: 500
    });
  </script>

    </body>

</html>
