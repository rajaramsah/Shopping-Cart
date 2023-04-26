@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <h3>Cart List</h3>
        <a href="ordernow" class="btn btn-success col-sm-2">Order Now</a>
       <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Category</th>
                <th scope="col">Gallery</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
                
              </tr>
            </thead>
            <tbody>
            @foreach ($products as $item )
              <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->category}}</td>
                <td><a href="list/{{$item->id}}"><img src="{{$item->gallery}}" alt="" width="100px" height="100px" style="border-radius: 10px;"></a></td>
                <td>{{$item->description}}</td>
                <td><a href="removecart/{{$item->cart_id}}" class="btn btn-warning">Remove Item</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>

       
    </div>
</div>

@endsection