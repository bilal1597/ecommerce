@extends('master')
@section('content')
<div class="custom_product" >
<div class="col-sm-10 " >
    <div class="trending_wrapper">
        <h3>MyOrders</h3> <br>

        @foreach ($orders as $item)
        <div class="row Searched_item cart_divider">
            <div class="col-sm-3 ">
                <a href="detail/{{$item->id}}">
                    <img class="trending_image" src="{{$item->gallery}}" >

                    <div class="">
                </div>
                </a>
            </div>

            <div class="col-sm-4 ">
                    <div class="">
                    <h3>Product Name: {{$item->name}} </h3>
                    <h5>Details: {{$item->details}} </h5>
                    <h5>Address: {{$item->address}} </h5>
                    <h5>Payment Method: {{$item->payment_method}} </h5>
                    <h5>Payment Status: {{$item->payment_status}} </h5>


            </div>
            </div>


        </div>
        @endforeach
      </div>
</div>


</div>


@endsection
