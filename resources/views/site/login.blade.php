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
    <title>Login</title>
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
                        <div id="login" class="card-body p-5">
                            <h1 class="fs-4 card-title fw-bold mb-4">Login</h1>
                            @if (session()->has('erro'))
                                <div style="width: 250px;" class="alert alert-danger">
                                    {{ session('erro') }}
                                    <span style='font-size:20px;'>&#128533;</span>
                                </div>
                            @endif
                            @if (session()->has('error'))
                                <div style="width: 250px;" class="alert alert-danger">
                                    {{ session('error') }}
                                    <span style='font-size:20px;'>&#128533;</span>
                                </div>
                            @endif
                            @if (session()->has('exit'))
                                <div style="width: 300px;" class="alert alert-success">
                                    {{ session('exit') }}
                                    <span style='font-size:20px;'>&#128513;</span>
                                </div>
                            @endif
                            <form method="POST" class="needs-validation" novalidate="" autocomplete="off">
                                @csrf
                                <div class="mb-3">
                                    <label class="mb-2 text" for="email">E-Mail</label>
                                    <input id="email" type="email" class="form-control" name="email"
                                        value="{{ old('email') }}" required autofocus>
                                    {{ $errors->has('email') ? $errors->first('email') : '' }}
                                    <div class="invalid-feedback">
                                        Email is invalid
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="mb-2 w-100">
                                        <label class="text" for="password">Senha</label>
                                        <span class="lnr lnr-eye"></span>
                                        <a href="{{ route('site.forgot') }}" class="float-end">
                                            Esqueceu a senha ?
                                        </a>
                                    </div>
                                    <input id="password" type="password" class="form-control" name="password"
                                        value="{{ old('password') }}" required>
                                    {{ $errors->has('password') ? $errors->first('password') : '' }}
                                    <div class="invalid-feedback">
                                        Password is required
                                    </div>
                                </div>

                                <div class="d-flex align-items-center">
                                    <div class="form-check">
                                        <input type="checkbox" name="remember" id="remember" class="form-check-input">
                                        <label for="remember" class="form-check-label">Lembre-me</label>
                                    </div>
                                    <button id="button" type="submit" class="btn btn-primary ms-auto">
                                        Login
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div id="basebord" class="py-3 border-0">
                            <div class="text-center">
                                Não tem uma conta? <a href="{{ route('site.register') }}" class="text-dark fw-bold">Crie
                                    uma!!!</a>
                            </div>
                        </div>
                    </div>
                    <div id="alert" class="text-center mt-5 text">
                        Copyright Alan - 2023 todos os direitos reservados
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/login.js"></script>
</body>

</html>
