@extends ('layout')

@section('title')
show all products
@endsection

@section('content')
<h1>all products</h1>
<div class="parent">
@foreach ($allProducts as $product)
<x-pizza-card :a=$product />

@endforeach
</div>

<a href="/">home page</a>
@endsection


