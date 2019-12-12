<div id="mySidenav" class="sidenav">

    <?php
    if ($type == "Aluno") {
        echo '<a href="/perfil">Perfil</a>
        <a href="/boletim">Boletim</a>
        <a href="#">Declaração</a>
        <a href="/disciplinas-aluno">Disciplinas</a>
        <a href="#">Turma</a>';
    } else {
        switch ($usuario->cargo):
            case "Professor(a)":
                echo '<a href="/perfil-funcionario">Perfil</a>';
                echo '<a href="/Boletim">Notas</a>';
                echo '<a href="#">Solicitação</a>';
                echo '<a href="#">Frequências</a>';
                echo '<a href="/disciplinas-professor">Disciplinas</a>';
                echo '<a href="/consultar">Consultas</a>';
                break;
            case "Secretario(a)":
                echo '<a href="/perfil-funcionario">Perfil</a>';
                echo '<a href="#" data-toggle="modal" data-target="#myModal2">Matriculas</a>';
                echo '<a href="/consultar">Consultas</a>';
                echo '<a href="#" data-toggle="modal" data-target="#myModal">Cadastro</a>';
                echo '<a href="/turmas">Turmas</a>';
                echo '<a href="/solicitacoes">Solicitações</a>';
                echo '<a href="/disciplinas">Disciplinas</a>';
                break;
            case "Coordenador(a)":
                echo '<a href="/perfil-funcionario">Perfil</a>';
                echo '<a href="/Boletim">Boletim</a>';
                echo '<a href="#">Solicitação</a>';
                echo '<a href="/turmas">Turmas</a>';
                break;
            case "Diretor(a)":
                echo '<a href="/perfil-funcionario">Perfil</a>';
                echo '<a href="/Boletim">Boletim</a>';
                echo '<a href="#">Solicitação</a>';
                echo '<a href="/turmas">Turma</a>';
                break;
            default:
                echo '<a href="/perfil">Erro de Acesso! Usuário não identificado!</a>';
        endswitch;
    };
    ?>
</div>

<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Cadastro de Funcionário</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="/cadastrar" method="post">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="nome">Nome:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Nome completo... " name="nome">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="idade">Idade:</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" placeholder="idade... " name="idade">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="cpd">CPF:</label>
                        <div class="col-sm-10">
                            <input type="text" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" class="form-control" placeholder="Cadastro de Pessoa Física... " name="cpf">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Email:</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" placeholder="Endereço de e-mail... " name="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="telefone">Telefone:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" onkeypress="Mascara(this);" maxlength="15" placeholder="Número de contato ..." name="telefone">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="sel1">Cargo:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="sel1" name="cargo">
                                <option>Professor(a)</option>
                                <option>Secretario(a)</option>
                                <option>Coordenador(a)</option>
                                <option>Diretor(a)</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-info btn-md" value="Cadastrar">
                            <input type="reset" name="reset" class="btn btn-info btn-md" value="Limpar">
                            <b class="btn btn-info btn-md" data-dismiss="modal">Cancelar</b>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<div id="myModal2" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Matrícula de Aluno</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="/matricular" method="post">
                    <div class="form-group">
                        <label class="control-label col-sm-4">Nome:</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="nome">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4">Data de Nascimento:</label>
                        <div class="col-sm-5">
                            <input type="date" class="form-control" name="dataNascimento">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4">Nome da Mãe:</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="nomeMae">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4">Nome do Pai:</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="nomePai">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4">RG:</label>
                        <div class="col-sm-5">
                            <input id="rg" type="text" maxlength="11" OnKeyPress="formatar('###.###.###', this)" class="form-control" name="rg">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4">CPF:</label>
                        <div class="col-sm-5">
                            <input type="text" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" class="form-control" name="cpf">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4">Naturalidade:</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="naturalidade">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4">Endereço:</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="endereco">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4">Telefone:</label>
                        <div class="col-sm-5">
                            <input type="text" onkeypress="Mascara(this);" maxlength="15" class="form-control" name="telefone">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4">Sexo:</label>
                        <div class="col-sm-5">
                            <select class="form-control" id="sel2" name="sexo">
                                <option>Masculino</option>
                                <option>Feminino</option>
                                <option>Outros</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-info btn-md" value="Matricular">
                            <input type="reset" name="reset" class="btn btn-info btn-md" value="Limpar">
                            <b class="btn btn-info btn-md" data-dismiss="modal">Cancelar</b>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>