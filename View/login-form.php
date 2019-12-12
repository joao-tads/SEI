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
<link rel="stylesheet" href="/Design/css/menuLateral.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style type="text/css">
img {
    width: 25%;
}
</style>
<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
        <?php if (isset($alerts)) { ?>
            <?php foreach ($alerts as $alert) { ?>
                <div class="alert alert-<?= $alert->context ?> mt-2" role="alert">
                    <?= $alert->content ?>
                </div>
            <?php } ?>
        <?php } ?>
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="/login" method="post">
                            <h3 class="text-center text-info"><img src="/Design/img/logo.png" alt="Logo" title="Logo"></h3>
                            <div class="form-group">
                                <label for="username" class="text-info">CPF:</label><br>
                                <input type="text" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" name="cpf" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Senha:</label><br>
                                <input type="password" name="senha" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Entrar">
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

