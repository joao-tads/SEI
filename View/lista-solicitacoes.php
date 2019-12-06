<body style="margin-top: 5%;">

    <h3>Solicitações</h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tipo</th>
                <th scope="col">Descrição</th>
                <th scope="col">Solicitante</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($solicitacao as $soli) { ?>
                <tr>
                    <th scope="row"><?= $soli->id ?></th>
                    <td><?= $soli->tipo ?></td>
                    <td><?= $soli->descricao ?></td>
                    <?php foreach ($alunos as $a) { 
                        if($a->id == $soli->idAluno) { ?>
                        <td><?= $a->nome ?></td>
                    <td>
                        <?php } } ?>
                        <div class="btn-group">
                            <i title="Abrir" http-url="\abrir-solicitacao?id=<?= $soli->id ?>" class="btn btn-primary"><span class="	glyphicon glyphicon-eye-open"></span></i>
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
                            <input type="text" class="form-control" placeholder="Nome da disciplina " name="nome">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="sel1">Professor:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="sel1" name="professor">
                                <?php foreach ($funcionario as $func) {
                                    if($func->cargo == 'Professor(a)') {
                                    echo "<option value='$func->id'>$func->nome</option>";
                                    }
                                } ?>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary">Cadastrar</button>
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