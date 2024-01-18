<div class="product">
<div><span>Product Name </span><span class="content"> {{$product->productName}}</span></div>
<div><span>Price</span><span class="content">{{$product->productPrice}}</span></div>
<div>
  <span>Ingrendients</span>
  @foreach($product->ingredients as $ingredient)
    <span class="content">{{$ingredient}}</span>
  @endforeach  
</div>
<div class="links">
  <a href="/allProducts/{{$product->id}}">details</a>
  <a href="/allProducts/update/{{$product->id}}">update</a>

  <!-- same <a href="{{route('showSpecItem',$product->id)}}">details</a> 
  about route name go to web.php -->
  <!-- same <a href="/allProducts/{{$product['id']}}">details</a> -->
  <!-- since i am using smae route /allProducts/{id} as create record
  but in route file a use route::delete, since no method is named delete
  i make like a fake, method post but inside form i tell the browser, it is delete method
 -->
  <form action="/allProducts/{{$product->id}}" method="post">
  @csrf
  @method('delete')
<button>delete</button>
  </form>
  <!-- <a href="/new Route/{{$product->id}}">delete</a> 
  or we can name the route as line 23
  -->

</div>
</div>