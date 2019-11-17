<div style="margin-top: 5%;">
    <div class="container">
        <h2>
            <legend>Atualize seus dados</legend>
        </h2>
        <form class="form-horizontal" action="/update-perfil" method="post">
            <div class="form-group">
                <label class="control-label col-sm-4">Nome:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" value="<?= $usuario->nome ?>" name="nome">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4">Data de Nascimento:</label>
                <div class="col-sm-5">
                    <input type="date" class="form-control" value="<?= $usuario->dataNascimento ?>" name="dataNascimento">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4">Nome da Mãe:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" value="<?= $usuario->nomeMae ?>" name="nomeMae">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4">Nome do Pai:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" value="<?= $usuario->nomePai ?>" name="nomePai">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4">RG:</label>
                <div class="col-sm-5">
                    <input id="rg" type="text" class="form-control" value="<?= $usuario->rg ?>" name="rg">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4">CPF:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" value="<?= $usuario->cpf ?>" name="cpf" onkeypress="$(this).mask('000.000.000-00');">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4">Naturalidade:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" value="<?= $usuario->naturalidade ?>" name="naturalidade">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4">Endereço:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" value="<?= $usuario->endereco ?>" name="endereco">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4">Telefone:</label>
                <div class="col-sm-5">
                    <input type="tel" class="form-control" value="<?= $usuario->telefone ?>" name="telefone">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4">Sexo:</label>
                <div class="col-sm-5">
                    <select class="form-control" id="sel2" name="sexo">
                        <option>Masculino</option>
                        <option>Feminino</option>
                        <option>Outros</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4">Usuario:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" value="<?= $usuario->usuario ?>" name="usuario">
                </div>
            </div>
            <input type="hidden" name="id" value="<?= $usuario->id ?>">
            <input type="hidden" name="senha" value="<?= $usuario->senha ?>">
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-4">
                    <button type="submit" class="btn btn-success">Atualizar</button>
                    <a href="/perfil" class="btn btn-danger" role="button">Cancelar</a>
                </div>
            </div>
        </form>
    </div>