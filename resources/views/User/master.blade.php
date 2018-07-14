<!DOCTYPE html>
<html lang="en">
   <head>
     @include('User.partials._head')
   </head>
   <body data-spy="scroll">
      <div id="fakeLoade"></div>
      <!--HEADER-->
      <div class="header">
         <div class="cover-home" style="background: url('img/bk_3.png'); background-repeat: no-repeat; background-size: cover;">
            <div class="">
               <header id="main-header">
                @include('User.partials._nav')
               </header>
    @yield('content')
      <!--/ HEADER-->
      <!-- Wellcom -->
     
      <!--/ footer -->
      <footer id="footer" >
         @include('User.partials._footer')
      </footer>
      <!-- Return to Top -->
    @include('User.partials._js')
   </body>
</html>