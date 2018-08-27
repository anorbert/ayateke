
@extends('layouts.master')
<title>Ayateke Star |Contacts</title>
   <style type="text/css">
        #im1{
    background-image: url("{{ asset('images/water/redd.jpg') }}"); 
}
        #im2{
            background-image: url(" {{asset('images/water/water.jpg') }}");
        }

    </style>

@section('content')
    <!-- ********** Hero Area Start ********** -->
    <div class="hero-area height-400 bg-img background-overlay" id="im1"></div>
    <div class="container">
    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</div>
        
    <section class="contact-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Contact Form Area -->
                <div class="col-12 col-md-10 col-lg-8">
                    <div class="contact-form">
                        <h5>Get in Touch</h5>
                        <!-- Contact Form -->
                         <form class="form-horizontal" action="{{ url('/sendmessage')}}" method="post" enctype="multipart/form-data">
                      {{ csrf_field() }}
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="group">
                                         <input type="text" name="name" class="form-control" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Enter your name</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="group">
                                        <input type="email" class="form-control" name="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Enter your email</label>
                                    </div>
                                </div>
                                  <div class="col-12 col-md-8">
                                    <div class="group">
                                         <input type="text" class="form-control" name="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="group">
                                       <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Enter your message</label>
                                    </div>
                                    <small>* we will be back to you soon! to your email</small>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn world-btn">Send Message</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
      <div class="row">
            <!-- Start Google Map -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <!-- Start Map -->
              <div id="google-map" data-latitude="-1.9358079" data-longitude="30.063124000000016" elvation="1368"></div>
            <!-- End Map -->
          </div>
          <!-- End Google Map -->
    </div>
    <br>
    <!-- ********** Hero Area End ********** -->

    <!-- Google Maps: If you want to google map, just uncomment below codes -->
  
      
  

       @endsection
