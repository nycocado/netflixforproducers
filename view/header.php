<?php
if( session_status() !== PHP_SESSION_ACTIVE )
{
  session_start();
}

if(!$_SESSION["emailAdm"]){
  $_SESSION["msg"]="<div class='alert alert-danger' role='alert'>Você não tem acesso... tente novamente.</div>";
  header("Location:../view/logar.php");
}
?>
<!DOCTYPE HTML>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="../view/css/style.css">
        <link rel="shortcut icon" href="../view/img/favicon.jpg" type="image/x-icon">
        <title>Netflix for Producers</title>
    </head>
    <body class="bg-dark">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="../view/index.php">Netflix for Producers</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Produtoras
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="../view/cadastroProdutoras.php">Cadastro</a></li>
                                <li><a class="dropdown-item" href="../view/listaProdutoras.php">Visualizar</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="../view/listaProdutorasCod.php">Buscar por Código</a></li>
                                <li><a class="dropdown-item" href="../view/listaProdutorasNome.php">Buscar por Nome</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Filmes
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="../view/cadastroFilmes.php">Cadastro</a></li>
                                <li><a class="dropdown-item" href="../view/listaFilmes.php">Visualizar</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="../view/listaFilmesCod.php">Buscar por Código</a></li>
                                <li><a class="dropdown-item" href="../view/listaFilmesNome.php">Buscar por Nome</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Séries
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="../view/cadastroSeries.php">Cadastro</a></li>
                                <li><a class="dropdown-item" href="../view/listaSeries.php">Visualizar</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="../view/listaSeriesCod.php">Buscar por Código</a></li>
                                <li><a class="dropdown-item" href="../view/listaSeriesNome.php">Buscar por Nome</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Admin
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="../view/cadastroAdmin.php">Cadastro</a></li>
                                <li><a class="dropdown-item" href="../view/listaAdmin.php">Visualizar</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex" action="../controller/sair.php">
                        <button class="btn btn-outline-light" type="submit">Sair</button>
                    </form>
                </div>
            </div>
        </nav>