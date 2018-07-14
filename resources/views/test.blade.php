@extends('Admin.master')
         
@section('title','Edit|Sahla')


@section('content')
            <div class="wrapper wrapper-content animated fadeInRight">
               
               <div class="row">
                  <div class="col-lg-12">
                     <div class="ibox float-e-margins">
                        <div class="ibox-title  back-change">
                           <h5>  download Mobile App </h5> <small>  &nbsp; &nbsp;   Android</small> 
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
                                                   
                                                    <form action="/test" method="POST" enctype="multipart/form-data">

                                                 {{ csrf_field() }}

                                                        <label for="upload" class="btn btn-primary">Change Image
                                                            <input type="file" name="file" id="upload">
                                                        </label>
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="col-md-12">
                                            <div class="x_content text-right">
                                                <button type="submit" name="save_android" class="btn btn-primary">Save</button>
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