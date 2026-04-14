<a href="/product/create">Criar um Produto</a>
<table border="1">  
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Preço</td>
        <td>Categoria</td>
        <td>Qtd Imagens</td>
        <td>Tags</td>
    </tr>
    @foreach($products as $product)
    <tr>
        <td>{{$product->id}}</td>
        <td><a href="/product/show/{{$product->id}}">{{$product->name}}</a></td>
        <td>{{$product->price}}</td>
        <td>{{$product->Category->name}}</td>
        <td>{{$product->Images->count()}}</td>
        <td>{{$product->tags->count()}}</td>
    </tr>
    @endforeach
</table>