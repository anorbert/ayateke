@extends('layouts.master')
<title>Ayateke Star |Notifications</title>
<style type="text/css">
    #container{
        background-color: #ecebeb66;
    }
</style>

@section('content')

<div class="main-content-wrapper section-padding-100">
        <div class="container" id="container">
            <div class="row justify-content-center">
                <!-- ============= Post Content Area ============= -->
                <div class="col-12 col-lg-8">

                    <div class="post-content-area mb-50">
                        <!-- Catagory Area -->
                        <div class="world-catagory-area">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="title">Anouncements</li>                           
                            </ul>
                        </div>
                    </div>
                  @if(count($posts)>0)
                        <!-- Single Blog Post -->
                        @foreach($posts->all() as $posts)
                        <div class="posts-title">
                               
                                <h4 class="text-primary"><u>{{ $posts->title}}</u></h4>
                            </div>
                        <div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
                            <!-- Post Thumbnail -->


                            <!-- Post Content -->
                            <div class="post-content">
                                 
                               {{ $posts->anouncement}}
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-author">Hosted by: Ayateke Star</a> on <a href="#" class="post-date">{{date('M j, Y / H:i', strtotime($posts->updated_at))}}</a></p>
                                    ---
                                    <div class="post-meta">
                                        
                                    <p class="pull-right"><a href="#" class="post-author">Dead line</a><a href="#" class="post-date"> {{date('M j, Y', strtotime($posts->deadline))}}</a></p>
                                   
                                </div>
                                </div>
                            </div>
                        </div>
                         @endforeach
                          <div class="blog-pagination">
          </div>
                            @endif
                            @if(count($it)>0)

                            <div class="post-content-area mb-50">
                        <!-- Catagory Area -->
                        <div class="world-catagory-area">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="title">Also You May Know!</li>                           
                            </ul>
                        </div>
                    </div>
                     
                        <!-- Single Blog Post -->
                        @foreach($it->all() as $it)
                        <div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
                            <!-- Post Thumbnail -->
                        <div class="posts-title">
                               <ul>
                                <li class="title"><a href='{{url("/notification/$it->id")}}'><h6>{{ $it->title}}</h6></a></li>
                                 <li class="pull-right">200</li>                           
                            </ul>
                            <p><a href='{{url("/notification/$it->id")}}'>
                               {{substr($it->anouncement,0 ,150)}} <b>........</b>
                           </a></p>

                                 
                            </div>

                        </div>

                            
                            @endforeach
                            @endif
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
                </div><!-- end of row -->

            </div>
        </div>
    </div>


       @endsection