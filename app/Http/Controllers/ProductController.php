<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Cart;
use App\Models\Product;
use Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $data=Product::all();
        return view('product',['products'=>$data]);
    }
    public function product()
    {
        return view('detail');
    }
    public function register()
    {
        return view('register');
    }
    public function store(Request $request)
    {
        $user=new User;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->save();
        return redirect('/login');
    }  
    public function addToCart(Request $request)
    {
        //return "hello";
        if($request->session()->has('user'))
        {
            //return "hello";
            $cart= new Cart;
            $cart->user_id=$request->session()->get('user')['id'];
            $cart->product_id=$request->product_id;
            $cart->save();
            return redirect('/');
        }
        else{
            return redirect('login');
        }
    }
    static function cartItem()
    {
        $userId=Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }
    public function search(Request $request)
    {
        //return $request->input();
        $data=Product::where('name','like','%'.$request->input('query').'%')->get();
        return view('search',['products'=>$data]);
    }
    public function cartList()
    {
      $userId=Session::get('user')['id'];
      $products=DB::table('carts')
      ->join('products','carts.product_id','=','products.id')
      ->where('carts.user_id',$userId)
      ->select('products.*','carts.id as carts_id')
      ->get();
      return view('cartlist',['products'=>$products]);
    }
    public function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }
    public function orderNow()
    {
        $userId=Session::get('user')['id'];
        $total=DB::table('carts')
        ->join('products','carts.product_id','=','products.id')
        ->where('carts.user_id',$userId)
        ->sum('products.price');

        return view('ordernow',compact('total')); //compact function mean data passing another page
    }
}
