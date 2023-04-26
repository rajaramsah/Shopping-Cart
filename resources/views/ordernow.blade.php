@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Amount Description</th>
                <th scope="col">Total Amt</th>
             
              </tr>
            </thead>
            <tbody>
              <tr>
                
                <td>Amt</td>
                <td>$ {{$total}}</td>
              </tr>
              <tr>
                
                <td>Tax</td>
                <td>$ 0</td>
              </tr>
              <tr>
                
                <td>Delivery</td>
                <td>$ 10</td>
              </tr>

              <tr>
                
                <td>Total Amount</td>
                <td>$ {{$total+10}}</td>
              </tr>
            </tbody>
          </table>

          <div>
            <form action="/orderplace" method="POST">
                @csrf
                <div class="form-floating mb-3">
                    <input type="textarea" name="address" class="form-control" id="floatingInput" placeholder="Enter Your Address" >
                    <label for="floatingInput">Enter Your Address</label>
                </div>
                <div>
                    <H4>Payment Mothod</H4>
                    <input class="form-check-input" value="cash" type="radio" name="payment" id="flexRadioDefault1" checked>
                    <label class="form-check-label" for="flexRadioDefault1">
                      Online Payment
                    </label>&nbsp;&nbsp;&nbsp;
                    <input class="form-check-input" value="cash" type="radio" name="payment" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                      EMI Payment
                    </label>&nbsp;&nbsp;&nbsp;
                    <input class="form-check-input" value="cash" type="radio" name="payment" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                     Payment On Delivery
                    </label>
                </div>
                
                  <button class="btn btn-primary mt-3" type="submit" name="">Order Now</button>
            </form>
          </div>
       
    </div>
</div>

@endsection