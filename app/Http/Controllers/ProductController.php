<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use App\Models\Product;

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
        $validator = Validator::make($request->all(),[
            'name' =>'required|regex:/^[A-Z]+$/i',
            'email' =>'required|regex:/^.+@.+$/i|email|unique:users,email',
            'password' =>['required','string',
            Password::min(8)->letters()->numbers()->mixedCase()->symbols()->uncompromised(3)
        ],
        ]);
           if($validator->fails())
           {
               return view('register')->with('errors', $validator->errors());
           }
        $user=new User;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->save();
        return redirect('/login');
    }  
}
