<?php
    require('conn_db.php');
      session_start();// Starting Session
            if (!$_SESSION['name_admain']) {
    $loginError = "You are not logged in.";
      header('Location:login.php?login=failed');
      exit();
}
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Home| Sahla</title>
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
      <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
      <link href="css/plugins/chosen/bootstrap-chosen.css" rel="stylesheet">
      <link href="css/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">
      <link href="css/plugins/colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet">
      <link href="css/plugins/cropper/cropper.min.css" rel="stylesheet">
      <link href="css/plugins/switchery/switchery.css" rel="stylesheet">
      <link href="css/plugins/jasny/jasny-bootstrap.min.css" rel="stylesheet">
      <link href="css/plugins/nouslider/jquery.nouislider.css" rel="stylesheet">
      <link href="css/plugins/datapicker/datepicker3.css" rel="stylesheet">
      <link href="css/plugins/ionRangeSlider/ion.rangeSlider.css" rel="stylesheet">
      <link href="css/plugins/ionRangeSlider/ion.rangeSlider.skinFlat.css" rel="stylesheet">
      <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
      <link href="css/plugins/clockpicker/clockpicker.css" rel="stylesheet">
      <link href="css/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet">
      <link href="css/plugins/select2/select2.min.css" rel="stylesheet">
      <link href="css/plugins/touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet">
      <link href="css/plugins/dualListbox/bootstrap-duallistbox.min.css" rel="stylesheet">
      <link href="css/animate.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
   </head>
   <body>
      <div id="wrapper">
         <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
               <ul class="nav metismenu" id="side-menu">
                  <li class="nav-header">
                     <div class=" profile-element"> 
                        <span>
                         <?php
                        $id=$_SESSION['id_admain'];
                        $sql="SELECT Admin_ID,Admin_img FROM admin WHERE Admin_ID=$id";
                $result=mysqli_query($conn,$sql);
                $checkresult=mysqli_num_rows($result);
                if($checkresult >0 )
                {
                  while($row=mysqli_fetch_assoc($result))
                  {
                        echo"
                        <img alt='image' class='img-circle' src='". $row['Admin_img']."';
' style='max-width: 50px; max-height: 50px;' />";}}?>

                        </span>
                        <a>
                        <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo $_SESSION['name_admain']?>
</strong>
                        </span> <span class="text-muted text-xs block"><?php echo  $_SESSION['description_admin'];?></span> </span> </a>
                     </div>
                     <div class="logo-element">
                        sahla
                     </div>
                  </li>
                 <!--  <li>
                     <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span> <span class="fa arrow"></span></a>
                     <ul class="nav nav-second-level collapse">
                        <li class="active"><a  href="index.html">home</a></li>
                     </ul>
                  </li> -->
                  <li>
                     <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Home</span> <span class="fa arrow"></span></a>
                     <ul class="nav nav-second-level collapse in">
                        <li class="active"><a href="cover-home.php">Cover</a></li>
                        <li><a href="Wellcom.php">Wellcome </a></li>
                        <li><a href="feature.php">Feature </a></li>
                        <li><a href="app-services.php"> App services</a></li>
                     </ul>
                  </li>
                  <li>
                     <a href="slide.php"><i class="fa fa-th-large"></i> <span class="nav-label">Testimonials</span> <span class="fa arrow"></span></a>
                     <ul class="nav nav-second-level collapse">
                        <li><a href="online-Clients.php">All Clients</a></li>
                        <li><a href="add-client.php">Add Client</a></li>
                     </ul>
                  </li>
                    <li>
                     <a href="slide.php"><i class="fa fa-th-large"></i> <span class="nav-label">Contact Us</span> <span class="fa arrow"></span></a>
                     <ul class="nav nav-second-level collapse">
                        <li><a href="Contacts.php"> Contact</a></li>
                     </ul>
                  </li>
                  <li>
                     <a href="slide.php"><i class="fa fa-th-large"></i> <span class="nav-label">services</span> <span class="fa arrow"></span></a>
                     <ul class="nav nav-second-level collapse">
                        <li><a href="services.php">services</a></li>
                     </ul>
                  </li>
                  <li>
                     <a href="slide.php"><i class="fa fa-th-large"></i> <span class="nav-label">Download App</span> <span class="fa arrow"></span></a>
                     <ul class="nav nav-second-level collapse">
                         <li><a href="cover-download.php">Blog Cover</a></li>
                        <li><a href="ios.php">IOS</a></li>
                        <li><a href="Android.php">Android</a></li>
                     </ul>
                  </li>
                  <li>
                     <a href="slide.php"><i class="fa fa-th-large"></i> <span class="nav-label">Blog</span> <span class="fa arrow"></span></a>
                     <ul class="nav nav-second-level collapse">
                      
                        <li><a href="add-Blog.php">Add Blog</a></li>
                        <li><a href="all-Blog.php">All Blog</a></li>
                     </ul>
                  </li>

                
                  <!-- <li>
                     <a href="slide.html"><i class="fa fa-th-large"></i> <span class="nav-label">Videos</span> <span class="fa arrow"></span></a>
                     <ul class="nav nav-second-level collapse">
                        <li><a href="add-department.html">Add Depatment</a></li>
                        <li><a href="all-videos.html">All Videos</a></li>
                        <li><a href="add-videos.html">Add Videos</a></li>
                     </ul>
                  </li> -->
               </ul>
            </div>
         </nav>
         <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
               <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                  <div class="navbar-header">
                     <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                  </div>
                  <ul class="nav navbar-top-links navbar-right">
                     <li>
                         <form action='logout.php' method='POST'>

                        <button name="logout"><i class="fa fa-sign-out"></i> Log out</button>
                        </form>
                     </li>
                  </ul>
               </nav>
            </div>
            <div class="wrapper wrapper-content animated fadeInRight">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="ibox float-e-margins">
                        <div class="ibox-title  back-change">
                           <h5>Background img </h5>
                        </div>
                        <div class="ibox-content">
                           <div class="row">
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
                            <form class="form-horizontal">
                               
                                <div class="form-group"><label class="col-md-2 control-label">Header</label>

                                    <div class="col-md-10"><input type="text" placeholder="" class="form-control"> 
                                    </div>
                                </div>
                               
                                <div class="form-group"><label class="col-md-2 control-label">Pharagraph</label>

                                    <div class="col-md-10"><textarea type="text" placeholder="" rows="4"  class="form-control"></textarea>  
                                    </div>
                                </div>
                               <div class="form-group">
                                 <label class="col-md-2 control-label">Mobile Image</label>
                                 <div class="col-lg-10">
                                  <div  class="fileinput fileinput-new input-group" data-provides="fileinput">
                                
                                  <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
                                  <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                  <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                                  </div>
                                  </div>
                               </div> 
                             
                               
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                       <button class="btn btn-primary pull-right" type="submit">Save changes</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                  
                        </div>
                     </div>
                  </div>
               </div>
              
            </div>
            <div class="footer">
               <div>
                  <strong>Copyright</strong> Xwady Company &copy; 2017
               </div>
            </div>
         </div>
      </div>
      <!-- Mainly scripts -->
      <script src="js/jquery-2.1.1.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- Custom and plugin javascript -->
      <script src="js/inspinia.js"></script>
      <script src="js/plugins/pace/pace.min.js"></script>
      <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
      <!-- Chosen -->
      <script src="js/plugins/chosen/chosen.jquery.js"></script>
      <!-- JSKnob -->
      <script src="js/plugins/jsKnob/jquery.knob.js"></script>
      <!-- Input Mask-->
      <script src="js/plugins/jasny/jasny-bootstrap.min.js"></script>
      <!-- Data picker -->
      <script src="js/plugins/datapicker/bootstrap-datepicker.js"></script>
      <!-- NouSlider -->
      <script src="js/plugins/nouslider/jquery.nouislider.min.js"></script>
      <!-- Switchery -->
      <script src="js/plugins/switchery/switchery.js"></script>
      <!-- IonRangeSlider -->
      <script src="js/plugins/ionRangeSlider/ion.rangeSlider.min.js"></script>
      <!-- iCheck -->
      <script src="js/plugins/iCheck/icheck.min.js"></script>
      <!-- MENU -->
      <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
      <!-- Color picker -->
      <script src="js/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
      <!-- Clock picker -->
      <script src="js/plugins/clockpicker/clockpicker.js"></script>
      <!-- Image cropper -->
      <script src="js/plugins/cropper/cropper.min.js"></script>
      <!-- Date range use moment.js same as full calendar plugin -->
      <script src="js/plugins/fullcalendar/moment.min.js"></script>
      <!-- Date range picker -->
      <script src="js/plugins/daterangepicker/daterangepicker.js"></script>
      <!-- Select2 -->
      <script src="js/plugins/select2/select2.full.min.js"></script>
      <!-- TouchSpin -->
      <script src="js/plugins/touchspin/jquery.bootstrap-touchspin.min.js"></script>
      <!-- Tags Input -->
      <script src="js/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
      <!-- Dual Listbox -->
      <script src="js/plugins/dualListbox/jquery.bootstrap-duallistbox.js"></script>
 
         
      <script>
         $(document).ready(function(){
         
             $('.tagsinput').tagsinput({
                 tagClass: 'label label-primary'
             });
         
             var $image = $(".image-crop > img")
             $($image).cropper({
                 aspectRatio: 1.618,
                 preview: ".img-preview",
                 done: function(data) {
                     // Output the result data for cropping image.
                 }
             });
         
             var $inputImage = $("#inputImage");
             if (window.FileReader) {
                 $inputImage.change(function() {
                     var fileReader = new FileReader(),
                             files = this.files,
                             file;
         
                     if (!files.length) {
                         return;
                     }
         
                     file = files[0];
         
                     if (/^image\/\w+$/.test(file.type)) {
                         fileReader.readAsDataURL(file);
                         fileReader.onload = function () {
                             $inputImage.val("");
                             $image.cropper("reset", true).cropper("replace", this.result);
                         };
                     } else {
                         showMessage("Please choose an image file.");
                     }
                 });
             } else {
                 $inputImage.addClass("hide");
             }
         
             $("#download").click(function() {
                 window.open($image.cropper("getDataURL"));
             });
         
             $("#zoomIn").click(function() {
                 $image.cropper("zoom", 0.1);
             });
         
             $("#zoomOut").click(function() {
                 $image.cropper("zoom", -0.1);
             });
         
             $("#rotateLeft").click(function() {
                 $image.cropper("rotate", 45);
             });
         
             $("#rotateRight").click(function() {
                 $image.cropper("rotate", -45);
             });
         
             $("#setDrag").click(function() {
                 $image.cropper("setDragMode", "crop");
             });
         
         
         
         });
         
         
         
       
         
      </script>
   </body>
</html>