
@extends('layouts.writer')

@section('content')
<div class="container mt-5"> 
  <h3 class="text-success font-weight-bold text-center">Create New Blog Article</h3>
    <form role="form-horizontal"  action="/admin/BlogPost/new/create" method="post">
                           @csrf

                           <div class="form-group">
                             <label class="col-form-label text-md-right font-weight-bold text-dark">Category</label>
                             <div class="input-group"> 
                             <select name="category" class="form-control @error('category') is-invalid @enderror" value="{{ old('category') }}">           
                                 <option value="Programming">Programming</option>
                                 <option value="Walkthrough">Walkthrough</option>
                                 <option value="General Information">General Information</option>
                                 <option value="Php & Laravel">Php & Laravel</option>
                                 <option value="Mass Media">Mass Media</option>
                                 <option value="Communication Skills">Communication Skills</option>
                                 <option value="Android">Android</option>
                                 <option value="Web Development & Html">Web Development & Html</option>
                                 <option value="Software Development">Software Development</option>
                                 <option value="News & Gossip">News & Gossip</option>
                                 <option value="Database and Data Management">Database and Data Management</option>
                               </select>
                             
                             @error('category')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                             @enderror   
                             </div>      
                           </div>  
                           <div class="form-group">
                             <label class="col-form-label text-md-right font-weight-bold text-dark">Title</label>
                             <div class="input-group">            
                                 <input type="text" name="title" 
                                 class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" required>
                             
                             @error('title')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                             @enderror   
                             </div>      
                           </div>            
                          
                           <div class="compose-editor">
                             <textarea name="body" class="wysihtml5 form-control @error('body') is-invalid @enderror" rows="9" name="body" value="{{ old('body') }}" required></textarea><hr>
                                          @error('body')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                          @enderror 
                           </div>
                           <div class="compose-btn">
                             <button class="btn btn-theme btn-sm" type="submit"><i class="fa fa-check"></i> Save</button>                           
                             
                           </div>
                         </form>
</div>
@endsection
 
 