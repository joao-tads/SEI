<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <!-- meu CSS -->
    <link rel="shortcut icon" href="/Design/img/logo favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="/Design/css/botoes.css">
    <link rel="stylesheet" href="/Design/css/PrimeiroLogin.css">
    <link rel="stylesheet" href="/Design/css/menuLateral.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<div style="margin-top: 2%;">

    <body class="bg-light" id="main">
        <div>
            <nav class="navbar fixed-top navbar-dark" style="background-color: #1c2127">
                <p class="text-white text-center">
                    <h4 style="color: #fff;font-family:verdana;font-size:100%">Por favor, redefina uma nova senha para utilizar o sistema</h4>
                </p>
            </nav>
        </div>
        <h3 class="text-center text-white pt-5"></h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col">
                    <div id="login-box" class="col">
                        <form id="login-form" class="form" action="/primeroLogin" method="post">
                            <h3 class="text-center text-info"><img src="/Design/img/logo.png" height="100" width="130"></h3>
                            <br>
                            <div style="text-align: center">
                                <?php

                                use Ifnc\Tads\Helper\Flash;

                                Flash::showAll(); ?>
                            </div>
                            <main class="container">
                                <div class=>
                                    <div class="form-group">
                                        <input type="password" name="senha" class="form-control" placeholder="Insira a nova Senha" required>
                                        <i class="fas fa-key"></i>
                                    </div>

                                    <div class="form-group">
                                        <input type="password" name="confirmeSenha" class="form-control" placeholder="Confirme sua nova Senha" required>
                                        <i class="fas fa-key"></i>
                                    </div>
                                    <input type="hidden" name="id" value="<?= $usuario->id ?>">
                                    <input type="hidden" name="type" value="<?= $type ?>">
                                    <div>
                                        <input type="submit" name="submit" class="btn btn-info btn-md border-0 btn-lg" style="background: #33a583;" value="Redefinir">
                                    </div>
                                    <div>
                                        <input type="reset" name="reset" class="btn btn-info btn-md border-0 btn-lg" style="background-color:#222b32" value="Limpar">
                                    </div>
                                </div>
                        </form>