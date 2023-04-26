@extends('master')
@section('content')
<div class="container">
    <div class="row">
        @foreach ($products as $item )
        <div class="searched-item" style="width: 17rem; margin-left: 10px;">
          <a href="list/{{$item['id']}}" style="text-decoration: none;">
          <img src="{{$item['gallery']}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{$item['name']}}</h5>
            <p class="card-text">{{$item['description']}}</p>
            
          </div>
          </a>
        </div>
        @endforeach
    </div>
</div>

@endsection