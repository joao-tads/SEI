<link rel="stylesheet" href="/Design/css/botoes.css">
<body>
<div style="margin-top: 10%;">
    <h3>Disciplinas</h3><br>
    <table class="table table-condensed table-hover table-sm">
        <thead class="text-center">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Disciplina</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($disciplina as $dis) { 
                if($dis->idProfessor == $usuario->id) {
                ?>
                <tr class="text-center">
                    <th scope="row"><?= $dis->id ?></th>
                    <td><?= $dis->nome ?></td>
                </tr>
            <?php } } ?>
        </tbody>
    </table>
    </div>
</body>