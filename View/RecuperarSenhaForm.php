<link rel="stylesheet" href="/Design/css/botoes.css">
<form action="/recuperar" method="post">
    <div class=>
        <div class="form-group">
            <label>Matrícula</label>
            <input type="text" name="id" class="form-control" placeholder="Insira sua Matrícula">
        </div>
        <div class="form-group">
            <label>CPF</label>
            <input type="text" name="cpf" class="form-control" placeholder="Insira seu CPF">
        </div>
        <div class="form-group">
            <label>Data de Nascimento</label>
            <input type="date" name="dataNascimento" class="form-control" placeholder="Insira sua Data de Nascimento">
        </div>
        <div class="form-group">
            <label>Nova Senha</label>
            <input type="password" name="senha" class="form-control" placeholder="Insira a nova Senha">
        </div>
        <div class="form-group">
            <label>Confirmar nova Senha</label>
            <input type="password" name="confirmeSenha" class="form-control" placeholder="Confirme sua nova Senha">
        </div>
        <input type="submit" name="submit" class="btn btn-info btn-md" value="Redefinir">
        <input type="reset" name="submit" class="btn btn-info btn-md" value="Limpar">
        <a href="/login-form" class="btn btn-primary" role="button">Voltar</a>
    </div>
</form>