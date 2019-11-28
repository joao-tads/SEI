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
                                    <i title="Visualizar" http-url="\adicionar-carrinho?id=<?= $user->id ?>" class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span></i>
                                    <i title="Enviar e-mail" http-url="\adicionar-carrinho?id=<?= $user->id ?>" class="btn btn-primary"><span class="glyphicon glyphicon-envelope"></span></i> 
                                    <i title="Remover" http-url="\adicionar-carrinho?id=<?= $user->id ?>" class="btn btn-primary"><span class="	glyphicon glyphicon-remove"></span></i>
                                    <i title="Atualizar" http-url="\adicionar-carrinho?id=<?= $user->id ?>" class="btn btn-primary"><span class="	glyphicon glyphicon-pencil"></span></i>
                                </div>
                                </td>
                            </tr>
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
                            <i http-url="\adicionar-carrinho?id=<?= $user->id ?>"><span class="glyphicon glyphicon-eye-open"></span></i>
                            <a href="\apagar-produto?id=<?= $user->id ?>"><span class="glyphicon glyphicon-envelope"></span></a>
                            <a href="\editar-produto-form?id=<?= $user->id ?>" class="fas fa-edit text-dark text-decoration-none mr-2"></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
        </div>
    </div>
</body>