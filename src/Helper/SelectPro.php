<?php
namespace Ifnc\Tads\Helper;

use Exception;
use PDO;

final class SelectPro
{
    public static function boletim($id)
    {
        $sql = "SELECT d.nome, dt.pb, dt.sb, dt.tb, dt.qb FROM Disciplina d 
            INNER JOIN DisciplinaTurma dt ON (d.id = dt.idDisciplina) WHERE 
            (dt.idAluno = $id)";
        if ($conn = Transaction::get()) {
            return $conn->query($sql)->fetchAll(PDO::FETCH_CLASS,get_called_class());
        }
        else {
            throw new Exception('Não há transação ativa!!');
        }

    }
    public static function InserirNotas($id)
    {
        $sql = "SELECT a.nome, dt.pb, dt.sb, dt.tb, dt.qb 
        FROM Aluno a INNER JOIN disciplinaturma dt ON (a.id = dt.idAluno) 
        WHERE dt.idDisciplina = (SELECT id FROM disciplina WHERE id = $id)";
        if ($conn = Transaction::get()) {
            return $conn->query($sql)->fetchAll(PDO::FETCH_CLASS,get_called_class());
        }
        else {
            throw new Exception('Não há transação ativa!!');
        }

    }
}