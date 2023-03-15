@extends('layouts.app')
@section('content')

    <head>
        <meta charset="utf-8">
        <meta name="author" content="Muhamad Nauval Azhar">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="This is a login page template based on Bootstrap 5">
        <link rel="stylesheet" href="/css/style.css">
        <title>Home</title>
        <link id="cabeçalho" rel="icon" type="image/x-icon"
            href="https://images.vexels.com/media/users/3/229082/isolated/preview/6fabc24c3830d75486725cc6d786dfbb-logotipo-dos-circulos-do-livro.png">
    </head>

    <style>
        /* Estilo para as divs dos livros */
        .books {
            width: calc(33.33% - 20px);
            margin: 10px;
            float: left;
        }

        /* Estilo para as imagens dos livros */


        /* Estilo para o título dos livros */
        .books h2 {
            margin-top: 5px;
            font-size: 1.0em;
        }

        .titleHomePage {
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            margin-bottom: 20px;
            background-color: #c8c8b4;
        }
    </style>

    <body>
        <div>
            <div>
                <h1 class="titleHomePage">Biblioteca Online</h1>
            </div>
            <div class="books">
                <img src="https://http2.mlstatic.com/D_NQ_NP_765991-MLU50423605235_062022-O.jpg" alt="Capa do livro 1"
                    class="book">
                <h2>O Pequeno Príncipe, de Antoine de Saint-Exupéry</h2>
            </div>
            <div class="books">
                <img src="https://m.media-amazon.com/images/I/71qB7jypKgL.jpg" alt="Capa do livro 2" class="book">
                <h2>Dom Casmurro, de Machado de Assis</h2>
            </div>
            <div class="books">
                <img src="https://m.media-amazon.com/images/I/81ibfYk4qmL.jpg" alt="Capa do livro 3" class="book">
                <h2>Harry Potter e a Pedra Filosofal, de J.K. Rowling</h2>
            </div>
            <div class="books">
                <img src="https://cdl-static.s3-sa-east-1.amazonaws.com/covers/gg/9788535931419/a-revolucao-dos-bichos.jpg"
                    alt="Capa do livro 4" class="book">
                <h2>A Revolução dos Bichos,de George Orwell</h2>
            </div>
            <div class="books">
                <img src="https://m.media-amazon.com/images/I/71ZLavBjpRL.jpg" alt="Capa do livro 5" class="book">
                <h2>O Senhor dos Anéis, de J.R.R. Tolkien</h2>
            </div>
            <div class="books book-revolucao">
                <img src="https://m.media-amazon.com/images/I/819js3EQwbL.jpg" alt="Capa do livro 6" class="book">
                <h2>1984, de George Orwell</h2>
            </div>
            <div class="footer">
                @include('layouts.components.footer')
            </div>
    </body>
@endsection
