<body style="margin-top: 5%;">
    <ul class="nav nav-tabs justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" href="#">Funcionarios</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Alunos</a>
        </li>
    </ul>
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
                            <i http-url="\adicionar-carrinho?id=<?= $user->id ?>" class="http-get fas fa-shopping-cart text-dark mr-2"></i>
                            <a href="\apagar-produto?id=<?= $user->id ?>" class="fas fa-eraser text-dark text-decoration-none mr-2"></a>
                            <a href="\editar-produto-form?id=<?= $user->id ?>" class="fas fa-edit text-dark text-decoration-none mr-2"></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>