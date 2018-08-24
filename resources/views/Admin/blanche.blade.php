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
  <div class="container">
                   <div class="row">
      <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Blanch Information</h4>
                  <!-- Edit profile form (not working)-->
                    <form class="form-horizontal" action="{{url('/editbrache')}}" method="post" enctype="multipart/form-data">
                   {{ csrf_field() }}
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Names</label>
                          <div class="col-sm-9">
                           <input type="text" class="form-control" name="names" value="{{ old('names') }}{{$branche->br_name}}">
                           @if ($errors->has('names'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('names') }}</strong>
                                    </span>
                                @endif
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Branch Manager</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="manager" value="{{ old('manager') }}{{$branche->br_manager}}">
                            @if ($errors->has('manager'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('manager') }}</strong>
                                    </span>
                                @endif
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Branch Contact</label>
                          <div class="col-sm-9">
                            <input type="number" class="form-control" name="contact" value="{{ old('contact') }}{{$branche->br_contact}}">
                            @if ($errors->has('contact'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('contact') }}</strong>
                                    </span>
                                @endif
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Wss</label>
                          <div class="col-sm-9">
                             <input type="number" class="form-control" name="wss" value="{{ old('wss') }}{{$branche->wss}}">
                            @if ($errors->has('wss'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('wss') }}</strong>
                                    </span>
                                @endif
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Population</label>
                          <div class="col-sm-9">
                            <input type="number" class="form-control" name="population" value="{{ old('population') }}{{$branche->population}}">
                           @if ($errors->has('population'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('population') }}</strong>
                                    </span>
                                @endif
                          </div>
                        </div>
                      </div>
                    
                    </div>
                   
                     <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">served people</label>
                          <div class="col-sm-9">
                            <input type="number" class="form-control" name="people" value="{{ old('people') }}{{$branche->peoples}}">
                           @if ($errors->has('people'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('people') }}</strong>
                                    </span>
                                @endif
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Employees</label>
                          <div class="col-sm-9">
                            <input type="number" class="form-control" name="employee" value="{{ old('employee') }}{{$branche->employees}}">
                           @if ($errors->has('employee'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('employee') }}</strong>
                                    </span>
                                @endif
                          </div>
                        </div>
                      </div>
                    </div>

                     <div class="col-md-6">
                        <div class="form-group row">
                         
                            <input type="submit" class="btn btn-success" value="save"  />
                            <button type="reset" class="btn btn-danger">Cancel</button>
                        
                      </div>


                  </form>
                </div>
              </div>
            </div>
  </div>

    
  </div>
  
</body>
</html>