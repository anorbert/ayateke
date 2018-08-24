@extends('layouts.app')

@section('content')
  <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
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
                        <button class="btn btn-success" title="Approve This"><i class="icon_check_alt2"></i></button>
                        </form>
                        <form action='{{url("/Approve/$reques->id")}}' method="post">
                          {{ csrf_field() }}
                        <button class="btn btn-danger" title="Decline Request"><i class="icon_close_alt2"></i></button>
                      </form>
                      </div></td>
                    
                   
                  </tr>
                  @endforeach
                 
                </tbody>
                 @else
                  no content to display
                  @endif
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!-- content-wrapper ends -->
      
@endsection
