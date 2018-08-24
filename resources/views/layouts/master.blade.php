<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- =======================================================
    Name: Iwawe Technology Ltd
    URL: https://www.iwawetech.com/
    Author: Anorbert Rugamba
    Author URL: https://iwawetech.com/director manager/

    Client Name: ayateke star
    Client URL: https://www.ayatekestar.com/
  ======================================================= -->
     <!-- Scripts -->

    <!-- Title  -->
    <title>Ayateke Star</title>

    <!-- Favicon  -->
    <link rel="icon" href="{{asset('images/ayat.png')}}">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('world/style.css')}}">
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('world/css/bootstrap.min.css')}}">
    <script type="text/javascript" src="{{asset('world/js/bootstrap.min.js')}}"></script> -->
    <style type="text/css">
        #im1{
    background-image: url("{{ asset('images/water/20180104_133158.jpg') }}"); 
}
        #im2{
            background-image: url(" {{asset('images/water/byose.JPG') }}");
            background-color: #eee;
        }
        .sidebar-widget-area{
        border: 2px solid;
        border-color: #21252908;
        border-bottom: #0089ff1f;
    }
        body{
            background-color: #e7ebefa6;

           



        }
        .hero-post-slide{
            margin-top: -20%; 
            display: flex;
            justify-content: center;
        }
        .header-area .navbar{
            border: none;
        
        }
        .footer-area{
           background-color: #384d5f;
        }
     
    
    </style>
      <script>
      function disableClick(){
        document.onclick=function(event){
          if (event.button == 2) {
            alert('Right Click Message');
            return false;
          }
        }
      }
    </script>

</head>

<body onLoad="disableClick()">
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="preload-content">
            <div id="world-load"></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg">
                        <!-- Logo -->
                        <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('images/ayat.png')}}" width="60" height="40" alt="Logo"></a>
                        <!-- Navbar Toggler -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#worldNav" aria-controls="worldNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <!-- Navbar -->
                        <div class="collapse navbar-collapse" id="worldNav">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Requests</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{url('/water')}}">Request Tap</a>
                                        <a class="dropdown-item" href="{{url('/leak')}}">Claim Leak</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('/branches')}}">Branches</a>
                                </li>
                              
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('/services')}}">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('/about')}}">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('/contact')}}">Contact</a>
                                </li>
                            </ul>
                            <!-- Search Form  -->
                            <div id="search-wrapper">
                                <form role="search" method="GET" action="{{ url('search') }}">
                                    <input type="text" id="search" name="search" placeholder="Search something...">
                                    <div id="close-icon"></div>
                                    
                                </form>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    @yield('content')







    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3">
                    <div class="footer-single-widget">
                        <h2 style="color: white"><span>Ayateke</span>Star</h2>
                        <div class="copywrite-text mt-30">
                        <b style="color: white">Professionalism, Integrity and Entrepreneurial spirit.</b> <p>These are core values that define our company and guide us in our daily works and in the way we offer our services. They guide us in our commitment to our clients - a commitment that is bound by trust, innovation and performance.</p>
                        </div>
                    </div>
                </div>
                  <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4 style="color: white">information</h4>
                <p>Main Office at kigali-Rwanda-Nyarugenge-Kinamba
                </p>
                <div class="footer-contacts">
                  <p><span>Tel:</span> +250 7 88 56 82 78</p>
                  <p><span>Email:</span> ayatekestar@gmail.com</p>
                  <p><span>Working Hours:</span> From Monday -To- Friday 7:30Am-5Pm</p>
                </div>
              </div>
            </div>
          </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4 style="color: white">Clients Info</h4>
                <p><a href="{{url('/agreement')}}">Agreement With customes</a>
                </p>
                <div class="footer-contacts">
                  <p><a href="{{url('/information')}}"><span>Payement Info</span></a></p>
                  <p><a href="{{url('/tarifs')}}"><span>Tarifs & Charges</span></a></p>
                  <p><a href="{{url('/services')}}"><span>Our Services</span></a></p>
                </div>
              </div>
            </div>
          </div>
                <div class="col-12 col-md-3">
                    <div class="footer-single-widget">
                        <h5>Subscribe</h5>
                        <form action="{{url('/subscribe')}}" method="post">
                            {{ csrf_field() }}
                            <input type="email" name="email" id="email" placeholder="Enter your mail">
                            <button type="button"><i class="fa fa-arrow-right"></i></button>
                        </form>
                        <p>Get Our latest Updates</p>
                    </div>
                </div>
                
            </div>
        </div>
    </footer>
    <!-- ***** Footer Area End ***** -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="{{asset('world/js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('world/js/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('world/js/bootstrap.min.js')}}"></script>
    <!-- Plugins js -->
    <script src="{{asset('world/js/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('world/js/active.js')}}"></script>

</body>

</html>