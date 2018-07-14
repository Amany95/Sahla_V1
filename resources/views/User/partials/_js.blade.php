   <!-- Return to Top -->
      <a href="javascript:" data-toggle="tooltip" title="Click to return on the top page" id="return-to-top"><i class="fa fa-chevron-up"></i></a>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <script src="{{ asset('user/js/plugins.js') }}"></script>
      <script src="{{ asset('user/js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('user/js/jquery.easing.min.js') }}"></script>
      <script src="{{ asset('user/js/wow.js') }}"></script>
      <script src="{{ asset('user/js/jquery.bxslider.min.js') }}"></script>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js'></script>
      <!-- [ COUNT SCRIPT ] -->
      <script src="{{ asset('user/js/fappear.js') }}"></script>
      <script src="{{ asset('user/js/jquery.countTo.js') }}"></script>
      <script src="{{ asset('user/js/main.js') }}"></script>
      <!-- <script src="js/mena.js"></script> -->
      <script src="{{ asset('user/js/facts.js') }}"></script>
      <script src="{{ asset('user/js/fakeLoader.min.js') }}"></script>
      <script type="text/javascript">
         $("#fakeLoader").fakeLoader({
             timeToHide:2200, //Time in milliseconds for fakeLoader disappear
             zIndex:999999999, // Default zIndex
             spinner:"spinner2",//Options: 'spinner1', 'spinner2', 'spinner3', 'spinner4', 'spinner5', 'spinner6', 'spinner7' 
             bgColor:"#45aed6" //Hex, RGB or RGBA colors
             /*imagePath:"yourPath/customizedImage.gif"*/ //If you want can insert your custom image   
         });
         @yield('javascript')
      </script>