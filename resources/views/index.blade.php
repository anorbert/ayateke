@extends('layouts.master')
<style type="text/css">
    .sidebar-widget-area{
        border: 2px solid;
        border-color: #21252908;
        border-bottom: #0089ff1f;

    }
</style>

@section('content')

    <!-- ********** Hero Area Start ********** -->
    <div class="hero-area">

        <!-- Hero Slides Area -->
        <div class="hero-slides owl-carousel">
            <!-- Single Slide -->
            <div class="single-hero-slide bg-img background-dark-light" id="im1" style=""></div>
            <!-- Single Slide -->
            <div class="single-hero-slide bg-img background-overlay" id="im2" ></div>
        </div>

        <!-- Hero Post Slide -->
        <div class="hero-post-area" >
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-post-slide">
                            <!-- Single Slide -->
                             @foreach($notif as $index=> $notif)
                            <div class="single-slide d-flex align-items-center">
                                <div class="post-number">
                                    <p>{{$index+1}}</p>
                                </div>
                                <div class="post-title">
                                    <a href='{{url("/notification/$notif->id")}}'>{{$notif->anouncement}}</a>
                                </div>
                            </div>
                            @endforeach
                            <!-- Single Slide -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ********** Hero Area End ********** -->

    <div class="main-content-wrapper section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- ============= Post Content Area Start ============= -->
                <div class="col-12 col-lg-8">
                      <!-- ============= Post Content Area ============= -->
                          <div class="title">
                            <h5>Latest Articles</h5>
                        </div>
                  @if(count($posts)>0)
                        <!-- Single Blog Post -->
                        @foreach($posts->all() as $posts)
                        <div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="Posts/{{ $posts->post_image}}" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href='{{url("/post/{$posts->id}")}}' class="headline">
                                    <h5>{{ $posts->post_title}}</h5>
                                </a>
                                <a href='{{url("/post/{$posts->id}")}}''>
                               {{substr($posts->post_content,0 ,150)}} <b>........</b>
                           </a>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-author">Ayateke Star</a> on <a href="#" class="post-date">{{date('M j, Y / H:i', strtotime($posts->updated_at))}}</a></p>
                                </div>
                            </div>
                        </div>
                         @endforeach
                          <div class="blog-pagination">
            {{$blogs->links()}}
          </div>
                            @endif
             

                    <div class="post-content-area mb-50">
                        <!-- Catagory Area -->
                        <div class="world-catagory-area">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="title">Connect With Team</li>

                                <li class="nav-item">
                                    <a class="nav-link active" id="tab1" data-toggle="tab" href="#world-tab-1" role="tab" aria-controls="world-tab-1" aria-selected="true">All</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="tab2" data-toggle="tab" href="#world-tab-2" role="tab" aria-controls="world-tab-2" aria-selected="false">Branch</a>
                                </li>

                               
                            </ul>

                            <div class="tab-content" id="myTabContent">

                                <div class="tab-pane fade show active" id="world-tab-1" role="tabpanel" aria-labelledby="tab1">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="world-catagory-slider owl-carousel wow fadeInUpBig" data-wow-delay="0.1s">

                                                <!-- Single Blog Post -->
                                                <div class="single-blog-post">
                                                    <!-- Post Thumbnail -->
                                                    <div class="post-thumbnail">
                                                        <img src="{{asset('images/eng.jpg')}}" style="height: 220px"  alt="">
                                                        <!-- Catagory -->
                                                       
                                                    </div>
                                                    <!-- Post Content -->
                                                    <div class="post-content">
                                                        <a href="#" class="headline">

                                                            <h5><strong>Eng.</strong>Cyprien Sebikwekwe</h5>
                                                        </a>
                                                        <p>Director Manager</p>
                                                        <!-- Post Meta -->
                                                        <div class="post-meta">
                                                            <div class="social-area d-flex justify-content-between">
                                    <a href="https://www.facebook.com/sebikwekwe.cyprien"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="mailto:sebi250@yahoo.fr"><i class="fa fa-yahoo"></i></a>
                                </div>
                                                        </div>
                                                    </div>
                                                </div>

                                          <!-- Single Blog Post -->
                                                <div class="single-blog-post">
                                                    <!-- Post Thumbnail -->
                                                    <div class="post-thumbnail">
                                                        <img src="{{asset('images/chan.PNG')}}" style="height: 220px" alt="">
                                                        <!-- Catagory -->
                                                        
                                                    </div>
                                                    <!-- Post Content -->
                                                    <div class="post-content">
                                                        <a href="#" class="headline">

                                                            <h5>N.Habimana M.Chantal</h5>
                                                        </a>
                                                        <p>Director Of Finance</p>
                                                        <!-- Post Meta -->
                                                        <div class="post-meta">
                                                            <div class="social-area d-flex justify-content-between">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-google"></i></a>
                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                    <div class="col-12 col-md-6">
                    <!-- Single Blog Post -->
                    <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
                    <!-- Post Thumbnail -->
                    <div class="post-thumbnail">
                    <img src="{{asset('images/patric.jpg')}}" alt="">
                    </div>
                    <!-- Post Content -->
                    <div class="post-content">
                    <a href="#" class="headline">
                    <h5>Patrick</h5>
                    </a>
                    Store Keeper
                    <!-- Post Meta -->
                    <div class="post-meta">
                    <div class="social-area d-flex justify-content-between">
                    <a href="https://web.facebook.com/Ayatekestar-Company-Ltd-1210550539058373/?_rdc=1&_rdr"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-google"></i></a>
                    </div>
                    </div>
                    </div>
                    </div>

                    <!-- Single Blog Post -->
                    <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
                    <!-- Post Thumbnail -->
                    <div class="post-thumbnail">
                    <img src="{{asset('images/scola.PNG')}}" alt="">
                    </div>
                    <!-- Post Content -->
                    <div class="post-content">
                    <a href="#" class="headline">
                    <h5>Scolastique</h5>
                    </a>
                    Data manager
                    <!-- Post Meta -->
                    <div class="post-meta">
                    <div class="social-area d-flex justify-content-between">
                    <a href="https://www.facebook.com/scolastique.bukakaza.3"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-google"></i></a>
                    </div>
                    </div>
                    </div>
                    </div>

                    <!-- Single Blog Post -->
                    <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
                    <!-- Post Thumbnail -->
                    <div class="post-thumbnail">
                    <img src="{{asset('images/teogene.jpg')}}" alt="">
                    </div>
                    <!-- Post Content -->
                    <div class="post-content">
                    <a href="#" class="headline">
                    <h5>Theogene</h5>
                    </a>
                    Human Resaurce
                    <!-- Post Meta -->
                    <div class="post-meta">
                    <div class="social-area d-flex justify-content-between">
                    <a href="https://web.facebook.com/Ayatekestar-Company-Ltd-1210550539058373/?_rdc=1&_rdr"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-google"></i></a>
                    </div>
                    </div>
                    </div>
                    </div>
                    <!-- Single Blog Post -->
                    <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
                    <!-- Post Thumbnail -->
                    <div class="post-thumbnail">
                    <img src="{{asset('images/scola.PNG')}}" alt="">
                    </div>
                    <!-- Post Content -->
                    <div class="post-content">
                    <a href="#" class="headline">
                    <h5>Isabelle</h5>
                    </a>
                    Accoutant
                    <!-- Post Meta -->
                    <div class="post-meta">
                    <div class="social-area d-flex justify-content-between">
                    <a href="https://web.facebook.com/Ayatekestar-Company-Ltd-1210550539058373/?_rdc=1&_rdr"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-google"></i></a>
                    </div>
                    </div>
                    </div>
                    </div>

                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Catagory Area -->
                        <div class="world-catagory-area mt-50">
                            <ul class="nav nav-tabs" id="myTab2" role="tablist">
                                <li class="title">Our Branches</li>

                                <li class="nav-item">
                                    <a class="nav-link active" id="tab10" data-toggle="tab" href="#myTabContent2" role="tab" aria-controls="world-tab-10" aria-selected="true">New</a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{url('/branches')}}">All</a>
                                </li>

                                
                            </ul>

                            <div class="tab-content" id="myTabContent2">
                              

                                <div class="tab-pane fade show active" id="world-tab-10" role="tabpanel" aria-labelledby="tab10">
                                    <div class="row">
                                          @if(count($branche)>0)
                                @foreach($branche->all() as $branche)

                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.2s">
                                
                                                <!-- Post Content -->


                                                <div class="post-content">

                                                    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col" colspan="2" class="text-center">{{$branche->br_name}}</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Branch Manager</th>
      <td>{{$branche->br_manager}}</td>
    </tr>
     <tr>
      <th scope="row">Hot Contact</th>
      <td>{{$branche->br_contact}}</td>
    </tr>
     <tr>
      <th scope="row">No of WSS</th>
      <td>{{$branche->wss}}</td>
    </tr>
     <tr>
      <th scope="row">Population</th>
      <td>{{$branche->population}}</td>
    </tr>
     <tr>
      <th scope="row">People served</th>
      <td>{{$branche->peoples}}</td>
    </tr>
     <tr>
      <th scope="row">Employees</th>
      <td>{{$branche->employees}}</td>
    </tr>
  </tbody>
</table>                             <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">since</a> <a href="#" class="post-date">{{date('M j, Y / H:i', strtotime($branche->updated_at))}}</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                                                 @endforeach
          @endif


<div class="col-12">
<div class="world-catagory-slider2 owl-carousel wow fadeInUpBig" data-wow-delay="0.4s">
    <!-- ========= Single Catagory Slide ========= -->
    <div class="single-cata-slide">
        <div class="row">
            @if(count($branch)>0)
@foreach($branch->all() as $branch)
            <div class="col-12 col-md-6">
                <!-- Single Blog Post -->
                <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                    <!-- Post Thumbnail -->
                    <div class="post-thumbnail">
                        <img src="images/{{$branch->images}}" alt="" style="height: 100px" >
                    </div>
                    <!-- Post Content -->
                    <div class="post-content">
                        <a href="#" class="headline">
                            <h5>{{$branch->br_name}}</h5>
                        </a>
                        <!-- Post Meta -->
                        <div class="post-meta">
                            <p><a href="#" class="post-author">Ayateke Star</a> on <a href="#" class="post-date">{{date('M j, Y / H:i', strtotime($branch->updated_at))}}</a></p></a></p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
           
            
        </div>
    </div>
    <!-- ========= Single Catagory Slide ========= -->
        <div class="single-cata-slide">
            <div class="row">
              @if(count($bra)>0)
@foreach($bra->all() as $bra)
            <div class="col-12 col-md-6">
                <!-- Single Blog Post -->
                <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                    <!-- Post Thumbnail -->
                    <div class="post-thumbnail">
                        <img src="images/{{$branch->images}}" alt="" style="height: 100px" >
                    </div>
                    <!-- Post Content -->
                    <div class="post-content">
                        <a href="#" class="headline">
                            <h5>{{$bra->br_name}}</h5>
                        </a>
                        <!-- Post Meta -->
                        <div class="post-meta">
                            <p><a href="#" class="post-author">Ayateke Star</a> on <a href="#" class="post-date">{{date('M j, Y / H:i', strtotime($bra->updated_at))}}</a></p></a></p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
           
            </div>
        </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- ========== Sidebar Area ========== -->
                <div class="col-12 col-md-8 col-lg-4">
                    <div class="post-sidebar-area wow fadeInUpBig" data-wow-delay="0.2s">
                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">About Ayateke Star</h5>
                            <div class="widget-content">
                                <p>In the spirit of good governance based on PPP, some experts and technicians of the former REGIE D’EAU in KIREHE District created AYATEKE Cooperative which became later AYATEKE STAR COMPANY Ltd in August 2013, in order to expand activities to various areas in Rwanda. 
AYATEKE STAR COMPANY LTD is a water company supplying high quality services in rural areas in RWANDA started its activities in August 2013.</p>
                            </div>
                        </div>
                                <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">Announcements</h5>
                            <div class="widget-content">
                                   @if(count($tang)>0)

                  <!-- start single post -->
                  @foreach($tang->all() as $tang)
                  
                                <!-- Single Blog Post -->
                                <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                    <!-- Post Thumbnail -->
                                    
                                   <h6><b class="text-primary">{{$tang->title}}</b></h6>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href='{{url("/notification/$tang->id")}}' class="headline">
                                            <h5 class="mb-0">{{substr($tang->anouncement,0 ,150)}}...</h5>
                                        </a>
                                    </div>
                                    
                                </div>
                                @endforeach
                                @endif                             
            
                            </div>
                        </div>
                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">Top Stories</h5>
                            <div class="widget-content">
                                   @if(count($recent)>0)

                  <!-- start single post -->
                  @foreach($recent->all() as $recent)
                                <!-- Single Blog Post -->
                                <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="Posts/{{ $recent->post_image}}" alt="">
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href='{{url("/post/{$posts->id}")}}' class="headline">
                                            <h5 class="mb-0">{{substr($recent->post_content,0 ,100)}}</h5>
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                  @endif
                             
            
                            </div>
                        </div>
                  
                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">Stay Connected</h5>
                            <div class="widget-content">
                                <div class="social-area d-flex justify-content-between">
                                    <a href="https://www.facebook.com/Ayatekestar-Company-Ltd-1210550539058373/"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-youtube"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-google"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">Today’s Pick</h5>
                            <div class="widget-content">
                                <!-- Single Blog Post -->
                                <div class="single-blog-post todays-pick">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="{{asset('images/images.jpeg')}}" alt="">
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content px-0 pb-0">
                                        <a href="#" class="headline">
                                            <h5>Ayateke star Started to build Labalatory that will be used to Clean water and Distribute them to the whole of eastafrica</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- ***** Footer Area Start ***** -->

       @endsection

    