<?php
namespace Ifnc\Tads\Helper;

use Exception;

final class SelectPro
{
    public static function boletim($id)
    {
        $sql = "SELECT d.nome, dt.pb, dt.sb, dt.tb, dt.qb FROM Disciplina d INNER JOIN DisciplinaTurma dt INNER JOIN Aluno a WHERE (dt.idAluno = a.id AND a.id = 1 AND dt.idDisciplina = $id)";
        var_dump($sql);
        if ($conn = Transaction::get()) {
            $result = $conn->query($sql);
            return $result->fetchObject(get_called_class());
        }
        else {
            throw new Exception('Não há transação ativa!!');
        }

    }
}