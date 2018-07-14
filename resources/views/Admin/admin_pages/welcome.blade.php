@extends('Admin.master')
         
@section('title','Edit|Sahla')


@section('content')
            <div class="wrapper wrapper-content animated fadeInRight">
               
               <div class="row">
                  <div class="col-lg-12">
                     <div class="ibox float-e-margins">
                        <div class="ibox-title  back-change">
                           <h5>Content</h5>
                        </div>
                        <div class="ibox-content">
                        
                       
                        <div class="ibox-content">
                            <form class="form-horizontal" method="POST" action="/admin/welcome">
                               {{ csrf_field() }}
                                <div class="form-group"><label class="col-md-2 control-label">Header</label>

                                    <div class="col-md-10"><input type="text" required="" name="header" placeholder="" class="form-control"> 
                                    </div>
                                </div>
                               
                                <div class="form-group"><label class="col-md-2 control-label">Paragraph</label>

                                    <div class="col-md-10"><textarea type="text" required="" name="paragraph" placeholder="" rows="4"  class="form-control"></textarea>  
                                    </div>
                                </div>
                               
                               
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                       <button class="btn btn-primary pull-right" name="save_changes" type="submit">Save changes</button>
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