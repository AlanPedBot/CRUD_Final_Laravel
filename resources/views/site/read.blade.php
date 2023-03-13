@extends('layouts.app')
@section('content')

    <head>
        <meta charset="utf-8">
        <meta name="author" content="Muhamad Nauval Azhar">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="This is a login page template based on Bootstrap 5">
        <link rel="stylesheet" href="/css/style1.css">
        <title>Busca - Livros</title>
        <link id="cabeçalho" rel="icon" type="image/x-icon"
            href="https://images.vexels.com/media/users/3/229082/isolated/preview/6fabc24c3830d75486725cc6d786dfbb-logotipo-dos-circulos-do-livro.png">
    </head>

    <body id="bodyHome">
        <!-- formulario que pega as informações pelos inputs -->
        <form method="post" action="">
            @csrf
            <div class="mx-auto" style="margin-top: 5px;  text-align: center;">
                <h1 style="font-weight: bold;  text-align: center;">Buscando Livros</h1>
                <p style="font-weight: bold;  text-align: center;" class=" fs-2 ">Nome do livro</p>
                <input id="inputs" class="w-25 p-3" type="text" value="{{ old('name') }}" name="name"
                    placeholder="Digite o nome do livro">
                <div>
                    {{ $errors->has('name') ? $errors->first('name') : '' }}
                </div>
                <div style=" text-align: center;">
                    <button type="submit" name="read" class="btn btn-primary btn-lg"
                        style="margin-top: 10px; font-weight: bold;">BUSCAR</button>
                </div>
                @if (session()->has('read'))
                    <div style="width: 300px; text-align:center; margin: 0 auto; margin-top:10px;"
                        class="alert alert-success" id="alert">
                        {{ session('read') }}
                        <span style='font-size:20px;'>&#128513;</span>
                    </div>
                @endif
                @if (session()->has('update'))
                    <div style="width: 300px; text-align:center; margin: 0 auto; margin-top:10px;"
                        class="alert alert-success" id="alert">
                        {{ session('update') }}
                        <span style='font-size:20px;'>&#128513;</span>
                    </div>
                @endif
                @if (session()->has('delete'))
                    <div style="width: 300px; text-align:center; margin: 0 auto; margin-top:10px;"
                        class="alert alert-success" id="alert">
                        {{ session('delete') }}
                        <span style='font-size:20px;'>&#128077;</span>
                    </div>
                @endif
                @if (session()->has('erro'))
                    <div style="width: 300px; text-align:center; margin: 0 auto; margin-top:10px;"
                        class="alert alert-danger" id="alert">
                        {{ session('erro') }}
                        <span style='font-size:20px;'>&#128533;</span>
                    </div>
                @endif
            </div>
        </form>
        <div class="container" style="margin-top: 10px;">
            <h3 style="margin-bottom: 20px; text-align:center;">Na tabela abaixo é possível, procurar um
                livro e aplicar algumas das seguintes operações, Editar ou Deletar
            </h3>
            <div style="width:90%; margin-left:auto; margin-right:auto">
                <table class="table table-secondary table-hover" style=" margin: 0 auto;">
                    <h3 style="font-weight: bold">Tabela - Livros</h3>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nome do Livro</th>
                            <th>Id da Locação</th>
                            <th>Id da Seção</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($books as $book)
                            <tr>
                                <td width=" 35%"><strong>{{ $book->id }}</strong></td>
                                <td width=" 45%"><strong>{{ $book->name }}</strong></td>
                                <td width=" 35%"><strong>{{ $book->book_borrowed_id }}</strong></td>
                                <td width="35%"><strong>{{ $book->session_id }}</strong></td>
                                <td width="35%"><strong><button class="btn btn-success ms-auto" type="submit"><a
                                                style="color: white; text-decoration:none; font-weight:bold;"
                                                href="{{ route('site.edit', $book->id) }}"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                    fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path
                                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                    <path fill-rule="evenodd"
                                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                </svg></a></button></strong>
                                </td>
                                <td width="35%">
                                    <strong><button class="btn btn-danger ms-auto" type="submit"><a
                                                style="color: white; text-decoration:none;font-weight:bold;"
                                                href="{{ route('site.delete', $book->id) }}"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                    fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                    <path
                                                        d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                                </svg></a></button></strong>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @if ($books instanceof Illuminate\Pagination\LengthAwarePaginator)
            <div>
                <nav style="background-color: #B0C4DE; text-align:center;">
                    <ul class="pagination">
                        {{-- Botão "Anterior" --}}
                        @if ($books->onFirstPage())
                            <li class="page-item disabled"><span class="page-link">&laquo;</span></li>
                        @else
                            <li class="page-item"><a class="page-link"
                                    href="{{ $books->previousPageUrl() . '&' . http_build_query(request()->except('page')) }}"
                                    rel="prev">&laquo;</a></li>
                        @endif

                        {{-- Links das páginas --}}
                        @foreach ($books->getUrlRange(1, $books->lastPage()) as $page => $url)
                            @if ($page == $books->currentPage())
                                <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                            @else
                                <li class="page-item"><a class="page-link"
                                        href="{{ $url . '&' . http_build_query(request()->except('page')) }}">{{ $page }}</a>
                                </li>
                            @endif
                        @endforeach

                        {{-- Botão "Próximo" --}}
                        @if ($books->hasMorePages())
                            <li class="page-item"><a class="page-link"
                                    href="{{ $books->nextPageUrl() . '&' . http_build_query(request()->except('page')) }}"
                                    rel="next">&raquo;</a></li>
                        @else
                            <li class="page-item disabled"><span class="page-link">&raquo;</span></li>
                        @endif
                    </ul>
                </nav>
            </div>
        @endif
        <div class="footer">
            @include('layouts.components.footer')
        </div>
        <script type="text/javascript" src="/js/delay.js"></script>
    </body>

@endsection
