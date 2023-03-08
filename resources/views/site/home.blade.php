<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Muhamad Nauval Azhar">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="This is a login page template based on Bootstrap 5">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <title>Home</title>
    <link id="cabeçalho" rel="icon" type="image/x-icon"
        href="https://images.vexels.com/media/users/3/229082/isolated/preview/6fabc24c3830d75486725cc6d786dfbb-logotipo-dos-circulos-do-livro.png">
</head>

<body id="bodyHome">
    @include('site.components.nav')
    <div class="content">
        <div>
            <h5 style="right: 30px;" id="nameSession" style="padding-top:20px;">
                Seja Bem Vindo! <?php echo $_SESSION['nome']; ?>
            </h5>
        </div>
        <div class="container-fluid col-5">
            <div style="text-align: center;">
                <h3>Projeto - Biblioteca </h3>
            </div>
            <p style=" text-align: justify;"> Aqui você conseguirá fazer operações dentro de um banco de dados
                utilizando. A biblioteca online, permitira que os usuários possam gerenciar seus livros, podendo
                incluir,
                buscar, atualizar e deletar seus livros, sendo este, desenvolvido utilizando Laravel, html, css,
                bootstrap,
                docker entre outras ferramentas.
            </p>
            <div>
                <div id="carouselExampleAutoplaying" class="carousel slide text-align center" data-bs-ride="carousel">
                    <div class="carousel-inner" style="height: 500px;">
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

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        @include('site.components.footer')
</body>

</html>
