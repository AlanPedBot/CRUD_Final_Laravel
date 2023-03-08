<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Muhamad Nauval Azhar">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="This is a login page template based on Bootstrap 5">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <title>Cadastre-se</title>
    <link id="cabeçalho" rel="icon" type="image/x-icon"
        href="https://images.vexels.com/media/users/3/229082/isolated/preview/6fabc24c3830d75486725cc6d786dfbb-logotipo-dos-circulos-do-livro.png">
</head>

<body>
    <section id="card" class="h-100">
        <div class="container h-100">
            <div class="row justify-content-sm-center h-100">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                    <div class="text-center my-5">
                        <img id="logo"
                            src="http://d2r9epyceweg5n.cloudfront.net/stores/002/572/096/themes/common/logo-403573193-1670074052-cc26f63e887f5a1e8ddfb5e0ddb158461670074052.png?0"
                            alt="logo" width="100">
                    </div>
                    <div class="card shadow-lg">
                        <div id="register" class="card-body p-5">
                            <h1 class="fs-4 card-title fw-bold mb-4">Cadastro</h1>
                            <form action={{ route('site.register') }} method="POST" class="needs-validation"
                                novalidate="" autocomplete="off">
                                @csrf
                                @if (session()->has('msg'))
                                    <div style="width: 300px;" class="alert alert-success">
                                        {{ session('msg') }}
                                        <span style='font-size:20px;'>&#128513;</span>
                                    </div>
                                @endif
                                @if (session()->has('error'))
                                    <div style="width: 300px;" class="alert alert-danger">
                                        {{ session('error') }}
                                        <span style='font-size:20px;'>&#128533;</span>
                                    </div>
                                @endif

                                <div class="mb-3">
                                    <label class="mb-2 text" for="name">Nome</label>
                                    <input id="name" type="text" class="form-control" name="name"
                                        value="{{ old('name') }}" required autofocus>
                                    {{ $errors->has('name') ? $errors->first('name') : '' }}
                                    <div class="invalid-feedback">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="mb-2 text" for="email">E-Mail</label>
                                    <input id="email" type="email" class="form-control" name="email"
                                        value="{{ old('email') }}" required>
                                    {{ $errors->has('email') ? $errors->first('email') : '' }}
                                    <div class="invalid-feedback">
                                        Email is invalid
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="mb-2 text" for="password">Senha</label>
                                    <input id="password" type="password" class="form-control" name="password"
                                        value="{{ old('password') }}" required>
                                    {{ $errors->has('password') ? $errors->first('password') : '' }}
                                    <div class="invalid-feedback">
                                        Password is required
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="mb-2 text" for="password">Confirme sua
                                        Senha</label>
                                    <input id="confirmPassword" type="password" class="form-control"
                                        name="confirmPassword" value="{{ old('confirmPassword') }}" required>
                                    {{ $errors->has('confirmPassword') ? $errors->first('confirmPassword') : '' }}
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                                <p class="form-text text-muted mb-3">
                                    Ao se cadastrar você concorda com nossos termos e condições.
                                </p>

                                <div class="align-items-center d-flex">
                                    <button id="button" type="submit" class="btn btn-primary ms-auto">
                                        Cadastrar
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div id="alert" class="card-footer py-3 border-0">
                            <div id="basebord" class="text-center">
                                já tem uma conta? <a href="{{ route('site.login') }}"
                                    class="text-dark fw-bold">Login</a>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-5 text">
                        Copyright Alan - 2023 todos os direitos reservados
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <script src="js/login.js"></script> --}}
</body>

</html>
