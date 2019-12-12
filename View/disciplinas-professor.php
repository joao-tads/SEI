<body>

    <h3>Disciplinas</h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Disciplina</th>
                <th scope="col">Funções</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($disciplina as $dis) { 
                if($dis->idProfessor == $usuario->id) {
                ?>
                <tr>
                    <th scope="row"><?= $dis->id ?></th>
                    <td><?= $dis->nome ?></td>
                    <td>
                        <div class="btn-group">
                            <i title="Remover" http-url="#" class="btn btn-primary"><span class="	glyphicon glyphicon-remove"></span></i>
                            <a title="Vincular alunos" href="/vincular-aluno?id=<?= $dis->id ?>" class="btn btn-primary"><span class="	glyphicon glyphicon-pencil"></span></a>
                        </div>
                    </td>
                </tr>
            <?php } } ?>
        </tbody>
    </table>
</body>