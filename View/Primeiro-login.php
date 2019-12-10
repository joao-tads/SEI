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
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#"><?= $titulo ?></a>
                    </div>
                </div>
            </nav>
        <?php } ?>
    </header>
    <main class="container">
        <form action="/primeroLogin" method="post">
            <div class=>
                <h3>Como é seu primeiro acesso definar uma nova senha!</h3>
                <h4>Esse procedimento só acontecerá essa vez</h4>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nova Senha</label>
                    <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Insira a nova Senha">
                </div>
                <div class="form-group">
                    <label for="exampleInputConfirmPassword1">Confirmar nova Senha</label>
                    <input type="password" name="confirmeSenha" class="form-control" id="exampleInputPassword1" placeholder="Confirme sua nova Senha">
                </div>
                <input type="hidden" name="id" value="<?= $usuario->id ?>">
                <input type="hidden" name="type" value="<?= $type ?>">
                <button type="submit" class="btn btn-dark">Redefinir</button>
                <button type="reset" class="btn btn-dark">Limpar</button>
            </div>
        </form>