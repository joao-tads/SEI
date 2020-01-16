<?php
namespace Ifnc\Tads\Controller;

  function media($a, $b, $c, $d) {
    return ($a+$b+$c+$d)/4;
  }
  function porcent($media) {
    return ($media*100)/10;
  }
  
?>
<div style="margin-top: 10%;">
<div class="container">
  <h3>Boletim</h3>
    <table class="table table-bordered table-condensed table-hover table-sm">
      <thead>
        <tr>
          <th>Disciplinas</th>
          <th>1º B</th>
          <th>2º B</th>
          <th>3º B</th>
          <th>4º B</th>
          <th>Média</th>
          <th>Frequência</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($boletim as $r) { $media = media($r->pb,$r->sb,$r->tb,$r->qb); 
        if ($media <= 3) {
          echo "<tr class='table-danger'>";
          $status = "Reprovado";
        }  else if($media < 6) {
          echo "<tr class='table-warning'>";
          $status = "Recuperação";
        } else if ($media <= 10) {
          echo "<tr class='table-success'>";
          $status = "Aprovado";
        }
      ?>
          <td><?= $r->nome ?></td>
          <td><?= $r->pb ?></td>
          <td><?= $r->sb ?></td>
          <td><?= $r->tb ?></td>
          <td><?= $r->qb ?></td>
          <td><?= $media ?></td>
          <td><?= porcent($media) ?>%</td>
          <td><?= $status ?></td>
        </tr>
      <?php } ?>
      </tbody>
    </table>
    <a href="/imprimir-boletim" target="_blanck" class="btn btn-primary border-0" style="background-color: #323a47">Imprimir</a>
</div>
</div>