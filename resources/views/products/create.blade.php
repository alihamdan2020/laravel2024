@extends('layout')

@section('content')
<h1>this is to create new product</h1>
<form action="/allProducts" method="POST">
  @csrf
<label for="productName">product name</label>
<input type="text" name="productName">
<label for="productPrice">product price</label>
<input type="text" name="productPrice">
<input type="submit" value="submit">

</form>
<a href="/allProducts">go to all products</a>
@endsection