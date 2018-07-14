@extends('User.master')
         
@section('title','Edit|Sahla')


@section('content')
 <div id="fakeLoade"></div>
         <ul class="social-nav model-0">
               <li><a href="#" class="twitter"><span class="mmmm"></span><span><i class="fa fa-twitter"></i></span></a></li>
               <li>
                  <a href="https://www.facebook.com/XWADY/" class="facebook" target="_blank"> <i class="fa fa-facebook"></i></a>
               </li>
               <li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
               <li><a class="linkedin"><i class="fa fa-linkedin"></i></a></li>
            </ul>
            <div class="header">
         <div class="cover-home img-responsive" style="background: url('/images/{{ $blog['img_client'] }}'); background-repeat: no-repeat; background-size: cover; max-height: 400px;
           min-height: 400px;">
       <div class="wrapper">
                  <div class="container">
                     <div class="row">
                      <div class="blog-name">
                        <!-- <div class="col-md-1 pull-right ">&nbsp;</div> -->
                       <div class="col-xs-4">
                         <img src="/images/{{ $blog['img'] }}" class="img-responsive img-circle center-block" >
                       </div>
                       <div class="col-xs-5">
                         <div class="name main-color">
                                <p>{{ $blog['name'] }} </p>
                                <p>مدون</p>
                              </div>
                       </div>
                      </div>
                     </div>
                  </div>
               </div>
               
            </div>
         </div>
      </div>
      <!--/ HEADER-->
     <section>
       <div class="container">
         <div class="row m-t-40">
           <div class="col-md-12">
             <div class="item-content">
                          <p class="sub-title font-22">{{ $blog['question'] }}</p>
                           <div class="font-13 m-b-30">
                             <span><i class="fa fa-calendar" aria-hidden="true"></i></span>
                             <span>{{ $blog['updated_at']}}</span>
                           </div>
                          <p>
                            {{ $blog['answer'] }}


                          </p>
                        </div>

                        </div>
           </div>
           <div class="col-md-12 m-t-40 m-b-60">
             <div class="define">
               <span>
                 <img src="{{ asset('user/img/cd.png') }}">
               </span>
               <span class="name">
                 كهرباء
               </span>
               <span  class="name">
                 صيانة المنزل
               </span>
               
               
             </div>
           </div>

         </div>
       </div>
     </section>
     <!-- TESTIMONIALS -->
       <section id="main-blog" class="testimonials  background-section" >
         <div class="container">
            
            <div class="row">
            <div class="col-xs-12  m-t-40">
                  <h1 class="title" style="margin-right: 28px">مواضيع شائعة</h1>
                 
               </div>
               <div class="col-sm-12">
                  <div id="customers-testimonials" class="owl-carousel service_area">
                     <!--TESTIMONIAL 1 -->
                     @foreach($blog_count as $blog_count)
                     <a href="/images/{{ $blog_count->img  }}">
                      <div class="item most-view">
                        <div class="item-img">
                          <img src="/images/{{ $blog_count->img_client  }}" class="img-responsive">
                        </div>
                        <div class="item-content ">
                          <p class="sub-title font-22">{{ $blog_count->question }}</p>
                           <div class="font-13 pargh">
                             <span >{{ $blog_count->updated_at }}</span>
                             <span><i class="fa fa-calendar" aria-hidden="true"></i></span>
                           </div>
                          <hr>
                        </div>
                        <div class="item-footer">
                          <div class="row">
                            <div class="col-xs-3" style="padding-right: 30px">
                              <img src="img/blog03.jpg" class="img-responsive img-circle center-block" >
                            </div>
                            <div class="col-xs-8">
                              <div class="name">
                                <p>{{ $blog_count->name }}</p>
                                <p>مدون</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      </a>

                     @endforeach
                  </div>
               </div>
            </div>
         </div>
      </section>
    
  
@endsection