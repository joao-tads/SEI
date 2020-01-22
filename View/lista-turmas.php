<body>
    <div style="margin-top: 10%;">
        <h3>Turmas</h3>
        <table class="table">
    </div>
    <br>
    </br>
    <thead class="thead-">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Turma</th>
            <th scope="col">Turno</th>
            <th scope="col">Ano ou Série</th>
            <th scope="col">Funções</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($turmas as $turma) { ?>
            <tr>
                <th scope="row"><?= $turma->id ?></th>
                <td><?= $turma->nome ?></td>
                <td><?= $turma->turno ?></td>
                <td><?= $turma->anoSerie ?></td>
                <td>
                    <a href="/inserir-notas?id=<?= $turma->id ?>">
                        <i title="Visualizar" class="btn btn-primary border-0" style="background-color: #323a47"><i class="far fa-eye"></i></i>
                    </a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
    </table>
</body>