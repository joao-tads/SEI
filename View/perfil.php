<link rel="stylesheet" href="/Design/css/botoes.css">
<div style="margin-top: 10%;">
    <div class="container">
        <h2>Perfil</h2>
        <p>Dados pessoais cadastrados:</p>
        <div class="w-auto p-3">
            <table class="table table-bordered table-condensed table-hover table-sm">
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
                        <th>RG</th>
                        <td><?= $usuario->rg ?></td>
                    </tr>
                    <tr>
                        <th>CPF</th>
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
            <input type="submit" name="submit" data-toggle="modal" data-target="#myModal5" class="btn btn-info btn-md border-0 btn-lg" style="background-color: #33a583" value="Atualizar dados">
            <a href="/Pagina-inicial" class="btn btn-info btn-md border-0 btn-lg" style="background-color: #323a47">Voltar</a>
        </div>
    </div>
</div>
<div id="myModal5" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
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
                    <input type="submit" name="submit" class="btn btn-info btn-md border-0"style="background-color: #33a583"  value="Atualizar">
                    <input type="reset" name="reset" class="btn btn-info btn-md border-0" style="background-color: #323a47" value="Limpar">
                    <b class="btn btn-info btn-md border-0" style="background-color: #323a47" data-dismiss="modal">Cancelar</b>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>