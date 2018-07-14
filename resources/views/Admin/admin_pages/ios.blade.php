@extends('Admin.master')
         
@section('title','Edit|Sahla')


@section('content')
            <div class="wrapper wrapper-content animated fadeInRight">
               
               <div class="row">
                  <div class="col-lg-12">
                     <div class="ibox float-e-margins">
                        <div class="ibox-title  back-change">
                           <h5>  download Mobile App </h5> <small>  &nbsp; &nbsp;   Ios</small> 
                        </div>
                        <div class="ibox-content">
                        
                            
                       
                        <div class="ibox-content">
                            <div class="x_panel">
                                
                                <div class="x_content">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="x_content">
                                                <div class="wrap">
                                          
                                                    
                                                    <h4>Shoot screen  Image From app</h4>
                                                    <div class="upload-thumb thumbnail"> <img id="img" src="img/_mobile.png" style="max-width: 147px;" alt="" /></div>
                                                    <form action="/admin/ios" method="POST" enctype="multipart/form-data">
                                                      {{ csrf_field() }}
                                                        <label for="upload" class="btn btn-primary">Change Image
                                                            <input type="file" name="img" id="upload">
                                                        </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label>Header</label>
                                                <input class=" form-control" required="" name="ios_header" type="text" placeholder="">
                                            </div>
                                            
                                            <div class="form-group">
                                            <label>Description</label>
                                            
                                                <textarea class="resizable_textarea form-control" name="ios_description" placeholder="This text area automatically resizes its height as you fill in more text courtesy of autosize-master it out..." rows="8" required=""></textarea>
                                         
                                        </div>
                                        <div class="form-group">
                                                <label>Video URL</label>
                                                <input class=" form-control" required="" type="text" name="ios_video" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="x_content text-right">
                                                <button type="submit" name="save_ios" class="btn btn-primary">Save</button>
                                                <button type="submit" class="btn btn-red">Cancel</button>

                                            </form>

                                            </div>
                                        </div>
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