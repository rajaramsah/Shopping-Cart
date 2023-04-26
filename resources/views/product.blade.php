@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                @foreach ($products as $item )
                <div class="carousel-item {{$item['id']==1?'active':''}}" data-bs-interval="10000">
                    <a href="list/{{$item->id}}">
                        <img src="{{$item->gallery}}" class="d-block w-100" alt="..." width="750px" height="500px" backgrond-color="grey">
                        <div class="carousel-caption d-none d-md-block" style="background-color: #2a222261;">
                          <h5 style="color:white">{{$item->name}}</h5>
                          <p style="color:white">{{$item->description}}</p>
                        </div>
                    </a>
                   
                  </div>
                @endforeach
            
            
             
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          @foreach ($products as $item )
          <div class="card mt-3" style="width: 17rem; margin-left: 10px;">
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