<body>
<div style="margin-top: 10%;">
    <h2>Disciplinas</h2>
    <h5>Solicite matrícula nas disciplinas</h5>
    <button class="btn btn-info btn-md border-0 position-absolute" style="background-color: #323a47" data-toggle="modal" 
            data-target="#myModal3">Solicitar</button>
    <table class="table table-bordered table-condensed table-hover table-sm"> <!--colocar botão no centro-->
</div>
<br>
</br>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Professor</th>
            </tr>
        </thead>
        
        <tbody>
            <?php
            foreach ($disciplinaAluno as $da) {
                foreach ($disciplina as $dis) {
                    if ($da->idAluno == $usuario->id && $dis->id == $da->idDisciplina) { ?>
                        <tr>
                            <th scope="row"><?= $dis->id ?></th>
                            <td><?= $dis->nome ?></td>
                            <?php foreach ($funcionario as $func) {
                                            if ($func->id == $dis->idProfessor) { ?>
                                    <td><?= $func->nome ?></td>
                                    <td>
                                <?php }
                                            } ?>
                                <div class="btn-group">
                                    <i title="Remover" http-url="\adicionar-carrinho?id=<?= $user->id ?>" class="btn btn-primary"><span class="	glyphicon glyphicon-remove"></span></i>
                                    <i title="Atualizar" http-url="\adicionar-carrinho?id=<?= $user->id ?>" class="btn btn-primary
                                    </td>
                        </tr>
            <?php }
                }
            } ?>
        </tbody>
    </table>
    <div id="myModal3" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
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
                                            if ($dis->idProfessor == $func->id) {
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
                                <input type="submit" name="submit" class="btn btn-info btn-md border-0" style="background-color: #323a47" value="Solicitar">
                                <input type="reset" name="reset" class="btn btn-info btn-md border-0" style="background-color: #323a47" value="Limpar">
                                <b class="btn btn-info btn-md border-0" style="background-color: #323a47" data-dismiss="modal">Cancelar</b>
                            </div>
                    </form>
                </div>
            </div>
        </div>
</body>