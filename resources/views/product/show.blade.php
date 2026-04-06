<h1>{{$product->name}}</h1>
<p>R${{$product->price}}</p>
<p>Categoria: {{$product->Category->name}}</p>
@foreach($product->Images as $pi)
    <img src="{{$pi->url}}" style="width: 150px">
@endforeach