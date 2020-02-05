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
<img src="../public/Design/img/logo.png" alt="logo" width="10%" height="10%" style="float: left">
  <h2 class="text-center text-uppercase"><b>Boletim Escolar</b></h2>
  <br>
  <br>
  <br>
  <table class="table">
    <tr>
      <th scope="col">Matrícula: </th>
      <td><?= $aluno->id ?></td>
      <th scope="col">Nome: </th>
      <td><?= $aluno->nome ?></td>
      <th scope="col">Gerado: </th>
      <td>
        <?php
        date_default_timezone_set('America/Recife');
        echo date('d/m/Y \à\s H:i:s');
        ?>
      </td>
    </tr>
    <tr>
      <th scope="col">Turma: </th>
      <td><?= $turma->nome ?></td>

      <th scope="col">Ano/Série: </th>
      <td><?= $turma->anoSerie ?></td>

      <th scope="col">Turno: </th>
      <td><?= $turma->turno ?></td>
    </tr>
  </table>
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
        if ($r->ano == date('Y')) {
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
  <div style="text-align: center;">
    <br>
    <br>
    <p>______________________________________________</p>
    <p>Resposável</p>
  </div>
</body>