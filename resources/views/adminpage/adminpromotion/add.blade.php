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
                    <form class="forms-sample" action="{{route('adminpage.adminpromotion.add')}}" method="POST"  enctype="multipart/form-data">
                    @csrf
                      <div class="form-group">
                      <div class="form-group">
                      <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="name" >
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
                        <textarea class="form-control" id="exampleTextarea1" rows="4" name="detail"></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      <button type="reset" class="btn btn-primary mr-2">Reset</button>
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>

          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>

</div>

@stop