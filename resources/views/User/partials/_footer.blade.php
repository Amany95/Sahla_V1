  <div class="container">
            <div class="row m-t-10 m-b-10 text-center">
               <div class="col-md-4 m-t-10">
                  @foreach($contactus as $contactus)
                  <ul class="list-inline m-t-10 social">
                     <li class="active list-inline-item"><a class="page-scroll" href="{{ $contactus->youtube }}"> <i class="fa fa-pinterest-p" aria-hidden="true"></i> </a></li>
                     <li class="active list-inline-item"><a class="page-scroll" href="{{ $contactus->instagram }}"> <i class="fa fa-linkedin" aria-hidden="true"></i> </a></li>
                     <li class="active list-inline-item"><a class="page-scroll" href="{{ $contactus->twitter }}"> <i class="fa fa-twitter" aria-hidden="true"></i> </a></li>
                     <li class="active list-inline-item"><a class="page-scroll" href="{{ $contactus->facebokk }}"> <i class="fa fa-facebook" aria-hidden="true"></i> </a></li>
                  </ul>
                  @endforeach
               </div>
               <div class="col-md-6 m-t-10">
                  <ul class="list-inline m-t-10">
                     <li class="active list-inline-item"><a class="page-scroll" href="/user/sahla#main-header">الرئيسية</a></li>
                     <li class="list-inline-item"><a class="page-scroll" href="/user/sahla#feature">خدماتنا</a></li>
                     <li class="list-inline-item"><a class="page-scroll" href="/user/sahla#service">المميزات</a></li>
                     <li class="list-inline-item"><a class="page-scroll" href="/user/download">كيفية الاستخدام</a></li>
                     <li class="list-inline-item"><a class="page-scroll" href="/user/sahla#contact">تواصل معنا</a></li>
                  </ul>
                  <p class="m-t-20">جميع الحقوق محفوظة ل Xwady </p>
               </div>
            </div>
         </div>