@extends('User.master')
         
@section('title','Edit|Sahla')


@section('content')
<div class="cover-home" style="background: url('/images/blog2.jpg'); background-repeat: no-repeat; background-size: cover;">
  <div class="wrapper">
                  <div class="container">
                     <div class="row">
                      <div class="col-md-1 pull-right ">&nbsp;</div>
                        <div class="col-md-4 pull-right m-t-60">
                           <div class="banner-info  wow fadeIn delay-05s">
                              <h1 class="main-color animated fadeInUp wow">المدونات </h1>
                              
                              <p class="bnr-para animated fadeInDown wow ">
                              
                                 اعرف المزيد وتابع وتعلم الجديد</p>
                                 <!--  -->
                             
                             
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

     <section id="main-blog">
       <div class="container-fluid">
         <div class="row">
            <div class="col-md-8">
              <div class="row main">
                <section id="news">
                  @foreach($blog as $blog)

                  <div class="col-md-6 m-t-30">
                    <a href="/user/blog/{{ $blog->id  }}">
                      <div class="item">
                        <div class="item-img">
                          <img src="/images/{{ $blog->img }}" class="img-responsive">
                        </div>
                        <div class="item-content">
                          <p class="sub-title font-22">{{ $blog->question }}</p>
                           <div class="font-13 pharg">
                             <span><i class="fa fa-calendar" aria-hidden="true"></i></span>
                             <span>{{ $blog->updated_at }}</span>
                           </div>
                          <hr>
                        </div>
                        <div class="item-footer">
                          <div class="row">
                            <div class="col-xs-3" style="padding-right: 30px">
                              <img src="/images/{{ $blog->img_client }}" class="img-responsive img-circle center-block" >
                            </div>
                            <div class="col-xs-8">
                              <div class="name">
                                <p>{{ $blog->name }} </p>
                                <p>مدون</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div> @endforeach                

                 </section>
                
                <div class="clearfix"></div>
                
                <div class="m-b-40 m-t-60 loadmore text-center">
                          <a id="loadMore" style="cursor: pointer;" class="sub-title font-22 text-center"><i class="fa fa-download" aria-hidden="true"></i>  &nbsp;   &nbsp;المزيد من المقالات</a>
                </div>
                <!--  -->
              </div>
            </div>
            <div class="col-md-4 blo2 background-section">
              <div class="subscribe">
                <div class="row">
                  <div class="col-xs-1">
                    <img src="img/wellcome.png">
                  </div>
                  <div class="col-xs-10">
                    <p class="sub-title">
                     اهلا بك فى سهلة 
                   </p>
                  </div>
                  <div class="clearfix"></div>
                  <div class="col-md-12">
                    اشترك ليصلك المزيد من الموضوعات ومتابعة
                     الجديد أول باول
                  </div>
                  <div class="col-md-12 m-t-10">
                    <form class="form-inline">
                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-8 m-t-10">
                            <input type="email" class="form-control" id="email"> 
                          </div>
                          <div class="col-md-4 m-t-10">
                            <button type="submit" class="btn btn-download btn-block">ارسال</button>
                          </div>
                        </div>
                        
                      </div>
                      
                      
                    </form>
                  </div>
                </div> 
              </div>
              <div class="many-blog">
                <p class="sub-title font-20">المقالات الاكثر شيوعاً</p>
                <div class="row">
                  @foreach($blog_count as $blog_count)
                 <a href="/user/blog/{{ $blog_count->id  }}"> <div class="block m-t-30">
                      <div class="col-md-4">
                        <img src="/images/{{ $blog_count->img }}" class="img-responsive">
                      </div>
                      <div class="col-md-8">
                        <p class="sub-title">
                          {{ $blog_count->question }}
                        </p>
                        <p class="font-13">
                          {{ str_limit( $blog_count->answer,100,'.....') }}
                        </p>
                      </div>
                  </div></a>
                  <div class="clearfix"></div>
                  @endforeach
                </div>
              </div>
              <hr>
              <div class="many-blog">
                <p class="sub-title font-20">احدث المقالات</p>
                <div class="row">
                    @foreach($blog_updated as $blog_updated)
<a href="/user/blog/{{ $blog_updated->id  }}">
                  <div class="block m-t-30">
                      <div class="col-md-4">
                        <img src="/images/{{ $blog_updated->img }}" class="img-responsive">
                      </div>
                      <div class="col-md-8">
                        <p class="sub-title">
                          {{ $blog_updated->question }}
                        </p>
                        <p class="font-13">
                          {{ str_limit( $blog_updated->answer,100,'.....') }}
                        </p>
                      </div>
                  </div></a>
                                      

                  <div class="clearfix"></div>
  @endforeach
                </div>
              </div>
           </div>
         </div>
       </div>
     </section>
 @endsection