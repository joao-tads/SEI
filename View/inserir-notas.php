<?php

namespace Ifnc\Tads\Controller;

function media($a, $b, $c, $d)
{
  return ($a + $b + $c + $d) / 4;
}
function porcent($media)
{
  return ($media * 100) / 10;
}

?>
<link rel="stylesheet" href="/Design/css/botoes.css">
<div style="margin-top: 8%;">
  <div class="container">
    <h3>Inserir notas</h3><p>
    <table class="table table-striped table-condensed table-sm">
      <thead class="text-center">
        <tr>
          <th scope="col">Matrícula</th>
          <th scope="col">Aluno</th>
          <th scope="col">1º B</th>
          <th scope="col">2º B</th>
          <th scope="col">3º B</th>
          <th scope="col">4º B</th>
          <th scope="col">Média</th>
          <th scope="col">Status</th>
        </tr>
      </thead>
      <tbody>
        <form action="/update-notas?id=<?= $_GET['id'] ?>" name="Update-notas" method="post">
          <?php
          foreach ($alunos as $a) {
            $media = media($a->pb, $a->sb, $a->tb, $a->qb);
          ?>
            <tr>
              <td scope="col"><?= $a->id ?></td>
              <td scope="col"><?= $a->nome ?></td>
              <td scope="row"><input type="text" name="pb-<?= $a->id ?>" class="form-control" value="<?= $a->pb ?>"></td>
              <td><input type="text" name="sb-<?= $a->id ?>" class="form-control" value="<?= $a->sb ?>"></td>
              <td><input type="text" name="tb-<?= $a->id ?>" class="form-control" value="<?= $a->tb ?>"></td>
              <td><input type="text" name="qb-<?= $a->id ?>" class="form-control" value="<?= $a->qb ?>"></td>
              <td scope="col"><?= $media ?></td>
              <?php
              if ($a->pb == "" || $a->sb == "" || $a->tb == "" || $a->qb == "") {
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
            <input type="hidden" name="idTurma-<?= $a->id ?>" value="<?= $a->idTurma ?>">
            <input type="hidden" name="idAluno-<?= $a->id ?>" value="<?= $a->idAluno ?>">
            <input type="hidden" name="idDisciplina-<?= $a->id ?>" value="<?= $a->idDisciplina ?>">
            <input type="hidden" name="id-<?= $a->id ?>" value="<?= $a->id ?>">
          <?php } ?>
          <button type="submit" class="btn btn-primary border-0 btn-lg" style= 
          "position:top; background-color: #33a583">Salvar</button><p>
        </form>
      </tbody>
    </table>
  </div>
</div>