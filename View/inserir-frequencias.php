<div style="margin-top: 10%;">
  <div class="container">
    <h3>Frequencias</h3>
    <table class="table table-striped table-condensed">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Aluno</th>
          <th scope="col">Status</th>
        </tr>
      </thead>
      <tbody>
        <form action="/update-frequencia?id=<?= $_GET['id'] ?>" name="Update-notas" method="post">
          <br>
          <input class="form-control" type="datetime-local" name="datahora" required>
          <?php
          foreach ($alunos as $a) {
          ?>
            <tr>
              <td scope="col"><?= $a->id ?></td>
              <td scope="col"><?= $a->nome ?></td>
              <td scope="col">
                <select class="form-control" name="status-<?= $a->id ?>" >
                  <option>Presente</option>
                  <option>Ausente</option>
                </select>
              </td>
            </tr>
            <input type="hidden" name="idTurma-<?= $a->id ?>" value="<?= $a->idTurma ?>">
            <input type="hidden" name="idAluno-<?= $a->id ?>" value="<?= $a->idAluno ?>">
          <?php } ?>
          <button type="submit" class="btn btn-primary border-0 btn-lg" style="background-color: #33a583">Salvar</button>
        </form>
      </tbody>
    </table>
  </div>
</div>