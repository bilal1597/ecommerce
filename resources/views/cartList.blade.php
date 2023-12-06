@extends('master')
@section('content')
<div class="custom_product" >
<div class="col-sm-10 " >
    <div class="trending_wrapper">
        <h3>Result for Products</h3> <br>
        <a class="btn btn-success" href="/ordernow">Order now</a><br><br>
        @foreach ($products as $item)
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
                    <h3>{{$item->name}} </h3>
                    <h5>{{$item->details}} </h5>


            </div>
            </div>

            <div class="col-sm-3 ">

            <a href="/removeproduct/{{$item->cart_id}} " class="btn btn-danger ">Remove from Cart</a>
            </div>

        </div>
        @endforeach
      </div>
      <a class="btn btn-success" href="/ordernow">Order now</a><br><br>
</div>


</div>


@endsection
