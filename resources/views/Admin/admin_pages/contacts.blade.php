@extends('Admin.master')
         
@section('title','Edit|Sahla')

@section('stylesheet')
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>


@endsection

@section('content')
            <div class="wrapper wrapper-content animated fadeInRight">
               
               <div class="row">
                  <div class="col-lg-12">
                     <div class="ibox float-e-margins">
                        <div class="ibox-title  back-change">
                           <h5>Contact us</h5>
                        </div>
                        <div class="ibox-content">
                        
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                           
                                
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                       
                        <div class="ibox-content">
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
                                <div class="form-group"><label class="col-md-2 control-label">phone</label>

                                    <div class="col-md-10"> <input type="text" required="" class="form-control" data-mask="(999) 999-99999" name="phone" placeholder=""> </div>
                                </div>
                               <div class="form-group"><label class="col-md-2 control-label">facebok</label>

                                    <div class="col-md-10"><input type="text" required="" name="facebook" placeholder="" class="form-control"> 
                                    </div>
                                </div>
                                 <div class="form-group"><label class="col-md-2 control-label">Twitter</label>

                                    <div class="col-md-10"><input type="text" name="twitter" required="" placeholder="" class="form-control"> 
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-md-2 control-label">youtube</label>

                                    <div class="col-md-10"><input type="text" name="youtube" required="" placeholder="" class="form-control"> 
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-md-2 control-label">instagram</label>

                                    <div class="col-md-10"><input type="text" name="insta" required="" placeholder="" class="form-control"> 
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-md-2 control-label">Description</label>

                                    <div class="col-md-10"><textarea type="text" name="description" placeholder="" required="" rows="5"  class="form-control"></textarea>  
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                       <button class="btn btn-primary pull-right" id="javasubmit" name="save_contact" type="submit">Save changes</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                  
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            @endsection

@section('javascript')
            <script src="http://code.jquery.com/jquery-3.3.1.min.js"
               integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
               crossorigin="anonymous">

            jQuery(document).ready(function(){
            jQuery('#javasubmit').click(function(e){
               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });
            });
          });
</script>
@endsection            