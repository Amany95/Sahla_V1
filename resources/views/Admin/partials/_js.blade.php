      <!-- Mainly scripts -->
      <script src="{{ asset('admin/js/jquery-2.1.1.js') }}"></script>
      <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
      <!-- Custom and plugin javascript -->
      <script src="{{ asset('admin/js/inspinia.js') }}"></script>
      <script src="{{ asset('admin/js/plugins/pace/pace.min.js') }}"></script>
      <script src="{{ asset('admin/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
      <!-- Chosen -->
      <script src="{{ asset('admin/js/plugins/chosen/chosen.jquery.js') }}"></script>
      <!-- JSKnob -->
      <script src="{{ asset('admin/js/plugins/jsKnob/jquery.knob.js') }}"></script>
      <!-- Input Mask-->
      <script src="{{ asset('admin/js/plugins/jasny/jasny-bootstrap.min.js') }}"></script>
      <!-- Data picker -->
      <script src="{{ asset('admin/js/plugins/datapicker/bootstrap-datepicker.js') }}"></script>
      <!-- NouSlider -->
      <script src="{{ asset('admin/js/plugins/nouslider/jquery.nouislider.min.js') }}"></script>
      <!-- Switchery -->
      <script src="{{ asset('admin/js/plugins/switchery/switchery.js') }}"></script>
      <!-- IonRangeSlider -->
      <script src="{{ asset('admin/js/plugins/ionRangeSlider/ion.rangeSlider.min.js') }}"></script>
      <!-- iCheck -->
      <script src="{{ asset('admin/js/plugins/iCheck/icheck.min.js') }}"></script>
      <!-- MENU -->
      <script src="{{ asset('admin/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
      <!-- Color picker -->
      <script src="{{ asset('admin/js/plugins/colorpicker/bootstrap-colorpicker.min.js') }}"></script>
      <!-- Clock picker -->
      <script src="{{ asset('admin/js/plugins/clockpicker/clockpicker.js') }}"></script>
      <!-- Image cropper -->
      <script src="{{ asset('admin/js/plugins/cropper/cropper.min.js') }}"></script>
      <!-- Date range use moment.js same as full calendar plugin -->
      <script src="{{ asset('admin/js/plugins/fullcalendar/moment.min.js') }}"></script>
      <!-- Date range picker -->
      <script src="{{ asset('admin/js/plugins/daterangepicker/daterangepicker.js') }}"></script>
      <!-- Select2 -->
      <script src="{{ asset('admin/js/plugins/select2/select2.full.min.js') }}"></script>
      <!-- TouchSpin -->
      <script src="{{ asset('admin/js/plugins/touchspin/jquery.bootstrap-touchspin.min.js') }}"></script>
      <!-- Tags Input -->
      <script src="{{ asset('admin/js/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>
      <!-- Dual Listbox -->
      <script src="{{ asset('admin/js/plugins/dualListbox/jquery.bootstrap-duallistbox.js') }}"></script>
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
         
         
         
       @yield('javascript')
         
      </script>