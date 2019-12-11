<div style="margin-top: 5%;">
    <div class="container">
        <h2>Perfil</h2>
        <p>Dados pessoais cadastrados:</p>
        <div class="w-auto p-3">
            <table class="table">
                <tbody>
                    <tr>
                        <th>Matrícula</th>
                        <td><?= $usuario->id ?></td>
                    </tr>
                    <tr>
                        <th>Nome</th>
                        <td><?= $usuario->nome ?></td>
                    </tr>
                    <tr>
                        <th>Data de Nascimento</th>
                        <td><?= $usuario->dataNascimento ?></td>
                    </tr>
                    <tr>
                        <th>Nome da Mãe</th>
                        <td><?= $usuario->nomeMae ?></td>
                    </tr>
                    <tr>
                        <th>Nome do Pai</th>
                        <td><?= $usuario->nomePai ?></td>
                    </tr>
                    <tr>
                        <th>Registro Geral</th>
                        <td><?= $usuario->rg ?></td>
                    </tr>
                    <tr>
                        <th>Cadastro de Pessoa Física</th>
                        <td><?= $usuario->cpf ?></td>
                    </tr>
                    <tr>
                        <th>Naturalidade</th>
                        <td><?= $usuario->naturalidade ?></td>
                    </tr>
                    <tr>
                        <th>Endereço</th>
                        <td><?= $usuario->endereco ?></td>
                    </tr>
                    <tr>
                        <th>Telefone</th>
                        <td><?= $usuario->telefone ?></td>
                    </tr>
                    <tr>
                        <th>Sexo</th>
                        <td><?= $usuario->sexo ?></td>
                    </tr>
                </tbody>
            </table>
            <a class="btn btn-primary" data-toggle="modal" data-target="#myModal5">Atualizar dados</a>
            <a href="/Pagina-inicial" class="btn btn-danger">Voltar</a>
        </div>
    </div>
</div>
<div id="myModal5" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close " data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Atualize os Dados</h4>
            </div>
            <div class="modal-body">
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
                            <input type="text" class="form-control" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" value="<?= $usuario->cpf ?>" name="cpf" onkeypress="$(this).mask('000.000.000-00');">
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
                            <input type="tel" class="form-control" onkeypress="Mascara(this);" maxlength="15" value="<?= $usuario->telefone ?>" name="telefone">
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
                    <input type="hidden" name="id" value="<?= $usuario->id ?>">
                    <input type="hidden" name="senha" value="<?= $usuario->senha ?>">
            </div>
            <div class="modal-footer">
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success">Atualizar</button>
                        <button type="reset" class="btn btn-warning">Limpar</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>