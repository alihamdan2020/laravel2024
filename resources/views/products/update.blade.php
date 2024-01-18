<form action="/allProducts/update/{{$singleProduct->id}}" method="post">
  @csrf
  @method('PUT')
  <input type="text" name="productName" value="{{$singleProduct->productName}}">
  <input type="text" name="productPrice" value="{{$singleProduct->productPrice}}">
  <button>update</button>

</form>
