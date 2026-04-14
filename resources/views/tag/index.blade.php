<a href="/tag/create">Criar um Produto</a>
<table border="1">  
    <tr>
        <td>Id</td>
        <td>Name</td>
    </tr>
    @foreach($tags as $tag)
    <tr>
        <td>{{$tag->id}}</td>
        <td>{{$tag->name}}</td>
    </tr>
    @endforeach
</table>
