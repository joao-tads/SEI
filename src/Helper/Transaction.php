<?php
namespace Ifnc\Tads\Helper;

use PDO;

final class Transaction
{
    private static $conn; // conexão ativa

    public static function open()
    {
        if (empty(self::$conn))
        {
            self::$conn = Connection::open();
            self::$conn->beginTransaction(); // inicia a transação
        }
    }
    
    public static function get()
    {
        return self::$conn; // retorna a conexão ativa
    }
    
    public static function rollback()
    {
        if (self::$conn)
        {
            self::$conn->rollback(); // desfaz as operações realizadas
            self::$conn = NULL;
        }
    }
    
    public static function close()
    {
        if (self::$conn)
        {
            self::$conn->commit(); // aplica as operações realizadas
            self::$conn = NULL;
        }
    }
}
