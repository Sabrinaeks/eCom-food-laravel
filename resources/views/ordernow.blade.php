@extends('master')
@section('content')
<div class="custom-product">
      <div class="col-sm-10">
        <table class="table table-striped">
            <tbody>
              <tr>
                <td>Price</td>
                <td>Rp.{{$total}}</td>
              </tr>
              </tr>
              <tr>
                <td>Delivery</td>
                <td>Rp.5000</td>
              </tr>
              <tr>
                <td>Total Amount</td>
                <td>Rp.{{$total}}</td>
              </tr>
            </tbody>
          </table>
          <form>
            <div class="form-group">              
              <textarea  class="form-control"></textarea>
            </div>
            <div class="form-group">
              <label for="">Payment Method</label>
              <p><input type="radio"  name="payment"> <span>Online Payment</span></p>
              <p><input type="radio"  name="payment"> <span>EMI Payment</span></p>
              <p><input type="radio"  name="payment"> <span>Payment On Delivery</span></p>
            </div>
            <button type="submit" class="btn btn-default">Order Now</button>
          </form>
      </div>
</div>
@endsection
