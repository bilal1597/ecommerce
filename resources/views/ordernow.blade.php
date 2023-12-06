@extends('master')
@section('content')
<div class="custom_product" >
<div class="col-sm-10 " >

<table class="table">


        <tbody>
          <tr>
            <td>Amount</td>
            <td>Rs {{$total}} </td>
          </tr>
          <tr>
            <td>Discount</td>
            <td>0% </td>
          </tr>
          <tr>
            <td>Delivery Charges</td>
            <td>Rs 100</td>
          </tr>
          <tr>
            <td>Total Amount</td>
            <td>Rs {{$total + 100}}</td>
          </tr>
        </tbody>

</table>
<div>
    <form action="/orderplace" method="POST" >
        @csrf
        <div class="form-group">
          <textarea name="address" placeholder="Enter Your Address" class="form-control" > </textarea>
        </div>
        <div class="form-group PM_form ">
          <label for="payment">Payment Method</label> <br><br>
          <input type="radio" value="cash" name="payment" > <span>Online Payment</span><br><br>
          <input type="radio" value="cash" name="payment" > <span>Cash on Delivery</span><br><br>
        </div>
        </div>
        <button type="submit" class="btn btn-success">Order Now</button>
      </form>
</div>
</div>
</div>


@endsection
