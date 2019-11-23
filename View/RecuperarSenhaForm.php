<form action="/recuperar" method="post">
    <div class=>
        <div class="form-group">
            <label for="exampleInputEmail1">Matrícula</label>
            <input type="text" name="id" class="form-control" id="exampleInputEmail1" placeholder="Insira sua Matrícula">
        </div>
        <div class="form-group">
            <label for="exampleInputCpf1">CPF</label>
            <input type="text" name="cpf" class="form-control" id="exampleInputPassword1" placeholder="Insira seu CPF">
        </div>
        <div class="form-group">
            <label for="exampleInputCpf1">Data de Nascimento</label>
            <input type="date" name="dataNascimento" class="form-control" id="exampleInputPassword1" placeholder="Insira sua Data de Nascimento">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Nova Senha</label>
            <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Insira a nova Senha">
        </div>
        <div class="form-group">
            <label for="exampleInputConfirmPassword1">Confirmar nova Senha</label>
            <input type="password" name="confirmeSenha" class="form-control" id="exampleInputPassword1" placeholder="Confirme sua nova Senha">
        </div>
        <button type="submit" class="btn btn-dark">Redefinir</button>
        <button type="reset" class="btn btn-dark">Limpar</button>
        <a href="/login-form" class="btn btn-primary" role="button">Voltar</a>
    </div>
</form>