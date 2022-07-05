<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


        <!-- Styles -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="../css/style.css">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        
        <!-- Ion Icons -->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    </head>
    <body>

        <div class="conteiner-fluid">
            <!--header começo-->

            <div class="header row no-gutters">

                <div class="pesquisa col-md-4">
                    <span>
                        <a href="/" id="cloud"><ion-icon name="cloud"></ion-icon></a>
                    </span>

                    <input type="search" name="" id="search" placeholder="Digite o que procura">
                    <span class="botao"><ion-icon name="search-outline"></ion-icon></span>

                </div>
                <div class="docsti col-md-7">

                    <div class="text-docsti"><span>DOCS TI</span><br><span>Data-base: 30/08/2022</span></div>

                </div>
                <div class="col-md-1">
                    <div class="expandir">
                        <a href="#">
                            <ion-icon name="resize-outline"></ion-icon>
                        </a>
                    </div>
                    <div class="perfil">
                        <a href="#">
                            <ion-icon name="person-outline"></ion-icon>
                        </a>
                    </div>

                </div>
            </div>
            <!--header final-->

            <!--sidebar começo-->
            <div class="sidebar">
                <a href="/" id="nuvem">
                    <ion-icon name="cloud"></ion-icon>
                </a>
                <a href="#" class="item-menu">
                    <ion-icon name="create-outline"></ion-icon>
                </a>
                <a href="#" class="item-menu">
                    <ion-icon name="document-outline"></ion-icon>
                </a>
                <a href="#" class="item-menu">
                    <ion-icon name="stats-chart-outline"></ion-icon>
                </a>
                <a href="#" class="item-menu">
                    <ion-icon name="timer-outline"></ion-icon>
                </a>
                <a href="#" class="item-menu">
                    <ion-icon name="ellipsis-horizontal-outline"></ion-icon>
                </a>
                <a href="#" class="item-menu">
                    <ion-icon name="cube-outline"></ion-icon>
                </a>
                <a href="#" class="item-menu">
                    <ion-icon name="scan-outline"></ion-icon>
                </a>
                <a href="#" class="item-menu">
                    <ion-icon name="bed-outline"></ion-icon>
                </a>
            </div>
            <!--sidebar final-->


            <!--content começo-->
            <div class="content">


                <div class="localizacao col-md12 align-self-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Cadastro de Clientes</li>
                        </ol>
                        <div id="butoes">
                            <button type="button" class="btn btn-light">Voltar</button>
                            <button type="button" class="btn btn-light">Ajuda</button>
                        </div>

                    </nav>
                </div>
                <hr>

                <!--main começo -->

                <main>
                    @yield('content')

                </main>

                <!--main começo -->
                

            </div>
            <!--content final-->

        </div>

    </body>
</html>
