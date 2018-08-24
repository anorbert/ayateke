@extends('layouts.app')

@section('content')
    <!--main content start-->
     <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-4 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Chart Room</h4>
                
                      @if(count($mess)>0)
                        @if(count($messs)>0)
              <ul class="list-group">
                @foreach($messs->all() as $messs)
                <li class="list-group-item list-active">{{$messs->name}}
                  <span class="pull-right"></span>
                </li>
                @endforeach
                @endif
              </ul>

                   
              @endif
                   
                </div>
              </div>
            </div>

              <div class="col-lg-8 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Conversation</h4>
                
                    
              <ul class="list-group">
           
               @foreach($messs->all() as $messs)

                    <!-- Chat by us. Use the class "by-me". -->
                    <li class="list-group-item list-active">
                      <!-- Use the class "pull-left" in avatar -->
                      <div class="avatar pull-left">
                        <img src="{{ asset('user/img/blog/b02.jpg') }}" alt="" />
                      </div>

                      <div class="chat-content">
                        <!-- In meta area, first include "name" and then "time" -->
                        <div class="chat-meta">{{$messs->name}} <span class="pull-right">{{$messs->email}} </span></div>
                        {{$messs->content}} 
                        <div class="clearfix"><span class="pull-right">{{date('M j, Y', strtotime($messs->created_at))}} </span></div>
                      </div>
                    </li>
                    @endforeach
            
              </ul>
             
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
        <!-- content-wrapper ends -->

@endsection