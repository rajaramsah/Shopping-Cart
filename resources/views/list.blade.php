@extends('master')
@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-md-6">
            <img src="{{$product['gallery']}}" alt="" width="350px" height="250px">
        </div>
        <div class="col-md-6">
            
            <h2>Name : {{$product['name']}}</h2>
            <h4>Price : {{$product['price']}}</h4>
            <h4>Category : {{$product['category']}}</h4>
            <h4>Description : {{$product['description']}}</h4>
            <a href="/">GoBack</a>
            <div class="row">
                <div class="col-md-6">
                    <form action="/add_to_cart" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{$product['id']}}" class="form-control">
                        <button class="btn btn-success">Add to Cart</button>
                    </form>
                   
                </div>
                <div class="col-md-6">
                    <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection