@extends ('layout')



@section('content')
<h1>all products</h1>
<div class="parent">
@foreach ($allProducts as $product)
<div class="product">
<p><span>Product Name </span> {{$product->productName}}</p>
<p><span>Price</span>{{$product->productPrice}}</p>
</div>
@endforeach
</div>

@endsection