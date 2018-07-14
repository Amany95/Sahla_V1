@extends('Admin.master')
         
@section('title','Edit|Sahla')
@section('stylesheet')
    
      <link href="{{ asset('admin/css/plugins/summernote/summernote.css')}}" rel="stylesheet">
      <link href="{{ asset('admin/css/plugins/summernote/summernote-bs3.css')}}" rel="stylesheet">
@endsection

@section('content')

  
      
            <div class="wrapper wrapper-content animated fadeInRight">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="ibox">
                        <div class="ibox-title">
                           <h5>Edit Blog <small></small></h5>
                        </div>
                        <div class="ibox-content">
                           <div class="row">
                               <div class="col-md-12" style="margin-top: 10px;">
                                 <div class="form-group">
                                      <form action="/admin/update/{{ $blog['id'] }}" method="POST">
                                          {{ csrf_field() }}

                                    <p"> Name</p>
                                    <div ><input type="text" name="name"  class="form-control"  value="{{ $blog['name'] }}"> 
                                    </div>
                                 </div>
                              </div>
                          
                              <br>

                              <div class="col-md-12" style="margin-top: 10px;">
                                 <div class="form-group">
                                    <p"> Add Question</p>
                                    <div ><input type="text"  name="question" class="form-control"  value="{{ $blog['question'] }}">
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-12">
                                 <p > Add Answer</p>
                                 <div class="ibox float-e-margins">
                                    <div class="ibox-content no-padding">
                                       <textarea   id="summernote" name="blog" required="" r>
                                          {{ $blog['blog'] }}
                                       </textarea>
                                    </div>
                                 </div>
                              </div>
                               <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                       <button class="btn btn-primary pull-right" name="save_edit_blog" type="submit">Save changes</button>
                                       </form>
                                    </div>
                                </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
   @endsection
      @section('javascript')
      <!-- Mainly scripts -->
      
      <script src="{{ asset('admin/js/codemirror/codemirror.js')}}"></script>
      <script src="{{ asset('admin/js/codemirror/formatting.min.js')}}"></script>
      <script src="{{ asset('admin/js/codemirror/xml.min.js')}}"></script>
      <script src="{{ asset('admin/js/summernote.min.js')}}"></script>
      <!-- Custom and plugin javascript -->
      <script src="{{ asset('admin/js/inspinia.js')}}"></script>
      <script src="{{ asset('admin/js/plugins/pace/pace.min.js')}}"></script>
      <script src="{{ asset('admin/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
     
    
      <!-- SUMMERNOTE -->
      <script src="{{ asset('admin/js/plugins/summernote/summernote.min.js')}}"></script>
      <script>
         $(document).ready(function(){
         
            $('#summernote').summernote({
  toolbar: [
    // [groupName, [list of button]]
    ['style', ['bold', 'italic', 'underline', 'clear']],
    ['font', ['strikethrough', 'superscript', 'subscript']],
    ['fontsize', ['fontsize']],
    ['color', ['color']],
    ['para', ['ul', 'ol', 'paragraph']],
    ['height', ['height']]
  ]
});
         
         });
      </script>
      <script type="text/javascript">
$(document).ready(function() {
  $('#summernote').summernote({
    height: "500px"
  });
});
var postForm = function() {
  var content = $('textarea[name="blog"]').html($('#summernote').value());
}
</script>
   <script type="text/javascript">
$(document).ready(function() {
   $('#summernote').summernote({
      height: "500px"
   });
});
var postForm = function() {
   var content = $('textarea[name="blog"]').html($('#summernote').code());
}
</script>

 @endsection

    