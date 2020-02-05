<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Funcionario;
use Ifnc\Tads\Helper\Transaction;
use Ifnc\Tads\Helper\Flash;
use Ifnc\Tads\Helper\Message;

class  UpdatePerfilFuncionarioController implements IController
{
    use Flash;
    public function request(): void
    {
        $func = new Funcionario();
        $func->id = $_POST['id'];
        $func->nome = $_POST['nome'];;
        $func->cpf = $_POST['cpf'];;
        $func->email = $_POST['email'];;
        $func->telefone = $_POST['telefone'];
        $func->cargo = $_POST['cargo'];
        $func->dataNascimento = $_POST['dataNascimento'];
        
        Transaction::open();
        $func->store();
        $usuario = Funcionario::findByCondition("id='{$_POST['id']}'");
        Transaction::close();

        $_SESSION["usuario"] = $usuario;
        $this->create(
            new Message(
                "Atualizado com sucesso!",
                "alert-danger"
            )
        );
        header('Location: /perfil-funcionario', true, 302);
        exit();
    }
}
