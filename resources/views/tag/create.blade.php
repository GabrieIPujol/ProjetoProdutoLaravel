<form action="/tag/store" method="POST" enctype="multipart/form-data">
    @csrf
    Nome: <input type="text" name="name">
    <button type="submit">Criar Produto</button>
</form>

