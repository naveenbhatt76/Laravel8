
@extends('master')
@section('content')
<div class="custom_product">
    <div class="col-md-6">
    <table class="table table-striped">
            <tr>
                <td>Price </td>
                <td>{{@$total}}</td>
            </tr>
            <tr>
                <td>Tax Charge </td>
                <td>{{0}}</td>
            </tr>
            <tr>
                <td>Delivery Charge </td>
                <td>{{100}}</td>
            </tr>
            <tr>
                <td>Total Price </td>
                <td>{{$total+100}}</td>
            </tr>   
        </tbody>
    </table>
        
    <form action="/ordernow" method="post">
    @csrf
    <textarea name="address" id="" cols="60" rows="3"></textarea>
    <br>
    <input type="radio" id="html" name="payment" value="Online Payment">
    <label for="html">Online Payment</label><br>
    <input type="radio" id="css" name="payment" value="EMI">
    <label for="css">EMI Payment</label><br>
    <input type="radio" id="javascript" name="payment" value="Cash On Delivery">
    <label for="javascript">Cash On Delivery</label><br>
    <button type="submit">Order Now</button>
    </form>
    </div>
</div>

@endsection