@extends('layouts.app')
<title>Ayateke Star |Home</title>

@section('content')
  <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row purchace-popup">
            <div class="col-12">
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
          </div>
          <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-cube text-danger icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Water Request</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">{{$req}}</h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> 65% growth this Month
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-receipt text-warning icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Aproved Request</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">{{$appr}}</h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-poll-box text-success icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Site Views</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">5693</h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-account-location text-info icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Employees</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">{{$employee}}</h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-reload mr-1" aria-hidden="true"></i> Whole Company
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Requested Waters</h4>
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      @if(count($reques)>0)
                       <thead>
                  <th><i class="icon_number"> </i>#Code</th>
                  <th><i class="icon_profile"> </i>Names</th>
                  <th><i class="icon_house"> </i>Branche</th>
                  <th><i class="icon_screen"> </i>Line</th>
                  <th><i class="icon_pin_alt"> </i>District</th>
                  <th>Sector</th>
                  <th>Cell</th>
                  <th>Village</th>
                  <th><i class="icon_mobile"> </i>Phone</th>
                  <th><i class="icon_calendar"> </i>date</th>
                  <th><i class="icon_cogs"> </i>Action</th>
                </thead>

                      <tbody>

                       
                  <!-- start single post -->
                  @foreach($reques->all() as $reques)
                  <tr>
                    <td>{{$reques->id}}</td>
                    <td>{{$reques->fname}}-{{$reques->lname}}</td>
                    <td>{{$reques->brname}}</td>
                    <td>{{$reques->line}}</td>
                    <td>{{$reques->district}}</td>
                    <td>{{$reques->sector}}</td>
                    <td>{{$reques->cell}}</td>
                    <td>{{$reques->village}}</td>
                    <td>{{$reques->phone}}</td>
                    <td>{{date('M j, Y', strtotime($reques->created_at))}}</td>
                    <td><div class="btn-group"><form action='{{url("/Approve/$reques->id")}}' method="post">
                      {{ csrf_field() }}
                        <button class="btn btn-success" title="Approve This"><i class="fa fa-edit"></i></button>
                        </form>
                        <form action='{{url("/delete/$reques->id")}}' method="post">
                          {{ csrf_field() }}
                        <button class="btn btn-danger" title="Decline Request"><i class="fa fa-trash"></i></button>
                      </form>
                      </div></td>
                    
                   
                  </tr>
                  @endforeach
                 
                </tbody>
                 @else
                  No New Request Available to display
                  @endif
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @if(Auth::user()->role==='Admin')
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title mb-4">Manage Users</h5>
                  <div class="fluid-container">

                    @foreach($user as $user)
                    <div class="row ticket-card mt-3 pb-2 border-bottom pb-3 mb-3">
                      <div class="col-md-1">
                       <i class="mdi mdi-account-location text-info icon-lg"></i>
                      </div>
                      <div class="ticket-details col-md-9">
                        <div class="d-flex">
                          <p class="text-dark font-weight-semibold mr-2 mb-0 no-wrap">{{$user->name}} :</p>
                          <p class="text-primary mr-1 mb-0">[#{{$user->id}}]</p>
                          <p class="mb-0 ellipsis">{{$user->email}}</p>
                        </div>
                       
                        <div class="row text-gray d-md-flex d-none">
                           <div class="col-4 d-flex">
                            <small class="mb-0 mr-2 text-muted text-muted">Member Role :</small>
                            <small class="Last-responded mr-2 mb-0 text-muted text-muted">{{$user->role}}</small>
                          </div>

                          <div class="col-4 d-flex">
                            <small class="mb-0 mr-2 text-muted text-muted">Member Since :</small>
                            <small class="Last-responded mr-2 mb-0 text-muted text-muted">{{$user->created_at->diffForHumans()}}</small>
                          </div>
                          
                    
                        </div>
                      </div>
                      <div class="ticket-actions col-md-2">
                        <div class="btn-group dropdown" id="manage">
                          <form action='{{url("/manage/$user->id")}}' method="post">
                          <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Manage
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href='{{url("/admin/$user->id")}}' name="Admin">
                              <i class="fa fa-reply fa-fw"></i>Administrator</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href='{{url("/manage/$user->id")}}' name="User">
                              <i class="fa fa-check text-success fa-fw"></i>Standard User</a>
                     
                          </div>
                        </form>
                        </div>
                      </div>
                    </div>
                    @endforeach
                    
                 
                  </div>
                </div>
              </div>
            </div>
          </div>
          @else
          @endif
        </div>
        <!-- content-wrapper ends -->
      
@endsection
