<body>
  <img src="/Design/img/logo.png" alt="logo" width="15%" height="15%" style="margin-top: 5%; display: block; margin-left: auto; margin-right: auto">
  <div id="main">
    <h2>Olá <?= $usuario->nome ?></h2>
    <p>Bem vindo ao sistema de gestão escolar.</p>
  </div>
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
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
                <input type="text" class="form-control" placeholder="Cadastro de Pessoa Física... " name="cpf">
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
                <input type="text" class="form-control" placeholder="Número de contato ..." name="telefone">
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
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Cadastrar</button>
                <button type="reset" class="btn btn-default">Limpar</button>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <div id="myModal2" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Matrícula de Aluno</h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" action="/matricular" method="post">
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
                <input type="text" class="form-control" placeholder="Cadastro de Pessoa Física... " name="cpf">
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
                <input type="text" class="form-control" placeholder="Número de contato ..." name="telefone">
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
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Matricular</button>
                <button type="reset" class="btn btn-default">Limpar</button>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</body>