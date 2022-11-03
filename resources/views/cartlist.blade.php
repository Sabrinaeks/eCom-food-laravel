@extends('master')
@section('content')
<div class="custom-product">
      <div class="col-sm-10">
        <div class="trending-wrapper">
            <h2>Cart List</h2>
            <div class="">
                @foreach ($products as $item)
                <div class=" row searched-item cart-list-devider">
                    <div class="col-sm-3">
                        <a href="detail/{{$item->id}}">
                            <img class="trending-image" src="{{$item->gallery}}">                            
                            </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="detail/{{$item->id}}">
                            <div class="">
                              <h2 class="text-primary">{{$item->name}}</h2>
                              <h5 class="text-secondary">{{$item->description}}</h5>
                            </div>
                    </div>
                    <div class="col-sm-3">
                        <a href="/removecart/{{$item->cart_id}}" class="btn  btn-warning">Remove to Cart</a>
                    </div>
                  </div>
                @endforeach
                <a class="btn btn-success" href="/ordernow">Oreder Now</a> <br> <br>

            </div>
      </div>
</div>
@endsection
