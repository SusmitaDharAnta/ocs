@extends('backend.master')

@section('content_body')

<style>
  .a{

    font-size:30px;
    text-align:center;
  }
</style>

<div class="container-fluid px-4">

<h1 class="a"> Orders </h1> <br>




<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">order_id</th>
      <th scope="col">customer_id</th>
      <th scope="col">selling_price</th>
      <th scope="col">payment_type</th>
      <th scope="col">order_status</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($orders as $data)
    <tr>
      <td>{{$data->id}}</td>
      <td>{{$data->order_id}}</td>
      <td>{{$data->customer_id}}</td>
      <td>{{$data->selling_price}}</td>
      <td>{{$data->payment_type}}</td>
      <td>{{$data->order_status}}</td>
      <td>
        <a href="" class="btn btn-primary">Edit</a> <br>
        <a href="" class="btn btn-danger">Delete</a>
      </td>
    </tr>

@endforeach 

    </tbody>
  </table>
  
  @endsection