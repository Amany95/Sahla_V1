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
                           <h5>Add Blog <small></small></h5>
                        </div>
                        <div class="ibox-content">
                           <div class="row">
                               <div class="col-md-12" style="margin-top: 10px;">
                                 <div class="form-group">
                                 <form action="/admin/add_blog" method="POST" enctype="multipart/form-data">
                                   {{ csrf_field() }}
                                    <p> Name</p>
                                    <div ><input type="text" name="name" placeholder="" class="form-control" required=""> 
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-12">
                               <div class="form-group">
                                 <p"> Add Photo</p>
                                 <div class="">
                                  <div  class="fileinput fileinput-new input-group" data-provides="fileinput">
                                
                                  <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span><input type="file" name="img" required=""></span>
                                  <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                  <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                                  </div>
                                  </div>
                               </div>
                              </div>
                              <br>


                               <div class="col-md-12">
                               <div class="form-group">
                                 <p"> Client Photo</p>
                                 <div class="">
                                  <div  class="fileinput fileinput-new input-group" data-provides="fileinput">
                                
                                  <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span><input type="file" name="img_client" required=""></span>
                                  <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                  <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                                  </div>
                                  </div>
                               </div>
                              </div>
                              <br>


                              <div class="col-md-12" style="margin-top: 10px;">
                                 <div class="form-group">
                                    <p"> Add Question</p>
                                    <div ><input type="text" placeholder="" name="question" class="form-control" required=""> 
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-12">
                                 <p > Add Answer</p>
                                 <div class="ibox float-e-margins">
                                    <div class="ibox-content no-padding">
                                       <textarea name="blog" class="resizable_textarea form-control"  id="summernote" required="" placeholder="This text area automatically resizes its height as you fill in more text courtesy of autosize-master it out..." rows="8">
                                          
                                       </textarea>
                                    </div>
                                 </div>
                              </div>
                               <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                       <button class="btn btn-primary pull-right" name="saveblog" type="submit">Save changes</button>
                                       </form>
                                    </div>
                                </div>

                           </div>
</div></div>                  </div>
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
@endsection