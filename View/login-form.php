<form action="/login" method="post">
    <div class=>
        <div class="form-group">
            <label for="exampleInputEmail1">CPF</label>
            <input type="text" name="cpf" class="form-control" id="exampleInputEmail1" placeholder="Insira seu CPF">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Insira sua senha">
        </div>
        <button type="submit" class="btn btn-dark">Entrar</button>
        <button type="reset" class="btn btn-dark">Limpar</button>
        <p>Esqueceu a Senhar? <a href="/recuperar-senha">Recupere a senha!</a>
    </div>
</form>