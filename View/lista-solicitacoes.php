<link rel="stylesheet" href="/Design/css/botoes.css">
<body>
<div style="margin-top: 10%;">
    <h3>Solicitações</h3><p>
    <table class="table table-condensed table-hover table-sm">
        <thead>
            <tr class="text-center">
                <th scope="col">#</th>
                <th scope="col">Tipo</th>
                <th scope="col">Descrição</th>
                <th scope="col">Solicitante</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($solicitacao as $soli) { ?>
                <tr class="text-center">
                    <th scope="row"><?= $soli->id ?></th>
                    <td><?= $soli->tipo ?></td>
                    <td><?= $soli->descricao ?></td>
                    <?php foreach ($alunos as $a) {
                            if ($a->id == $soli->idAluno) {
                                $retorno = $a->id;
                                foreach ($turmas as $t) {
                                    if ($t->idAluno == $retorno) {
                                        $retorno2 = $t->id;
                                    }
                                }
                                ?>
                            <td><?= $a->nome ?></td>
                            <td>
                        <?php }
                            } ?>
                        <form action="/disciplina-alunos" method="post">
                        <input type="hidden" name="idAluno" value="<?= $retorno ?>">
                        <input type="hidden" name="idDisciplina" value="<?= $soli->idDisciplina ?>">
                        <input type="hidden" name="idTurma" value="<?= $retorno2 ?>">
                        <input type="hidden" name="id" value="<?= $soli->id ?>">
                            <div class="btn-group">
                                <button class="btn btn-primary border-0" title="Confirmar" style="background-color: #33a583" type="submit"><span class="fas fa-check"></span></button>
                            </div>
                            <div class="btn-group">
                                <button class="btn btn-primary border-0" title="Remover" style="background-color: #db2938" type="submit"><span class="fas fa-trash-alt"></span></button>
                            </div>
                        </form>
                            </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
</body>