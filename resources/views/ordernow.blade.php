@extends('master')

@section('content')
<div class="custom-product">

    <div class="col-sm-10">
    <table class="table">
    
    <tbody>
      <tr>
        <td>Amount</td>
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
  <form action="/action_page.php">
  <div class="form-group">
    
    <textarea type="text" placeholder="enter your address here" class="form-control"></textarea>
  </div>
  <div class="form-group">
    <label for="pwd">Payment Method:</label>
    <input type="radio" class="form-control" name="payment"><span>Online Payment</span><br><br>
    <input type="radio" class="form-control" name="payment"><span>Cash on Delivery</span>
  </div>
  
  <button type="submit" class="btn btn-default">Place Order</button>
</form>
  </div>
    </div>
</div>
@endsection