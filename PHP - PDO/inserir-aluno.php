<?php

use Alura\Pdo\Domain\Model\Student;

require_once  'PHP - PDO\vendor\autoload.php';

$dataBasePath = __DIR__ . 'banco.sqlite';
$pdo = new PDO('sqlite:' . $dataBasePath);

$student = new Student(null, 'vinicius pontes', new DateTimeImmutable('2003-07-11'));

$sqlInsert = "INSERT INTO students (name, birth_date) VALUES ('{$student->name()}', '{$student->birthDate()->format('Y-m-d')}');";


var_dump($pdo->exec($sqlInsert));