
 @extends('Admin.master')

@section('title','Client|Sahla')
 @section('content')
            <div class="wrapper wrapper-content animated fadeInRight">
               
               <div class="row">
                  <div class="col-lg-12">
                     <div class="ibox float-e-margins">
                        <div class="ibox-title  back-change">
                           <h5>  Add Employee </h5> <small>  &nbsp; &nbsp; number (11)</small> 
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
                            <div class="x_panel">
                                
                                <div class="x_content">
                                    <div class="row">
                                    <form action=" /admin/add_client" method="post">
                                      {{ csrf_field() }}
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label>Client name</label>
                                                <input class=" form-control" name="client_name" type="text" placeholder="">
                                            </div>
                                            
                                            <div class="form-group">
                                            <label>Description</label>
                                            
                                                <textarea class="resizable_textarea form-control" placeholder="This text area automatically resizes its height as you fill in more text courtesy of autosize-master it out..." name="description" rows="8"></textarea>
                                         
                                        </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="x_content text-right">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                                <button type="submit" class="btn btn-red"><a href="/admin/online_clients">Cancel</button></a>
                                            </div>
                                        </div>
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
@endsection