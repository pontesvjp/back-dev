<?php

use PDO;

$caminhoBanco = __DIR__ . 'banco.sqlite';
$pdo = new PDO('sqlite:' . $caminhoBanco);

echo 'conectei';

$pdo->exec('CREATE TABLE students(id INTEGER PRIMARY KEY, name TEXT, birthDate TEXT);');