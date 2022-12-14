@extends('master')
@section('content')
<div class="custom-product">
      <div class="col-sm-10">
        <div class="trending-wrapper">
            <h2>My Orders</h2>
                @foreach ($orders as $item)
                <div class=" row searched-item cart-list-devider">
                    <div class="col-sm-3">
                        <a href="detail/{{$item->id}}">
                            <img class="trending-image" src="{{$item->gallery}}">                            
                            </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="detail/{{$item->id}}">
                            <div class="">
                              <h2 class="text-primary">Name : {{$item->name}}</h2>
                              <h5 class="text-secondary">Delivery Status : {{$item->status}}</h5>
                              <h5 class="text-secondary">Address : {{$item->address}}</h5>
                              <h5 class="text-secondary">Payment Status : {{$item->payment_status}}</h5>
                              <h5 class="text-secondary">Payment Method : {{$item->payment_method}}</h5>
                            </div>
                    </div>
                  </div>
                @endforeach
            </div>
      </div>
</div>
@endsection
