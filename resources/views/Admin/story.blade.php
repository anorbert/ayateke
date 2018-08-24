@extends('layouts.app')
@section('script')
<script type="text/javascript" src="{{asset('finder/ckeditor/ckeditor.js')}}"></script>
@endsection
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
      <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add New Story</h4>
                  <form class="form-horizontal" action="{{url('/addPost')}}" method="post" enctype="multipart/form-data">
                   {{ csrf_field() }}
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Title</label>
                          <div class="col-sm-9">
                           <input type="text" class="form-control" name="title">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Background Picture</label>
                          <div class="col-sm-9">
                             <input type="file" class="form-control" name="plofile">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Sumary</label>
                          <div class="col-sm-9">
                            <textarea class="form-control" name="content"  cols="16" rows="10"></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Tag</label>
                          <div class="col-sm-9">
                           <input type="text" class="form-control" name="tags">
                          </div>
                        </div>
                      </div>
                       <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Category</label>
                          <div class="col-sm-9">
                           <select class="form-control" name="category">
                                                  <option value="">- Choose Cateogry -</option>
                                                  <option value="General">General</option>
                                                  <option value="News">News</option>
                                                  <option value="Media">Media</option>
                                                </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Content</label>
                          <div class="col-sm-12">
                             <textarea class="form-control" name="more"  cols="16" rows="10" id="messageArea"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>



                       <div class="col-md-6">
                        <div class="form-group row">
                          <button type="submit" class="btn btn-success btn-fw btn-block" ><i class="fa fa-save"></i>Publish Post</button>
                          
                        </div>
                      </div>
                  </form>
                </div>
              </div>
            </div>
            <script type="text/javascript">
              CKEDITOR.replace('messageArea');
              tool.simple;
              Dropzone.options.imageUpload = {
                maxFilesize: 1,
                acceptedFiles: ".jpg, .jpeg, .png, .gif"
              };
            </script>
  </div>
</div>
</div>
    <!-- page-body-wrapper ends -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
@endsection
