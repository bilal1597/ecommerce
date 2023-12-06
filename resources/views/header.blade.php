<?php
use App\Http\Controllers\ProductController;
$total_count = 0;
if (Session::has('user')) {
    $total_count = ProductController::cartItem();
}
?>
<nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">MartCart</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="/">Home <span class="sr-only">(current)</span></a></li>

          <li> <a href="/myorders">Orders</a> </li>
          </li>
        </ul>
        <form action="/search" class="navbar-form navbar-left">
          <div class="form-group">
            <input type="text" name="search_query" class="form-control search_box" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">Search</button>
        </form>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="/cartList"> Cart({{$total_count}}) </a></li>

          @if (Session::has('user'))
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" >{{Session::get('user')['name']}} <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/logout">Logout</a></li>
              <li role="separator" class="divider"></li>
            </ul>
          </li>
          @else
          <li><a href="/login"> Login </a></li>
          <li><a href="/register"> Register </a></li>
          @endif
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
