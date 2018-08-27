
@extends('layouts.master')
<title>Ayateke Star |Request</title>
   <style type="text/css">
        #im1{
    background-image: url("{{ asset('images/water/redd.jpg') }}"); 
    height: 100px;
}
        #im2{
            background-image: url(" {{asset('images/water/water.jpg') }}");
        }
#left{
  border: 1px;
  border-color: black;
}
    </style>
    

@section('content')

    <!-- ********** Hero Area Start ********** -->
    <div class="hero-area height-400 bg-img background-overlay" id="im1"></div>
    <div class="container">
  <div class="blog-page area-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-4 col-xs-12" id="left">
          <div class="page-head-blog">
            <div class="single-blog-page">
              <div class="left-tags blog-tags">
                <div class="popular-tag left-side-tags left-blog">
                  <h4><u>Must Read It!</u></h4>
                </div>
                 <div class="post-content">
                            <h6>Before requesting tap in ayateke star you must understand our scope and make sure that we don't supply water beyond our territory. to know more about our scope click <a href="{{url('/about/#water')}}">here</a></h6>
                            <h6>If the tap will be used by house hold or institution please specify in more info, also if possible you might tell us as well the approximate length from the supply line to the exact place  </h6>
                            <blockquote class="mb-30">
                                <h6>Any offers and other tools that will be used to deliver water to you will be charged to the clients</h6>
                               
                            </blockquote>
                            <h6>if you need more information to how you should get connected to ayatekestar water supplie systems please contact our <a href="{{url('/contact')}}">support team</a> or use our hotline +250 7 88 56 82 78</h6>

                            You should also vist our nearest branches <small> <a href="/branches">click here to view our branches</a></small>
                            <!-- Post Tags -->
                            <ul class="post-tags">
                                <li><a href="{{url('/home')}}">Ayateke Star</a></li>
                                <li><a href="{{url('/information')}}">Payment Information</a></li>
                                <li><a href="{{url('/services')}}">Our Services</a></li>
                                <li><a href="{{url('/tarifs')}}">Tarifs And Charges</a></li>
                            </ul>
                            <!-- Post Meta -->
                        
                        </div>
                        
              </div>
            </div>
          </div>
        </div>
        <!-- End left sidebar -->
        <!-- ========== Sidebar Area ========== -->
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="post-sidebar-area mb-100">
                                              
                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title"><u>Request Tap Form!</u></h5>
                             @if (session('response'))
                        <div class="alert alert-success">
                            {{ session('response') }}
                        </div>
                    @endif
                    <div class="widget-content">
                     <small class="email-notes">Your informations will not be published. <br>  <i class="fa fa-warning"></i></>Required fields are marked by *</small>
                   </div>
                            <div class="widget-content">
                                <!-- Single Blog Post -->
                                <form action='{{url("/request")}}' method="Post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <p>First Name *</p>
                        <input type="text" name="fname" required="" />
                      </div>
                      <div class="col-lg-6 col-md-5 col-sm-6 col-xs-12">
                        <p>Last Name *</p>
                        <input type="text" name="lname" />
                      </div>
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <p>Branche*</p>
              <select style="width: 200px" name="datas" class="product" id="prod_cat">
                
                <option value="0" selected="true">--Select One Branch--</option>
                @foreach($branchs as $branch)
                <option value="{{$branch->id}}">{{$branch->br_name}}</option>
                @endforeach
              </select>
              <p>Water line *</p>

              <select style="width: 200px" name="line" class="productname" class="pull-right">
               <option value="0" selected="true">--Select Supply Scheme--</option>
                
              </select>
            </div>
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                         <label>Physical Address</label>
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                        <p>Province *</p>
                        <input type="text" name="province" required="" />
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                        <p>District *</p>
                        <input type="text" name="district" required="" />
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <p>Sector *</p>
                        <input type="text" name="sector" />
                      </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <p>Cell *</p>
                        <input type="text" name="cell" />
                      </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <p>Umudugudu *</p>
                        <input type="text" name="village" />
                      </div>
                       <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <p>phone *</p>
                        <input type="number" name="phone" required="" />
                      </div>
                       <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                        <p>National Id/Passport *</p>
                        <input type="number" name="nid" required="" />
                      </div>
                      <div class="col-lg-12 col-md-12 col-sm-12 comment-form-comment">
                        <p>Information</p>
                        <textarea id="message-box" name="content" cols="50" rows="10" required="" placeholder="Tell us more about you!"></textarea>
                        <input type="submit" value="Send Request" class="btn btn-success" />
                      </div>
                    </div>
                  </form>
                           
                            </div>
                    </div>
                </div>
            </div>


















         <!--        <div class="col-lg-5 col-md-5 col-sm-4 col-xs-12">
                  @if (session('response'))
                        <div class="alert alert-success">
                            {{ session('response') }}
                        </div>
                    @endif -->
                <!-- <div class="comment-respond" id="send">
                  <h4 class="comment-reply-title"></h4>
                  <span class="email-notes">Your informations will not be published. <br>  <i class="fa fa-warning"></i></>Required fields are marked *</span>
          
                </div>
              </div> -->
             </div>
           </div>
         </div>
       </div>
  <!-- End Blog Area -->
  <div class="clearfix"></div>
  <!--  Script for dependent drop downs.   -->
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



 