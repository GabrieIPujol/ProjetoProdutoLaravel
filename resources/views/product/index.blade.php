<a href="/product/create">Criar um Produto</a>
<table border="1">  
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Preço</td>
        <td>Categoria</td>
        <td>Qtd Imagens</td>
    </tr>
    @foreach($products as $product)
    <tr>
        <td>{{$product->id}}</td>
        <td>{{$product->name}}</td>
        <td>{{$product->price}}</td>
        <td>{{$product->Category->name}}</td>
        <td>{{$product->Images->count()}}</td>
    </tr>
    @endforeach
</table>