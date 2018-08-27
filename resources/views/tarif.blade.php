@extends('layouts.master')
<title>Ayateke Star |Tarifs</title>

@section('content')
    <!-- ***** Header Area End ***** -->

    <!-- ********** Hero Area Start ********** -->
    <div class="hero-area height-400 bg-img background-overlay" style="background-image: url(images/water/logo.png);"></div>
    <!-- ********** Hero Area End ********** -->
    <!-- ********** Hero Area End ********** -->

    <div class="main-content-wrapper section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- ============= Post Content Area ============= -->
                <div class="col-12 col-lg-7">
                    <div class="single-blog-content mb-100">
                        <!-- Post Meta -->
                        <div class="post-meta">
                            <h4>Tariffs and Charges</h4>
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <h4 class="sec-head">Water Tarifs </h4>
              </a>
              <p>
                The cost per m3 is set according to the supply system used to deliver water as it is set by RURA 
              </p>
                            <blockquote class="mb-30">
                                  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col" class="text-center">Suply type</th>
      <th scope="col" class="text-center">@M3</th>
      <th scope="col" class="text-center">Cost/(Inclusive VAT)</th>
    </tr>
  </thead>
  <tbody>
  	<tr>
  		<td>Diesel</td>
  		<td>1</td>
  		<td>1087</td>
  	</tr>
  	  	<tr>
  		<td>Gravity</td>
  		<td>1</td>
  		<td>338</td>
  	</tr>
  	  	<tr>
  		<td>Electrical</td>
  		<td>1</td>
  		<td>730</td>
  	</tr>
<tr>
      <td>Turbo</td>
      <td>1</td>
      <td>814</td>
    </tr>

<tr>
      <td>Complex</td>
      <td>1</td>
      <td>704</td>
    </tr>

  </tbody>
</table>
                            </blockquote>
                            <h4 class="sec-head" id="water">Charges  </h4>
                            <h6> 
              </a>
              <p>
               After 15 Days of receiving bill the clients must have to pay as required, if not the clients will be disocnected to water supply system And is charged 10.000 Rwf(Ten thousand Rwandan Francs) extra to the billed amount to get connected again!


              </p></h6>
              

                        </div>
                    </div>
                </div>

                <!-- ========== Sidebar Area ========== -->
                <div class="col-12 col-md-8 col-lg-5">
                    <div class="post-sidebar-area mb-100">
                                              
                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">WATER FOR YOUR LIFE, OUR PRIME CONCERN!</h5>
                            <div class="widget-content">
                                <!-- Single Blog Post -->
                                <div class="single-blog-post todays-pick">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="{{asset('images/eng.jpg')}}" alt="">
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content px-0 pb-0">
                                        <a href="#" class="headline">
                    <h5> Our core values</h5> 
                    Professionalism, Integrity and Entrepreneurial spirit. These are core values that define our company and guide us in our daily works and in the way we offer our services. They guide us in our commitment to our clients - a commitment that is bound by trust, innovation and performance.

                                        </a>
                                    </div>
                                </div>
                            </div>

                             <h5 class="title">PLANS FOR FURTHER PROJECTS</h5>
                            <div class="widget-content">
                                <!-- Single Blog Post -->
                                <div class="single-blog-post todays-pick">
                                  <div class="post-content px-0 pb-0">
                    <ol>
                    <li>
                    <i class="fa fa-star"></i>   Establishment of laboratory for water analysis leading to water quality management 
                    </li>
                    <li>
                     <i class="fa fa-star"></i>  Having enough and qualified water tools for technical activities and building store keeping room at national level to serve other water service providers   
                    </li>
                    <li>
                     <i class="fa fa-star"></i>  Reducing the rate of water loss in rural areas   
                    </li>
                    <li>
                       <i class="fa fa-star"></i>  Improvement water service in rural areas in the line of trying to provide sufficient water to the population  
                    </li>
                    <li>
                     <i class="fa fa-star"></i>  Management of waste water;  
                    </li>
                    <li>
                     <i class="fa fa-star"></i>  Execution of works relating to water supply networks;  
                    </li>
                    <li>
                     <i class="fa fa-star"></i>  Research in water distribution management by using ICT technology and creation of soft programs that can help in the monitoring of operation and maintenance of water infrastructures 
               
                    </li>
                    </ol> 
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