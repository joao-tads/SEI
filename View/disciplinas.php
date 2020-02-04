<link rel="stylesheet" href="/Design/css/botoes.css">
<body>
<div style="margin-top: 8%;">
    <h3>Disciplinas</h3>
    <p></p>
    <button class="btn btn-info btn-md border-0 btn-block btn-lg" data-toggle="modal" data-target="#myModal3" style="background-color: #33a583"><i class="fas fa-plus-circle"></i> Adicionar Disciplina</span></button><br>
    <table class="table table-condensed table-hover table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Professor</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($disciplina as $dis) { ?>
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
                            <a title="Vincular alunos" href="/vincular-aluno?id=<?= $dis->id ?>" class="btn btn-primary border-0" style="background-color: #33a583"><span class="fas fa-check"></span></a>
                        </div>    
                            <i title="Remover" http-url="#" class="btn btn-primary border-0" style="background-color: #db2938"><span class="fas fa-trash-alt"></span></i>
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
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Cadastrar nova Disciplina</h4>
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
                                <input type="submit" name="submit" class="btn btn-info btn-md border-0" style="background-color: #33a583"value="Solicitar">
                                <input type="reset" name="reset" class="btn btn-info btn-md border-0" style="background-color: #323a47"value="Limpar">
                                <b class="btn btn-info btn-md border-0" style="background-color: #323a47" data-dismiss="modal">Cancelar</b>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
   </div>
</body>