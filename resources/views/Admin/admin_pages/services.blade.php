 @extends('Admin.master')

@section('title','Services|Sahla')
 @section('content')

            <div class="wrapper wrapper-content animated fadeInRight">
                
               <div class="row">
                  <div class="col-lg-12">
                     <div class="ibox float-e-margins">
                        <div class="ibox-title  back-change">
                           <h5>Handyman</h5>
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
                            <form class="form-horizontal" method="POST" action="/admin/handymen" enctype="multipart/form-data">
                                  {{ csrf_field() }}

                               <div class="form-group">
                                 <label class="col-md-2 control-label">Image In Home</label> 
                                 <div class=" col-lg-10">
                                  <div  class="fileinput fileinput-new input-group" data-provides="fileinput">
                                
                                  <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span><input type="file" required="" name="img_home"></span>
                                  <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                  <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                                  </div>
                                  </div>
                               </div>
                               <div class="form-group">
                                 <label class="col-md-2 control-label">Image in page Handyman</label> 
                                 <div class=" col-lg-10">
                                  <div  class="fileinput fileinput-new input-group" data-provides="fileinput">
                                
                                  <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span><input type="file" required="" name="img_page"></span>
                                  <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                  <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                                  </div>
                                  </div>
                               </div>
                                <div class="form-group"><label class="col-md-2 control-label">Header</label>

                                    <div class="col-md-10"><input type="text" required="" placeholder="" name="handyman_header" class="form-control"> 
                                    </div>
                                </div>
                               
                                <div class="form-group"><label class="col-md-2 control-label">Pharagraph</label>

                                    <div class="col-md-10"><textarea type="text" required="" name="handyman_paragraph" placeholder="" rows="4"  class="form-control"></textarea>  
                                    </div>
                                </div>
                               
                               <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                       <button class="btn btn-primary pull-right" name="save-handyman" type="submit">Save changes</button>
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                  
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-12">
                     <div class="ibox float-e-margins">
                        <div class="ibox-title  back-change">
                           <h5>professional</h5>
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
                            <form class="form-horizontal " method="POST" action="/admin/professional" enctype="multipart/form-data">
                              {{ csrf_field() }}
                               <div class="form-group">
                                 <label class="col-md-2 control-label">Image In Home</label> 
                                 <div class=" col-lg-10">
                                  <div  class="fileinput fileinput-new input-group" data-provides="fileinput">
                                
                                  <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span><input type="file" required="" name="img_home"></span>
                                  <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                  <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                                  </div>
                                  </div>
                               </div>
                               <div class="form-group">
                                 <label class="col-md-2 control-label">Image in page professional</label> 
                                 <div class=" col-lg-10">
                                  <div  class="fileinput fileinput-new input-group" data-provides="fileinput">
                                
                                  <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span><input type="file" required="" name="img_page"></span>
                                  <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                  <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                                  </div>
                                  </div>
                               </div>
                                <div class="form-group"><label class="col-md-2 control-label">Header</label>

                                    <div class="col-md-10"><input type="text" required="" name="professional_header" placeholder="" class="form-control"> 
                                    </div>
                                </div>
                               
                                <div class="form-group"><label class="col-md-2 control-label">Pharagraph</label>

                                    <div class="col-md-10"><textarea type="text" name="professional_paragraph" placeholder="" rows="4" required=""  class="form-control"></textarea>  
                                    </div>
                                </div>
                               
                               <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                       <button class="btn btn-primary pull-right" name="save_professional" type="submit">Save changes</button>
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                  
                        </div>
                     </div>
                  </div>
               </div>
                <div class="row">
                  <div class="col-lg-12">
                     <div class="ibox float-e-margins">
                        <div class="ibox-title  back-change">
                           <h5>Companies</h5>
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
                            <form class="form-horizontal" method="POST" action="/admin/companies" enctype="multipart/form-data">
                              {{ csrf_field() }}
                               <div class="form-group">
                                 <label class="col-md-2 control-label">Image In Home</label> 
                                 <div class=" col-lg-10">
                                  <div  class="fileinput fileinput-new input-group" data-provides="fileinput">
                                
                                  <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span><input type="file" required="" name="img_home"></span>
                                  <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                  <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                                  </div>
                                  </div>
                               </div>
                               <div class="form-group">
                                 <label class="col-md-2 control-label">Image in page Companies</label> 
                                 <div class=" col-lg-10">
                                  <div  class="fileinput fileinput-new input-group" data-provides="fileinput">
                                
                                  <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span><input type="file" required="" name="img_page"></span>
                                  <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                  <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                                  </div>
                                  </div>
                               </div>
                                <div class="form-group"><label class="col-md-2 control-label">Header</label>

                                    <div class="col-md-10"><input type="text" required="" name="companies_header" placeholder="" class="form-control"> 
                                    </div>
                                </div>
                               
                                <div class="form-group"><label class="col-md-2 control-label">Pharagraph</label>

                                    <div class="col-md-10"><textarea type="text" required="" name="companies_paragraph" placeholder="" rows="4"  class="form-control"></textarea>  
                                    </div>
                                </div>
                               
                               <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                       <button class="btn btn-primary pull-right" name="save_companies" type="submit">Save changes</button>
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