@extends('layouts.app')

@section('content')
<div class="container">
<div class="row mt-5"> 

  <div class="col-8 mt-4">
        <img src="/images/{{$url}}" class="w-100 " >
    </div>
    <div class="col-4">

      <div class="d-flex align-items-center">
        <div class="pr-3">
          <img src="/images/{{$url}}" class="rounded-circle w-100" style="max-width: 50px">
        </div>
             <div>
          <div class="font-weight-bold">
            <a href="#">
              <span class="text-dark"></span>
            </a> 
             <a href="" class="btn btn-danger btn-sm float-right" onclick="javascript:window.close('','_parent','');">Close</a>               
          </div>

        </div> 

      </div>

      <hr>            
         <div>
          <div class="font-weight-bold">
            <a href="#">
              <span class="text-dark">{{$url}}</span>
            </a>                
          </div>
        </div>    
         
    </div>
   </div>
</div>
@endsection
 