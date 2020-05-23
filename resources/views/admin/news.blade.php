@extends('layouts.app')
@section('links')
<link rel="stylesheet" href="{{asset('css/richtext.min.css')}}">
@endsection
@section('content')
<div class="container">
	<div class="container-fluid">
		<div class="row justify-content-center mt-3 mb-3">
			<a href="/admin/profile/{{auth()->user()->id}}" class="float-right">Back to profile</a>
		</div>
		<div class="row justify-content-center mb-3 mt-2 ">
			<form role="form-horizontal"  action="/admin/newsDesk/Write/{{auth()->user()->id}}" method="post">
			                       @csrf

			                       <div class="form-group row">
			                         <label class="col-form-label text-md-right font-weight-bold text-dark col-md-4">Category</label>
			                         <div class="col-md-8 input-group"> 
			                         <select name="category" class="form-control @error('category') is-invalid @enderror" > 
			                         	 <option value="{{ old('category') }}">{{old('category')}}</option>
			                             <option value="Technology">Technology</option>
			                             <option value="Sports">Sports</option>
			                             <option value="Business">Business</option> 
			                             <option value="International">International</option>
			                         </select>
			                         
			                         @error('category')
			                             <span class="invalid-feedback" role="alert">
			                                 <strong>{{ $message }}</strong>
			                             </span>
			                         @enderror   
			                         </div>      
			                       </div>  
			                       <div class="form-group row">
			                         <label class="col-form-label text-md-right font-weight-bold text-dark col-md-4">Title</label>
			                         <div class="input-group col-md-8">            
			                             <input type="text" name="title" 
			                             class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" required>
			                         
			                         @error('title')
			                             <span class="invalid-feedback" role="alert">
			                                 <strong>{{ $message }}</strong>
			                             </span>
			                         @enderror   
			                         </div>      
			                       </div> 
			                       <div class="form-group row">
			                       	<label for="body" class="col-md-4 col-form-label text-md-right">Script News Here</label>
			                       	<div class="input-group col-md-8 ">
			                       		<div class="compose-editor">
			                       			<textarea name="body" class="content form-control @error('body') is-invalid @enderror" rows="9"> {{ old('body') }}</textarea>
			                       		</div>
			                       		@error('body')
			                       		    <span class="invalid-feedback" role="alert">
			                       		        <strong>{{ $message }}</strong>
			                       		    </span>
			                       		@enderror 
			                       	</div>
			                       </div>		                       
			                       
			                       <div class="compose-btn">
			                         <button class="btn btn-primary" type="submit"><i class="fa fa-check"></i> Save</button>                           
			                         
			                       </div>
			                     </form>
		</div>

	</div>
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
 
