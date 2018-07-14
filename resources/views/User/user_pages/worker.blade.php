@extends('User.master')
         
@section('title','Edit|Sahla')


@section('content')
              <div class="wrapper">
                  <div class="container">
                     <div class="row employee">
                      <div class="col-md-1 pull-right ">&nbsp;</div>
                        <div class="col-md-4 pull-right ">
                           <div class="banner-info  wow fadeIn delay-05s">
                              @foreach($handyman as $handyman)
                              <h1 class="bnr-sub-title animated fadeInUp wow main-color ">
                              {{ $handyman->header }}
                              </h1>
                              <p class="bnr-para animated fadeInDown wow ">
                                {{   $handyman->paragraph}}

                                </p>
                                 <!--  -->
                             
                           
                             
                           </div>
                        </div>
                        <div class="col-md-4 col-md-offset-2">
                          <img class="img-responsive center-block" src="/images/{{ $handyman->img_page }}" style="    max-width: 193px;
                             ">
                                @endforeach
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>      <!--/ HEADER-->
    
  @endsection