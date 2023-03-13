@extends('layouts.app')
@section('content')

    <head>
        <meta charset="utf-8">
        <meta name="author" content="Muhamad Nauval Azhar">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="This is a login page template based on Bootstrap 5">
        <link rel="stylesheet" href="/css/style1.css">
        <title>Adiciona - Livros</title>
        <link id="cabeçalho" rel="icon" type="image/x-icon"
            href="https://images.vexels.com/media/users/3/229082/isolated/preview/6fabc24c3830d75486725cc6d786dfbb-logotipo-dos-circulos-do-livro.png">
    </head>

    <body id="bodyHome">

        <!-- formulario que pega as informações pelos inputs  -->
        <form method="post" action="{{ route('site.create') }}">
            @csrf
            <div id="labels" class="mx-auto" style="margin-top: 5px;">
                <h1 style="font-weight: bold; text-align: center">Inserindo Livro</h1>
                <p style="font-weight: bold; text-align: center;" class="fs-2">Nome</p>
                <input id="inputs" class="w-25 p-4" type="text" value="{{ old('name') }}" name="name"
                    placeholder="Digite o nome do livro">
                <div>
                    {{ $errors->has('name') ? $errors->first('name') : '' }}
                </div>
                <p style="font-weight: bold; text-align: center;" class="fs-2" style="margin-top: 15px;">Seção do Livro
                </p>
                <select id="select" class="w-25" name="session_id">
                    <option value="" selected>Qual a Seção do Livro???</option>
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
                <div style="text-align: center;">
                    <button type="submit" name="add" class="btn btn-primary btn-lg"
                        style="margin-top: 15px; font-weight: bold;">ADICIONAR</button>
                </div>
                @if (session()->has('create'))
                    <div style="width: 300px; text-align:center; margin: 0 auto; margin-top:10px;"
                        class="alert alert-success" id="alert">
                        {{ session('create') }}
                        <span style='font-size:20px;'>&#128513;</span>
                    </div>
                @endif
            </div>
        </form>
        <div class="footer">
            @include('layouts.components.footer')
        </div>
        <script type="text/javascript" src="/js/delay.js"></script>
    </body>
@endsection
