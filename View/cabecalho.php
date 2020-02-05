<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <!-- meu CSS -->
    <link rel="shortcut icon" href="/Design/img/logo favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="/Design/css/menuLateral.css">
    <!-- Bootstrap CSS -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>

<body class="bg-light" id="main">
    <?php if (isset($usuario)) { ?>
        <nav class="navbar fixed-top navbar-dark border-bottom-white" style="background-color: #1c2127">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <a href="#" style="color: #ffff"><i onclick="closeOpenNav()" class="fas fa-bars fa-lg"></i></a>
                </ul>
                <div class="navbar-header">
                    <a class="navbar-brand" href="/Pagina-inicial">
                        <h6 style="font-family:verdana;font-size:80%"> Olá, <?= $usuario->nome ?>!</h6>
                    </a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <a href="/logout" style="text-decoration: none; color: #ffff">
                        <h4 title="Sair">
                            <li class="fas fa-sign-out-alt">
                        </h4>
                        </li>
                    </a>
                </ul>
            </div>
        </nav>
    <?php } ?>
    <main class="container">
        <div style="text-align: center">
            <?php

            use Ifnc\Tads\Helper\Flash;

            Flash::showAll(); ?>
        </div>