@extends('master')

@section('content_body')

<style>
  .a{

    font-size:30px;
    text-align:center;
  }
</style>

<div class="container-fluid px-4">

<h1 class="a"> Products </h1> <br>


<a href="{{route('product-create')}}"  class="btn btn-primary">Add New Product</a><br>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">sub_category_name</th>
      <th scope="col">product_name</th>
      <th scope="col">description</th>
      <th scope="col">image</th>
      <th scope="col">status</th>
      <th scope="col">buying_price</th>
      <th scope="col">selling_price</th>
    </tr>
  </thead>
  <tbody>
    @foreach($pro as $data)
    <tr>
      <td>{{$data->id}}</td>
      <td>{{$data->sub_category_name}}</td>
      <td>{{$data->product_name}}</td>
      <td>{{$data->description}}</td>
      <td>{{$data->image}}</td>
      <td>{{$data->status}}</td>
      <td>{{$data->buying_price}}</td>
      <td>{{$data->selling_price}}</td>
    </tr>
    @endforeach
  </tbody>
      </table>

</div>
{{$pro->links()}}
@endsection