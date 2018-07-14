 @extends('Admin.master')

@section('title','Services|Sahla')
 @section('content')
            <div class="wrapper wrapper-content animated fadeInRight">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="ibox float-e-margins">
                        <div class="ibox-title  back-change">
                           <h5>Header</h5>
                        </div>
                        <div class="ibox-content">
                          <div class="ibox-content">
                          <div class="form-horizontal">
                                <form method="POST" action="/admin/app_services" enctype="multipart/form-data">
                                  {{ csrf_field() }}
                                
                                  <div class="form-group"><label class="col-md-2 control-label">Header</label>
                                      <div class="col-md-10"><input type="text" name="header" required="" placeholder="" class="form-control"> 
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
                           <h5>Part 1</h5>
                        </div>
                        <div class="ibox-content">
                        
                            
                       
                        <div class="ibox-content">
                            <div class="form-horizontal">
                                
                                <div class="form-group"><label class="col-md-2 control-label">Header</label>

                                    <div class="col-md-10"><input type="text" placeholder="" required="" name="header1" class="form-control"> 
                                    </div>
                                </div>
                               
                                <div class="form-group"><label class="col-md-2 control-label">Pharagraph</label>

                                    <div class="col-md-10"><textarea type="text" required="" name="paragraph1" placeholder="" rows="4"  class="form-control"></textarea>  
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
                           <h5>Part 2</h5>
                        </div>
                        <div class="ibox-content">
                        
                            
                       
                        <div class="ibox-content">
                            <div class="form-horizontal">
                                
                                <div class="form-group"><label class="col-md-2 control-label">Header</label>

                                    <div class="col-md-10"><input type="text" name="header2" required="" placeholder="" class="form-control"> 
                                    </div>
                                </div>
                               
                                <div class="form-group"><label class="col-md-2 control-label">Pharagraph</label>

                                    <div class="col-md-10"><textarea type="text" required="" name="paragraph2" placeholder="" rows="4"  class="form-control"></textarea>  
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
                           <h5>Part 3</h5>
                        </div>
                        <div class="ibox-content">
                        
                            
                       
                        <div class="ibox-content">
                            <div class="form-horizontal">
                              
                                <div class="form-group"><label class="col-md-2 control-label">Header</label>

                                    <div class="col-md-10"><input type="text" name="header3" required="" placeholder="" class="form-control"> 
                                    </div>
                                </div>
                               
                                <div class="form-group"><label class="col-md-2 control-label">Pharagraph</label>

                                    <div class="col-md-10"><textarea type="text" name="paragraph3" placeholder="" required="" rows="4"  class="form-control"></textarea>  
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
                           <h5>Part 4</h5>
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
                              </div>
                               
                                
                            

                        </div>
                  
                        </div>
                     </div>
                  </div>
               </div>
                
               <div class="row">
                  <div class="form-group">
                              <div class="col-lg-offset-2 col-lg-10 m-b-lg">
                                       <button class="btn btn-primary pull-right" name="save_services" type="submit">Save changes</button></form>
                                    </div>      
                                </div>
               </div>
            @endsection