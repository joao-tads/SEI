<form action="/verificar" method="post">
    <div class=>
        <div class="form-group">
            <label for="exampleInputEmail1">Matricula</label>
            <input type="text" name="id" class="form-control" id="exampleInputEmail1" placeholder="Insira sua Matrícula">
        </div>
        <div class="form-group">
            <label for="exampleInputCpf1">Senha</label>
            <input type="text" name="cpf" class="form-control" id="exampleInputPassword1" placeholder="Insira seu CPF">
        </div>
        <div class="form-group">
            <label for="exampleInputUsuario1">Senha</label>
            <input type="text" name="usuario" class="form-control" id="exampleInputPassword1" placeholder="Insira o novo Usuário">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Insira a nova Senha">
        </div>
        <div class="form-group">
            <label for="exampleInputConfirmPassword1">Senha</label>
            <input type="password" name="confirmeSenha" class="form-control" id="exampleInputPassword1" placeholder="Confirme sua nova Senha">
        </div>
        <button type="submit" class="btn btn-dark">Verificar</button>
        <button type="reset" class="btn btn-dark">Limpar</button>
    </div>
</form>