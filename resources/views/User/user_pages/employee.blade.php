@extends('User.master')
         
@section('title','Edit|Sahla')


@section('content')
               <div class="wrapper">
                  <div class="container">
                     <div class="row employee" >
                      <div class="col-md-1 pull-right ">&nbsp;</div>
                        <div class="col-md-4 pull-right ">
                           <div class="banner-info  wow fadeIn delay-05s">
                              @foreach($professional as $professional)
                              <h1 class="bnr-sub-title animated fadeInUp wow employee-color ">{{ $professional->header }}</h1>
                              <p class="bnr-para animated fadeInDown wow ">
                                  {{ $professional->paragraph }}
                                </p>
                                 <!--  -->
                             
                              
                             
                           </div>
                        </div>
                        <div class="col-md-4 col-md-offset-2">
                          <img class="img-responsive center-block" src="/images/{{ $professional->img_page }}
                             ">
                        </div>
                        @endforeach
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--/ HEADER-->
    
     @endsection