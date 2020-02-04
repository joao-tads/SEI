<link rel="stylesheet" href="/Design/css/botoes.css">
<body>
    <div style="margin-top: 10%;">
        <h3>Frequência/Turmas</h3>
        <table class="table table-condensed table-hover table-sm">
    </div><br>
    <thead class="thead text-center">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Turma</th>
            <th scope="col">Turno</th>
            <th scope="col">Ano ou Série</th>
            <th scope="col">Ação</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($turmas as $turma) { ?>
            <tr class="text-center">
                <th scope="row"><?= $turma->id ?></th>
                <td><?= $turma->nome ?></td>
                <td><?= $turma->turno ?></td>
                <td><?= $turma->anoSerie ?></td>
                <td>
                    <a href="/inserir-frequencia?id=<?= $turma->id ?>">
                        <i title="Entrar" class="btn btn-primary border-0" style="background-color: #33a583"><i class="fas fa-sign-in-alt"></i></i>
                    </a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
    </table>
</body>