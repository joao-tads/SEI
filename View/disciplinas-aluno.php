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

<body style="margin-top: 5%;">
    <button class="btn btn-info btn-block" data-toggle="modal" data-target="#myModal3">Vincular Alunos</button>
    <table class="table" style="border: solid 1px black;">
        <thead>
            <tr>
                <th scope="col">#</th>
                <td style="border: solid 1px black;"><?= $d->id ?></td>
                <th scope="col">Nome:</th>
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
                        if ($x->id == $y->idAluno) {
                            $auxi = $x;
                        }
                    }
                    echo "<a href='#' class='list-group-item'>$auxi->nome</a>";
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
                            <label class="control-label col-sm-2" for="sel1">Turno:</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="sel1" name="idAluno">
                                    <?php
                                    $aux;
                                    foreach ($aluno as $a) {
                                        foreach ($da as $b) {
                                            if(!($a->id == $b->idAluno && $b->idDisciplina == $d->id)) {
                                                $aux = $a;
                                            }
                                        }
                                        echo "<option value='$aux->id'>$aux->nome</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <input type="hidden" name="idDisciplina" value="<?= $_GET['id'] ?>">
                        <div class="modal-footer">
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary">Vincular</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</body>