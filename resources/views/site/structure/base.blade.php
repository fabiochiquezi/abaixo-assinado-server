<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Cookie" />
    <link rel="stylesheet" href="{{ asset('css/site/style.css') }}">
</head>
<body>

    <header class="header-site">
        <div class="msg-top w-100">
            <div class="container">
                <div class="row justify-content-center">
                    <span>coragem e coerência na luta por direitos</span>
                </div>
            </div>
        </div>


        <nav class="navbar navbar-expand-md navbar-light header-site">
            <div class="container">
                <a href="https://marianacontipsol.com.br/" class="navbar-brand">
                    <img src="{{ asset('img/logo.png') }}" alt="">
                </a>
    
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
            
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav d-flex justify-content-end w-100 align-items-md-center">
                        <a href="https://marianacontipsol.com.br/" class="nav-item nav-link ml-2">Inicio</a>
                        <a href="https://marianacontipsol.com.br/conheca/" class="nav-item nav-link ml-2">Conheça</a>
                        <a href="https://marianacontipsol.com.br/atuacao/" class="nav-item nav-link ml-2">Atuação</a>
                        <a href="https://marianacontipsol.com.br/blog-4/" class="nav-item nav-link ml-2">Blog</a>
                        <a href="https://marianacontipsol.com.br/contato/" class="nav-item nav-link ml-2">Contato</a>
                        <a href="{{ route('site.home') }}" class="nav-item nav-link ml-2 active">Abaixo Assinado</a>
                    </div>
    
                    {{-- <a href="" class="ml-auto text-white button-sair">Sair</a> --}}
                </div>
            </div>        
        </nav>
    </header>

    @yield('content-page')

    <foter class="footer-site">
        <div class="top w-100">
            <div class="container d-flex flex-column align-items-center flex-lg-row justify-content-lg-between">
                <a href="https://marianacontipsol.com.br/" class="logo">
                    <img src="{{ asset('img/logo-2.png') }}" alt="">
                </a>

                <ul class="mb-0">
                    <li class="d-flex flex-column align-items-center flex-lg-row justify-content-lg-end">
                        <i class="icon icon-endereco"></i>
                        <span>Av. da Saudade nº 1004 - Ponte Preta - CEP 13041-6707</span>
                    </li>
                    <li class="d-flex flex-column align-items-center flex-lg-row justify-content-lg-end">
                        <i class="icon icon-whatsapp"></i>
                        <span>(19) 99897-0050</span>
                    </li>
                    <li class="d-flex flex-column align-items-center flex-lg-row justify-content-lg-end">
                        <i class="icon icon-email"></i>
                        <span>marianaconti50@gmail.com</span>
                    </li>
                </ul>
                </div>
            </div>

            <div class="bottom">
                <div class="container">
                    <p class="mb-0">Copyright © 2020 Mariana Conti. Todos os direitos reservados.. | Design: Luigi Val | Desenvolvedor: Fábio Chiquezi</p>
                </div>
            </div>
        
    </foter>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="module" src="{{ asset('js/site/Site.js') }}"></script>

</body>
</html>