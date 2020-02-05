<link rel="stylesheet" href="/Design/css/botoes.css">
<body">
    <div style="margin-top: 10%;">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#home" style="color: #323a47">Alunos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#menu1" style="color: #323a47">Funcionarios</a>
            </li>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="input-group">
                    <input class="form-control" id="pesquisar" type="text" placeholder="Pesquisar">
                    <i title="Buscar" class="btn btn-primary border-0 rounded-0" style="background-color: #33a583"><i class="fa fa-search"></i></i>
                </div><br>
                <div id="home" class="container tab-pane active"><br>
                    <table class="table table-condensed table-hover table-sm">
                        <thead>
                            <tr class="text-center">
                                <th scope="col">Nome</th>
                                <th scope="col">Matrícula</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($alunos as $user) { ?>
                                <tr>
                                    <td scope="row"><?= $user->nome ?></td>
                                    <th class="text-center"><?= $user->id ?></th>
                                    <td>
                                        <div class="btn-group">
                                        <i title="Visualizar" data-toggle="modal" data-target="#myModalAluno<?= $user->id ?>" class="btn btn-primary border-0" style="background-color: #25b0c6"><i class="far fa-eye"></i></i>
                                        </div>
                                        <i title="Atualizar" data-toggle="modal" data-target="#myModalA2<?= $user->id ?>" class="btn btn-primary border-0" style="background-color: #33a583"><i class="fas fa-sync-alt"></i></i>
                                        <a title="Imprimir Boletim" href="/imprimir-boletim-funcionario?id=<?= $user->id ?>" target="_blanck" class="btn btn-primary border-0" style="background-color: #db2938"><i class="fas fa-print"></i></a>
                </div>
                </td>
                </tr>
                <div id="myModalAluno<?= $user->id ?>" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header"style="background-color: #33a583">
                                <h4 class="modal-title"style="color: #fff">Dados Pessoais</h4>
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
                                <b class="btn btn-info btn-md border-0" style="background-color: #33a583" data-dismiss="modal">Sair</b>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="myModalA2<?= $user->id ?>" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header" style="background-color: #33a583">
                                <h4 class="modal-title" style="color: #fff">Atualize os Dados</h4>
                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal" action="/update-perfil-consulta" method="post">
                                    <div class="form-group">
                                        <label class="control-label col-sm-4">Nome</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" value="<?= $user->nome ?>" name="nome" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-4">Data de Nascimento</label>
                                        <div class="col-sm-5">
                                            <input type="date" class="form-control" value="<?= $user->dataNascimento ?>" name="dataNascimento" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-4">Nome da Mãe</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" value="<?= $user->nomeMae ?>" name="nomeMae" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-4">Nome do Pai</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" value="<?= $user->nomePai ?>" name="nomePai" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-4">RG</label>
                                        <div class="col-sm-5">
                                            <input id="rg" type="text" class="form-control" value="<?= $user->rg ?>" name="rg" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-4">CPF</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" value="<?= $user->cpf ?>" name="cpf" onkeypress="$(this).mask('000.000.000-00');" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-4">Naturalidade</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" value="<?= $user->naturalidade ?>" name="naturalidade" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-4">Endereço</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" value="<?= $user->endereco ?>" name="endereco" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-4">Telefone</label>
                                        <div class="col-sm-5">
                                            <input type="tel" class="form-control" onkeypress="Mascara(this);" maxlength="15" value="<?= $user->telefone ?>" name="telefone" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-4">Sexo</label>
                                        <div class="col-sm-5">
                                            <select class="form-control" id="sel2" name="sexo">
                                                <option>Masculino</option>
                                                <option>Feminino</option>
                                                <option>Outros</option>
                                            </select>
                                        </div>
                                    </div>
                                    <input type="hidden" name="id" value="<?= $user->id ?>">
                                    <input type="hidden" name="senha" value="<?= $user->senha ?>">
                            </div>
                            <div class="modal-footer">
                                <div class="form-group">
                                    <input type="submit" name="submit" class="btn btn-info btn-md border-0" style="background-color: #33a583" value="Atualizar">
                                    <b class="btn btn-info btn-md border-0" style="background-color: #323a47" data-dismiss="modal">Cancelar</b>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </tbody>
            </table>
            </div>
            <div id="menu1" class="container tab-pane fade"><br>
                <table class="table table-condensed table-hover table-sm">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">Nome</th>
                            <th scope="col">Matrícula</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($funcionarios as $user) { ?>
                            <tr>
                                <td><?= $user->nome ?></td>
                                <th scope="row" class="text-center"><?= $user->id ?></th>
                                <td>
                                    <div class="btn-group">
                                        <i title="Visualizar" data-toggle="modal" data-target="#myModalA<?= $user->id ?>" class="btn btn-primary border-0" style="background-color: #25b0c6"><i class="far fa-eye"></i></i>
                                    </div>
                                    <i title="Atualizar" data-toggle="modal" data-target="#myModalA2<?= $user->id ?>" class="btn btn-primary border-0" style="background-color: #33a583"><i class="fas fa-sync-alt"></i></i>
                                    <i title="Inativar" http-url="\adicionar-carrinho?id=<?= $user->id ?>" class="btn btn-primary border-0" style="background-color: #db2938"><i class="fas fa-user-slash"></i></i>
            </div>
            </td>
            </td>
            </tr>
            <div id="myModalF<?= $user->id ?>" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header" style="background-color: #33a583">
                            <h4 class="modal-title" style="color: #fff">Dados Pessoais</h4>
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
                            <b class="btn btn-info btn-md" style="background-color: #33a583" data-dismiss="modal">Sair</b>
                        </div>
                    </div>
                </div>
            </div>
            <div id="myModalF2<?= $user->id ?>" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header" style="background-color: #33a583">
                            <h4 class="modal-title" style="color: #fff">Atualize os Dados</h4>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" action="/update-perfil-consulta-funcionario" method="post">
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="nome">Nome</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Nome completo... " name="nome" value="<?= $user->nome ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="idade">Data de Nascimento</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" placeholder="idade... " name="idade" value="<?= $user->dataNascimento ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" for="cpd">CPF:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Cadastro de Pessoa Física... " name="cpf" value="<?= $user->cpf ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="email">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" placeholder="Endereço de e-mail... " name="email" value="<?= $user->email ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" onkeypress="Mascara(this);" maxlength="15" for="telefone">Telefone:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Número de contato ..." name="telefone" value="<?= $user->telefone ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="sel1">Cargo</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" id="sel1" name="cargo" value="<?= $user->cargo ?>">
                                            <option>Professor(a)</option>
                                            <option>Secretario(a)</option>
                                            <option>Coordenador(a)</option>
                                            <option>Diretor(a)</option>
                                        </select>
                                    </div>
                                </div>
                                <input type="hidden" name="id" value="<?= $user->id ?>">
                                <input type="hidden" name="senha" value="<?= $user->senha ?>">
                        </div>
                        <div class="modal-footer">
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" style="background-color: #33a583" value="Atualizar">
                                <b class="btn btn-info btn-md" data-dismiss="modal">Cancelar</b>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div id="myModalF3<?= $user->id ?>" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-body">
                            <h4 class="modal-title">Realmente deseja Inativar Esse Funcionário?</h4>

                            <form class="form-horizontal" action="/inative-funcionario" method="post">
                                <input type="hidden" name="nome" value="<?= $user->nome ?>">
                                <input type="hidden" name="dataNascimento" value="<?= $user->dataNascimento ?>">
                                <input type="hidden" name="cargo" value="<?= $user->cargo ?>">
                                <input type="hidden" name="telefone" value="<?= $user->telefone ?>">
                                <input type="hidden" name="email" value="<?= $user->email ?>">
                                <input type="hidden" name="senha" value="<?= $user->senha ?>">
                                <input type="hidden" name="cpf" value="<?= $user->cpf ?>">
                                <input type="hidden" name="id" value="<?= $user->id ?>">
                                <input type="hidden" name="nlogin" value="<?= $user->nlogin ?>">
                        </div>
                        <div class="modal-footer">
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Inativar">
                                <b class="btn btn-info btn-md" data-dismiss="modal">Cancelar</b>
                            </div>
                            </form>
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