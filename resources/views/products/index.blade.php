@extends ('layout')

@section('title')
show all products
@endsection

@section('content')
<h1>all products</h1>
<div class="parent">
@foreach ($allProducts as $product)
<div class="product">
<p><span>Product Name </span><span class="content"> {{$product->productName}}</span></p>
<p><span>Price</span><span class="content">{{$product->productPrice}}</span></p>
<p>
  <span>Ingrendients</span>
  @foreach($product->ingredients as $ingredient)
    <span class="content">{{$ingredient}}</span>
  @endforeach  
</p>
</div>
@endforeach
</div>

<a href="/">home page</a>
@endsection