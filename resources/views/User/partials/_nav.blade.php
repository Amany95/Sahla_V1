  <nav class="navbar navbar-default navbar-fixed-top">
                     <div class="container">
                        <div class="navbar-header page-scroll">
                           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           </button>
                           @foreach($cover as $cover)
                           <a class="navbar-brand" href="/user/sahla"><span class="logo-dec"><img src="/images/{{ $cover->logo}}"></span></a>
                           @endforeach
                        </div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                           <ul class="nav navbar-nav navbar-left">
                              <li class="active"><a class="page-scroll" href="/user/sahla#main-header">الرئيسية</a></li>
                              <li class=""><a class="page-scroll" href="/user/sahla#services">خدماتنا</a></li>
                              <li ><a class="page-scroll" href="/user/sahla#feature">المميزات</a></li>
                              <li ><a class="page-scroll" href="/user/download">كيفية الاستخدام</a></li>
                              <li class=""><a class="page-scroll" href="/user/sahla#contact">تواصل معنا</a></li>
                              <li class=""><a class="page-scroll" href="/user/blog">مدونات</a></li>
                           </ul>
                        </div>
                     </div>
                  </nav>