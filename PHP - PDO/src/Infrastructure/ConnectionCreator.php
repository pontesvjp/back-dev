<?php

namespace Alura\Pdo\Infraestructure\Persistence;

use PDO;


class ConnectionCreator
{
    public static function createConnection(): PDO
    {
        $dataBasePath = __DIR__ . '/../../../banco.sqlite.php';

        return new PDO('sqlite:' . $dataBasePath);
    }
}
