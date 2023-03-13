@extends('layouts.app')
@section('content')

    <head>
        <meta charset="utf-8">
        <meta name="author" content="Muhamad Nauval Azhar">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="This is a login page template based on Bootstrap 5">
        <link rel="stylesheet" href="/css/style1.css">
        <title>Home</title>
        <link id="cabeçalho" rel="icon" type="image/x-icon"
            href="https://images.vexels.com/media/users/3/229082/isolated/preview/6fabc24c3830d75486725cc6d786dfbb-logotipo-dos-circulos-do-livro.png">
    </head>

    <body id="bodyHome">
        <div style="height: 500px; display: flex;">
            <div class="container">
                <div class="container-fluid">
                    <div>
                        <h3>Sinopse - Harry Potter </h3>
                    </div>
                    <p> Harry Potter é um jovem comum de 11 anos até que recebe uma carta para estudar na Escola de Magia e
                        Bruxaria de Hogwarts, onde ele descobre ser, na verdade, um bruxo. Nela, o garoto conquista a
                        amizade de Hagrid, além de Hermione e Ron. No entanto, ele descobre ter um grande inimigo, o
                        terrível Voldemort.
                    </p>
                    <div>
                        <div id="carouselExampleAutoplaying" class="carousel slide text-align center"
                            data-bs-ride="carousel">
                            <div class="carousel-inner" style="height: 350px;">
                                <div id="carousel" class="carousel-item h-100 active"
                                    style="background-image: url(https://m.media-amazon.com/images/I/51PHM1T3wuL.jpg); background-size: contain; background-repeat: no-repeat; background-position:center;">

                                </div>
                                <div id="carousel" class="carousel-item h-100"
                                    style="background-image: url(https://m.media-amazon.com/images/I/51lRMYwP-4L.jpg); background-size: contain; background-repeat: no-repeat; background-position:center;">

                                </div>
                                <div id="carousel" class="carousel-item h-100"
                                    style="background: url(https://m.media-amazon.com/images/I/515TcMeZStL.jpg) center/contain no-repeat;">

                                </div>
                            </div>

                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="container">
                    <div class="container-fluid">
                        <div>
                            <h3>Sinopse - Percy Jackson </h3>
                        </div>
                        <p> Para salvar o mundo, Percy e seus amigos precisam encontrar o poderoso e mágico Velocino de
                            Ouro. Para isso, eles embarcam em uma perigosa odisseia nas águas nunca navegadas do Mar dos
                            Monstros - conhecido pelos humanos como Triângulo das Bermudas.
                        </p>
                        <div>
                            <div id="carouselExampleAutoplaying" class="carousel slide text-align center"
                                data-bs-ride="carousel">
                                <div class="carousel-inner" style="height: 350px;margin-top:30px;">
                                    <div id="carousel" class="carousel-item h-100 active"
                                        style="background-image: url(https://m.media-amazon.com/images/I/51yvcUb5tFL.jpg); background-size: contain; background-repeat: no-repeat; background-position:center;">

                                    </div>
                                    <div id="carousel" class="carousel-item h-100"
                                        style="background-image: url(https://www.libraccio.it/images/9788804717447_0_500_0_75.jpg); background-size: contain; background-repeat: no-repeat; background-position:center;">

                                    </div>
                                    <div id="carousel" class="carousel-item h-100"
                                        style="background: url(https://i0.wp.com/yellowlightedbookshop.co.uk/wp-content/uploads/2023/02/9780141346816.jpg?fit=400%2C613&ssl=1) center/contain no-repeat;">

                                    </div>
                                </div>

                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="container">
                    <div class="container-fluid">
                        <div>
                            <h3>Sinopse - John Wick </h3>
                        </div>
                        <p> John Wick é um lendário assassino de aluguel aposentado, lidando com o luto após perder o grande
                            amor de sua vida. Quando um gângster invade sua casa, mata seu cachorro e rouba seu carro, ele é
                            forçado a voltar à ativa e inicia sua vingança.
                        </p>
                        <div>
                            <div id="carouselExampleAutoplaying" class="carousel slide text-align center"
                                data-bs-ride="carousel">
                                <div class="carousel-inner" style="height: 350px; margin-top:30px;">
                                    <div id="carousel" class="carousel-item h-100 active"
                                        style="background-image: url(https://m.media-amazon.com/images/I/81f1yLVVQRL.jpg); background-size: contain; background-repeat: no-repeat; background-position:center;">

                                    </div>
                                    <div id="carousel" class="carousel-item h-100"
                                        style="background-image: url(https://m.media-amazon.com/images/I/51jeQjwHzNL.jpg); background-size: contain; background-repeat: no-repeat; background-position:center;">

                                    </div>
                                    <div id="carousel" class="carousel-item h-100"
                                        style="background: url(https://m.media-amazon.com/images/I/51lFyzu7B3L.jpg) center/contain no-repeat;">

                                    </div>
                                </div>

                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer">
                @include('layouts.components.footer')
            </div>
        </div>



    </body>
@endsection
