<link rel="stylesheet" href="/Design/css/botoes.css">

<body>
    <div style="margin-top: 8%;">
        <h3>Disciplinas</h3><p>
        <button class="btn btn-info btn-md border-0 btn-block btn-lg" data-toggle="modal" data-target="#myModal3" style="background-color: #33a583"><i class="fas fa-plus-circle"></i> Cadastrar Disciplina</span></button><p>
        <table class="table table-condensed table-hover table-sm">
            <thead class="text-center">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Disciplina</th>
                    <th scope="col">Funções</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($disciplina as $dis) {  ?>
                    <tr class="text-center">
                        <th scope="row"><?= $dis->id ?></th>
                        <td><?= $dis->nome ?></td>
                        <td>
                            <div class="btn-group">
                                <i title="Atualizar" data-toggle="modal" data-target="#myModaDisciplina<?= $dis->id ?>" class="btn btn-primary border-0" style="background-color: #33a583"><i class="fas fa-sync-alt"></i></i>
                                </div>
                                <a title="Remover" href="/deletar-disciplina?id=<?= $dis->id ?>" class="btn btn-primary border-0" style="background-color: #db2938"><i class="fas fa-trash-alt"></i></a>
                           
                        </td>
                    </tr>
                    <div id="myModaDisciplina<?= $dis->id ?>" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header" style="background-color: #33a583">
                                    <h4 class="modal-title"style="color: #fff">Atualizar disciplina</h4>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal" action="/cadastrar-disciplina" method="post">
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="nome">Nome</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" placeholder="Nome da disciplina " name="nome" value="<?= $dis->nome ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="sel1">Professor</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" id="sel1" name="professor">
                                                    <?php foreach ($funcionario as $func) {
                                                        if ($func->cargo == 'Professor(a)') {
                                                            echo "<option value='$func->id'>$func->nome</option>";
                                                        }
                                                    } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <div class="form-group">
                                                <input type="submit" name="submit" class="btn btn-info btn-md border-0" style="background-color: #33a583" value="Atualizar">
                                                <input type="reset" name="reset" class="btn btn-info btn-md border-0" style="background-color: #323a47" value="Limpar">
                                                <b class="btn btn-info btn-md border-0" style="background-color: #323a47" data-dismiss="modal">Cancelar</b>
                                            </div>
                                        </div>
                                        <input type="hidden" name="id" value="<?= $dis->id ?>">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

<div id="myModal3" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header"style="background-color: #33a583">
                <h4 class="modal-title"style="color: #fff">Cadastrar nova disciplina</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="/cadastrar-disciplina" method="post">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="nome">Nome:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Nome da disciplina " name="nome" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="sel1">Professor:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="sel1" name="professor">
                                <?php foreach ($funcionario as $func) {
                                    if ($func->cargo == 'Professor(a)') {
                                        echo "<option value='$func->id'>$func->nome</option>";
                                    }
                                } ?>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-info btn-md border-0" style="background-color: #33a583" value="Cadastrar">
                            <input type="reset" name="reset" class="btn btn-info btn-md border-0" style="background-color: #323a47" value="Limpar">
                            <b class="btn btn-info btn-md border-0" style="background-color: #323a47" data-dismiss="modal">Cancelar</b>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>