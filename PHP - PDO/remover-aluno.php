<?php

require_once  'PHP - PDO\vendor\autoload.php';

$dataBasePath = __DIR__ . 'banco.sqlite';
$pdo = new PDO('sqlite:' . $dataBasePath);

$sqlDelete = 'DELETE FROM students WHERE id = ?;';
$preparedStatement = $pdo->prepare($sqlDelete);

$preparedStatement->bindValue(1, 4, PDO::PARAM_INT);
$preparedStatement->execute();