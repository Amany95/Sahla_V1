@extends('User.master')
         
@section('title','Edit|Sahla')


@section('content')
   <body data-spy="scroll">
      <div id="fakeLoade"></div>
      <ul class="social-nav model-0">
         <li><a href="#" class="twitter"><span class="mmmm"></span><span><i class="fa fa-twitter"></i></span></a></li>
         <li>
            <a href="https://www.facebook.com/XWADY/" class="facebook" target="_blank"> <i class="fa fa-facebook"></i></a>
         </li>
         <li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
         <li><a class="linkedin"><i class="fa fa-linkedin"></i></a></li>
      </ul>
      
               <div class="wrapper">
                  <div class="container">
                     <div class="row">
                        <div class="download">
                           <!-- <div class="col-md-1 pull-right ">&nbsp;</div> -->
                           
                           <div class="col-xs-12 col-md-6 col-md-offset-3 text-center">
                              <div class="block">
                                 
                                 <h1 class="main-color font-35">حمل التطبيق المناسب لك</h1>
                                 <p>أختار الخدمة التى تحتاجها من ضمن المزيد من الخدمات المتوفرة لدينا
                                 نجن موجودون دائما لمساعدتك وتقديم الدعم </p>
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
    
        <section id="download" class="background-section">
         <div class="container">
            <div class="row">
              @foreach($android as $android)
               <div class="col-md-4 pull-right col-md-offset-1">
                  <div class="banner-info  wow fadeIn delay-05s">
                     <h1 class="bnr-title animated fadeInUp wow main-color ">{{ $android->header }}</h1>
                     <p class="bnr-para animated fadeInDown wow m-t-30">
                        <i class="fa fa-quote-left fa-flip-horizontal" aria-hidden="true"></i>
                         {{ $android->description }}
                     </p>
                    
                     <div class="m-t-50 m-b-20">
                         <div id="intro">
                                 <div class="intro-content">
                                    <div class="row">
                                       <div class="">
                                          <div class='video-link col-md-5 col-xs-5'>
                                                <a href="#video-popup" class="btn btn-download animated bounceIn wow">مشاهدة الفديو</a>
                                               
                                             </div>
                                             <div class="col-md-5 col-xs-5">
                                               <a href="download.html" class="btn btn-download animated bounceIn wow"  >تحميل التطبيق</a>
                                             </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- Modal Popup
                                    ========================================================= -->
                                 <div id="video-popup" class="popup-modal mfp-hide">
                                    <div class="fluid-video-wrapper">
                                       <iframe src="{{ $android->url }}" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 
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
                 <div>
                    <img id="my_images" src="/images/{{ $android->img }}" class="img-responsive center-block">
                 </div>
               </div>
               @endforeach
            </div>
         </div>
      </section>
      <!-- download -->
        <section id="download">
         <div class="container">
            <div class="row">
                @foreach($ios as $ios)
               <div class="col-md-4 col-md-offset-3 col-sm-push-4 ">
                  <div class="banner-info  wow fadeIn delay-05s">
                     <h1 class="bnr-title animated fadeInUp wow main-color font-35">{{ $ios->header }}</h1>
                     <p class="bnr-para animated fadeInDown wow m-t-30">
                        <i class="fa fa-quote-left fa-flip-horizontal" aria-hidden="true"></i>
                        {{ $ios->description }} 
                     </p>
                    
                     <div class="m-t-50 m-b-20">
                         <div id="intro">
                                 <div class="intro-content">
                                    <div class="row">
                                       <div class="">
                                          <div class='video-link col-xs-12'>
                                             <div class='video-link col-md-6 col-xs-5'>
                                                <a href="#video-popup" class="btn btn-download animated bounceIn wow">مشاهدة الفديو</a>
                                               
                                             </div>
                                             <div class="col-md-6 col-xs-5">
                                               <a href="download.html" class="btn btn-download animated bounceIn wow"  >تحميل التطبيق</a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- Modal Popup
                                    ========================================================= -->
                                 <div id="video-popup" class="popup-modal mfp-hide">
                                    <div class="fluid-video-wrapper">
                                       <iframe src="{{ $ios->url }}" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 
                                    </div>
                                    <a class="close-popup">Close</a>         
                                 </div>
                                 <!-- /video-popup -->     
                              </div>
                     </div>
                     <!-- /intro -->
                  </div>
               </div>
               <div class="col-md-4 col-xs-12 center-block pull-right  col-sm-pull-6">
                 <div>
                    <img id="my_images" src="/images/{{ $ios->img }}" class="img-responsive center-block">
                 </div>
               </div>
               @endforeach
            </div>
         </div>
      </section>
      @endsection