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

 <div class="row">
            <div class="col-lg-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Current Branches</h4>
                  <div class="table-responsive">
                    @if(count($branche)>0)
                    <table class="table table-bordered">
                      
                       <thead>
                  <th><i class="icon_number"> </i>NO</th>
                  <th><i class="fa fa-home"> </i>Names</th>
                  <th><i class="fa fa-user"> </i>Manager</th>
                  <th><i class="fa fa-phone"> </i>Contact</th>
                  <th><i class="fa fa-pipe"> </i>Wss</th>
                  <th><i class="fa fa-group"> </i>Population</th>
                  <th>Served People</th>
                  <th>Employees</th>
                  <th><i class="icon_cogs"> </i>Action</th>
                </thead>
   <!-- start single post -->
   <tbody>
                  @foreach($branche->all() as $branche)
                  <tr>
                    <td>{{$branche->id}}</td>
                    <td>{{$branche->br_name}}</td>
                    <td>{{$branche->br_manager}}</td>
                    <td>{{$branche->br_contact}}</td>
                    <td>{{$branche->wss}}</td>
                    <td>{{$branche->population}}</td>
                    <td>{{$branche->peoples}}</td>
                    <td>{{$branche->employees}}</td>
                    <td><div class="btn-group">
                      <a class="btn btn-success" href='{{url("editbrach/$branche->id")}}'>
                                  <i class="fa fa-edit"></i>
                              </a>
                    
                        
                      </div></td>
                   
                  </tr>
                  @endforeach
                 
                </tbody>
             
                    </table>
                    @else
                    No branch available Please Add In
                     @endif
                  </div>
                </div>
              </div>
            </div>
          </div><!--row end-->


                 <div class="row">
      <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Blanch Information</h4>
                  <!-- Edit profile form (not working)-->
                    <form class="form-horizontal" action="{{url('/addbranche')}}" method="post" enctype="multipart/form-data">
                   {{ csrf_field() }}
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Names</label>
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
                          <label class="col-sm-3 col-form-label">Branch Manager</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="manager" value="{{ old('manager') }}">
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
                            <input type="number" class="form-control" name="contact" value="{{ old('contact') }}">
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
                             <input type="number" class="form-control" name="wss" value="{{ old('wss') }}">
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
                            <input type="number" class="form-control" name="population" value="{{ old('population') }}">
                           @if ($errors->has('population'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('population') }}</strong>
                                    </span>
                                @endif
                          </div>
                        </div>
                      </div>

                       <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Plofile Picture</label>
                          <div class="col-sm-9">
                           <input type="file" class="form-control" name="plofile" value="{{ old('plofile') }}">
                           @if ($errors->has('plofile'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('plofile') }}</strong>
                                    </span>
                                @endif
                          </div>
                        </div>
                      </div>
                    
                    </div>
                    <p class="card-description">
                      Address
                    </p>
                     <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">served people</label>
                          <div class="col-sm-9">
                            <input type="number" class="form-control" name="people" value="{{ old('people') }}">
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
                            <input type="number" class="form-control" name="employee" value="{{ old('employee') }}">
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
                            <button type="reset" class="btn btn-danger">Reset</button>
                        
                      </div>


                  </form>
                </div>
              </div>
            </div>
  </div>


  <!-- page-body-wrapper ends -->
</div>
</div>

  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
@endsection
