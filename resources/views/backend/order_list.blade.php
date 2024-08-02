@extends('backend.master')

@section('content')

<h1>Page Name: {{$page}}</h1>
<a class="btn btn-secondary" href="{{route('order.form')}}">Add Order</a>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">email</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
@foreach($allOrder as $key => $order)

      <th scope="row">{{($key+1)}}</th>
      <td>{{$order->email}}</td>
      <td>
        <a class="btn btn-danger" href="#">Delete</a>
      </td>
     
    </tr>
@endforeach
  </tbody>
</table>


@endsection