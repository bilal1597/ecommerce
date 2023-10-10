@extends('master')
@section('content')
<div class="custom_product" >
    <div class="col-sm-4 " >
        <a href="#">Filter</a>
    </div>
    <div class="col-sm-4 ">
        <div class="trending_wrapper">
            <h4>Result for Products</h4>
            <br>
            @foreach ($products as $item)
            <div class="search_item">
                <a href="detail/{{$item['id']}}">
              <img class="trending_image" src="{{$item['gallery']}}" >
              <div class="">
              <h2>{{$item['name']}} </h2>
              <h4>{{$item['details']}} </h4>
          </div>
          </a>
            </div>
            @endforeach
          </div>

    </div>




</div>
@endsection
