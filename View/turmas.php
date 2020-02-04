<link rel="stylesheet" href="/Design/css/botoes.css">
<body>
    <div style="margin-top: 10%;">
        <h3>Turmas</h3>
        <button class="btn btn-info btn-md border-0 btn-block btn-lg" data-toggle="modal" data-target="#myModal3" style="background-color: #33a583"><i class="fas fa-plus-circle"></i> Cadastrar Turma</span></button>
        <table class="table table-condensed table-hover table-sm">
    </div><br>
    <thead class="thead text-center">
        <tr>
            <th scope="col">Turma</th>
            <th scope="col">Turno</th>
            <th scope="col">Ano ou Série</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($turmas as $turma) { ?>
            <tr class="text-center">
                <th scope="row"><?= $turma->nome ?></th>
                <td><?= $turma->turno ?></td>
                <td><?= $turma->anoSerie ?></td>
                <td>
                    <div class="btn-group">
                        <form action="/vizualizar-turma" method="POST">
                            <input type="hidden" name="nome" value="<?= $turma->nome ?>">
                            <input type="hidden" name="anoSerie" value="<?= $turma->anoSerie ?>">
                            <input type="hidden" name="turno" value="<?= $turma->turno ?>">
                            <button type="submit" title="Visualizar" class="btn btn-primary border-0" style="background-color: #25b0c6"><i class="far fa-eye"></i></button>
                        </form>
                    </div>
                    <i title="Atualizar" data-toggle="modal" data-target="#myModalA2<?= $user->id ?>" class="btn btn-primary border-0" style="background-color: #33a583"><i class="fas fa-sync-alt"></i></i>
                    <i title="Remover" http-url="\adicionar-carrinho?id=<?= $user->id ?>" class="btn btn-primary border-0" style="background-color: #db2938"><i class="fas fa-trash-alt"></i></i>
                    </div>
                    </div>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </tbody>
    </table>
    <div id="myModal3" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="background-color: #33a583">
                    <h4 class="modal-title" style="color: #fff">Cadastrar nova turma</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" action="/cadastrar-turma" method="post">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="nome">Nome</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" placeholder="Nome da turma" name="nome" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-6" for="min">Quantidade Mínima</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" placeholder="Quantidade Mínima de Alunos " name="min" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-6" for="nome">Quantidade Máxima</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" placeholder="Quantidade Máxima de Alunos" name="max" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="sel1">Turno</label>
                            <div class="col-sm-6">
                                <select class="form-control" id="sel1" name="turno" required>
                                    <option>Matutino</option>
                                    <option>Vespertino</option>
                                    <option>Noturno</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-6" for="sel2">Ano ou Série</label>
                            <div class="col-sm-6">
                                <select class="form-control" id="sel2" name="anoSerie">
                                    <option>6º Ano</option>
                                    <option>7º Ano</option>
                                    <option>8º Ano</option>
                                    <option>9º Ano</option>
                                    <option>1ª Série</option>
                                    <option>2ª Série</option>
                                    <option>3ª Série</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md border-0" style="background-color: #33a583" value="Cadastrar">
                                <input type="reset" name="reset" class="btn btn-info btn-md border-0" style="background-color: #323a47" value="Limpar">
                                <b class="btn btn-info btn-md border-0" style="background-color: #323a47" data-dismiss="modal">Cancelar</b>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>