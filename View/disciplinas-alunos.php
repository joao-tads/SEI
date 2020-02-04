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
<link rel="stylesheet" href="/Design/css/botoes.css">
<div style="margin-top: 6%;">
<body>
<h3 class="text-dark">Vincular Alunos</h3>
    <button class="btn btn-info btn-md border-0 btn-block btn-lg" data-toggle="modal" data-target="#myModal3"style="background-color: #33a583"><i class="fas fa-plus-circle"></i> Vincular Alunos</button><p>
    <table class="table table-condensed border text-dark">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <td><?= $d->id ?></td>
                <th scope="col">Disciplina</th>
                <td><?= $d->nome ?></td>
                <th scope="col">Professor</th>
                <td><?= $f->nome ?></td>
            </tr>
        </thead>
    </table>
    <tbody>
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action list-group-item-dark text-dark font-weight-bold">Alunos</a>
            <?php 

            $auxi;
            
            foreach ($aluno as $x) {
                    foreach ($da as $y) {
                        if ($x->id == $y->idAluno && $d->id == $y->idDisciplina) {
                            $auxi = $x;
                        }
                    }
                    if (!empty($auxi)) {
                        echo "<a href='#' class='list-group-item list-group-item-action text-dark'>$auxi->nome</a>";
                    }
            }
            ?>
        </div>
    </tbody>
    <div id="myModal3" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #33a583">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="color: #fff">Vincular aluno à Disciplina</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" action="/disciplina-alunos" method="post">
                        <p>Adicionar Alunos </p>
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
                                <input type="submit" name="submit" class="btn btn-info btn-md"style="background-color: #33a583" value="Solicitar">
                                <input type="reset" name="reset" class="btn btn-info btn-md" style="background-color: #323a47"value="Limpar">
                                <b class="btn btn-info btn-md"style="background-color: #323a47" data-dismiss="modal">Cancelar</b>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</body>