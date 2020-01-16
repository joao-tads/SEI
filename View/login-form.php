<!-- <form action="/login" method="post">
    <div class=>
        <div class="form-group">
            <label for="exampleInputEmail1">CPF</label>
            <input type="text" name="cpf" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" class="form-control" id="exampleInputEmail1" placeholder="Insira seu CPF">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Insira sua senha">
        </div>
        <button type="submit" class="btn btn-dark">Entrar</button>
        <button type="reset" class="btn btn-dark">Limpar</button>
        <p>Esqueceu a Senhar? <a href="/recuperar-senha">Recupere a senha!</a>
    </div>
</form> -->

<!-- meu CSS -->
<link rel="shortcut icon" href="/Design/img/logo favicon.png" type="image/x-icon" />
<!--<link rel="stylesheet" href="/Design/css/login.css">-->
<link rel="stylesheet" href="/Design/css/menuLateral.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<!-- Bootstrap CSS -->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
        <?php if (isset($alerts)) { ?>
            <?php foreach ($alerts as $alert) { ?>
                <div class="alert alert-<?= $alert->context ?> mt-2" role="alert">
                    <?= $alert->content?>
                </div>
            <?php } ?>
        <?php } ?>

        <!-- <div class="container">
        <div class="content first-content">
            <div class="first-column"><img src="/Design/img/logob.png"></div>    
            <div class="second-column">
                <h2 class="title">ACESSE O SISTEMA</h2>
                    <form class= "form"class="login-form" action="/login" method="post">
                    <label class="label-input" for="">
                        <i class="far fa-user icon-modify"></i>
                        <input type="CPF" placeholder="CPF" type="text" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" name="cpf" id="username" class="form-control">
                    </label>
                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" placeholder="Senha" class="form-control">
                    </label>
                    <p class="description-1">Se for o primeiro acesso, a senha será o CPF</p>
                   <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Entrar">
                            </div>
                   <a class="password" href="#">Recuperar Senha!</a>
            </form>
            </div>
        </div>
    </div>-->
    <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="/login" method="post">
                            <h3 class="text-center text-info"><img src="/Design/img/logo.png" height="100" width="130"></h3>
                            <div class="form-group">
                                <label for="username" class="text-info">CPF:</label><br>
                                <input type="text" placeholder="CPF" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" 
                                name="cpf" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Senha:</label><br>
                                <input type="password" name="senha" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md border-0" style="background-color: #323a47" value="Entrar">
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="#" class="text-info">Recuperar Senha!</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="/Design/js/menuLateral.js"></script>

