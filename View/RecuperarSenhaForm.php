<link rel="shortcut icon" href="/Design/img/logo favicon.png" type="image/x-icon" />
<link rel="stylesheet" href="/Design/css/recuperarSenha.css">
<link rel="stylesheet" href="/Design/css/menuLateral.css">
<link rel="stylesheet" href="/Design/css/botoes.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<!-- Bootstrap CSS -->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<body>
    
    <nav class="navbar fixed-top navbar-expand-sm navbar-dark" style="background-color: #1c2127">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-lin" href="#"><h3 style="text-align: center;color: #fff;font-family:verdana;font-size:100%;"><?= $titulo ?></h3></a>
                </li>
            </ul>
        </nav>
<div id="login">
        <h3 class="text-center text-white pt-5"></h3>
        <div class="container">

<div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="/login" method="post">
                            <h3 class="text-center text-info"><img src="/Design/img/logo.png" height="100" width="130"></h3>
                            <br>
    <div class=>
        <div class="form-group">
            <input type="text" name="id" class="form-control" placeholder="Insira sua Matrícula" required>
            <i class="far fa-id-card"></i>
        </div>
        <div class="form-group">
            <input type="text" name="cpf" class="form-control" placeholder="Insira seu CPF" required>
            <i class="fas fa-user"></i>
        </div>
        
        <div class="form-group">
            <input type="password" name="senha" class="form-control" placeholder="Insira a nova Senha" required>
            <i class="fas fa-key"></i>
        </div>
        <div class="form-group">
            <input type="password" name="confirmeSenha" class="form-control" placeholder="Confirme sua nova Senha" required>
            <i class="fas fa-key"></i>
        </div>
        <div>
            <input type="submit" name="submit" class="btn btn-info btn-md border-0" style="background-color: #33a583" value="Redefinir">
        </div>
        <div>
            <input type="reset" name="submit" class="btn btn-info btn-md border-0" style="background-color: #db2938" value="Limpar">
        </div> 
        <div>   
            <a href="/login-form" class="btn btn-info btn-md  border-0" style="background-color: #323a47" role="button">Voltar</a>
        </div>
    </div>
    </form>
</div>
</div>

</body>