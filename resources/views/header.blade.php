<?php 
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
  $total= ProductController::cartItem();
}

?>
<nav class="navbar navbar-default" style="background-color:black">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">RIGHTY FIT</a>
      </div>
  
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><img style="height:50px ;width:100px" src="{{asset('images/rightyfit.png')}}" alt=""></li>
          <li ><a href="#">Home</a></li>
          
          <li><a href="/aboutus">About Us</a></li>
          <li><a href="/myorders">Orders</a></li>
          <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Category
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item"  href="/sneakers">sneakers</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item"  href="/sports">sports</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/casual">casual</a>
        </div>
      </li>
      <li><a href="/below">Below Rs.5000</a></li>
          <li><a href="/help">Need Help?</a></li>
          
        </ul>
        <form action="/search" class="navbar-form navbar-left">
          <div class="form-group">
            <input type="text" name="query" class="form-control search-box" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">Search</button>
        </form>
        <ul class="nav navbar-nav navbar-right">
        <li><a href="/wishlist">WishList ♡</a></li>
          <li><a href="/cartlist">cart({{$total}})</a></li>
          @if(Session::has('user'))
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/logout">Logout</a></li>
            </ul>
          </li>
          @else
          <li><a href="/login">Login</a></li>
          <li><a href="/register">Register</a></li>
          @endif
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>