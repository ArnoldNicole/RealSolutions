 @extends('layouts.app')

@section('content')
            <div class="container-fluid w-100 mt-4">
                <div class="row w-100">
                    @if($message = Session::get('success'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">&times;</button><br>
                        <strong>{{$message}}</strong>
                    </div>
                    @endif
                     @if($message = Session::get('error'))
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">&times;</button><br>
                        <strong>{{$message}}</strong>
                    </div>
                    @endif 
                </div>
                <div class="row card-body shadow justify-content-center" >
                    <div class="col-md-4">
                        <h4 class="text-center font-weight-bold font-italic text-success">To reach us</h4>

                        <div align="center" class="p-10 text-xl card-deck card-body ">
                            <div  class="rounded-inputs animated tada">
                            <i class="fa fa-envelope glyphicon-th-large  font-weight-bold text-danger" style="font-size: x-large;"></i>
                        <a href="mailto:arnoldwamae2@gmail.com?subject=feedback" target="_blank" class="btn-link alert-dismissible font-weight-bold h3 text-danger">mail</a>
                    </div>
                        </div>
                        <div align="center" class="p-10 text-xl card-deck card-body ">
                            <div class="rounded-inputs animated tada">
                            <i class="fa fa-phone h3 font-weight-bold text-primary" style="font-size: x-large;"></i><a href="tel:+254708509365" class="btn-link alert-dismissible font-weight-bold h3 text-primary">sms</a>
                        </div>
                        <div class="rounded-inputs animated tada">
                            <i class="fa fa-phone h3 font-weight-bold text-primary" style="font-size: x-large;"></i><a href="tel:+254759884908" class="btn-link alert-dismissible font-weight-bold h3 text-primary">call</a>
                        </div>
                        </div>
                        <div align="center" class="p-10 text-xl card-deck card-body ">
                            <div class="rounded-inputs animated tada">
                            <i class="fa fa-whatsapp h3 font-weight-bold text-success" style="font-size: x-large;"></i> <a href="https://wa.me/qr/6IRKQHNVH4D5P1" class="btn-link alert-desmissible font-weight-bold h3 text-success">Whatsapp</a>
                        </div>
                        </div> 
                        <div class="row">
                            <div class="col-md">
                                <img src="/images/location.png" alt=""> <span class="font-weight-bold"> Nairobi</span><br>
                            <i class="fa fa-envelope"></i> <span class="font-weight-bold">info@realsolutions.com</span><br>
                            <i class="fa fa-phone"></i> <span class="font-weight-bold">+254 (769) 703 984 | +254 (759) 884 908</span> 
                            </div>
                        </div>             
                    </div>  
                    <div class="col-md-8 ">
                        <h6 class="text-center text-success">Ask A Qustion or message us below</h6>
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                
                            </div>
                            
                        </div>
                        <form action="{{url('/contact/SendMessage')}}" class="form-panel" method="post" accept-charset="utf-8">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Full Name" required autocomplete="off">
                                
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Email Here" required autocomplete="off">
                                
                            </div>

                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea name="message" class="form-control" id="message"  required autocomplete="off" minlength="20" rows="5"></textarea>
                                
                            </div>

                            <div class="form-group justify-content-center">
                                <button type="submit" name="submit" class="btn btn-primary">Send Message</button>
                                
                            </div>
                            
                        </form>         
                    </div>          
                    </div>
                    
                 
                </div>
           @endsection