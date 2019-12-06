<body style="margin-top: 5%;">

    <h3>Disciplinas</h3>
    <button class="btn btn-info btn-block" data-toggle="modal" data-target="#myModal3">Solicite matrícula nas disciplinas</button>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Professor</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($disciplina as $dis) { 
                if($dis->idAluno == $usuario->id) {?>
                <tr>
                    <th scope="row"><?= $dis->id ?></th>
                    <td><?= $dis->nome ?></td>
                    <?php foreach ($funcionario as $func) { 
                        if($func->id == $dis->idProfessor) { ?>
                        <td><?= $func->nome ?></td>
                    <td>
                        <?php } } ?>
                        <div class="btn-group">
                            <i title="Remover" http-url="\adicionar-carrinho?id=<?= $user->id ?>" class="btn btn-primary"><span class="	glyphicon glyphicon-remove"></span></i>
                            <i title="Atualizar" http-url="\adicionar-carrinho?id=<?= $user->id ?>" class="btn btn-primary"><span class="	glyphicon glyphicon-pencil"></span></i>
                        </div>
                    </td>
                </tr>
            <?php } } ?>
        </tbody>
    </table>
    <div id="myModal3" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Cadastrar nova Disciplina</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="/solicitacao" method="post">
                    <input type="hidden" name="tipo" Value="Vincular Disciplina">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="sel1">Disciplinas:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="sel1" name="descricao">
                                <?php foreach ($disciplina as $dis) {
                                        echo "<option>$dis->nome - ";
                                        foreach ($funcionario as $func) {
                                            if($dis->idProfessor == $func->id) {
                                                echo "$func->nome</option>";
                                            }
                                        }
                                } ?>
                            </select>
                        </div>
                    </div>
                    <input type="hidden" name="idAluno" value="<?= $usuario->id ?>">
                    <div class="modal-footer">
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary">Solicitar</button>
                                <button type="reset" class="btn btn-default">Limpar</button>
                            </div>
                        </div>
                </form>
            </div>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>
</body>