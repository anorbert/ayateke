<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Ayateke Star</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('vendors/iconfonts/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/css/vendor.bundle.base.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/css/vendor.bundle.addons.css') }}">

  <link rel="stylesheet" href="{{ asset('vendors/iconfonts/font-awesome/css/font-awesome.min.css') }}" />

  @yield('script')
  <link rel="stylesheet" href="{{ asset('vendors/iconfonts/font-awesome/css/font-awesome.min.css') }}" />
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <!-- =======================================================
    Name: iwawe technology ltd
    URL: https://iwawetech.com/
    Author: Anorbert Rugamba
    Author URL: https://iwawetech.com/director manager/

    Theme Name: ayateke star
    Theme URL: https://ayatekestar.com/
  ======================================================= -->
     <!-- Scripts -->


</head>

<body>

      <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
              @guest
              <!--
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        -->
                        @else
                         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>


    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">

      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="{{url('/home')}}">
          <h3 style="color: black;">Ayateke Star <small>.Co.ltd</small></h3>
        </a>
        <a class="navbar-brand brand-logo-mini" data-toggle="collapse" data-target="#sidebar" aria-controls="worldNav" aria-expanded="false" aria-label="Toggle navigation">
          <img src="images/logo-mini.svg" alt="logo" />
        </a>
      </div>
     
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
          @if(Auth::user()->role==='Admin')
          <li class="nav-item">
            <a href="{{url('/users')}}" class="nav-link">Schedule
              <span class="badge badge-primary ml-1">New</span>
            </a>
          </li>
          @endif

          <li class="nav-item active">
            <a href="{{url('/report')}}" class="nav-link">
              <i class="mdi mdi-elevation-rise"></i>Reports</a>
          </li>
          <li class="nav-item">
            <a href="{{url('/chat')}}" class="nav-link">
              <i class="mdi mdi-message-outline"></i>My Inbox</a>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
           <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <i class="mdi mdi-file-document-box"></i>
              <span class="count">{{$Messagectr}}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
              <div class="dropdown-item">
                <p class="mb-0 font-weight-normal float-left">You have {{$Messagectr}} unread mails
                </p>
                <a href="{{url('/chat')}}"><span class="badge badge-info badge-pill float-right">View all</span></a>
                
              </div>
               @if(count($mess)>0)

                  <!-- start single post -->
                  @foreach($mess->all() as $mess)
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                 <i class="mdi mdi-account-location text-info icon-lg"></i>
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium text-dark">{{$mess->name}}
                    <span class="float-right font-weight-light small-text">{{$mess->created_at->diffForHumans()}}</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    {{substr($mess->content,0 ,100)}}..
                  </p>
                </div>
              </a>
              @endforeach
              @endif
            </div>
          </li>
            <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-bell"></i>
              <span class="count">{{$ann}}</span>
            </a>
            
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
               @if(count($notif)>0)
              <a class="dropdown-item" href="{{url('/notification')}}">
                <p class="mb-0 font-weight-normal float-left">You have {{$ann}} new notifications
                </p>
                <span class="badge badge-pill badge-warning float-right">View all</span>
              </a>
              

                  <!-- start single post -->
                  @foreach($notif->all() as $notif)
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="mdi mdi-alert-circle-outline mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium text-dark">{{substr($notif->anouncement,0 ,100)}}</h6>
                  <p class="font-weight-light small-text">
                    {{$notif->created_at->diffForHumans()}}
                  </p>
                </div>
              </a>
              @endforeach
              @else
              <p>No New Notification</p>
               @endif
            </div>
           
          </li>
          <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="profile-text">Hello, {{ Auth::user()->name }} !</span>
              <img class="img-xs rounded-circle" src="images/ayat.jpg" alt="Profile image">
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <a class="dropdown-item p-0">
                <div class="d-flex border-bottom"><a href="{{url('/#')}}">
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center" title="Umusanzu">
                    <i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i>
                  </div></a>
                  <a href="{{url('/user')}}">
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right" title="lofile">
                    <i class="mdi mdi-account-outline mr-0 text-gray"></i>
                  </div>
                </a>
                <a href="{{url('/umusanzu')}}">
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                    <i class="mdi mdi-alarm-check mr-0 text-gray"></i>
                  </div>
                </a>
                </div>
              </a>
              <a class="dropdown-item mt-2" href="{{url('/home/#manage')}}">
                Manage Accounts
              </a>
              <a class="dropdown-item" href="{{url('/change')}}">
                Change Password
              </a>
            
              <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <img src="images/ayat.jpg" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">{{ Auth::user()->name }}</p>
                  <div>
                    <small class="designation text-muted">{{ Auth::user()->role }}</small>
                    <span class="status-indicator online"></span>
                  </div>

                   <div>
                    <small class="designation text-muted">{{ Auth::user()->branch }} - Branch</small>
                  </div>
                </div>
              </div>
              <a href="{{url('/story')}}" class="btn btn-success btn-block"><i class="mdi mdi-plus"></i>New Story</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/home')}}">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
           @if(Auth::user()->role==='Admin')
           <li class="nav-item">
            <a class="nav-link" href="{{url('/showbranche')}}">
              <i class="menu-icon mdi mdi-television"></i>
              <span>Add Branche</span>
            </a>
          </li>

           <li class="nav-item">
            <a class="nav-link" href="{{url('/payment')}}">
              <i class="menu-icon mdi mdi-cash"></i>
              <span>Payment Info</span>
            </a>
          </li>
          @endif
                @if(Auth::user()->role!='Admin')

           <li class="nav-item">
            <a class="nav-link" href="{{url('/wss')}}">
              <i class="menu-icon mdi mdi-pipe"></i>
              <span>Add WSS</span>
            </a>
          </li>
          @endif
           <li class="nav-item">
            <a class="nav-link" href="{{url('/anouncement')}}">
              <i class="menu-icon mdi mdi-speaker"></i>
              <span>Quick Anouncement</span>
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="{{url('/requested')}}">
              <i class="menu-icon mdi mdi-water"></i>
              <span>Requested Water</span>
            </a>
          </li>
        
         
   
        </ul>
      </nav>
@endguest




            @yield('content')

    </div>
</div>

</body>
</html>
