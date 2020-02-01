<link rel="stylesheet" href="/Design/css/botoes.css">
<body>
<div style="margin-top: 10%;">
    <h3>Disciplinas</h3><br>
    <table class="table table-condensed table-hover table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Disciplina</th>
                <th scope="col">Ações</th>
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
                            <a title="Vincular alunos" href="/vincular-aluno?id=<?= $dis->id ?>" class="btn btn-primary border-0" 
                            style="background-color: #33a583"><span class="fas fa-check"></span></a>
                        </div>
                            <i title="Remover" url="#" class="btn btn-primary border-0" 
                            style="background-color: #db2938"><span class="fas fa-trash-alt"></span></i>
                        </div>
                    </td>
                </tr>
            <?php } } ?>
        </tbody>
    </table>
    </div>
</body>