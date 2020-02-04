<link rel="stylesheet" href="/Design/css/botoes.css">
<div style="margin-top: 10%;">
    <div class="container">
        <h2>Perfil</h2>
        <p>Dados pessoais cadastrados</p>
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
                        <th>Idade</th>
                        <td><?= $usuario->dataNascimento ?></td>
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
            <input type="submit" name="submit" class="btn btn-info btn-md border-0 btn-lg" style="background-color: #33a583" value="Atualizar dados" data-toggle="modal" data-target="#myModal20" value="Atualizar dados">
            <a href="/Pagina-inicial" class="btn btn-info btn-md border-0 btn-lg" style="background-color: #323a47" value="Atualizar dados">Voltar</a>
        </div>
    </div>
</div>
<div id="myModal20" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="background-color: #33a583">
                <h4 class="modal-title" style="color: #fff">Atualize os Dados</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="/update-perfilf" method="post">
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <label class="control-label" for="nome">Nome</label>
                            <input type="text" class="form-control" placeholder="Nome completo... " name="nome" value="<?= $usuario->nome ?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-5">
                            <label class="control-label" for="idade">Data de Nascimento</label>
                            <input type="date" class="form-control" placeholder="idade... " name="dataNascimento" value="<?= $usuario->dataNascimento ?>" required>
                        </div>
                        <div class="col-sm-7">
                            <label class="control-label" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" for="cpd">CPF</label>
                            <input type="text" class="form-control" placeholder="Cadastro de Pessoa Física... " name="cpf" value="<?= $usuario->cpf ?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-7">
                            <label class="control-label" for="email">Email</label>
                            <input type="email" class="form-control" placeholder="Endereço de e-mail... " name="email" value="<?= $usuario->email ?>" required>
                        </div>
                        <div class="col-sm-5">
                            <label class="control-label col-sm-2" onkeypress="Mascara(this);" maxlength="15" for="telefone">Telefone</label>
                            <input type="text" class="form-control" placeholder="Número de contato ..." name="telefone" value="<?= $usuario->telefone ?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <label class="control-label" for="sel1">Cargo</label>
                            <select class="form-control" id="sel1" name="cargo" value="<?= $usuario->cargo ?>">
                                <option>Professor(a)</option>
                                <option>Secretario(a)</option>
                                <option>Coordenador(a)</option>
                                <option>Diretor(a)</option>
                            </select>
                        </div>
                    </div>
                    <input type="hidden" name="id" value="<?= $usuario->id ?>">
            </div>
            <div class="modal-footer">
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-info btn-md border-0" style="background-color: #33a583" value="Atualizar">
                    <input type="reset" name="reset" class="btn btn-info btn-md border-0" style="background-color: #323a47" value="Limpar">
                    <b class="btn btn-info btn-md border-0" style="background-color: #323a47" data-dismiss="modal">Cancelar</b>
                </div>
                </form>
            </div>
        </div>

    </div>
</div>