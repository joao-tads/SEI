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
<div style="margin-top: 10%;">
  <div class="container">
    <h3>Notas</h3>
    <table class="table table-striped">
      <thead>
        <tr>
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
        <form action="">
          <?php 
          $cont = 0;
          foreach ($alunos as $a) {
            $media = media($a->pb, $a->sb, $a->tb, $a->qb);
          ?>
            <tr>
              <td scope="col"><?= $a->nome ?></td>
              <td  scope="row"><input type="text" name="pb" class="form-control" value="<?= $a->pb ?>"></td>
              <td><input type="text" name="sb" class="form-control" value="<?= $a->sb ?>"></td>
              <td><input type="text" name="tb" class="form-control" value="<?= $a->tb ?>"></td>
              <td><input type="text" name="qb" class="form-control" value="<?= $a->qb ?>"></td>
              <td><input type="text" name="media" class="form-control" value="<?= $media ?>"></td>
              <?php
              if ($media <= 3) {
                echo "<td class='table-danger'>Reprovado</td>";
              } else if ($media < 6) {
                echo "<td class='table-warning'>Recuperação</td>";
              } else if ($media <= 10) {
                echo "<td class='table-success'>Aprovado</td>";
              }
              $cont++;
              ?>
            </tr>
          <?php } ?>
        </form>
      </tbody>
    </table>
    <button type="submit" class="btn btn-primary border-0" style="background-color: #323a47">Salvar</a>
  </div>
</div>