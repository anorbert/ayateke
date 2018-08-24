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
                     @if (session('response'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('response') }}
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
      <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Quick Anouncement</h4>
                  <form class="form-horizontal " action="{{url('/addanouncement')}}" method="post">
                   {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label col-sm-4">Dead Line</label>
                        <div class="col-sm-6">
                          <input type="date" value="28-10-2013" class="form-control" name="dead" >
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="control-label col-sm-2">Anouncement Available To</label>
                        <div class="col-sm-6">
                         <select name="type" class="form-control">
                           <option value="Public">Public</option>
                           <option value="users">Only Users</option>
                         </select>
                        </div>
                      </div>

                        <div class="form-group">
                        <label class="control-label col-sm-2">title</label>
                        <div class="col-sm-6">
                         <input type="text" name="title" class="form-control">
                        </div>
                      </div>
                    <div class="row">                     
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-12 col-form-label">Anouncement Content</label>
                          <div class="col-sm-12">
                           <textarea class="form-control ckeditor" name="editor1" rows="6" placeholder="quick Message"></textarea>
                          </div>
                        </div>
                      </div>
                       <div class="col-md-6">
                        <div class="form-group row">
                          <button type="submit" class="btn btn-success btn-fw btn-block" ><i class="fa fa-save"></i>Publish</button>
                          
                        </div>
                      </div>
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
