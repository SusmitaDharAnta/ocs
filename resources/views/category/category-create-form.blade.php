@extends('master')

@section('content_body')
<style>
  .a{

    font-size:30px;
    text-align:center;
  }
</style>

<div class="container-fluid px-4">

<h1 class="a"> Category Form Fill-up</h1> 

<form action="{{route('category-store')}}" method="post">
@csrf

  <div class="form-group">
    <label for="A">Enter Category Name</label>
    <input
    type="text" required name="cat_name" class="form-control" id="A" aria-describedby="emailHelp" placeholder="Enter category name">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <input  type="text" name="description" class="form-control" id="exampleInputPassword1" placeholder="Enter Description" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Image</label>
    <input type="file" name="image" class="form-control" id="exampleInputPassword1" placeholder="Enter an image file">
  </div>

  <br>
  <button type="submit" class="btn btn-primary active">Submit</button>

</form>                     

                            
 </div>

@endsection-