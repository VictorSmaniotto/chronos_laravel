<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chronos - @yield('titulo')</title>
    <script src="https://kit.fontawesome.com/c2eaecad4c.js"></script>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="\css\main.css">
</head>

<body class="bg-light">
    <header class="container-fluid shadow-sm">
        <nav class="navbar navbar-expand-sm ">
            <div class="container-fluid">
                <a href="index.php" class="navbar-brand">
                    <img src="/img/logoChronos.png" class="d-inline-block mt-2" width="160"
                        alt="Logo Chronos">
                </a>

                <!-- Toggler button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav ms-auto mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a href="{{ route('site.home') }}" class="nav-link text-dark">Início</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('site.projetos') }}" class="nav-link text-dark">Projetos</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php" class="nav-link text-dark">Eventos</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php" class="nav-link text-dark">Mural de Pedidos</a>
                        </li>
                    </ul>

                    <span class="sessao-usuario me-5">
                        {{-- <a href="" class="btn btn-outline-primary">Criar Conta</a> --}}
                        <a href="{{ route('login') }}" class="btn btn-primary">Entrar</a>
                    </span>
                </div>
            </div>
        </nav>
    </header>

    <main>
        @yield('conteudo')
    </main>


    <footer class="container-fluid mt-5 bg-primary">
        <div class="row">
            <div class="col-12 p-3 text-center">
                <a href="index.php" class="navbar-brand">
                    <img src="img/logo-reduzida.png" alt="Logo Chronos" width="25">
                </a>
                <div class="p-3 text-center text-light">
                    2022 &copy; - Todos os Direitos são reservados
                </div>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
