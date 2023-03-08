<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="/css/style.css">

    <title>EDITA LIVROS</title>
    <link id="cabeçalho" rel="icon" type="image/x-icon"
        href="https://images.vexels.com/media/users/3/229082/isolated/preview/6fabc24c3830d75486725cc6d786dfbb-logotipo-dos-circulos-do-livro.png">
</head>

<body id="bodyHome">
    @include('site.components.nav')
    <!-- formulario que pega as informações pelos inputs  -->
    <form method="POST" action="{{ route('site.edit', $book->id) }}">
        @method('PUT')
        @csrf
        <div class="mx-auto" style="margin-top: 55px; text-align: center;">
            <h1 style="font-weight: bold;">Editar Livro</h1>
            <p style="font-weight: bold;" class="fs-2">Nome</p>
            <input id="inputs" class="w-25 p-4" type="text" value="{{ $book->name }}" name="name"
                placeholder="Digite o nome do livro">
            {{ $errors->has('name') ? $errors->first('name') : '' }}
            <p style="font-weight: bold;" class="fs-2" style="margin-top: 15px;">Seção do Livro</p>
            <select id="select" class="w-25" name="session_id">
                <option value="{{ $book->session_id }}" selected>Qual a Seção do Livro???</option>
                <option value="1">Drama</option>
                <option value="2">Ficção Cientifica</option>
                <option value="3">Romance</option>
                <option value="4">Conto</option>
                <option value="5">Fantasia</option>
                <option value="6">Terror</option>
                <option value="7">Chick Lit</option>
                <option value="8">Distopia</option>
                <option value="9">Aventura</option>
                <option value="10">Suspense</option>
            </select>
            <div>
                <button type="submit" name="add" class="btn btn-success btn-lg"
                    style="margin-top: 15px; font-weight: bold;">Editar</button>
            </div>
        </div>

    </form>

    @include('site.components.footer')
</body>

</html>