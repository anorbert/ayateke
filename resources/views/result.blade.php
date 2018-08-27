@extends('layouts.master')
<title>Ayateke Star |Search</title>

@section('content')

<div class="main-content-wrapper section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- ============= Post Content Area ============= -->
                <div class="col-12 col-lg-8">
                       <div class="title">
                            <h5>{{$count}} Retrived Result</h5>
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
                               {{substr($posts->post_content,0 ,150)}} <b>........</b>
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
                                        <a href="#" class="headline">
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
       @endsection