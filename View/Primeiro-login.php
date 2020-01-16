<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <!-- meu CSS -->
    <link rel="shortcut icon" href="/Design/img/logo favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="/Design/css/login.css">
    <link rel="stylesheet" href="/Design/css/menuLateral.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body class="bg-light" id="main">
        <?php if (isset($usuario)) { ?>
            <nav class="navbar navbar-expand-sm bg-info navbar-dark">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#"><?= $titulo ?></a>
                    </div>
                </div>
            </nav>
        <?php } ?>
    <main class="container">
        <form action="/primeroLogin" method="post">
            <div class=>
                <h3 class="text-info">Como é seu primeiro acesso definar uma nova senha!</h3>
                <h4 class="text-info">Esse procedimento só acontecerá essa vez</h4>
                <div class="form-group">
                    <label class="text-info">Nova Senha</label>
                    <input type="password" name="senha" class="form-control" placeholder="Insira a nova Senha">
                </div>
                <div class="form-group">
                    <label class="text-info">Confirmar nova Senha</label>
                    <input type="password" name="confirmeSenha" class="form-control" placeholder="Confirme sua nova Senha">
                </div>
                <input type="hidden" name="id" value="<?= $usuario->id ?>">
                <input type="hidden" name="type" value="<?= $type ?>">
                <input type="submit" name="submit" class="btn btn-info btn-md" value="Redefinir">
                <input type="reset" name="reset" class="btn btn-info btn-md" value="Limpar">
            </div>
        </form>