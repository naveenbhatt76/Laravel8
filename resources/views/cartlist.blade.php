
@extends('master')
@section('content')
<div class="container mt-5 mb-5">
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">E-COMMERCE CART</h1>
     </div>
</section>

<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">Product</th>
                            <th scope="col">Available</th>
                            <th scope="col" class="text-center">Quantity</th>
                            <th scope="col" class="text-right">Price</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $item)
                       <tr>
                            <td><img class="cart-img" src="{{$item['gallery']}}" /> </td>
                            <td>{{$item['name']}}</td>
                            <td>In stock</td>
                            <td><input class="form-control" type="text" value="1" /></td>
                            <td class="text-right">{{$item['price']}}</td>
                            <td class="text-right"><a href="/removefromcart/{{$item['cart_id']}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </a> </td>
                        </tr>
                        
                    @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                    <button class="btn btn-block btn-light">Continue Shopping</button>
                </div>
                <div class="col-sm-12 col-md-6 text-right">
                    <a href="/placeorder" class="btn btn-lg btn-block btn-success text-uppercase">Place Order</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection