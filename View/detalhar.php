<div style="margin-top: 5%;">
    <div class="container">
        <h3><?= $user->nome ?></h3>
        <div class="w-auto p-3">
            <table class="table">
                <tbody>
                    <?= if($type == "Aluno") { ?>
                    <tr>
                        <th>Matrícula</th>
                        <td><?= $user->id ?></td>
                    </tr>
                    <tr>
                        <th>Data de Nascimento</th>
                        <td><?= $user->dataNascimento ?></td>
                    </tr>
                    <tr>
                        <th>Nome da Mãe</th>
                        <td><?= $user->nomeMae ?></td>
                    </tr>
                    <tr>
                        <th>Nome do Pai</th>
                        <td><?= $user->nomePai ?></td>
                    </tr>
                    <tr>
                        <th>Registro Geral</th>
                        <td><?= $user->rg ?></td>
                    </tr>
                    <tr>
                        <th>Cadastro de Pessoa Física</th>
                        <td><?= $user->cpf ?></td>
                    </tr>
                    <tr>
                        <th>Naturalidade</th>
                        <td><?= $user->naturalidade ?></td>
                    </tr>
                    <tr>
                        <th>Endereço</th>
                        <td><?= $user->endereco ?></td>
                    </tr>
                    <tr>
                        <th>Telefone</th>
                        <td><?= $user->telefone ?></td>
                    </tr>
                    <tr>
                        <th>Sexo</th>
                        <td><?= $user->sexo ?></td>
                    </tr>
                </tbody>
            </table>
            <form action="/update-aluno">
                <input type="hidden" name="id" value="<?= $user->id ?>">
                <button class="btn btn-primary">Atualizar dados</button>
                <a href="/consultar" class="btn btn-danger">Voltar</a>
            </form>
        </div>
                    <?= } else if($categoria == "Funcionario") { ?>
                        <div class="w-auto p-3">
            <table class="table">
                <tbody>
                    <tr>
                        <th>Matrícula</th>
                        <td><?= $user->id ?></td>
                    </tr>
                    <tr>
                        <th>Nome</th>
                        <td><?= $user->nome ?></td>
                    </tr>
                    <tr>
                        <th>Idade</th>
                        <td><?= $user->idade ?></td>
                    </tr>
                    <tr>
                        <th>CPF</th>
                        <td><?= $user->cpf ?></td>
                    </tr>
                    <tr>
                        <th>E-mail</th>
                        <td><?= $user->email ?></td>
                    </tr>
                    <tr>
                        <th>Telefone</th>
                        <td><?= $user->telefone ?></td>
                    </tr>
                    <tr>
                        <th>Cargo</th>
                        <td><?= $user->cargo ?></td>
                    </tr>
                </tbody>
            </table>
            <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Atualizar dados</button>
            <a href="/consultar" class="btn btn-danger">Voltar</a>
        </div>
                    <?= }; ?>      
    </div>
</div>