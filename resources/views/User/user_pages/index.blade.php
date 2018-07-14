@extends('User.master')
         
@section('title','Edit|Sahla')


@section('content')
               <div class="wrapper">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-4 pull-right col-md-offset-1 m-t-60">
                           <div class="banner-info  wow fadeIn delay-05s">
                              <h1 class="bnr-title animated fadeInUp wow main-color ">تطبيق مقدم الخدمة</h1>
                              <p class="bnr-para animated fadeInDown wow m-t-30">
                                 <i class="fa fa-quote-left fa-flip-horizontal" aria-hidden="true"></i>
                                 سهلة هو تطبيق لجميع المهن ( المهنيين من دكاترة ، محاسبين ، محاميين ، و الحرفيين ، و لأصحاب المحلات )  تطبيق سهلة هيخليك تلاقى كل الناس دى بسهولة و كمان هتلاقى مع كل حد منهم أراء العملاء بالتقييمات عشان تتأكد من جودتهم 
                              </p>
                              <div class="m-t-50 m-b-20">
                                 <div id="intro">
                                    <div class="intro-content">
                                       <div class="row">
                                          <div class="">
                                             <div class='video-link col-md-5 col-xs-6'>
                                                <a href="#video-popup" class="btn btn-download animated bounceIn wow">مشاهدة الفديو</a>
                                               
                                             </div>
                                             <div class="col-md-5 col-xs-6">
                                               <a href="download.html" class="btn btn-download animated bounceIn wow"  >تحميل التطبيق</a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>

                                    <!-- Modal Popup
                                       ========================================================= -->
                                    <div id="video-popup" class="popup-modal mfp-hide">
                                       <div class="fluid-video-wrapper">
                                          <iframe src="https://www.youtube.com/embed/OmyYoqkikxI" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 
                                       </div>
                                       <a class="close-popup">Close</a>         
                                    </div>
                                    <!-- /video-popup -->     
                                 </div>
                              </div>
                              <!-- /intro -->
                           </div>
                        </div>
                        <div class="col-md-4 col-xs-12 center-block col-md-offset-2 ">
                           <div class="home-img">
                              <img id="my_images" src="img/_mobile.png" class="img-responsive center-block">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--/ HEADER-->
      <!-- Wellcom -->
      <section class="background-section2" id="main-header">
         <div class="container">
            <div class="row">
               <div class="col-xs-12 text-center m-t-60 m-b-40">
                @foreach($content as $content) 
                  <h1 class="title">{{ $content->header }}</h1>
                  <p class="pargh"> {{ $content->paragraph }}
                  </p>
                  @endforeach
               </div>
            </div>
         </div>
      </section>
      <!--Service-->
      <section id="services" class="background-section">
         <div class="container m-b-30">
            <div class="row">
               <div class="col-xs-12 text-center m-t-40">
                  <h1 class="title">اي من هذه الخدمات تحتاج ؟</h1>
                  <p class="pargh"> اختار الخدمة التي تحتاجها من ضمن المزيد من الخدمات المتوفره لدينا</p>
               </div>
               <div class="col-xs-12 m-t-60 m-b-60">
                  <div class="row">
                     <div class="col-md-4 col-xs-12">
                        <div class="item">
                          @foreach($handyman as $handyman)
                           <div class="blog-img m-t-40 ">
                              <a href="/user/worker">
                              <img src="/images/{{ $handyman->img_home }}" class="img-responsive center-block">
                              </a>
                           </div>
                           <div class="blog-info text-center">
                              <h3 class="part1"><a href="/user/worker">{{ $handyman->header }} </a></h3>
                              <p class="pargh">{{str_limit( $handyman->paragraph,25,'...')}}</p>
                              <div class="butt1 m-b-30 m-t-20">
                                 <a href="/user/worker" class="btn btn-download " >المزيد</a>
                              </div>
                           </div>
                           @endforeach
                        </div>
                     </div>
                     <div class="col-md-4 col-xs-12">
                        <div class="item">
                          @foreach($professional as $professional)
                           <div class="blog-img m-t-40">
                              <a href="/user/employee">
                              <img src="/images/{{ $professional->img_home }}" class="img-responsive center-block">
                              </a>
                           </div>
                           <div class="blog-info text-center">
                              <h3 class="part2"><a href="/user/employee">{{ $professional->header }} </a></h3>
                              <p class="pargh">{{str_limit( $professional->paragraph,25,'...')}}</p>
                              <div class="butt2 m-b-30 m-t-20">
                                 <a href="/user/employee" class="btn btn-download " >المزيد</a>
                              </div>
                           </div>
                           @endforeach
                        </div>
                     </div>
                     <div class="col-md-4 col-xs-12">
                        <div class="item">
                          @foreach($companies as $companies)
                           <div class="blog-img m-t-40">
                              <a href="/user/co_owners">
                              <img src="/images/{{ $companies->img_home }}" class="img-responsive center-block">
                              </a>
                           </div>
                           <div class="blog-info text-center">
                              <h3 class="part3"><a href="/user/co_owners">{{ $companies->header }}</a></h3>
                              <p class="pargh">{{str_limit( $companies->paragraph,25,'...')}}</p>
                              <div class="butt3 m-b-30 m-t-20">
                                 <!-- <button type="button" class="btn btn-default center-block"> المزيد </button> -->
                                 <a href="/user/co_owners" class="btn btn-download " >المزيد</a>
                              </div>
                           </div>
                           @endforeach
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Service-->
      <!-- Feature -->
      <section id="feature">
         <div class="container">
            <div class="row">
               <div class="col-xs-12 text-center m-t-60 m-b-40">
                  <h1 class="title">مميزات التطبيق</h1>
                  <p class="pargh"> اختار الخدمة التي تحتاجها من ضمن المزيد من الخدمات المتوفره لدينا</p>
               </div>
               <div class="col-md-4">
                 @foreach($feature as $feature)

                  <div class="block m-t-80">
                     <div class="blog-img m-b-5" style="text-align: justify;">
                        <img src="/images/{{ $feature->S1_icon }}">
                        <h4 class="sub-title">&nbsp;{{ $feature->S1_header }} ؟</h4>
                     </div>
                     <div class="blog-info">
                        <p class="pargh">  
                           {{ $feature->S1_paragraph }}  
                        </p>
                     </div>
                  </div>
                  <div class="block m-t-30">
                     <div class="blog-img m-b-5" style="text-align: justify;">
                        <img src="/images/{{ $feature->S2_icon }}">
                        <h4 class="sub-title">&nbsp;{{ $feature->S2_header }}</h4>
                     </div>
                     <div class="blog-info">
                        <p class="pargh">  
                          {{ $feature->S2_paragraph }}

                        </p>
                     </div>
                  </div>
                  <div class="block m-t-30">
                     <div class="blog-img m-b-5" style="text-align: justify;">
                        <img src="/images/{{ $feature->S3_icon }}">
                        <h4 class="sub-title">&nbsp;{{ $feature->S3_header }}</h4>
                     </div>
                     <div class="blog-info">
                        <p class="pargh">  
                          {{ $feature->S3_paragraph }} 
                        </p>
                     </div>
                  </div>
                  <div class="block m-t-30">
                     <div class="blog-img m-b-5" style="text-align: justify;">
                        <img src="/images/{{ $feature->S4_icon }}">
                        <h4 class="sub-title">&nbsp;{{ $feature->S4_header }}</h4>
                     </div>
                     <div class="blog-info">
                        <p class="pargh">  
                           {{ $feature->S4_paragraph }} 
                        </p>
                     </div>
                  </div>

               </div>
               <div class="col-md-4">
                @foreach($feature_img as $feature_img)
                  <img src="/images/{{ $feature_img->img }}" class="center-block m-t-40" style="width: 288px; height: 512px" alt="">
                  @endforeach
               </div>
               <div class="col-md-4">
                  <div class="block m-t-80">
                     <div class="blog-img m-b-5" style="text-align: justify;">
                        <img src="/images/{{ $feature->S5_icon }}">
                        <h4 class="sub-title">&nbsp;{{ $feature->S5_header }}</h4>
                     </div>
                     <div class="blog-info">
                        <p class="pargh">  
                           {{ $feature->S5_paragraph }} 
                        </p>
                     </div>
                  </div>
                  <div class="block m-t-30">
                     <div class="blog-img m-b-5" style="text-align: justify;">
                        <img src="/images/{{ $feature->S6_icon }}">
                        <h4 class="sub-title">&nbsp;{{ $feature->S6_header }}</h4>
                     </div>
                     <div class="blog-info">
                        <p class="pargh">  
                           {{ $feature->S6_paragraph }}
                        </p>
                     </div>
                  </div>
                  <div class="block m-t-30">
                     <div class="blog-img m-b-5" style="text-align: justify;">
                        <img src="/images/{{ $feature->S7_icon }}">
                        <h4 class="sub-title">&nbsp;{{ $feature->S7_header }}</h4>
                     </div>
                     <div class="blog-info">
                        <p class="pargh">  
                           {{ $feature->S7_paragraph }} 
                        </p>
                     </div>
                  </div>
                  <div class="block m-t-30">
                     <div class="blog-img m-b-5" style="text-align: justify;">
                        <img src="/images/{{ $feature->S8_icon }}">
                        <h4 class="sub-title">&nbsp;{{ $feature->S8_header }}</h4>
                     </div>
                     <div class="blog-info">
                        <p class="pargh">  
                           {{ $feature->S8_paragraph }} 
                        </p>
                     </div>
                  </div>
                  @endforeach
               </div>
            </div>
         </div>
      </section>
      <!-- info  -->
      <section id="info" style="background-image: url(img/info.jpg);">
         <div class="container">
            <div class="row">
              @foreach($app_services as $app_services)
               <div class="col-xs-12 text-center m-t-60 m-b-10">
                  <h1 class="title">{{ $app_services->header }}</h1>
               </div>
               <div class="col-md-12 text-center m-t-60 m-b-40">
                  <div class="row">
                     <div class="col-md-3 col-xs-12">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <h1>{{ $app_services->P1_header }}</h1>
                        <h4>
                           {{ $app_services->P1_paragraph }}
                        </h4>
                     </div>
                     <div class="col-md-3 col-xs-12">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <h1>{{ $app_services->P2_header }}</h1>
                        <h4>
                           {{ $app_services->P2_paragraph }}
                        </h4>
                     </div>
                     <div class="col-md-3 col-xs-12">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <h1>{{ $app_services->P2_header }}
                            </h1>
                        <h6 class="font-white">
                                                  {{ $app_services->P2_paragraph }}
                        </h6>
                     </div>
                     <div class="col-md-3 col-xs-12">
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        <h1>{{ $app_services->P2_header }}
                          </h1>
                        <h4>
                           
                          {{ $app_services->P2_paragraph }}
                        </h4>
                     </div>
                  </div>
               </div>
               @endforeach
            </div>
         </div>
      </section>
      <!-- TESTIMONIALS -->
      <section id="testimonials" class="testimonials  background-section" >
         <div class="container">
            <div class="row">
               <div class="col-xs-12 text-center m-t-40 m-b-20">
                  <h1 class="title">أراء العملاء</h1>
                  <p class="pargh"> اختار الخدمة التي تحتاجها من ضمن المزيد من الخدمات المتوفره لدينا</p>
               </div>
               <div class="col-sm-12 m-b-40">
                  <div id="customers-testimonials" class="owl-carousel service_area">
                     <!--TESTIMONIAL 1 -->
                     @foreach($client as $client)
                     <div class="item">
                        <i class="fa fa-quote-left fa-flip-horizontal pull-right"  aria-hidden="true"></i>
                        <br>
                        <p>
                           {{ $client->description}}
                        </p>
                        <i class="fa fa-quote-left fa-flip-vertical pull-left" aria-hidden="true"></i>     
                        <br>      
                        <h5 class="main-color">{{ $client->name }} </h5>
                        <span class="text-center">{{ $client->updated_at }}</span>
                     </div>
                    @endforeach
                    
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--  Contact us -->
      <section id="contact">
         <div class="container m-t-40 m-b-40">
            <div class="row ">
              @foreach($contactus1 as $contactus1)
               <div class="col-md-4  animated bounceInRight">
                  <h1 class="title main-color">تواصل معانا</h1>
                  <p class="pargh">أختار الخدمة التى تحتاجها من 
                     ضمن المزيد من الخدمات
                     المتوفرة لدينا
                  </p>
                  <br>
                  <h3 class="main-color">العنوان</h3>
                  <p>{{ $contactus1->address}}</p>
                  <h3 class="main-color">التليفون</h3>
                  <p>{{ $contactus1->phone }}</p>
                  @endforeach
               </div>
               
               <div class="col-md-6 col-md-offset-2">
                  <form  id="contact-form" action="/user/sahla" method="post" class="contact-form">
                     {{ csrf_field() }}
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <input type="text" class="form-control" name="name" autocomplete="off"  placeholder="الاسم">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <input type="email" class="form-control" name="email" autocomplete="off"  placeholder="البريد الاليكترونى">
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <div class="form-group">
                              <textarea class="form-control textarea" rows="7" name="message"  placeholder="أكتب رسالتك..."></textarea>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-4 ">
                           <button class="btn btn-download btn-block animated bounceIn wow"> ارسال</button> 
                           
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </section>
 @endsection