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
                        <th>Idade</th>
                        <td><?= $usuario->idade ?></td>
                    </tr>
                    <tr>
                        <th>CPF</th>
                        <td><?= $usuario->cpf ?></td>
                    </tr>
                    <tr>
                        <th>E-mail</th>
                        <td><?= $usuario->email ?></td>
                    </tr>
                    <tr>
                        <th>Telefone</th>
                        <td><?= $usuario->telefone ?></td>
                    </tr>
                    <tr>
                        <th>Cargo</th>
                        <td><?= $usuario->cargo ?></td>
                    </tr>
                </tbody>
            </table>
            <input type="submit" name="submit" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal20" value="Atualizar dados">
            <a href="/Pagina-inicial" class="btn btn-info btn-md">Voltar</a>
        </div>
    </div>
</div>
<div id="myModal20" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Atualize os Dados</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="/cadastrar" method="post">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="nome">Nome:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Nome completo... " name="nome" value="<?= $usuario->nome ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="idade">Idade:</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" placeholder="idade... " name="idade" value="<?= $usuario->idade ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" for="cpd">CPF:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Cadastro de Pessoa Física... " name="cpf" value="<?= $usuario->cpf ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Email:</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" placeholder="Endereço de e-mail... " name="email" value="<?= $usuario->email ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" onkeypress="Mascara(this);" maxlength="15" for="telefone">Telefone:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Número de contato ..." name="telefone" value="<?= $usuario->telefone ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="sel1">Cargo:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="sel1" name="cargo" value="<?= $usuario->cargo ?>">
                                <option>Professor(a)</option>
                                <option>Secretario(a)</option>
                                <option>Coordenador(a)</option>
                                <option>Diretor(a)</option>
                            </select>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-info btn-md" value="Atualizar">
                    <input type="reset" name="reset" class="btn btn-info btn-md" value="Limpar">
                    <b class="btn btn-info btn-md" data-dismiss="modal">Cancelar</b>
                </div>
                </form>
            </div>
        </div>

    </div>
</div>