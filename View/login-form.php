<form action="/login" method="post">
    <div class=>
        <div class="form-group">
            <label for="exampleInputEmail1">Usuário</label>
            <input type="text" name="usuario" class="form-control" id="exampleInputEmail1" placeholder="Insira seu Usuario">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Insira sua senha">
        </div>
        <button type="submit" class="btn btn-dark">Entrar</button>
        <button type="reset" class="btn btn-dark">Limpar</button>
        <p>Ainda não é inscrito? <a href="/verificar-form">Cadastre-se!</a>
    </div>
</form>