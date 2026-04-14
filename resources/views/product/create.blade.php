<form action="/product/store" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        Nome: <input type="text" name="name">
    </div>
    <div>
    Preço: <input type="number" name="price">
    </div>
    <div>
    Categoria: 
        <select name="category_id">
        @foreach(\App\Models\Category::all() as $c)
            <option value="{{$c->id}}">{{$c->name}}</option>
        @endforeach
        </select>
    </div>
    <div>
    Tag: 
        <select name="tags_id[]" mutiple>
        @foreach(\App\Models\Tag::all() as $t)
            <option value="{{$t->id}}">{{$t->name}}</option>
        @endforeach
        </select>
    </div>
    <div>   
    Imagem01: <input type="text" name="img_01">
    </div>
    <div>
    Imagem02: <input type="text" name="img_02">
    </div>
    <div>
    Imagem03: <input type="text" name="img_03">
    </div>
    <button type="submit">Criar Produto</button>
</form>

