<?php
namespace Ifnc\Tads\Controller;

  function media($a, $b, $c, $d) {
    return ($a+$b+$c+$d)/4;
  }
  function porcent($media) {
    return ($media*100)/10;
  }
  /* Incluir dados do perfil do aluno no boletim */
?>
<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!-- meu CSS -->
    <link rel="stylesheet" href="/Design/css/menuLateral.css">
    <!-- Bootstrap CSS -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>
<div style="margin-top: 10%;">
<div class="container">
<p class="text-center text-uppercase"><b>Boletim Escolar</b></p>
<div class="w-auto p-3">
        <table class="table table-borderless table-condensed table-sm">
            <tr>
              <th>Matrícula</th><td><?= $usuario->id ?></td>
            </tr>
            <tr>
              <th>Nome</th><td><?= $usuario->nome ?></td>   
            </tr>
            <tr>
              <th>Turma</th><!--<td><?= $turma->id ?>--></td>
              <th>Turno</th><!--<td><?= $turma->turno ?>--></td>
              <th>Série</th><td><!--<?= $turma->anoSerie ?>--></td>
            </tr>
        </table>
<div class="container">
      <table class="table table-bordered  table-sm">
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
</div>
</div>
</body>