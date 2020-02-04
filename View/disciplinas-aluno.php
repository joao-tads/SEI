<?php
namespace Ifnc\Tads\Controller;

  function media($a, $b, $c, $d) {
    return ($a+$b+$c+$d)/4;
  }
  function porcent($media) {
    return ($media*100)/10;
  }
  
?>
<link rel="stylesheet" href="/Design/css/botoes.css">
<body>
<div style="margin-top: 10%;">
    <h2>Disciplinas</h2>
    <h5>Solicite matrícula nas disciplinas</h5>
    <button class="btn btn-info btn-md border-0 btn-block btn-lg" style="background-color: #33a583" data-toggle="modal" 
        data-target="#myModal3"><i class="fas fa-plus-circle"></i> Solicitar</button>
    <table class="table table-bordered table-condensed table-hover table-sm"> <!--colocar botão no centro-->
</div><p>
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Professor</th>
        <th scope="col">Média</th>
        <th scope="col">Frequência</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($boletim as $r) {
        date_default_timezone_set('America/Recife');
        if($r->ano == date('Y')) {
        $media = media($r->pb, $r->sb, $r->tb, $r->qb);
      ?>
        <tr>
          <td scope="col"><?= $r->id ?></td>
          <td><?= $r->nome ?></td>
          <?php foreach ($funcionario as $f) {
              if ($r->idProfessor == $f->id) {
                echo "<td>".$f->nome."</td>";
              }
            }
          ?>
          <td><?= $media ?></td>
          <td><?= porcent($media) ?>%</td>
          <?php
              if ($r->pb == "" || $r->sb == "" || $r->tb == "" || $r->qb == "") {
                echo "<td class='table-info'>Cursando</td>";
              } else {
                if ($media <= 3) {
                  echo "<td class='table-danger'>Reprovado</td>";
                } else if ($media < 6) {
                  echo "<td class='table-warning'>Recuperação</td>";
                } else if ($media <= 10) {
                  echo "<td class='table-success'>Aprovado</td>";
                }
              }
          ?>
        </tr>
      <?php } 
      }
       ?>
    </tbody>
  </table>
    <div id="myModal3" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="background-color: #33a583">
                    <h4 class="modal-title" style="color: #fff">Solicitar Disciplina</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" action="/solicitacao" method="post">
                        <input type="hidden" name="tipo" Value="Vincular Disciplina">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="sel1">Disciplinas</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="sel1" name="idDisciplina" required>
                                <?php 
                                foreach ($disciplina as $d) {
                                    echo "<option value='$d->id'>$d->nome";
                                    foreach($funcionario as $f) {
                                        if ($f->id == $d->idProfessor) {
                                            echo " - $f->nome</option>";
                                        break;
                                        }
                                    }
                                  ?>  
                                  <?php
                                }
                                ?>
                                </select>
                            </div>
                        </div>
                        <input type="hidden" name="idAluno" value="<?= $usuario->id ?>">
                        <div class="modal-footer">
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md border-0" style="background-color: #33a583" value="Solicitar">
                                <input type="reset" name="reset" class="btn btn-info btn-md border-0" style="background-color: #323a47" value="Limpar">
                                <b class="btn btn-info btn-md border-0" style="background-color: #323a47" data-dismiss="modal">Cancelar</b>
                            </div>
                    </form>
                </div>
            </div>
        </div>
</body>