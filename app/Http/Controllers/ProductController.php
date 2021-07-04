<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Session;

class ProductController extends Controller
{
    function index(){
        $data=Product::All();
        return view('products',['data'=>$data]);
    }

    function detail($id=0){
            $data=Product::find($id);
            return view('detail', ['products'=>$data]);
    }

    function search(Request $req){
        $data=Product::where('category','like', '%'.$req->search.'%')->get();
        return view('search',['data'=>$data]);
    }
    
    function addToCart(Request $req){
        if(!$req->session()->has('user'))
            return redirect('/login');
        $cart=new Cart();
        $cart->user_id=$req->session()->get('user')['id'];
        $cart->product_id=$req->product_id;
        $cart->quantity=$req->quantity;
        $cart->save();
        return redirect('/detail/'.$req->product_id);
        }

    static function  cartItem(){
        if(!Session::has('user'))
            return redirect('/login');
        // $cart=new Cart();
        return Cart::where('user_id',Session::get('user')['id'])->sum('quantity');
    
    }

    function cartList(){
        if(!Session::has('user'))
            return redirect('/login');
        $data= Product::join('cart', 'products.id', '=', 'cart.product_id')
            ->where('user_id',Session::get('user')['id'])
            ->get(['products.*', 'cart.id as cart_id']);
        return view('cartlist', ['data'=>$data]);

    }
    function removeFromCart($id=0){
        if(cart::destroy($id))
            return redirect('/cartlist');
    }

    function placeOrder(){
        if(!Session::has('user'))
            return redirect('/login');
        $total= Cart::join('products', 'products.id', '=', 'cart.product_id')
                ->where('cart.user_id',Session::get('user')['id'])
                ->sum('products.price');
        return view('placeorder', ['total'=>$total]);
    }

    function orderNow(Request $req){
        if(!Session::has('user'))
            return redirect('/login');
        $items= Cart::where('user_id',Session::get('user')['id'])->get();
        foreach($items as $item){
            $order=new Order();
            $order->product_id=$item['product_id'];
            $order->user_id=$item['user_id'];
            $order->address=$req->address;
            $order->status="Pending";
            $order->payment_method=$req->payment;
            $order->payment_status="Pending";
            $order->save();
                // Cart::destroy($item['id']);
        }
        Cart::where('user_id',Session::get('user')['id'])->delete();
        return redirect('/cartlist');

    }

    function orderList(){
        if(!Session::has('user'))
            return redirect('/login');
        $oderItems= Product::join('orders', 'orders.product_id','=','products.id')
                ->where('orders.user_id', Session::get('user')['id'])
                ->get('products.*', 'orders.');
        return view('orderlist', ['items'=>$oderItems]);
    }
}
