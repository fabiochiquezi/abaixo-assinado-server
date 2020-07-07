<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/dashboard/style.css">
</head>
<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark header-site">
        <div class="container">
            <a href="" class="navbar-brand">Dashboard</a>

            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
    
                    <a href="" class="nav-item nav-link ml-2 active">Tabela de Dados</a>
                    <a href="" class="nav-item nav-link ml-2">Abaixo Assinado</a>
                </div>

                <a href="" class="ml-auto text-white button-sair">Sair</a>
            </div>
        </div>        
    </nav>

    <div class="jumbotron jumbotron-fluid title-standard">
        <div class="container">
            <h1 class="display-4">Abaixo Assinado</h1>
            <p class="lead">Sessão dedicada para editar a página do site.</p>
        </div>
    </div>


    @yield('content-page')

    <div class="mobile-layout d-lg-none">
        <div class="container">
            <p>Utilize dispositivo desktop para que possa vizualizar melhor esta página</p>
        </div>
    </div>

    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script type="module" src="./js/dashboard/Pages/dashEdit.js"></script>
</body>
</html>