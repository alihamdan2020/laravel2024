@extends('layout')

@section('title')
index page
@endsection

@section('content')

<div class="mainDiv">
  <img src="/images/pizza-house.png" alt="">
  <nav>
    <ul>
      <li><a href="/allProducts">show all products</a></li>
      <li><a href="/allProducts/create">create new product</a></li>
    </ul>
  </nav>
  <p class="msg">{{ session('msg')}}</p>
</div>
@endsection