@extends('layout')

@section('content')
<h1>this is </h1>
<p>{{$oneProduct[0]->productName}}</p>
<p>{{$oneProduct[0]->productPrice}}</p>

@endsection