<?php
use App\Http\Controllers\ProductController;
$total = 0;
if(Session::has('user'))
{
  $total=ProductController::cartItem();
}
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
    
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="/">Shoping Cart</a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/myorders">Orders</a>
          </li>
          
        </ul>
        <form action="/search" class="d-flex" role="search" style="margin-right: 230px;">
          <input class="form-control me-1 search-box" name="query" type="search" placeholder="Search" aria-label="Search" style="
          width:500px;">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <ul class="nav navbar-nav" style="margin-right:0px;">
            <li class="nav-item" style="margin-top:3.5px;">
              <a href="/cartlist" style="text-decoration:none; margin-right:11px;">Cart({{$total}})</a>
            </li>
            @if(Session::has('user'))
            <li class="nav-item dropdown" style="margin-left:0px; margin-right: 75px;">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{Session::get('user')['name']}}
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/logout">LogOut</a></li>
                
              </ul>
            </li>
           @else
           <a href="login" style="text-decoration:none; margin-right:1px;">Login</a>
           @endif
      </div>
    </div>
  </nav>