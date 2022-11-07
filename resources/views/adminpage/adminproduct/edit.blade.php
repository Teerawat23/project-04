@extends('layouts.admin')
@section('content')
<style>
    .sss{
        text-shadow: yellow 3px 3px;
        color: orangered;
    }
    .sss:hover{
        text-decoration: none;
    }
    </style>
<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body"><br><br>
                    <h1><a href="{{url('/admin/product')}}" class="sss">Product</a></h1>
                    <form class="forms-sample"action="{{ url('/admin/product/update/'.$product->id) }}" method="POST" >
                      <div class="form-group">
                        @csrf
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="name" value="{{$product->name}}>
                      </div>
                      <!-- <div class="form-group">
                        <!-- <label for="exampleSelectlanguage">language</label>
                        <select class="form-control" id="exampleSelectlanguage">
                          <option>Thai</option>
                          <option>Japane</option>
                        </select> -->
                      </div> -->
                       <div class="form-group">
                        <label for="exampleSelecttype">Type</label>
                        <select class="form-control" id="exampleSelecttype" name="typeproduct" value="{{$product->typeproduct}}>
                          <option>Manga</option>
                          <option>Light Novel</option>
                          <option>Others</option>
                        </select>
                      </div> 
                      <!-- <div class="form-group">
                        <!-- <label for="exampleSelectPublisher">Publisher</label>
                         <select class="form-control" id="exampleSelectPublisher">
                          <option>Phoenix</option>
                          <option>Luckpim</option>
                          <option>Firest Page Pro</option>
                          <option>Siam Inter Shop</option>
                          <option>Gift Book Publishing</option>
                          <option>Animag</option>
                          <option>MF文庫</option>
                          <option>ファンタジア文庫</option>
                          <option>HJ文庫</option>
                        </select> 
                      </div> --> -->
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
                        <label for="exampleInputstory">story</label>
                        <input type="text" class="form-control" id="exampleInputstory" placeholder="story" name="story" value="{{$product->story}}>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPrice">Price</label>
                        <input type="text" class="form-control" id="exampleInputPrice" placeholder="Price" name="price" value="{{$product->price}} >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputAmount">Amount</label>
                        <input type="number" class="form-control" id="exampleInputAmount" placeholder="Amount" name="amount" value="{{$product->amount}}>
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Product details</label>
                        <textarea class="form-control" id="exampleTextarea1" rows="4" name="detail"></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2">Add</button>
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

    @stop