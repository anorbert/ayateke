@extends('layouts.app')

@section('content')  
    <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
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
<!--branches Starts here-->
          <div class="row">
            <div class="col-lg-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Current Water Supplie System</h4>
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      @if(count($wss)>0)
                       <thead>
                  <th><i class="icon_number"> </i>#No</th>
                  <th><i class="icon_profile"> </i>Wss Names</th>
                  <th><i class="icon_house"> </i>Plumber</th>
                  <th><i class="icon_screen"> </i>Scheme</th>
                  <th><i class="icon_pin_alt"> </i>Population</th>
                  <th>Wss Serve</th>
                  <th>Suply Type</th>
                  <th><i class="icon_cogs"> </i>bfs</th>
                   <th>House Holds</th>
                  <th>Institution</th>
                  <th>Sector</th>
                 
                </thead>
                <tbody>
   <!-- start single post -->
                  @foreach($wss->all() as $wss)
                  <tr>
                    <td>{{$wss->id}}</td>
                    <td>{{$wss->w_name}}</td>
                    <td>{{$wss->plumber}}</td>
                    <td>{{$wss->scheme}}</td>
                    <td>{{$wss->population}}</td>
                    <td>{{$wss->served}}</td>
                    <td>{{$wss->ps_type}}</td>
                    <td>{{$wss->bfs}}</td>
                    <td>{{$wss->houses}}</td>
                    <td>{{$wss->institution}}</td>
                    <td colspan="2">{{$wss->sector}},{{$wss->sector1}},{{$wss->sector2}}</td>
                    
                             
                   
                  </tr>
                  @endforeach
                 
                 
                 
                </tbody>
              @endif
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div><!--row end-->


          <div class="row">
      <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">New Water Supplie System</h4>
                  <!-- Edit profile form (not working)-->
                    <form class="form-horizontal" action="{{url('/addwss')}}" method="post" enctype="multipart/form-data">
                   {{ csrf_field() }}
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">WSS Name</label>
                          <div class="col-sm-9">
                           <input type="text" class="form-control" name="names" value="{{ old('names') }}">
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
                          <label class="col-sm-3 col-form-label">Plumber</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="plumber" value="{{ old('manager') }}">
                            @if ($errors->has('plumber'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('plumber') }}</strong>
                                    </span>
                                @endif
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Scheme Manager</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="scheme" value="{{ old('scheme') }}">
                            @if ($errors->has('scheme'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('scheme') }}</strong>
                                    </span>
                                @endif
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Suply Type</label>
                          <div class="col-sm-9">
                            <select name="type" class="form-control">
                              <option value="pumping">Diesel</option>
                              <option value="gravity">Gravity</option>
                              <option value="gravity">Electrical</option>
                              <option value="gravity">Turbo</option>
                              <option value="gravity">Complex</option>
                            </select>
                            @if ($errors->has('type'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('type') }}</strong>
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
                            <input type="number" class="form-control" name="population" value="{{ old('population') }}">
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
                            <input type="number" class="form-control" name="served" value="{{ old('served') }}">
                           @if ($errors->has('served'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('served') }}</strong>
                                    </span>
                                @endif
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Bfs</label>
                          <div class="col-sm-9">
                            <input type="number" class="form-control" name="bfs" value="{{ old('bfs') }}">
                           @if ($errors->has('bfs'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('bfs') }}</strong>
                                    </span>
                                @endif
                          </div>
                        </div>
                      </div>
                    </div>

                        <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Institutions</label>
                          <div class="col-sm-9">
                            <input type="number" class="form-control" name="institutions" value="{{ old('institutions') }}">
                           @if ($errors->has('institutions'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('institutions') }}</strong>
                                    </span>
                                @endif
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">House Holds</label>
                          <div class="col-sm-9">
                            <input type="number" class="form-control" name="house" value="{{ old('house') }}">
                           @if ($errors->has('house'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('house') }}</strong>
                                    </span>
                                @endif
                          </div>
                        </div>
                      </div>
                    </div>

                    <p class="card-description">
                      Address/ Consider only Sectors Water suply system pass through!
                    </p>
                        <div class="row">
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Sector</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="sector" value="{{ old('sector') }}">
                           @if ($errors->has('sector'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('sector') }}</strong>
                                    </span>
                                @endif
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Sector1</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="sector1" value="{{ old('sector1') }}">
                           @if ($errors->has('sector1'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('sector1') }}</strong>
                                    </span>
                                @endif
                          </div>
                        </div>
                      </div>
                       <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Sector2</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" name="sector2" value="{{ old('sector2') }}">
                           @if ($errors->has('sector2'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('sector2') }}</strong>
                                    </span>
                                @endif
                          </div>
                        </div>
                      </div>
                    </div>
                   
                     <div class="col-md-6">
                        <div class="form-group row">
                         
                            <input type="submit" class="btn btn-success" value="save"  />
                            <button type="reset" class="btn btn-danger">Reset</button>
                        
                      </div>


                  </form>
                </div>
              </div>
            </div>
  </div>
</div>
</div>
    <!-- page-body-wrapper ends -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
@endsection
