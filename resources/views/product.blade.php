@extends('master')
@section('content')
<div class="container custom_product" >
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          @foreach ($products as $item)
          <div class="item {{$item['id']==1?'active':'' }}">
            <a href="detail/{{$item['id']}}">
                <img class="image_slider" src="{{$item['gallery']}}" >
                <div class="carousel-caption slider_text">
                <h3>{{$item['name']}} </h3>
                <p>{{$item['details']}} </p>
            </a>
        </div>
          </div>
          @endforeach

          <div class="trending_wrapper">
            <h3>Trending Products</h3>
            @foreach ($products as $item)
            <div class="trending_item">
                <a href="detail/{{$item['id']}}">
              <img class="trending_image" src="{{$item['gallery']}}" >
              <div class="">
              <h3>{{$item['name']}} </h3>
          </div>
          </a>
            </div>
            @endforeach
          </div>

        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
</div>
@endsection
