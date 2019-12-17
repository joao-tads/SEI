<div class="container">
  <h3>Boletim</ph3>
    <table class="table">
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
      <?php foreach ($boletim as $result) {
        echo "<tr class='table-success'>
          <td><?= $result->nome ?></td>
          <td><?= $result->pb ?></td>
          <td><?= $result->sb ?></td>
          <td><?= $result->tb ?></td>
          <td><?= $result->qb ?></td>
          <td><?= ($result->pb+$result->sb+$result->tb+$result->qb)\4 ?></td>
          <td>85%</td>
          <td>Aprovado</td>
        </tr>";
      } ?>
      <!--
        <tr class="table-danger">
          <td>Matemática</td>
          <td>5.0</td>
          <td>4.0</td>
          <td>0.5</td>
          <td>1.0</td>
          <td>2.6</td>
          <td>25%</td>
          <td>Reprovado</td>
        </tr>
        <tr class="table-warning">
          <td>Ciências</td>
          <td>5.8</td>
          <td>7.0</td>
          <td>4.5</td>
          <td>6.0</td>
          <td>5.8</td>
          <td>76%</td>
          <td>Recuperação</td>
        </tr>
        <tr class="table-success">
          <td>História</td>
          <td>6.4</td>
          <td>8.0</td>
          <td>9.5</td>
          <td>6.0</td>
          <td>7.4</td>
          <td>88%</td>
          <td>Aprovado</td>
        </tr>
        <tr class="table-warning">
          <td>Geografia</td>
          <td>4.5</td>
          <td>7.0</td>
          <td>3.5</td>
          <td>8.0</td>
          <td>5.7</td>
          <td>75%</td>
          <td>Recuperação</td>
        </tr>
        <tr class="table-success">
          <td>Educação Física</td>
          <td>10.0</td>
          <td>10.0</td>
          <td>10.0</td>
          <td>10.0</td>
          <td>10.0</td>
          <td>100%</td>
          <td>Aprovado</td>
        </tr>
      -->
      </tbody>
    </table>
</div>