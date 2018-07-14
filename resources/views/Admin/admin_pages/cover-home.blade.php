
 @extends('Admin.master')

@section('title','Client|Sahla')
 @section('content')
            <div class="wrapper wrapper-content animated fadeInRight">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="ibox float-e-margins">
                        <div class="ibox-title  back-change">
                           <h5>Logo Website </h5>
                        </div>
                        <div class="ibox-content">
                        <!--   <div class="row">
                              <div class="col-md-6">
                                 <div class="image-crop">
                                    <img src="img/p3.jpg">
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="btn-group">
                                    <label title="Upload image file" for="inputImage" class="btn btn-primary">
                                    <input type="file" accept="image/*" name="file" id="inputImage" class="hide">
                                    Upload new image
                                    </label>
                                    <label title="Donload image" id="download" class="btn btn-primary">Download</label>
                                 </div>
                                 <div class="btn-group">
                                    <button class="btn btn-white" id="zoomIn" type="button">Zoom In</button>
                                    <button class="btn btn-white" id="zoomOut" type="button">Zoom Out</button>
                                    <button class="btn btn-white" id="rotateLeft" type="button">Rotate Left</button>
                                    <button class="btn btn-white" id="rotateRight" type="button">Rotate Right</button>
                                    <button class="btn btn-warning" id="setDrag" type="button">New crop</button>
                                 </div>
                              </div>
                               <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                       <button class="btn btn-primary pull-right" type="submit">Save changes</button>
                                    </div>
                                </div>
                           </div>

                              -->
                          <div class="row">

                          <div class="form-group">
                           <form action="/admin/cover_home" method="POST" enctype="multipart/form-data" > 
                            {{ csrf_field() }}
                            <label class="col-md-2 control-label">Logo</label>
                            <div class="col-lg-10">
                                  <div  class="fileinput fileinput-new input-group" data-provides="fileinput">

                            <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span><input type="file" name="logo"></span>
                             <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                            <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                           </div>
                             </div>
                         </div> 
                             
                               
                           <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-primary pull-right" name="save_logo" type="submit">Save changes</button>
                             </div>
                        </div>
                        </form>
                          </div>

                            </div>



                         <div class="ibox-title  back-change">
                           <h5>Background img </h5>
                        </div>
                        <div class="ibox-content">

                        <div class="row">
                           <form action="/admin/cover_img" method="POST" enctype="multipart/form-data" > 
                            {{ csrf_field() }}

                          <div class="form-group">
                            <label class="col-md-2 control-label">Cover Image</label>
                            <div class="col-lg-10">
                                  <div  class="fileinput fileinput-new input-group" data-provides="fileinput">
                                
                            <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span><input type="file" name="cover"></span>
                             <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                            <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                             </div>
                             </div>
                         </div>
                             
                               
                           <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-primary pull-right" name="save_cover_img" type="submit">Save changes</button>
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
                           <h5>Content</h5>
                        </div>
                        <div class="ibox-content">
                        
                         
                       
                        <div class="ibox-content">
                            <form class="form-horizontal" action="/admin/cover_content" method="POST" enctype="multipart/form-data">
                               {{ csrf_field() }}
                                <div class="form-group"><label class="col-md-2 control-label">Header</label>

                                    <div class="col-md-10"><input type="text" name="header_cover" placeholder="" class="form-control"> 
                                    </div>
                                </div>
                               
                                <div class="form-group"><label class="col-md-2 control-label">Paragraph</label>

                                    <div class="col-md-10"><textarea type="text" name="paragraph_cover" placeholder="" rows="4"  class="form-control"></textarea>  
                                    </div>
                                </div>
                               <div class="form-group">
                                 <label class="col-md-2 control-label">Mobile Image</label>
                                 <div class="col-lg-10">
                                  <div  class="fileinput fileinput-new input-group" data-provides="fileinput">
                                
                                  <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span><input type="file" name="img_cover"></span>
                                  <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                  <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                                  </div>
                                  </div>
                               </div> 
                             
                               
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                       <button class="btn btn-primary pull-right" name="save_cover" type="submit">Save changes</button>
                                    </div>
                                </div>
                            </form>

</div>
</div>
</div>
</div> 
</div>                 
                     @endsection