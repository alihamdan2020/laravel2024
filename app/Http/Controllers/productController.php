<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class productController extends Controller
{
    public function index(){
      $allproducts=Product::all();
      return (view('products.index',['allProducts'=>$allproducts]));
    }
    
    public function show($id){
      
      // $singleProduct=Product::where('id',$id)->get();

      $singleProduct=Product::findorfail($id);
      //findorfail mean if there is no item with that id, server doesat not reply error, it reply page not found 404
      return (view('products.show',['oneProduct'=>$singleProduct]));
    }

    public function create(){
      return (view('products.create'));
    }

    public function store(Request $req){

      $req->validate([
        'productName' => 'required',
        'productPrice' => 'required|numeric|gt:0',
        'ingredients' => 'required|array|min:1'
    ],
  [
    'productName.required'=>"this filed is obligatory",
    'productPrice.required'=>"this filed is obligatory",
    'productPrice.numeric'=>"this filed must contain numbers",
    'productPrice.gt'=>"no negative numbers",
    'ingredients.required' =>'at least one'

  ]);

      $product=new Product();
      // we create a new product record
      $product->productName=request('productName');
      $product->productPrice=request('productPrice');
      $product->ingredients=request('ingredients');

      // let show the new record record in erminal find for the object had created
      //{"productName":"pepsi", "productPrice":1200}
      //error_log($product);
      $product->save();
      

      //note that is redirect i can not send an array as return view
      return redirect('/')->with('msg','order has been added succefully');

    }
    
}
