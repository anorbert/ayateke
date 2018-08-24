@extends('layouts.master')

@section('content')

<div class="main-content-wrapper section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- ============= Post Content Area ============= -->
                <div class="col-12 col-lg-8">
                    <div class="single-blog-content mb-100">
                        <!-- Post Meta -->
                        <div class="post-meta">
                            <p><a href="#" class="post-author">Admin</a> on <a href="#" class="post-date">{{date('M j, Y / H:i', strtotime($posts->updated_at))}}</a></p>
                        </div>
                        <h4>{{ $posts->post_title}}</h4>
                        <!-- Post Content -->
                        <div class="post-content">
                           
                            <blockquote class="mb-30">
                                {{$posts->post_content}}
                           
                            </blockquote>
                            <?php print($posts->more);?>
                   
                            <!-- Post Tags -->
                            <ul class="post-tags">
                                <li><a href="#">{{$posts->tags}}</a></li>
                                <li><a href="#">{{$posts->category}}</a></li>
                                <li><a href="{{url('/')}}">Ayateke Star</a></li>
                            </ul>
                            <!-- Post Meta -->
                            <div class="post-meta second-part">
                                <p><a href="#" class="post-author">Admin</a> on <a href="#" class="post-date">{{date('M j, Y / H:i', strtotime($posts->updated_at))}}</a></p>
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
                            <h5 class="title">Top Stories</h5>
                            <div class="widget-content">
                                   @if(count($recent)>0)

                  <!-- start single post -->
                  @foreach($recent->all() as $recent)
                                <!-- Single Blog Post -->
                                <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src='Posts/{{asset("$recent->post_image")}}' alt="">
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


                   <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="post-a-comment-area mt-70" id="reply">
                        <h5>Write Review</h5>
                        <!-- Contact Form -->
                         <form action='{{url("/addcomment/{$posts->id}")}}' method="Post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="group">
                                        <input type="text" name="name" required="" />
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Enter your name</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="group">
                                        <input type="email" name="email" required="" />
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Enter your email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="group">
                                    	<textarea id="message-box" id="message" name="comment" required=""></textarea>
                                        
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Enter your comment</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn world-btn">Post comment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-12 col-lg-8">
                    <!-- Comment Area Start -->
                    <div class="comment_area clearfix mt-70">
                        <ol>
                        	@if(count($comment)>0)
                            <!-- Single Comment Area -->
                             @foreach($comment->all() as $comment)
                            <li class="single_comment_area">
                                <!-- Comment Content -->
                                <div class="comment-content">
                                    <!-- Comment Meta -->
                                    <div class="comment-meta d-flex align-items-center justify-content-between">
                                        <p><a href="#" class="post-author">{{$comment->name}}</a> on <a href="#" class="post-date">{{date('M j, Y / H:i', strtotime($comment->created_at))}}</a></p>
                                        <a href="#reply" class="comment-reply btn world-btn">Reply</a>
                                    </div>
                                    {{$comment->comment}}
                                </div>
                          
                            </li>
                             @endforeach
                      @endif
                            
                            
                            
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

       @endsection