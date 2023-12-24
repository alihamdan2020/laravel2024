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
      $singleProduct=Product::where('productId',$id)->get();
      return (view('products.show',['oneProduct'=>$singleProduct]));
    }

    public function create(){
      return (view('products.create'));
    }
    
}
