<?php 
use App\Http\Controllers\ProductController;
$totat=ProductController::cartItem();
?>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">Ecom</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="/orders">My Orders</a></li>
    </ul>
    <form class="navbar-form navbar-left" action="search" method="post">
    @csrf
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
    <ul class="nav navbar-nav navbar-right">
    @if(Session::has('user'))
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> {{Session::get('user')['name']}}</a></li>
      <li><a href="logout"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    @else
      <li><a href="/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    @endif
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
         <li><a href="/cartlist">Add To Cart({{@$totat}})</a></li>
    </ul>
    

  </div>
</nav>

