@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          
                <form method="post" action="login" class="form-control mt-5" role="form">
                    @csrf
                    <h3 align="center">Login Form</h3>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name='email'>
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name='password'>
                        <label for="floatingPassword">Password</label>
                    </div>
                    <button type="submit" class="btn btn-primary mt-5">Login</button>
                </form>
           
            
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
@endsection