
@extends('master')
@section('content')
<style>

</style>

<div class="Container">
    <div class="row">
       <!--Section: Block Content-->
<section class="mb-5">

<div class="row">
  <div class="col-md-6 mb-4 mb-md-0">

    <div id="mdb-lightbox-ui"></div>

    <div class="mdb-lightbox">

      <div class="row product-gallery mx-1">

        <div class="col-12 mb-0">
          <figure class="view overlay rounded z-depth-1 main-img">
            <a href="{{$products['gallery']}}"
              data-size="710x823">
              <img class="slider-img" src="{{$products['gallery']}}"
                class="img-fluid z-depth-1">
            </a>
          </figure>
          <figure class="view overlay rounded z-depth-1" style="visibility: hidden;">
            <a href="{{$products['gallery']}}"
              data-size="710x823">
              <img class="slider-img" src="{{$products['gallery']}}"
                class="img-fluid z-depth-1">
            </a>
          </figure>
          
          
        </div>
        <div class="col-12">
          <div class="row">
            <div class="col-3">
              <div class="view overlay rounded z-depth-1 gallery-item">
                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg"
                  class="img-fluid">
                <div class="mask rgba-white-slight"></div>
              </div>
            </div>
            
            
          </div>
        </div>
      </div>

    </div>

  </div>
  <div class="col-md-6">

    <h5>{{$products['name']}}</h5>
    <!-- <p class="mb-2 text-muted text-uppercase small">Shirts</p> -->
    
    <p><span class="mr-1"><strong>{{$products['price']}}</strong></span></p>
    <p class="pt-1">{{$products['description']}}</p>
    <div class="table-responsive">
      <table class="table table-sm table-borderless mb-0">
        <tbody>
          <tr>
            <th class="pl-0 w-25" scope="row"><strong>Model</strong></th>
            <td>{{$products['category']}}</td>
          </tr>
          <tr>
            <th class="pl-0 w-25" scope="row"><strong>Color</strong></th>
            <td>Black</td>
          </tr>
          <tr>
            <th class="pl-0 w-25" scope="row"><strong>Delivery</strong></th>
            <td>USA, Europe</td>
          </tr>
        </tbody>
      </table>
    </div>
    <hr>
    <form action="/addtocart" method="post">
    @csrf
    <input type="hidden" name="product_id", value="{{$products['id']}}">
        <div class="table-responsive mb-2">
        <table class="table table-sm table-borderless">
            <tbody>
            <tr>
                <td class="pl-0 pb-0 w-25">Quantity</td>
                <!-- <td class="pb-0">Select size</td> -->
            </tr>
            <tr>
                <td class="pl-0">
                <div class="def-number-input number-input safari_only mb-0">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                    class="minus"></button>
                    <input class="quantity" min="1" name="quantity" value="1" type="number">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                    class="plus"></button>
                </div>
                </td>
                
            </tr>
            </tbody>
        </table>
        </div>
        <button type="button" class="btn btn-primary btn-md mr-1 mb-2">Buy now</button>
        <button type="submit" class="btn btn-light btn-md mr-1 mb-2"><i
            class="fas fa-shopping-cart pr-2"></i>Add to cart</button>
    </form>
    <a href="/dashboard">Go To Home</a>
  </div>
</div>

</section>
<!--Section: Block Content-->
    </div>   
</div>

@endsection