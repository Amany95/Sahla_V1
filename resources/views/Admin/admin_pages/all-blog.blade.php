@extends('Admin.master')
         
@section('title','Edit|Sahla')
@section('stylesheet')

  


      <link href="{{ asset('admin/css/plugins/summernote/summernote.css')}}" rel="stylesheet">
      <link href="{{ asset('admin/css/plugins/summernote/summernote-bs3.css')}}" rel="stylesheet">
     

@endsection

@section('content')
<div id="wrapper">
        
         <div id="page-wrapper" class="gray-bg">
         
             <div class="wrapper wrapper-content">
            <div class="row">
                
                <div class="col-lg-12 animated fadeInRight">
                    <div class="row">
                        <div class="col-lg-12">
                    <div class="wrapper wrapper-content animated fadeInRight">

                        <div class="faq-item">
                          @foreach($blog as $blog)
                            <div class="row">
                                <div class="col-md-7">
                                    <a data-toggle="collapse" href="#faq{{ $blog['id'] }}" class="faq-question">{{ $blog['question'] }}</a>
                                    <small>Added by <strong>{{ $blog['name'] }}</strong> <i class="fa fa-clock-o"></i> {{ $blog['updated_at'] }}</small>
                                </div>
                                <div class="col-md-3  pull-right">
                                    <a href="/admin/delete/{{ $blog['id'] }}" class="btn btn-white btn-sm"><i class="fa fa-trash"></i> Delete </a>
                                   <a href="/admin/edit/{{ $blog['id'] }}" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div id="faq{{ $blog['id'] }}" class="panel-collapse collapse ">
                                        <div class="faq-answer">
                                            <p>
                                                {{ $blog['answer'] }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                      
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
      <!-- SUMMERNOTE -->
      <script src="{{ asset('admin/js/plugins/summernote/summernote.min.js')}}"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="{{ asset('admin/summernote-0.7.0-dist/dist/summernote.min.js')}}"></script>
      <script>
         $(document).ready(function(){
         
             $('#summernote').summernote();
         
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
 @endsection