<?php
$d;
$f;
foreach ($disciplina as $dis) {
    if ($dis->id == $_GET['id']) {
        $d = $dis;
    }
}
foreach ($funcionario as $func) {
    if ($func->id == $d->id) {
        $f = $func;
    }
}
?>

<body>
    <button class="btn btn-info btn-block" data-toggle="modal" data-target="#myModal3">Vincular Alunos</button>
    <table class="table" style="border: solid 1px black;">
        <thead>
            <tr>
                <th scope="col">#</th>
                <td style="border: solid 1px black;"><?= $d->id ?></td>
                <th scope="col">Disciplina:</th>
                <td style="border: solid 1px black;"><?= $d->nome ?></td>
                <th scope="col">Professor:</th>
                <td style="border: solid 1px black;"><?= $f->nome ?></td>
            </tr>
        </thead>
    </table>
    <tbody>
        <div class="list-group">
            <a href="#" class="list-group-item active">Alunos: </a>
            <?php 

            $auxi;
            
            foreach ($aluno as $x) {
                    foreach ($da as $y) {
                        if ($x->id == $y->idAluno && $d->id == $y->idDisciplina) {
                            $auxi = $x;
                        }
                    }
                    if (!empty($auxi)) {
                        echo "<a href='#' class='list-group-item'>$auxi->nome</a>";
                    }
            }
            ?>
        </div>
    </tbody>
    <div id="myModal3" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Vincular aluno à Disciplina</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" action="/disciplina-alunos" method="post">
                        <p>Adicionar Alunos: </p>
                        <div class="form-group">
                            <div class="col-sm-10">
                                <select class="form-control" id="sel1" name="idAluno">
                                    <?php
                                    $aux;
                                    foreach ($aluno as $a) {
                                        echo "<option value='$a->id'>$a->nome</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <input type="hidden" name="idDisciplina" value="<?= $_GET['id'] ?>">
                        <div class="modal-footer">
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Solicitar">
                                <input type="reset" name="reset" class="btn btn-info btn-md" value="Limpar">
                                <b class="btn btn-info btn-md" data-dismiss="modal">Cancelar</b>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</body>