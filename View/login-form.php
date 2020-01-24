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
<link rel="stylesheet" href="/Design/css/login.css">
<link rel="stylesheet" href="/Design/css/menuLateral.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<!-- Bootstrap CSS -->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->



<body>
   <div>
        <nav class="navbar fixed-top navbar-dark" style="background-color: #1c2127">
            <p class="text-white text-center"><h4 style="color: #fff;font-family:verdana;font-size:100%">Seja bem vindo! Por favor, identifique-se para utilizar o sistema</h4></p>
        </nav>
  </div>
  <div style="margin-top: 5%;">
    <div id="login">
        <h3 class="text-center text-white pt-5"></h3>
        <div class="container">
        <?php if (isset($alerts)) { ?>
            <?php foreach ($alerts as $alert) { ?>
                <div class="alert alert-<?= $alert->context ?> alert-dismissible col-md-3 text-center" role="alert">
                    <?= $alert->content?>
                </div>
            <?php } ?>
        <?php } ?>

        
   <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="/login" method="post">
                            <h3 class="text-center text-info"><img src="/Design/img/logo.png" height="100" width="130"></h3>
                            <br>
                            <div class="form-group">
                                <input type="text" placeholder="CPF" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" 
                                name="cpf" id="username" class="form-control">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="form-group">
                               <input type="password" placeholder="Senha" name="senha" id="password" class="form-control">
                               <i class="fas fa-lock icon-modify"></i>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md border-0"style="background-color: #33a583" value="Entrar">
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="#" class="text-info">Recuperar Senha!</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
       
   
</body>
<script src="/Design/js/menuLateral.js"></script>

