<?php
namespace Ifnc\Tads\Helper;

use Exception;
use PDO;

final class SelectPro
{
    public static function boletim($id)
    {   
        $sql = "SELECT d.id, d.nome, d.idProfessor, dt.ano, dt.pb, dt.sb, dt.tb, dt.qb FROM Disciplina d 
            INNER JOIN DisciplinaTurma dt ON (d.id = dt.idDisciplina) WHERE 
            (dt.idAluno = $id)";
        if ($conn = Transaction::get()) {
            return $conn->query($sql)->fetchAll(PDO::FETCH_CLASS,get_called_class());
        }
        else {
            throw new Exception('Não há transação ativa!!');
        }

    }
    public static function InserirNotas($a, $b)
    {
        $sql = "SELECT *  FROM Aluno a INNER JOIN disciplinaturma dt ON (a.id = dt.idAluno) 
        WHERE dt.idDisciplina = (SELECT id FROM disciplina WHERE idProfessor = $a) and dt.idTurma = $b";
        if ($conn = Transaction::get()) {
            return $conn->query($sql)->fetchAll(PDO::FETCH_CLASS,get_called_class());
        }
        else {
            throw new Exception('Não há transação ativa!!');
        }

    }
    public static function turmasAll()
    {
        $sql = "SELECT DISTINCT nome, anoSerie, turno FROM turma;";
        if ($conn = Transaction::get()) {
            return $conn->query($sql)->fetchAll(PDO::FETCH_CLASS,get_called_class());
        }
        else {
            throw new Exception('Não há transação ativa!!');
        }

    }
    public static function turmasAlunos($nome, $turno)
    {
        $sql = "SELECT a.nome, a.dataNascimento, a.sexo FROM aluno a 
        INNER JOIN turma t ON (t.idAluno = a.id) 
        WHERE t.nome = '$nome' and t.turno = '$turno';";
        if ($conn = Transaction::get()) {
            return $conn->query($sql)->fetchAll(PDO::FETCH_CLASS,get_called_class());
        }
        else {
            throw new Exception('Não há transação ativa!!');
        }

    }
    public static function ano($id)
    {
        $sql = "SELECT DISTINCT ano FROM DisciplinaTurma WHERE idAluno = $id;";
        if ($conn = Transaction::get()) {
            return $conn->query($sql)->fetchAll(PDO::FETCH_CLASS,get_called_class());
        }
        else {
            throw new Exception('Não há transação ativa!!');
        }

    }
    public static function turmasProfessor($id)
    {
        $sql = "SELECT * FROM turma WHERE id = (SELECT DISTINCT idTurma 
        FROM disciplinaturma WHERE idDisciplina = (SELECT id FROM
        disciplina WHERE idProfessor = $id))";
        if ($conn = Transaction::get()) {
            return $conn->query($sql)->fetchAll(PDO::FETCH_CLASS,get_called_class());
        }
        else {
            throw new Exception('Não há transação ativa!!');
        }

    }
}