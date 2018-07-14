@extends('Admin.master')
         
@section('title','Edit|Sahla')

@endsection
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
               
<div class="row">
<div class="col-lg-12">
<div class="ibox float-e-margins">
<div class="ibox-title  back-change">
<h5>  Edit Employee </h5> <small>  &nbsp; &nbsp; 
                         

</small> 
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


<form action="/admin/update_client/{{ $client['id'] }}" method="POST">
  {{ csrf_field() }}
<div class="col-md-7">
<div class="form-group">
<label>Client name</label>
<input class=" form-control" name="edit_name" type="text" value="{{ $client['name'] }}">
</div>
<div class="form-group">
<label>Description</label>
                                            
<textarea class="resizable_textarea form-control" name="edit_descrip" rows="8">
	{{ $client['description'] }}
</textarea>
                                               

</div>
</div>
<div class="col-md-12">
<div class="x_content text-right">
<button type="submit" name="save_edit_client" class="btn btn-primary">Save</button>
<button type="submit" name="canel_edit" class="btn btn-red">Cancel</button>
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
           