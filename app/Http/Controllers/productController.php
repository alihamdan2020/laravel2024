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

    public function store(){

      return redirect('/allProducts');

    }
    
}
