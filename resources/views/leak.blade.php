@extends('layouts.master')
<style type="text/css">
  #leak{
    height: 400px;
  }
</style>
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
                            <h4>Read Me!</h4>
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            
              </a>
              <h6>
              Water Leaks are all breakdowns or unexpected circumstance that should cause malfunctions of water supply systems
              </h6>
                <blockquote class="mb-30">
                In such case please contact us for support Anytime!  
                </blockquote>                            
                <h6> 
              </a>
              <h4>Contact</h4>
              <p>
              <p><span>Tel:</span> +250 7 88 56 82 78</p>
                  <p><span>Email:</span> ayatekestar@gmail.com</p>
                              
              </p></h6>
              <blockquote class="mb-30">
               Or you should contact our nearest branch below!

               <blockquote class="mb-30">
                                  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col" class="text-center">Branch</th>
      <th scope="col" class="text-center">contact</th>
      <th scope="col" class="text-center">Email</th>
    </tr>
  </thead>
  <tbody>
    @foreach($branch as $acc)
    <tr>
      <td>{{$acc->br_name}}</td>
      <td>{{$acc->br_contact}}</td>
      <td>ayatekestar@gmail.com</td>
    </tr>
    @endforeach

  </tbody>
</table>
                            </blockquote>  
              </blockquote> 
              <span>category</span>

              <select style="width: 200px" class="product" id="prod_cat">
                
                <option value="0" selected="true">select branch</option>
                @foreach($branchs as $branch)
                <option value="{{$branch->id}}">{{$branch->branch}}</option>
                @endforeach
              </select>
              <span>sub cat</span>

              <select style="width: 200px" class="productname">
               <option value="0" selected="true">select sub</option>
                
              </select>
              

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
                                        <img src="{{asset('images/leak1.jpg')}}" id="leak" alt="" style="width: 100%" height="200px" >
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content px-0 pb-0">
                                      <h5> We Offer Repairs of Our WSS</h5> 
                                        <a href="#" class="headline">
                    <h5> Our Core Value</h5> 
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
  <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="{{asset('world/js/jquery/jquery-2.2.4.min.js')}}"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $(document).on('change','.product',function(){
      // console.log("hmm its change");
      var cat_id=$(this).val();
      // console.log(cat_id);
      var op="";
      var div=$(this).parent();

$.ajax({
type:'get',
url:'{!!URL::to('findproductsub')!!}',
data:{'id':cat_id},
success:function(data){
  // console.log('success');
  // console.log(data);
  //  console.log(data.length);
  op+='<option value="0" selected disabled>choose wss</option>';
  for(var i=0;i<data.length;i++){
    op+='<option value="'+data[i].id+'">'+data[i].w_name+'</option>'
  }
  div.find('.productname').html("");
  div.find('.productname').append(op);
},
error:function(){

}
  });
      
    });
  });
  
</script>
    @endsection