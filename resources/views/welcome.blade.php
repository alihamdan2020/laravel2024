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
      @guest
      <li><a href="/allProducts/create">log in first</a></li>
      @else
      <li><a href="/allProducts/create">create new product</a></li>
      @endguest
    </ul>
  </nav>
  <p class="msg">{{ session('msg')}}</p>
</div>
@endsection