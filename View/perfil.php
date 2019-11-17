<div style="margin-top: 5%;">
    <div class="container">
        <h2>Perfil</h2>
        <p>Dados pessoais cadastrados:</p>
        <div class="w-auto p-3">
            <table class="table">
                <tbody>
                    <tr>
                        <th>Matrícula</th>
                        <td><?= $usuario->id ?></td>
                    </tr>
                    <tr>
                        <th>Nome</th>
                        <td><?= $usuario->nome ?></td>
                    </tr>
                    <tr>
                        <th>Data de Nascimento</th>
                        <td><?= $usuario->dataNascimento ?></td>
                    </tr>
                    <tr>
                        <th>Nome da Mãe</th>
                        <td><?= $usuario->nomeMae ?></td>
                    </tr>
                    <tr>
                        <th>Nome do Pai</th>
                        <td><?= $usuario->nomePai ?></td>
                    </tr>
                    <tr>
                        <th>Registro Geral</th>
                        <td><?= $usuario->rg ?></td>
                    </tr>
                    <tr>
                        <th>Cadastro de Pessoa Física</th>
                        <td><?= $usuario->cpf ?></td>
                    </tr>
                    <tr>
                        <th>Naturalidade</th>
                        <td><?= $usuario->naturalidade ?></td>
                    </tr>
                    <tr>
                        <th>Endereço</th>
                        <td><?= $usuario->endereco ?></td>
                    </tr>
                    <tr>
                        <th>Telefone</th>
                        <td><?= $usuario->telefone ?></td>
                    </tr>
                    <tr>
                        <th>Sexo</th>
                        <td><?= $usuario->sexo ?></td>
                    </tr>
                </tbody>
            </table>
            <form action="/update-aluno">
                <button class="btn btn-primary">Atualizar dados</button>
                <a href="/Pagina-inicial" class="btn btn-danger">Voltar</a>
            </form>
        </div>
    </div>
</div>