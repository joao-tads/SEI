<body>
    <div style="margin-top: 10%;">
        <h2><?= $_POST['anoSerie']." (".$_POST['nome'].") ".$_POST['turno'] ?></h2>
        <button class="btn btn-info btn-md border-0 btn-block btn-lg" data-toggle="modal" data-target="#myModal3" style="background-color: #33a583"><i class="fas fa-plus-circle"></i>Vincular Aluno</span></button>
        <table class="table table-condensed table-hover">
    </div><br>
    <thead class="thead-">
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Sexo</th>
            <th scope="col">Data de Nascimento</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($alunos as $aluno) { ?>
            <tr>
                <th scope="row"><?= $aluno->nome ?></th>
                <td><?= $aluno->sexo ?></td>
                <td><?= $aluno->dataNascimento ?></td>
                <td>
                    <div class="btn-group">
                        <form action="/vizualizar-turma" method="POST">
                            <input type="hidden" name="nome" value="<?= $turma->nome ?>">
                            <input type="hidden" name="turno" value="<?= $turma->turno ?>">
                            <button type="submit" title="Visualizar" class="btn btn-primary border-0" style="background-color: #25b0c6"><i class="far fa-eye"></i></button>
                        </form>
                    </div>
                    <i title="Atualizar" data-toggle="modal" data-target="#myModalA2<?= $user->id ?>" class="btn btn-primary border-0" style="background-color: #33a583"><i class="fas fa-sync-alt"></i></i>
                    <i title="Remover" http-url="\adicionar-carrinho?id=<?= $user->id ?>" class="btn btn-primary border-0" style="background-color: #db2938"><i class="fas fa-trash-alt"></i></i>
                    </div>
                    <!--<i title="Visualizar" class="fas fa-eye" http-url="\visualizar-turma?id=<?= $user->id ?>" class="btn btn-primary"></i>
                            <i title="Atualizar" class="fas fa-edit" http-url="\editar-turma?id=<?= $user->id ?>" class="btn btn-primary"></i>
                            <i title="Deletar" class="fas fa-trash-alt" http-url="\deletar-turma?id=<?= $user->id ?>" class="btn btn-primary"></i>-->
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