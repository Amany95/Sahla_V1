<!DOCTYPE html>
<html>
   <head>
    @include('Admin.partials._head')
   </head>
   <body>
      <div id="wrapper">
       @include('Admin.partials._nav')
         <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
               <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                  <div class="navbar-header">
                     <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                  </div>
                  <ul class="nav navbar-top-links navbar-right">
                     <li>
                        <form action='' method='POST'>
                            {{ csrf_field() }}
                        <button name="logout"><i class="fa fa-sign-out"></i> Log out</button>
                        </form>
                     </li>
                  </ul>
               </nav>
            </div>
            <div class="wrapper wrapper-content animated fadeInRight">
               
               @yield('content')
            </div>
            <div class="footer">
               <div>
                  <strong>Copyright</strong> Xwady Company &copy; 2017
               </div>
            </div>
         </div>
      </div>
       @include('Admin.partials._js')
       @yield('scripts')
   </body>
</html>