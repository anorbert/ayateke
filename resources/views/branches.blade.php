
@extends('layouts.master')
<title>Ayateke Star | Branches</title>
   <style type="text/css">
        #im1{
    background-image: url("{{ asset('images/water/redd.jpg') }}"); 
}
        #im2{
            background-image: url(" {{asset('images/water/water.jpg') }}");
        }

    </style>

@section('content')

    <!-- ********** Hero Area Start ********** -->
    <div class="hero-area height-400 bg-img background-overlay" id="im1"></div>
    <div class="container">
      <div class="row">
        
        <p>At the present, our activities of the management of water supply schemes cover the whole territory of NYARUGURU district managed under ASC LTD in Southern Province, nine (9) out of twelve (12) of KAYONZA district managed under ASC LTD, three (3) water supply schemes in RWAMAGANA District and the whole territory of KIREHE District and eleven (11) out fourteen (14) sectors of GATSIBO in Eastern province and whole territory of RULINDO District and nine (9) out twenty-one (21) sectors of GICUMBI District in Northern Province in the Republic of Rwanda. In the future we shall be working in other various areas in Rwanda and in East African Community</p>

       </div>
      <div class="row">
@if(count($branche)>0)

<table class="table table-bordered">

     <thead>
                  <th><i class="icon_number"> </i> NO</th>
                  <th><i class="fa fa-home"> </i> Branches</th>
                  <th><i class="fa fa-user"> </i> Branch Manager</th>
                  <th><i class="fa fa-phone"> </i> Contact</th>
                  <th><i class="fa fa-pipe"> </i> Wss</th>
                  <th><i class="fa fa-group"> </i> Population</th>
                  <th>Served People</th>
                  
                 
                </thead>
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
                    
                                       
                  </tr>
          @endforeach
  </tbody>
</table>

          @endif
          </div>
    </div>
  <!-- End Blog Area -->
  <div class="clearfix"></div>

    @endsection



 