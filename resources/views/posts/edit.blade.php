
@extends('layouts.app')
@section('links')
<link rel="stylesheet" href="{{asset('css/richtext.min.css')}}">
@endsection
@section('content')
<div class="container mt-5"> 
  <h3 class="text-success font-weight-bold text-center">Edit {{$post->title}}</h3>
    <form role="form-horizontal"  action="/admin/article/save/{{$post->id}}" method="post">
                           @csrf
                           @method('PATCH')

                           <div class="form-group">
                             <label class="col-form-label text-md-right font-weight-bold text-dark">Category</label>
                             <div class="input-group"> 
                             <select name="category" class="form-control @error('category') is-invalid @enderror"> 
                                <option value="{{ old('category') ?? $post->category }}">{{ old('category') ?? $post->category }}</option>          
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
                                 class="form-control @error('title') is-invalid @enderror" value="{{ old('title') ?? $post->title }}" required>
                             
                             @error('title')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                             @enderror   
                             </div>      
                           </div>            
                          
                           <div class="compose-editor">
                             <textarea  type="text" name="body" class="content form-control @error('body') is-invalid @enderror" rows=9 name="body"  required>
                              {{ old('body') ?? $post->body }}
                             </textarea><hr>
                                          @error('body')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                          @enderror 
                           </div>
                           <div class="row justify-content-center">
                            <div class="col-md-6">
                               <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-check"></i> Save</button>
                            </div>                           
                             
                           </div>
                         </form>
</div>
@endsection

@section('scripts')
<script src="{{asset('js/jquery.richtext.min.js')}}"></script>
<script>
  $('.content').richText({
  // text formatting
  bold: true,
  italic: true,
  underline: true,

  // text alignment
  leftAlign: true,
  centerAlign: true,
  rightAlign: true,

  // lists
  ol: true,
  ul: true,

  // title
  heading: true,

  // fonts
  fonts: true,
  fontList: ["Arial", 
    "Arial Black", 
    "Comic Sans MS", 
    "Courier New", 
    "Geneva", 
    "Georgia", 
    "Helvetica", 
    "Impact", 
    "Lucida Console", 
    "Tahoma", 
    "Times New Roman",
    "Verdana"
    ],
  fontColor: true,
  fontSize: true,

  // uploads
  imageUpload: true,
  fileUpload: true,

  // media
  videoEmbed: true,

  // link
  urls: true,

  // tables
  table: true,

  // code
  removeStyles: true,
  code: true,

  // colors
  colors: [],

  // dropdowns
  fileHTML: '',
  imageHTML: '',

  // translations
  translations: {
    'title': 'Title',
    'white': 'White',
    'black': 'Black',
    'brown': 'Brown',
    'beige': 'Beige',
    'darkBlue': 'Dark Blue',
    'blue': 'Blue',
    'lightBlue': 'Light Blue',
    'darkRed': 'Dark Red',
    'red': 'Red',
    'darkGreen': 'Dark Green',
    'green': 'Green',
    'purple': 'Purple',
    'darkTurquois': 'Dark Turquois',
    'turquois': 'Turquois',
    'darkOrange': 'Dark Orange',
    'orange': 'Orange',
    'yellow': 'Yellow',
    'imageURL': 'Image URL',
    'fileURL': 'File URL',
    'linkText': 'Link text',
    'url': 'URL',
    'size': 'Size',
    'responsive': 'Responsive',
    'text': 'Text',
    'openIn': 'Open in',
    'sameTab': 'Same tab',
    'newTab': 'New tab',
    'align': 'Align',
    'left': 'Left',
    'center': 'Center',
    'right': 'Right',
    'rows': 'Rows',
    'columns': 'Columns',
    'add': 'Add',
    'pleaseEnterURL': 'Please enter an URL',
    'videoURLnotSupported': 'Video URL not supported',
    'pleaseSelectImage': 'Please select an image',
    'pleaseSelectFile': 'Please select a file',
    'bold': 'Bold',
    'italic': 'Italic',
    'underline': 'Underline',
    'alignLeft': 'Align left',
    'alignCenter': 'Align centered',
    'alignRight': 'Align right',
    'addOrderedList': 'Add ordered list',
    'addUnorderedList': 'Add unordered list',
    'addHeading': 'Add Heading/title',
    'addFont': 'Add font',
    'addFontColor': 'Add font color',
    'addFontSize' : 'Add font size',
    'addImage': 'Add image',
    'addVideo': 'Add video',
    'addFile': 'Add file',
    'addURL': 'Add URL',
    'addTable': 'Add table',
    'removeStyles': 'Remove styles',
    'code': 'Show HTML code',
    'undo': 'Undo',
    'redo': 'Redo',
    'close': 'Close'
  },

  // dev settings
  useSingleQuotes: false,
  height: 0,
  heightPercentage: 0,
  id: "",
  class: "",
  useParagraph: false
  
});
</script>
@endsection
 
 