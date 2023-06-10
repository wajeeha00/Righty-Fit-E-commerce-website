<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Wish;
use App\Models\help;
use App\Models\aboutus;

use Session;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    //
    function display(){
        $data=help::all();
        return view('help',['info'=>$data]);
    }
    function displaya(){
        $data=aboutus::all();
        return view('aboutus',['info'=>$data]);
    }
    function below(){
        $data= Product::
        where('price', '<', '5000')
        ->get();
        return view('below',['products'=>$data]);
    }
    function show_sports(){
        $data= Product::
        where('category', 'like', 'sports')
        ->get();
        return view('show_sports',['products'=>$data]);
    }
    function show_casual(){
        $data= Product::
        where('category', 'like', 'casual')
        ->get();
        return view('show_casual',['products'=>$data]);
    }
    function show(){
        $data= Product::
        where('category', 'like', 'sneakers')
        ->get();
        return view('show',['products'=>$data]);
    }
    function index()
    {
        $data= Product::all();

       return view('product',['products'=>$data]);
    }
    function detail($id)
    {
        $data =Product::find($id);
        return view('detail',['product'=>$data]);
    }
    function search(Request $req)
    {
        $data= Product::
        where('name', 'like', '%'.$req->input('query').'%')
        ->get();
        return view('search',['products'=>$data]);
    }
    function addToCart(Request $req)
    {
        if($req->session()->has('user'))
        {
           $cart= new Cart;
           $cart->user_id=$req->session()->get('user')['id'];
           $cart->product_id=$req->product_id;
           $cart->save();
           return redirect('/');

        }
        else
        {
            return redirect('/login');
        }
    }
    static function cartItem()
    {
     $userId=Session::get('user')['id'];
     return Cart::where('user_id',$userId)->count();
    }
    function cartList()
    {
        $userId=Session::get('user')['id'];
       $products= DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->select('products.*','cart.id as cart_id')
        ->get();

        return view('cartlist',['products'=>$products]);
    }
    function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }
    function orderNow()
    {
        $userId=Session::get('user')['id'];
        $total= $products= DB::table('cart')
         ->join('products','cart.product_id','=','products.id')
         ->where('cart.user_id',$userId)
         ->sum('products.price');
 
         return view('ordernow',['total'=>$total]);
    }
    function orderPlace(Request $req)
    {
        $userId=Session::get('user')['id'];
         $allCart= Cart::where('user_id',$userId)->get();
         foreach($allCart as $cart)
         {
             $order= new Order;
             $order->product_id=$cart['product_id'];
             $order->user_id=$cart['user_id'];
             $order->status="pending";
             $order->payment_method=$req->payment;
             $order->payment_status="pending";
             $order->address=$req->address;
             $order->save();
             Cart::where('user_id',$userId)->delete(); 
         }
         $req->input();
         return redirect('/');
    }
    function myOrders()
    {
        $userId=Session::get('user')['id'];
        $orders= DB::table('orders')
         ->join('products','orders.product_id','=','products.id')
         ->where('orders.user_id',$userId)
         ->get();
 
         return view('myorders',['orders'=>$orders]);
    }

    function addTowish(Request $req)
    {
        if($req->session()->has('user'))
        {
           $wish= new Wish;
           $wish->user_id=$req->session()->get('user')['id'];
           $wish->product_id=$req->product_id;
           $wish->save();
           return redirect('/');

        }
        else
        {
            return redirect('/login');
        }
    }
    static function wishItem()
    {
     $userId=Session::get('user')['id'];
     return Wish::where('user_id',$userId)->count();
    }
    function wishList()
    {
        $userId=Session::get('user')['id'];
       $products= DB::table('wish')
        ->join('products','wish.product_id','=','products.id')
        ->where('wish.user_id',$userId)
        ->select('products.*','wish.id as wish_id')
        ->get();

        return view('wishlist',['products'=>$products]);
    }
    function removeWish($id)
    {
        Wish::destroy($id);
        return redirect('wishlist');
    }
}
