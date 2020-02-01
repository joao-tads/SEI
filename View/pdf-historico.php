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

setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');
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
  <div class="form-group">
    <img src="../public/Design/img/logo.png" alt="logo" width="10%" height="10%" style="float: left;">
    <div align="center">
      <strong>ESCOLA MUNICIPAL PROFESSOR FULANDO SOUZA DA SILVA
        <br>
        Rua Lugar Nenhum, Nº 0. BAIRRO: CENTRO CEP: 59215-000
        <br>
      </strong>
      <br>
      <br>
      <h3>Histórico Escolar</h3>
    </div>
  </div>
  <br>
  <br>
  <table class="table">
    <tr>
      <th scope="col">Matrícula: </th>
      <td><?= $usuario->id ?></td>
      <th scope="col">Nome: </th>
      <td><?= $usuario->nome ?></td>
      <th scope="col">Gerado: </th>
      <td>
        <?php
        date_default_timezone_set('America/Recife');
        echo date('d/m/Y \à\s H:i:s');
        ?>
      </td>
    </tr>
    <?php
    foreach ($anos as $b) {
    ?>
  </table>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Ano: </th>
        <td><?= $b->ano ?></td>
        <th scope="col">Turma: </th>
        <td><?= $turma->nome ?></td>
      </tr>
      <tr>
        <th scope="col">Ano/Série: </th>
        <td><?= $turma->anoSerie ?></td>
        <th scope="col">Turno: </th>
        <td><?= $turma->turno ?></td>
      </tr>
    </thead>
  </table>
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Disciplinas<b style="color: white">_____________________</b> </th>
      <th></th>
      <th scope="col">Média</th>
      <th scope="col">Frequência</th>
      <th scope="col">Status</th>
    </tr>
    </thead>
    <tbody>
      <?php foreach ($boletim as $r) {
        if ($r->ano == $b->ano) {
          $media = media($r->pb, $r->sb, $r->tb, $r->qb);
      ?>
          <tr>
            <td scope="col"><?= $r->nome ?></td>
            <td></td>
            <td><?= $media ?></td>
            <td><?= porcent($media) ?>%</td>
            <?php
            if ($media <= 3) {
              echo "<td class='table-danger'>Reprovado</td>";
            } else if ($media < 6) {
              echo "<td class='table-warning'>Recuperação</td>";
            } else if ($media <= 10) {
              echo "<td class='table-success'>Aprovado</td>";
            }
            ?>
          </tr>
      <?php
        }
      }
      ?>
    </tbody>
  <?php
    }
  ?>
  </table>
  <br>
  <br>
</body>
<div align="center">
  <img src="../public/Design/img/ass.jpg" alt="Assinatura" width="20%" height="30%">
  <br>
  <b>João Guedes</b>
  <br>
  <b>Diretor</b>
  <br>
  <br>
  Nova Cruz /RN, <br>
  <?php echo strftime('%d de %B de %Y', strtotime('today')) ?>
</div>