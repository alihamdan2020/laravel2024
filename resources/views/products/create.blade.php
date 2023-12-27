@extends('layout')

@section('title')
add new product
@endsection

@section('content')
<div class="mainDiv">
<h1>add new product</h1>
<form action="/allProducts" method="POST">
  @csrf
<div class="labelnput">
<label for="productName">product name</label>
<input type="text" name="productName">
<span style="color:red;">
@error('productName')
{{$message}}
@enderror
</span>

</div>

<div class="labelnput">
<label for="productPrice">product price</label>
<input type="text" name="productPrice">
<span style="color:red">
@error('productPrice')
{{$message}}
@enderror
</span>
</div>

<div class="labelnput">
<span> ingredients </span>
</div>
<div class="labelnput" 
  style="display:grid;grid-template-columns:100px 100px;grid-gap:10px">
  <span>Topic 1</span>
  <input type="checkbox" name="ingredients[]" id="" value="topic 1"> 
  <span>Topic 2</span>
  <input type="checkbox" name="ingredients[]" id="" value="topic 2">
  <span>Topic 3</span>
  <input type="checkbox" name="ingredients[]" id="" value="topic 3">
  <span>Topic 4</span>
  <input type="checkbox" name="ingredients[]" id="" value="topic 4">
  <span>Topic 5</span>
  <input type="checkbox" name="ingredients[]" id="" value="topic 5">
  <span style="color:red;grid-column:span 2">
@error('ingredients')
{{$message}}
@enderror
</span>
</div>

<div class="labelnput">
<input type="submit" value="submit">
</div>
</form>
<a href="/allProducts">go to all products</a>
</div>
@endsection