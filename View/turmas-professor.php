<body>
<div style="margin-top: 10%;">
    <h3>Turmas</h3>
    <button class="btn btn-info btn-md border-0 position-absolute" style="background-color: #323a47" data-toggle="modal" data-target="#myModal3">Solicitar Vínculo</span></button>
    <table class="table">
    </div>
    <br>
    </br>
        <thead class="thead-">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Turma</th>
                <th scope="col">Turno</th>
                <th scope="col">Ano ou Série</th>
                <th scope="col">Funções</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($turmas as $turma) { ?>
                <a href="">
                <tr>
                    <th scope="row"><?= $turma->id ?></th>
                    <td><?= $turma->nome ?></td>
                    <td><?= $turma->turno ?></td>
                    <td><?= $turma->anoSerie ?></td>
                </tr>
                </a>
            <?php } ?>
        </tbody>
    </table>
    <div id="myModal3" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Cadastrar nova Turma</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="/cadastrar-turma" method="post">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="nome">Nome:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Nome da turma " name="nome">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="min">Quantidade Mínima:</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" placeholder="Quantidade Mínima de Alunos " name="min">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="nome">Quantidade Máxima:</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" placeholder="Quantidade Máxima de Alunos" name="max">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="sel1">Turno:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="sel1" name="turno">
                                <option>Matutino</option>
                                <option>Vespertino</option>
                                <option>Noturno</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="sel2">Ano ou Série:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="sel2" name="anoSerie">
                                <option>6º Ano</option>
                                <option>7º Ano</option>
                                <option>8º Ano</option>
                                <option>9º Ano</option>
                                <option>1ª Série</option>
                                <option>2ª Série</option>
                                <option>3ª Série</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-info btn-md border-0" style="background-color: #323a47"value="Cadastrar">
                            <input type="reset" name="reset" class="btn btn-info btn-md border-0" style="background-color: #323a47" value="Limpar">
                            <b class="btn btn-info btn-md border-0" style="background-color: #323a47" data-dismiss="modal">Cancelar</b>
                        </div>
                </form>
            </div>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>
</body>