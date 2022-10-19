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
                    <p class="card-description"> <a href="{{url('/admin/typeproduct/add')}}" class="c">Add Type Product+</a>
                    </p>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <!-- <th> Picture </th> -->
                            <th> Number </th>
                            <th> Name </th>
                            <th> Details </th>
                          </tr>
                        </thead>

                        <tbody>
                          @foreach($type as $row)
                          <tr>
                          <!-- <td class="py-1"> รูป
                              <img src="../../assets/images/faces-clipart/pic-1.png" alt="image" />
                            </td> -->
                            <td> {{$row->id}} </td>
                            <td>{{$row->name}}</td>
                            <td>{{$row->detail}}</td>
                            <td><a href="{{url('/admin/typeproduct/edit')}}"><button class="">Edit</button></a></td>
                            <form><td><button type="delete" class="delete">Delete</button></td></form>
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
    <!-- container-scroller -->
    <!-- plugins:js -->
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Striped Table</h4>
                    <br>
                    <p class="card-description"> <a href="add_tyPeproductt.php" class="c">Add News+</a>
                    </p>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th> Picture </th>
                            <th> Name </th>
                            <th> Details </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                          <td class="py-1">
                              <img src="../../assets/images/faces-clipart/pic-1.png" alt="image" />
                            </td>
                            <td> 精霊幻想記 </td>
                            <td>.......................</td>
                            <td><a href="{{url('/admin/typeproduct/edit')}}"><button class="">Modify</button></a></td>
                            <form><td><button type="delete" class="delete">Delete</button></td></form>
                          </tr>

                          <tr>
                          <td class="py-1">
                              <img src="../../assets/images/faces-clipart/pic-1.png" alt="image" />
                            </td>
                            <td> 精霊幻想記 </td>
                            <td>.......................</td>
                            <td><a href="{{url('/admin/typeproduct/edit')}}"><button class="">Modify</button></a></td>
                            <form><td><button type="delete" class="delete">Delete</button></td></form>
                          </tr>

                          <tr>
                          <td class="py-1">
                              <img src="../../assets/images/faces-clipart/pic-1.png" alt="image" />
                            </td>
                            <td> 精霊幻想記 </td>
                            <td>.......................</td>
                            <td><a href="modify_news.php"><button class="">Modify</button></a></td>
                            <form><td><button type="delete" class="delete">Delete</button></td></form>
                          </tr>

                          <tr>
                          <td class="py-1">
                              <img src="../../assets/images/faces-clipart/pic-1.png" alt="image" />
                            </td>
                            <td> 精霊幻想記 </td>
                            <td>.......................</td>
                            <td><a href="modify_news.php"><button class="">Modify</button></a></td>
                            <form><td><button type="delete" class="delete">Delete</button></td></form>
                          </tr>

                          <tr>
                          <td class="py-1">
                              <img src="../../assets/images/faces-clipart/pic-1.png" alt="image" />
                            </td>
                            <td> 精霊幻想記 </td>
                            <td>.......................</td>
                            <td><a href="modify_news.php"><button class="">Modify</button></a></td>
                            <form><td><button type="delete" class="delete">Delete</button></td></form>
                          </tr>

                          
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


        <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
@stop