<div id="mySidenav" class="sidenav">
    
    <?php
    switch ($usuario->cargo):
            case "Professor(a)":
                echo '<a href="/perfil-funcionario">Perfil</a>';
                echo '<a href="/Boletim">Notas</a>';
                echo '<a href="#">Solicitação</a>';
                echo '<a href="#">Frequências</a>';
                echo '<a href="#">E-mail</a>';
                echo '<a href="#">Consultas</a>';
                break;
            case "Secretario(a)":
                echo '<a href="/perfil-funcionario">Perfil</a>';
                echo '<a href="/matriculas">Matriculas</a>';
                echo '<a href="#">Consultas</a>';
                echo '<a href="#" data-toggle="modal" data-target="#myModal">Cadastro</a>';
                echo '<a href="#">E-mail</a>';
                break;
            case "Coordenador(a)":
                echo '<a href="/perfil-funcionario">Perfil</a>';
                echo '<a href="/Boletim">Boletim</a>';
                echo '<a href="#">Solicitação</a>';
                echo '<a href="#">E-mail</a>';
                echo '<a href="#">Turma</a>';
                break;
            case "Diretor(a)":
                echo '<a href="/perfil-funcionario">Perfil</a>';
                echo '<a href="/Boletim">Boletim</a>';
                echo '<a href="#">Solicitação</a>';
                echo '<a href="#">E-mail</a>';
                echo '<a href="#">Turma</a>';
                break;
            default:
                echo '<a href="/perfil">Erro de Acesso! Usuário não identificado!</a>';
        endswitch;
    ?>
</div>