<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- meu CSS -->
    <link rel="stylesheet" href="/Design/css/menuLateral.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body class="bg-light" id="main">
    <header class="container">
        <?php if (isset($usuario)) { ?>
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container-fluid">
                    <ul class="nav navbar-nav">
                        <li onclick="closeOpenNav()"><a href="#"><span class="glyphicon glyphicon-menu-hamburger"></span></a></li>
                    </ul>
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#"><?= $usuario->nome ?></a>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/logout"><span class="glyphicon glyphicon-user"></span> Sair</a></li>
                    </ul>
                </div>
            </nav>
        <?php } else { ?>
            <div class="d-flex my-3 p-3 bg-dark text-white rounded shadow-sm">
                <h6 class="mr-auto"><?= $titulo ?></h6>
            </div>
        <?php } ?>
    </header>
    <main class="container">