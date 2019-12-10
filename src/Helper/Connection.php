<?php

namespace Ifnc\Tads\Helper;

use Exception;
use PDO;
use Symfony\Component\Yaml\Yaml;

final class Connection
{
    public static function open(): PDO
    {
        $config = Yaml::parseFile('../config/config.yaml');
        $user = $config['connection']['user'];
        $pass = $config['connection']['pass'];
        $name = $config['connection']['name'];
        $host = $config['connection']['host'];
        $type = $config['connection']['type'];
        $port = $config['connection']['port'];

        // descobre qual o tipo (driver) de banco de dados a ser utilizado
        switch ($type) {
            case 'pgsql':
                $port = $port ? $port : '5432';
                $conn = new PDO("pgsql:dbname={$name}; user={$user}; password={$pass};host=$host;port={$port}");
                break;
            case 'mysql':
                $port = $port ? $port : '3306';
                $conn = new PDO("mysql:host={$host};port={$port};dbname={$name}", $user, $pass);
                break;
            case 'sqlite':
                $conn = new PDO("sqlite:{$name}");
                break;
            case 'ibase':
                $conn = new PDO("firebird:dbname={$name}", $user, $pass);
                break;
            case 'oci8':
                $conn = new PDO("oci:dbname={$name}", $user, $pass);
                break;
            case 'mssql':
                $conn = new PDO("mssql:host={$host},1433;dbname={$name}", $user, $pass);
                break;
        }
        // define para que o PDO lance exceções na ocorrência de erros

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;

    }
}
