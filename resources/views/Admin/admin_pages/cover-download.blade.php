@extends('Admin.master')
         
@section('title','Edit|Sahla')


@section('content')
             <div class="wrapper wrapper-content animated fadeInRight">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="ibox float-e-margins">
                        <div class="ibox-title  back-change">
                           <h5>Background Blog </h5>
                        </div>
                        <div class="ibox-content">
                       
                          <div class="row">

                          <div class="form-group">
                           <form action="/admin/cover_blog" method="POST" enctype="multipart/form-data" > 
                            {{ csrf_field() }}
                            <label class="col-md-2 control-label">Blog Cover</label>
                            <div class="col-lg-10">
                                  <div  class="fileinput fileinput-new input-group" data-provides="fileinput">

                            <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span><input type="file" name="cover_blog"></span>
                             <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                            <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                           </div>
                             </div>
                         </div> 
                             
                               
                           <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-primary pull-right" name="save_cover_blog" type="submit">Save changes</button>
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