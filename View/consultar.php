<body style="margin-top: 5%;">
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">Alunos</a></li>
        <li><a data-toggle="tab" href="#menu1">Funcionários</a></li>
    </ul>
    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
            <h3>Alunos</h3>
            <div class="my-3 p-3 bg-white rounded shadow-sm">
                <span class="d-block text-center mb-3">
                    <a href="/adicionar-produto-form" class="fas fa-plus text-dark text-decoration-none"></a>
                </span>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Matrícula</th>
                            <th scope="col">Nome</th>
                            <th scope="col">ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($alunos as $user) { ?>
                            <tr>
                                <th scope="row"><?= $user->id ?></th>
                                <td><?= $user->nome ?></td>
                                <td>
                                    <div class="btn-group">
                                        <i title="Visualizar" data-toggle="modal" data-target="#myModalA<?= $user->id ?>" class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span></i>
                                        <i title="Atualizar" http-url="\adicionar-carrinho?id=<?= $user->id ?>" class="btn btn-primary"><span class="	glyphicon glyphicon-pencil"></span></i>
                                        <i title="Inativar" http-url="\adicionar-carrinho?id=<?= $user->id ?>" class="btn btn-primary"><span class="	glyphicon glyphicon-remove"></span></i>
                                    </div>
                                </td>
                            </tr>
                            <div id="myModalA<?= $user->id ?>" class="modal fade" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Dados Pessoais</h4>
                                        </div>
                                        <div class="modal-body">
                                            <Strong>Matrícula:</Strong><br>
                                            <p><?= $user->id ?></p>
                                            <Strong>Nome</Strong><br>
                                            <p><?= $user->nome ?></p>
                                            <Strong>Data de Nascimento</Strong><br>
                                            <p><?= $user->dataNascimento ?></p>
                                            <Strong>Nome da Mãe</Strong><br>
                                            <p><?= $user->nomeMae ?></p>
                                            <Strong>Nome do Pai</Strong><br>
                                            <p><?= $user->nomePai ?></p>
                                            <Strong>RG</Strong><br>
                                            <p><?= $user->rg ?></p>
                                            <Strong>CPF</Strong><br>
                                            <p><?= $user->cpf ?></p>
                                            <Strong>Naturalidade</Strong><br>
                                            <p><?= $user->naturalidade ?></p>
                                            <Strong>Endereço</Strong><br>
                                            <p><?= $user->endereco ?></p>
                                            <Strong>Telefone</Strong><br>
                                            <p><?= $user->telefone ?></p>
                                            <Strong>Sexo</Strong><br>
                                            <p><?= $user->sexo ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div id="menu1" class="tab-pane fade">
            <h3>Funcionários</h3>
            <div class="my-3 p-3 bg-white rounded shadow-sm">
                <span class="d-block text-center mb-3">
                    <a href="/adicionar-produto-form" class="fas fa-plus text-dark text-decoration-none"></a>
                </span>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Matrícula</th>
                            <th scope="col">Nome</th>
                            <th scope="col">ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($funcionarios as $user) { ?>
                            <tr>
                                <th scope="row"><?= $user->id ?></th>
                                <td><?= $user->nome ?></td>
                                <td>
                                    <div class="btn-group">
                                        <i title="Visualizar" data-toggle="modal" data-target="#myModalF<?= $user->id ?>" class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span></i>
                                        <i title="Atualizar" http-url="\adicionar-carrinho?id=<?= $user->id ?>" class="btn btn-primary"><span class="	glyphicon glyphicon-pencil"></span></i>
                                        <i title="Remover" http-url="\adicionar-carrinho?id=<?= $user->id ?>" class="btn btn-primary"><span class="	glyphicon glyphicon-remove"></span></i>
                                    </div>
                                </td>
                            </tr>
                            <div id="myModalF<?= $user->id ?>" class="modal fade" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Dados Pessoais</h4>
                                        </div>
                                        <div class="modal-body">
                                            <Strong>Matrícula:</Strong><br>
                                            <p><?= $user->id ?></p>
                                            <Strong>Nome</Strong><br>
                                            <p><?= $user->nome ?></p>
                                            <Strong>Idade</Strong><br>
                                            <p><?= $user->idade ?></p>
                                            <Strong>CPF</Strong><br>
                                            <p><?= $user->cpf ?></p>
                                            <Strong>E-mail</Strong><br>
                                            <p><?= $user->email ?></p>
                                            <Strong>Telefone</Strong><br>
                                            <p><?= $user->telefone ?></p>
                                            <Strong>Data de Nascimento</Strong><br>
                                            <p><?= $user->dataNascimento ?></p>
                                            <Strong>Cargo</Strong><br>
                                            <p><?= $user->cargo ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>