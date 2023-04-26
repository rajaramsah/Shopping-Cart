@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <h3>My Orders List</h3>
        <a href="ordernow" class="btn btn-success col-sm-2">Order Now</a>
       <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Address</th>
                <th scope="col">Delivery Status</th>
                
                <th scope="col">Payment Method</th>
                <th scope="col">Image</th>
                <th scope="col">Payment Status</th>
                
                
                
              </tr>
            </thead>
            <tbody>
            @foreach ($orders as $item )
              <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td><a href="list/{{$item->id}}"><img src="{{$item->gallery}}" alt="" width="100px" height="100px" style="border-radius: 10px;"></a></td>
                <td>{{$item->status}}</td>
                <td>{{$item->address}}</td>
                <td>{{$item->payment_method}}</td>
                
                <td>{{$item->payment_status}}</td>
                
              </tr>
              @endforeach
            </tbody>
          </table>

       
    </div>
</div>

@endsection