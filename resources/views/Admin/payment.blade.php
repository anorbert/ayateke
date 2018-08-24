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
                  <h4 class="card-title">Payment Information</h4>
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      @if(count($wss)>0)
                       <thead>
                  <th><i class="icon_number"> </i>#No</th>
                  <th><i class="icon_profile"> </i>Branch</th>
                  <th><i class="icon_house"> </i>Bank</th>
                  <th><i class="icon_screen"> </i>Acounts</th>
              
                 
                </thead>
                <tbody>
   <!-- start single post -->
                  @foreach($wss->all() as $wss)
                  <tr>
                    <td>{{$wss->id}}</td>
                    <td>{{$wss->branch}}</td>
                    <td>{{$wss->bank}}</td>
                    <td>{{$wss->account}}</td>          
 
                  </tr>
                  @endforeach
                 
                 
                 
                </tbody>
              @endif
                    </table>
                    {{$page->links()}}
                  </div>
                </div>
              </div>
            </div>
          </div><!--row end-->


          <div class="row">
      <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">New Acount</h4>
                  <!-- Edit profile form (not working)-->
                    <form class="form-horizontal" action="{{url('/addpay')}}" method="post" enctype="multipart/form-data">
                   {{ csrf_field() }}
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Blanch Name</label>
                          <div class="col-sm-9">
                            <select name="branch" class="form-control" required="">
                            	<option>Select Blanch</option>
                            	@foreach($pay as $pay)
                              <option value="{{$pay->br_name}}">{{$pay->br_name}}</option>
                              @endforeach
                             
                            </select>
                            @if ($errors->has('branch'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('branch') }}</strong>
                                    </span>
                                @endif
                          </div>
                        </div>
                      </div>
                    </div>  
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Bank</label>
                          <div class="col-sm-9">
                             <select name="bank" class="form-control">
                              <option value="BK">BK</option>
                              <option value="BPR">BPR</option>
                              <option value="Sacco">Sacco</option>
                              
                            </select>
                           @if ($errors->has('bank'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('bank') }}</strong>
                                    </span>
                                @endif
                          </div>
                        </div>
                      </div>
                    </div>
                     <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Account</label>
                          <div class="col-sm-9">
                           <input type="text" class="form-control" name="account" value="{{ old('account') }}">
                           @if ($errors->has('account'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('account') }}</strong>
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

        @endsection