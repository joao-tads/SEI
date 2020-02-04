<link rel="stylesheet" href="/Design/css/botoes.css">
<div style="margin-top: 10%;">
  <div class="container">
    <h3 style="float:left">Frequências</h3>
    <table class="table table-striped table-condensed table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Aluno</th>
          <th scope="col">Data de Nascimento</th>
          <th scope="col">Telefone</th>
        </tr>
      </thead>
      <tbody>
          <?php
           foreach ($alunos as $a) {
          ?>
            <tr>
              <td scope="col"><?= $a->id ?></td>
              <td scope="col"><?= $a->nome ?></td>
              <td scope="col"><?= $a->dataNascimento ?></td>
              <td scope="col"><?= $a->telefone ?></td>
            </tr>
          <?php } ?>
      </tbody>
    </table>
    <a href="/turmas-professor" class="btn btn-primary border-0 btn-lg" style="background-color: #33a583">Voltar</a>
    </div>
</div>