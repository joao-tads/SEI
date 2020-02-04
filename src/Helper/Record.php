<?php
namespace Ifnc\Tads\Helper;
use Exception;
use PDO;
use ReflectionClass;
abstract class Record
{
    public function store()
    {
        $rc = new ReflectionClass($this);
        $prepared = $this->prepare(get_object_vars($this));
        if(empty($this->id)){
            $columns = join(', ', array_keys($prepared));
            $values = join(', ', array_values($prepared));
            $sql = " INSERT INTO {$rc->getShortName()}({$columns})values({$values})";
        }else{
            $set =
                join(
                    ",",
                    array_map(
                        function($k,$v){return "$k = $v";},
                        array_keys($prepared),
                        array_values($prepared)
                    )
                );
            $sql = "UPDATE {$rc->getShortName()} SET {$set} WHERE id = {$this->id}";
        }
        if ($conn = Transaction::get()) {
            $result = $conn->exec($sql);
            $this->id = $conn->lastInsertId();
            echo $conn->lastInsertId();
            if(empty($this->id)){
            }
            return $result;
        }
        else {
            throw new Exception('Não há transação ativa!!');
        }
    }
    public static function find($id)
    {
        $rc = new ReflectionClass(get_called_class());
        $sql = "SELECT * FROM {$rc->getShortName()} WHERE id = $id";
        if ($conn = Transaction::get()) {
            $result = $conn->query($sql);
            return $result->fetchObject(get_called_class());
        }
        else {
            throw new Exception('Não há transação ativa!!');
        }
    }
    public static function findByCondition($filter = TRUE)
    {
        $rc = new ReflectionClass(get_called_class());
        $sql = "SELECT * FROM {$rc->getShortName()} WHERE {$filter}";
        if ($conn = Transaction::get()) {
            $result = $conn->query($sql);
            return $result->fetchObject(get_called_class());
        }
        else {
            throw new Exception('Não há transação ativa!!');
        }
    }
    public static function findByConditionAll($filter = TRUE)
    {
        $rc = new ReflectionClass(get_called_class());
        $sql = "SELECT * FROM {$rc->getShortName()} WHERE {$filter}";
        if ($conn = Transaction::get()) {
            return $conn->query($sql)->fetchAll(PDO::FETCH_CLASS,get_called_class());
        }
        else {
            throw new Exception('Não há transação ativa!!');
        }
    }
    public static function all($filter = NULL)
    {
        $rc = new ReflectionClass(get_called_class());
        $sql = "SELECT * FROM {$rc->getShortName()}";
        if($filter){
            $sql .= " WHERE {$filter}";
        }
        if ($conn = Transaction::get()) {
            return $conn->query($sql)->fetchAll(PDO::FETCH_CLASS,get_called_class());
        }
        else {
            throw new Exception('Não há transação ativa!!');
        }
    }
    public static function delete($filter = TRUE){
        $rc = new ReflectionClass(get_called_class());
        $sql = "DELETE FROM {$rc->getShortName()} WHERE {$filter}";
        if ($conn = Transaction::get()) {
            return $conn->exec($sql);
        }
        else {
            throw new Exception('Não há transação ativa!!');
        }
    }
    public function prepare($data)
    {
        $prepared = array();
        foreach ($data as $key => $value) {
            if (is_scalar($value)&&$key!='id') {
                $prepared[$key] = $this->escape($value);
            }else if(is_object($value)){
                $prepared[$key] = $this->escape($value->id);
            }
        }
        return $prepared;
    }
    public function escape($value)
    {
        if (is_string($value) and (!empty($value))) {
            return "'$value'";
        }
        else if (is_bool($value)) {
            return $value ? 'TRUE': 'FALSE';
        }
        else if ($value!=='') {
            return $value;
        }
        else {
            return "NULL";
        }
    }
}