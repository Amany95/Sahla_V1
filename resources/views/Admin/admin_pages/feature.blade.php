@extends('Admin.master')
         
@section('title','Edit|Sahla')


@section('content')
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                  <div class="col-lg-12">
                     <div class="ibox float-e-margins">
                        <div class="ibox-title  back-change">
                           <h5> Image </h5>  
                        </div>
                        <div class="ibox-content">
                        
                            
                       
                        <div class="ibox-content">
                            <div class="x_panel">
                                
                                <div class="x_content">
                                    <div class="row">
                                        <div class="col-md-4 col-md-offset-4">
                                            <div class="x_content">
                                                <div class="wrap">
                                                    
                                                     <h4>Client Image</h4>
                                                    <div class="upload-thumb thumbnail center-block"> <img id="img" src="img/_mobile.png" alt="" /></div>
                                                    <form action="/admin/feature_img" method="POST" enctype="multipart/form-data">
                                                      {{ csrf_field() }}
                                                        <label for="upload" class="btn btn-primary">Change Image
                                                            <input type="file" name="img" id="upload">
                                                        </label>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <div class="x_content text-right">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                                <button type="submit" class="btn btn-red">Cancel</button>
                                            </div>
                                        </div></form>
                                    </div>
                                </div>
                            </div>
                        </div>
                  
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-12">
                     <div class="ibox float-e-margins">
                        <div class="ibox-title  back-change">
                           <h5>section 1</h5>
                        </div>
                        <div class="ibox-content">
                        
                            
                       
                        <div class="ibox-content">
                        <div class="form-horizontal">
                            <form  action="/admin/feature_section" method="POST" enctype="multipart/form-data">
                               {{ csrf_field() }}
                                <div class="form-group"><label class="col-md-2 control-label">Header</label>

                                    <div class="col-md-10"><input type="text" required="" name="header1" placeholder="" class="form-control"> 
                                    </div>
                                </div>
                               
                                <div class="form-group"><label class="col-md-2 control-label">Pharagraph</label>

                                    <div class="col-md-10"><textarea type="text" required="" name="paragraph1" placeholder="" rows="4"  class="form-control"></textarea>  
                                    </div>
                                </div>
                               <div class="form-group">
                                 <label class="col-md-2 control-label">icon</label> 
                                 <div class=" col-lg-10">
                                  <div  class="fileinput fileinput-new input-group" data-provides="fileinput">
                                
                                  <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span><input type="file" required="" name="change1"></span>
                                  <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                  <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                                  </div>
                                  </div>
                               </div>
                               
                                
                            </div>

                        </div>
                  
                        </div>
                     </div>
                  </div>
               </div>
                <div class="row">
                  <div class="col-lg-12">
                     <div class="ibox float-e-margins">
                        <div class="ibox-title  back-change">
                           <h5>section 2</h5>
                        </div>
                        <div class="ibox-content">
                        
                            
                       
                        <div class="ibox-content">
                            <div class="form-horizontal">
                               
                                <div class="form-group"><label class="col-md-2 control-label">Header</label>

                                    <div class="col-md-10"><input type="text" required="" name="header2" placeholder="" class="form-control"> 

                                    </div>
                                </div>
                               
                                <div class="form-group"><label class="col-md-2 control-label">Pharagraph</label>

                                    <div class="col-md-10"><textarea type="text" required="" name="paragraph2" placeholder="" rows="4"  class="form-control"></textarea>  
                                    </div>
                                </div>
                               <div class="form-group">
                                 <label class="col-md-2 control-label">icon</label> 
                                 <div class=" col-lg-10">
                                  <div  class="fileinput fileinput-new input-group" data-provides="fileinput">
                                
                                  <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span><input type="file" required="" name="change2"></span>
                                  <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                  <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                                  </div>
                                  </div>
                               </div>
                               
                                
                            </div>

                        </div>
                  
                        </div>
                     </div>
                  </div>
               </div>
                <div class="row">
                  <div class="col-lg-12">
                     <div class="ibox float-e-margins">
                        <div class="ibox-title  back-change">
                           <h5>section 3</h5>
                        </div>
                        <div class="ibox-content">
                        
                            
                       
                        <div class="ibox-content">
                            <div class="form-horizontal">
                               
                                <div class="form-group"><label class="col-md-2 control-label">Header</label>

                                    <div class="col-md-10"><input type="text" required="" name="header3" placeholder="" class="form-control"> 
                                    </div>
                                </div>
                               
                                <div class="form-group"><label class="col-md-2 control-label">Pharagraph</label>

                                    <div class="col-md-10"><textarea type="text" required="" name="paragraph3" placeholder="" rows="4"  class="form-control"></textarea>  
                                    </div>
                                </div>
                               <div class="form-group">
                                 <label class="col-md-2 control-label">icon</label> 
                                 <div class=" col-lg-10">
                                  <div  class="fileinput fileinput-new input-group" data-provides="fileinput">
                                
                                  <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span><input type="file" required="" name="change3"></span>
                                  <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                  <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                                  </div>
                                  </div>
                               </div>
                               
                                
                            </div>

                        </div>
                  
                        </div>
                     </div>
                  </div>
               </div>
                <div class="row">
                  <div class="col-lg-12">
                     <div class="ibox float-e-margins">
                        <div class="ibox-title  back-change">
                           <h5>section 4</h5>
                        </div>
                        <div class="ibox-content">
                        
                            
                       
                        <div class="ibox-content">
                            <div class="form-horizontal">
                               
                                <div class="form-group"><label class="col-md-2 control-label">Header</label>

                                    <div class="col-md-10"><input type="text" required="" name="header4" placeholder="" class="form-control"> 
                                    </div>
                                </div>
                               
                                <div class="form-group"><label class="col-md-2 control-label">Pharagraph</label>

                                    <div class="col-md-10"><textarea type="text" required="" name="paragraph4" placeholder="" rows="4"  class="form-control"></textarea>  
                                    </div>
                                </div>
                               <div class="form-group">
                                 <label class="col-md-2 control-label">icon</label> 
                                 <div class=" col-lg-10">
                                  <div  class="fileinput fileinput-new input-group" data-provides="fileinput">
                                
                                  <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span><input type="file" required="" name="change4"></span>
                                  <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                  <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                                  </div>
                                  </div>
                               </div>
                               
                                
                            </div>

                        </div>
                  
                        </div>
                     </div>
                  </div>
               </div>
                <div class="row">
                  <div class="col-lg-12">
                     <div class="ibox float-e-margins">
                        <div class="ibox-title  back-change">
                           <h5>section 5</h5>
                        </div>
                        <div class="ibox-content">
                        
                            
                       
                        <div class="ibox-content">
                            <div class="form-horizontal">
                               
                                <div class="form-group"><label class="col-md-2 control-label">Header</label>

                                    <div class="col-md-10"><input type="text" required="" name="header5" placeholder="" class="form-control"> 
                                    </div>
                                </div>
                               
                                <div class="form-group"><label class="col-md-2 control-label">Pharagraph</label>

                                    <div class="col-md-10"><textarea type="text" required="" name="paragraph5" placeholder="" rows="4"  class="form-control"></textarea>  
                                    </div>
                                </div>
                               <div class="form-group">
                                 <label class="col-md-2 control-label">icon</label> 
                                 <div class=" col-lg-10">
                                  <div  class="fileinput fileinput-new input-group" data-provides="fileinput">
                                
                                  <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span><input type="file" required="" name="change5"></span>
                                  <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                  <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                                  </div>
                                  </div>
                               </div>
                               
                                
                            </div>

                        </div>
                  
                        </div>
                     </div>
                  </div>
               </div>
                <div class="row">
                  <div class="col-lg-12">
                     <div class="ibox float-e-margins">
                        <div class="ibox-title  back-change">
                           <h5>section 6</h5>
                        </div>
                        <div class="ibox-content">
                        
                            
                       
                        <div class="ibox-content">
                            <div class="form-horizontal">
                               
                                <div class="form-group"><label class="col-md-2 control-label">Header</label>

                                    <div class="col-md-10"><input type="text" required="" name="header6" placeholder="" class="form-control"> 
                                    </div>
                                </div>
                               
                                <div class="form-group"><label class="col-md-2 control-label">Pharagraph</label>

                                    <div class="col-md-10"><textarea type="text" required="" name="paragraph6" placeholder="" rows="4"  class="form-control"></textarea>  
                                    </div>
                                </div>
                               <div class="form-group">
                                 <label class="col-md-2 control-label">icon</label> 
                                 <div class=" col-lg-10">
                                  <div  class="fileinput fileinput-new input-group" data-provides="fileinput">
                                
                                  <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span><input type="file" required="" name="change6"></span>
                                  <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                  <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                                  </div>
                                  </div>
                               </div>
                               
                                
                            </div>

                        </div>
                  
                        </div>
                     </div>
                  </div>
               </div>
                <div class="row">
                  <div class="col-lg-12">
                     <div class="ibox float-e-margins">
                        <div class="ibox-title  back-change">
                           <h5>section 7</h5>
                        </div>
                        <div class="ibox-content">
                        
                            
                       
                        <div class="ibox-content">
                            <div class="form-horizontal">
                               
                                <div class="form-group"><label class="col-md-2 control-label">Header</label>

                                    <div class="col-md-10"><input type="text" required="" name="header7" placeholder="" class="form-control"> 
                                    </div>
                                </div>
                               
                                <div class="form-group"><label class="col-md-2 control-label">Pharagraph</label>

                                    <div class="col-md-10"><textarea type="text" required="" name="paragraph7" placeholder="" rows="4"  class="form-control"></textarea>  
                                    </div>
                                </div>
                               <div class="form-group">
                                 <label class="col-md-2 control-label">icon</label> 
                                 <div class=" col-lg-10">
                                  <div  class="fileinput fileinput-new input-group" data-provides="fileinput">
                                
                                  <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span><input type="file" required="" name="change7"></span>
                                  <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                  <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                                  </div>
                                  </div>
                               </div>
                               
                                
                            </div>

                        </div>
                  
                        </div>
                     </div>
                  </div>
               </div>
                    
                <div class="row">
                  <div class="col-lg-12">
                     <div class="ibox float-e-margins">
                        <div class="ibox-title  back-change">
                           <h5>section 8</h5>
                        </div>
                        <div class="ibox-content">
                        
                            
                       
                        <div class="ibox-content">
                            <div class="form-horizontal">
                               
                                <div class="form-group"><label class="col-md-2 control-label">Header</label>

                                    <div class="col-md-10"><input type="text" required="" name="header8" placeholder="" class="form-control"> 
                                    </div>
                                </div>
                               
                                <div class="form-group"><label class="col-md-2 control-label">Pharagraph</label>

                                    <div class="col-md-10"><textarea type="text" required="" name="paragraph8" placeholder="" rows="4"  class="form-control"></textarea>  
                                    </div>
                                </div>
                               <div class="form-group">
                                 <label class="col-md-2 control-label">icon</label> 
                                 <div class=" col-lg-10">
                                  <div  class="fileinput fileinput-new input-group" data-provides="fileinput">
                                
                                  <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span><input type="file" required="" name="change8"></span>
                                  <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                  <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                                  </div>
                                  </div>
                               </div>
                               
                                
                            </div>

                        </div>
                  
                        </div>
                     </div>
                  </div>
               </div>
                <div class="row">
                  <div class="col-lg-12">
                     <div class="ibox float-e-margins">
                        
                        
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="form-group">
                              <div class="col-lg-offset-2 col-lg-10 m-b-lg">
                                       <button class="btn btn-primary pull-right" name="save_change_feature" type="submit">Save changes</button>
                                       </form>
                                    </div>      
                                </div>
               </div>
                
            </div>
           @endsection