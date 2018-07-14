@extends('Admin.master')
@section('title','Edit|Sahla')



@section('content')

<form class="form-horizontal" method="POST" action="/contact_us">
                              {{ csrf_field() }}
                               
                                <div class="form-group"><label class="col-md-2 control-label">Address</label>

                                    <div class="col-md-10"><input type="text" required="" name="address" placeholder="" class="form-control"> 
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-md-2 control-label">Email</label>

                                    <div class="col-md-10"><input type="text" required="" name="email" placeholder="" class="form-control"> 
                                    </div>
                                </div>


                                 <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                       <button class="btn btn-primary pull-right" id="javasubmit" name="save_contact" type="submit">Save changes</button>
                                    </div>
                                </div>

                            </form>



@endsection


@section('javascript')
<script src="http://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous">
</script>
<script>
         jQuery(document).ready(function(){
            jQuery('#javasubmit').click(function(e){

               alert($('#facebok').val());
                e.preventDefault();
                $.ajaxSetup({
                   headers: {
                       'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                   }
               });
                jQuery.ajax({
                   datatype:'ajax',
                   url: '{{ route('admin.contact') }}',
                   method: 'POST',
                   data: {
                      address: $('#address').val(),
                      email: $('#email').val(),
                     

                      facebok: $('#facebok').val(),
                      twitter: $('#twitter').val(),
                      youtube: $('#youtube').val(),
                      instagram: $('#instagram').val(),
                      description: $('#description').val()
                   },
                   success: function(result){

                     console.log(result);
                      jQuery('.alert').show();
                      jQuery('.alert').html(result.success);
                   }});
               });
            });
</script>
@endsection