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
</style>

<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <br>
                    <p class="card-description"> <a href="{{url('/admin/product/add')}}" class="c">Add Product+</a>
                    </p>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th> Number </th>
                            <th> Picture </th>
                            <th> Name </th>
                            <th> Type </th>
                            <th> Price </th>
                            <th> Amount </th>
                            <th> Detail </th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($product as $row)
                          <tr>
                            <!-- <td class="py-1">
                              <img src="../../assets/images/faces-clipart/pic-1.png" alt="image" />
                            </td> -->
                            <td>{{ $row->id }} </td>
                            <td><img src="{{ asset('./admin/upload/product/' .$row->picture )}} " width="1rem" height="1rem"></td>
                            <td>{{ $row->name}} </td>
                            <td>{{ $row->typeproduct}} </td>
                            <td>{{ $row->price}} </td>
                            <td>{{ $row->amount}} </td>
                            <td>{{ $row->detail}} </td>
                            <td><a href="{{url('/admin/product/edit')}}"><button class="">Edit</button></a></td>
                            <form><td><a href="{{url('admin/product/delete/'.$row->id)}}"><button type="delete" class="delete" >Delete</button></td></form></a>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
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