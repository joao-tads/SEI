<body>

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
                            if ($a->id == $soli->idAluno) {
                                $retorno = $a->id; ?>
                            <td><?= $a->nome ?></td>
                            <td>
                        <?php }
                            } ?>
                        <form action="/vincular-aluno" method="post">
                        <input type="hidden" name="idAluno" value="<?= $retorno ?>">
                        <input type="hidden" name="idDisciplina" value="<?= $soli->descricao ?>">
                            <div class="btn-group">
                                <button class="btn btn-primary" type="submit"><span class="	glyphicon glyphicon-ok"></span></button>
                            </div>
                            <div class="btn-group">
                                <button class="btn btn-primary" type="submit"><span class="	glyphicon glyphicon-remove"></span></button>
                            </div>
                        </form>
                            </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>