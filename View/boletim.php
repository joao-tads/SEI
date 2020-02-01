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
<div style="margin-top: 10%;">
<div class="container">
  <h3>Boletim</h3>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Disciplinas</th>
        <th scope="col">1º B</th>
        <th scope="col">2º B</th>
        <th scope="col">3º B</th>
        <th scope="col">4º B</th>
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
          <td scope="col"><?= $r->nome ?></td>
          <td><?= $r->pb ?></td>
          <td><?= $r->sb ?></td>
          <td><?= $r->tb ?></td>
          <td><?= $r->qb ?></td>
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
    <a href="/imprimir-boletim" target="_blanck" class="btn btn-primary border-0 btn-lg" style="background-color: #33a583"><i class="fas fa-print"></i> Imprimir</a>
</div>
</div>