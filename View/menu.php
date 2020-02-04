<link rel="stylesheet" href="/Design/css/botoes.css">
<div id="mySidenav" class="sidenav">

    <?php
    if ($type == "Aluno") {
        echo '<a href="/perfil"> <i class="fas fa-user"></i> Perfil</a>
        <a href="/boletim"> <i class="fas fa-id-card"></i> Boletim</a>
        <a href="/declaracoes"> <i class="fas fa-file-alt"></i> Declaração</a>
        <a href="/disciplinas-aluno"> <i class="fas fa-book-open"></i> Disciplinas</a>';
    } else {
        switch ($usuario->cargo):
            case "Professor(a)":
                echo '<a href="/perfil-funcionario"> <i class="fas fa-user"></i> Perfil</a>
                <a href="/listar-turmas"> <i class="fas fa-plus-circle"></i> Notas</a>
                <a href="lista-turmas"> <i class="fas fa-user-check"></i> Frequências</a>
                <a href="/disciplinas-professor"> <i class="fas fa-book-open"></i> Disciplinas</a>
                <a href="/turmas-professor"> <i class="fas fa-users"></i> Minhas Turmas</a>';
                break;
            case "Secretario(a)":
                echo '<a href="/perfil-funcionario"> <i class="fas fa-user"></i> Perfil</a>';
                echo '<a href="#" data-toggle="modal" data-target="#myModal2"> <i class="fas fa-user-plus"></i> Matriculas</a>';
                echo '<a href="/consultar"> <i class="fas fa-search"></i> Consultas</a>';
                echo '<a href="#" data-toggle="modal" data-target="#myModal"> <i class="fas fa-user-tie"></i> Funcionários </a>';
                echo '<a href="/turmas"> <i class="fas fa-users"></i> Turmas</a>';
                echo '<a href="/solicitacoes"> <i class="fas fa-folder-plus"></i> Solicitações</a>';
                echo '<a href="/list-team"> <i class="fas fa-book-open"></i> Disciplinas</a>';
                break;
            default:
                echo '<a href="/perfil">Erro de Acesso! Usuário não identificado!</a>';
        endswitch;
    };
    ?>
</div>

<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header"style="background-color: #33a583">
                <h4 class="modal-title" style="color: #fff">Cadastro de Funcionário</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="/cadastrar" method="post">
                    <div class="form-row mb-3">
                        <label class="control-label" for="nome">Nome</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" placeholder="Nome completo... " name="nome" required>
                        </div>
                    </div>

                    <div class="form-row">
                    <div class="form-group col-sm-6 mb-3">
                            <label class="control-label" for="idade">Data de Nascimento</label>
                            <input type="date" class="form-control" placeholder="idade... " name="dataNascimento" required>
                    </div>
                    <div class="form-group col-sm-6">
                            <label class="control-label" for="cpd">CPF</label>
                            <input type="text" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" class="form-control" placeholder="Cadastro de Pessoa Física... " name="cpf" required>
                    </div>
                    </div>
                    
                    <div class="form-row">
                    <div class="form-group col-sm-6">
                        <label class="control-label" for="email">Email</label>
                        <input type="email" class="form-control" placeholder="Endereço de e-mail... " name="email" required>
                    </div>
                    <div class="form-group col-sm-6">
                           <label class="control-label" for="telefone">Telefone</label>
                           <input type="text" class="form-control" onkeypress="Mascara(this);" maxlength="15" placeholder="Número de contato ..." name="telefone" required>
                    </div>
                    </div>
          
                    <div class="form-group mb-3">          
                            <label class="control-label" for="sel1">Cargo</label>
                        <div class="col-sm-6">
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
                            <input type="submit" name="submit" class="btn btn-info btn-md border-0" style="background-color: #33a583" value="Cadastrar">
                            <input type="reset" name="reset" class="btn btn-info btn-md border-0" style="background-color: #323a47" value="Limpar">
                            <b class="btn btn-info btn-md border-0" style="background-color: #323a47" data-dismiss="modal">Cancelar</b>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<div id="myModal2" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="background-color: #33a583">
                <h4 class="modal-title" style="color: #fff">Matricular Aluno</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="/matricular" method="post">
                    <div class="form-group form-row">
                        <label class="control-label">Nome</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="nome" required>
                        </div>
                    </div>
                    <div class="form-group form-row">
                    <div class="col-sm-4">
                        <label class="control-label text-center">Data de Nascimento</label>
                            <input type="date" class="form-control" name="dataNascimento" required>
                    </div>
                    <div class="col-sm-4">
                        <label class="control-label">Sexo</label>
                        <select class="form-control" id="sel2" name="sexo">
                            <option>Masculino</option>
                            <option>Feminino</option>
                            <option>Outros</option>
                        </select>
                    </div>
                    <div class="col-sm-4">
                        <label class="control-label">Naturalidade</label>
                        <input type="text" class="form-control" name="naturalidade" required>
                    </div>
                    </div>
                    <div class="form-group row">
                    <div class="col-sm-5">
                        <label class="control-label">RG</label>
                        <input id="rg" type="text" maxlength="11" OnKeyPress="formatar('###.###.###', this)" class="form-control" name="rg" required>
                    </div>
                    <div class="col-sm-7">
                        <label class="control-label">CPF</label>
                        <input type="text" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" class="form-control" name="cpf" required>
                    </div>
                    </div>
                    <div class="form-group form-row">
                    <div class="col-sm-12">
                        <label class="control-label">Nome da Mãe</label>
                        <input type="text" class="form-control" name="nomeMae" required>
                    </div>
                    </div>
                    <div class="form-group form-row">
                    <div class="col-sm-12">
                        <label class="control-label">Nome do Pai</label>
                        <input type="text" class="form-control" name="nomePai" required>
                        </div>
                    </div>              
                    <div class="form-group form-row">
                        <label class="control-label">Endereço</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="endereco" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4">Telefone</label>
                        <div class="col-sm-5">
                            <input type="text" onkeypress="Mascara(this);" maxlength="15" class="form-control" name="telefone" required>
                        </div>
                    </div>
                   
                    <div class="modal-footer">
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-info btn-md border-0" style="background-color:#33a583" value="Matricular">
                            <input type="reset" name="reset" class="btn btn-info btn-md border-0" style="background-color: #323a47" value="Limpar">
                            <b class="btn btn-info btn-md border-0" style="background-color: #323a47" data-dismiss="modal">Cancelar</b>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>