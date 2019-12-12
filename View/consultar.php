<body style="margin-top: 5%;">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#home">Alunos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu1">Funcionarios</a>
        </li>

        <!-- Tab panes -->
        <div class="tab-content">
            <div id="home" class="container tab-pane active"><br>
                <h3>Alunos</h3>
                <a href="/adicionar-produto-form" class="fas fa-plus text-dark text-decoration-none"></a>
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
                                        <i title="Visualizar" data-toggle="modal" data-target="#myModalA<?= $user->id ?>" class="btn btn-primary"><i class="far fa-eye"></i></i>
                                        <i title="Atualizar" http-url="\adicionar-carrinho?id=<?= $user->id ?>" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></i>
                                        <i title="Inativar" http-url="\adicionar-carrinho?id=<?= $user->id ?>" class="btn btn-primary"><i class="fas fa-trash-alt"></i></i>
                                    </div>
                                </td>
                            </tr>
                            <div id="myModalA<?= $user->id ?>" class="modal fade" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
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
                                            <b class="btn btn-info btn-md" data-dismiss="modal">Sair</b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div id="menu1" class="container tab-pane fade"><br>
                <h3>Funcionários</h3>
                <a href="/adicionar-produto-form" class="fas fa-plus text-dark text-decoration-none"></a>
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
                                        <i title="Visualizar" data-toggle="modal" data-target="#myModalF<?= $user->id ?>" class="btn btn-primary"><i class="far fa-eye"></i>
                                            <i title="Atualizar" http-url="\adicionar-carrinho?id=<?= $user->id ?>" class="btn btn-primary"><i class="fas fa-pencil-alt"></i>
                                                <i title="Remover" http-url="\adicionar-carrinho?id=<?= $user->id ?>" class="btn btn-primary"><i class="fas fa-trash-alt"></i></i>
                                    </div>
                                </td>
                            </tr>
                            <div id="myModalF<?= $user->id ?>" class="modal fade" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header>
                                            <h4 class=" modal-title">Dados Pessoais</h4>
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
                                            <b class="btn btn-info btn-md" data-dismiss="modal">Sair</b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
</body>