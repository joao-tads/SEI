<?php
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Recife');
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
      <br>
      <br>
      <br>
      <h3>Declaração de Vínculo</h3>
    </div>
  </div>
  <br>
  <br>
  <br>
  <?php if (is_null($turma)) { ?>
  <P align="justify"><b style="color: white">________</b> Declaramos para os devidos fins que
    <b><?= $usuario->nome ?></b>
    inscrito no <b>CPF: <?= $usuario->cpf ?></b> e
    <b>RG: <?= $usuario->rg ?></b> é aluno da <b>Escola Municipal Professor
      Fulano de Souza da Silva</b> e está matriculado na turma <b><?= $turma->anoSerie ?> "<?= $turma->nome ?>"</b>
    turno <b><?= $turma->turno ?></b> com matrícula: <b><?= $usuario->id ?></b> com carga horária de 25 horas aulas semanais</P>
  <?php } else { ?>
    <P style="text-align: center">Aluno(a) <?= $usuario->nome ?> Ainda não foi finculado a uma turma!</P>
  <?php } ?>
  <br>
  <br>
  <br>
  <br>
  <div style="text-align: right;">Nova Cruz /RN, <?php echo strftime('%d de %B de %Y', strtotime('today')) ?></div> 
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <div align="center">
    <img src="../public/Design/img/ass.jpg" alt="Assinatura" width="20%" height="30%">
    <br>
    <b>João Guedes</b>
    <br>
    <b>Diretor</b>
  </div>
</body>