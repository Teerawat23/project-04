@extends('layouts.admin')
@section('content')

<style>
    .sss{
        text-shadow:  #990066 3px 3px;
        color: #CC0000;
    }
    .sss:hover{
        text-decoration: none;
    }
    </style>
<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body"><br><br>
                  <h1><a href="{{url('/admin/promotion')}}" class="sss">promotion</a></h1>
                  <form class="forms-sample" action="{{ url('/admin/promotion/update/'.$promotion->id) }}" method="POST"  enctype="multipart/form-data">
                    @csrf
                      <div class="form-group">
                      <div class="form-group">
                      <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="name" value="{{$promotion->name}}" >
                        <div class="form-group">
                        <label>Picture</label>
                         <!-- <input type="file" name="picture" class="file-upload-default"> 
                        <div class="input-group col-xs-12">
                          <input type="file" class="form-control file-upload-info" disabled placeholder="Upload Image" name="picture">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                          </span> 
                        </div> -->

                        <div class="input-group">

                <input type="file" class="form-control" name="picture" id="inputGroupFile02" />

                <label class="input-group-text" for="inputGroupFile02">Upload</label>

              </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">details</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="detail" value="{{$promotion->detail}}" >

                      </div>
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      <button type="reset" class="btn btn-primary mr-2">Reset</button>
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
</div>

<script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../../assets/vendors/select2/select2.min.js"></script>
    <script src="../../assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../../assets/js/file-upload.js"></script>
    <script src="../../assets/js/typeahead.js"></script>
    <script src="../../assets/js/select2.js"></script>

@stop