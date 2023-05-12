<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class Productadd extends Controller
{
    public function index()
    {
        return view('productadd.create');
    }
    public function create(Request $request)
    {
      $file=time(). '.' .request()->image->getClientOriginalExtension();
      request()->image->move(public_path('images'), $file);


      $product=new Product;
      $product->name=$request->input('name');
      $product->price=$request->input('price');
      $product->category=$request->input('category');
      $product->description=$request->input('description');
      $product->image=$file;
      $product->save();
      
      return redirect('read');

    }
    public function read()
    {
        $reads=Product::all();
        return view('productadd.read',compact('reads'));
    }
    public function edit(Request $request,$id)
    {
        $edits=Product::find($id);
        return view('productadd.edit',compact('edits'));
    }
    public function update(Request $request,$id)
    {
         
      $file=time(). '.' .request()->image->getClientOriginalExtension();
      request()->image->move(public_path('images'), $file);


      $product=Product::find($id);
      $product->name=$request->input('name');
      $product->price=$request->input('price');
      $product->category=$request->input('category');
      $product->description=$request->input('description');
      $product->image=$file;
      $product->save();
      
      return redirect('read');
    }
    public function delete($id)
    {
        $delete=Product::find($id);
        $delete->delete();
        return redirect('read');
    }
    public function detail($id)
    {
        $product=Product::find($id);
        return view('detail',compact('product'));
    }
}
