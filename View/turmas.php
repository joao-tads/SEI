<body style="margin-top: 5%;">

    <h3>Turmas</h3>
    <button class="btn btn-info btn-block" data-toggle="modal" data-target="#myModal3"><span class="	glyphicon glyphicon-plus"></span></button>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Turma</th>
                <th scope="col">Turno</th>
                <th scope="col">Ano ou Série</th>
                <th scope="col">Funções</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($turmas as $turma) { ?>
                <tr>
                    <th scope="row"><?= $turma->id ?></th>
                    <td><?= $turma->nome ?></td>
                    <td><?= $turma->turno ?></td>
                    <td><?= $turma->anoSerie ?></td>
                    <td>
                        <div class="btn-group">
                            <i title="Visualizar" http-url="\adicionar-carrinho?id=<?= $user->id ?>" class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span></i>
                            <i title="Remover" http-url="\adicionar-carrinho?id=<?= $user->id ?>" class="btn btn-primary"><span class="	glyphicon glyphicon-remove"></span></i>
                            <i title="Atualizar" http-url="\adicionar-carrinho?id=<?= $user->id ?>" class="btn btn-primary"><span class="	glyphicon glyphicon-pencil"></span></i>
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
            <div class="modal-header">
                <h4 class="modal-title">Cadastrar nova Turma</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="/cadastrar-turma" method="post">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="nome">Nome:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Nome da turma " name="nome">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="min">Quantidade Mínima:</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" placeholder="Quantidade Mínima de Alunos " name="min">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="nome">Quantidade Máxima:</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" placeholder="Quantidade Máxima de Alunos" name="max">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="sel1">Turno:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="sel1" name="turno">
                                <option>Matutino</option>
                                <option>Vespertino</option>
                                <option>Noturno</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="sel2">Ano ou Série:</label>
                        <div class="col-sm-10">
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
                            <input type="submit" name="submit" class="btn btn-info btn-md" value="Cadastrar">
                            <input type="reset" name="reset" class="btn btn-info btn-md" value="Limpar">
                            <b class="btn btn-info btn-md" data-dismiss="modal">Cancelar</b>
                        </div>
                </form>
            </div>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>
</body>