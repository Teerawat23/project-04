@extends('layouts.admin')
@section('content')
<style>
.c{
  background-color: purple;
  font-size: 15px;
  display: inline-block;
  text-decoration: none;
  border-radius: 5px;
  padding: 5px 10px;
  color: white;
}
.c:hover{
background-color: #CC99FF;
text-decoration: none;
color: white;
}

.b{
    font-size: larger;
    background-color: orangered;
    border-radius: 5px;
    color: white;
}

button{
    font-size: larger;
    background-color: #00d25b;
    border-radius: 5px;
    color: white;
}
.Dec{
    text-decoration: none;
}
   .delete{
      color: while;
      background-color: red;

    }
    .sss{
        text-shadow: #990066 3px 3px;
        color: #9900CC;
    }
    .sss:hover{
        text-decoration: none;
    }
</style>

<div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                 <br>
                 <br>
                 <h1><a href="{{url('/admin/typeproduct')}}" class="sss" class="card-title">Type Product</a></h1>
                    <form class="forms-sample">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Name</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Detail</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Detail">
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

    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>

@stop