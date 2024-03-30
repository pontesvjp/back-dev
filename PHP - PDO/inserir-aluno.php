<?php


use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infraestructure\Persistence\ConnectionCreator;

require_once  'PHP - PDO\vendor\autoload.php';

$pdo = ConnectionCreator::createConnection();

$student = new Student(
    null,
    "Vinicius Pontes",
    new DateTimeImmutable('2003-07-11')
);
$name = $student->name();

$sqlInsert = "INSERT INTO students (name, birth_date) VALUES (:name, :birth_date);";
$statement = $pdo->prepare($sqlInsert);
$statement->bindParam(':name', $name);
$statement->bindValue(':birth_date', $student->birthDate()->format('Y-m-d'));

$name = 'novo nome';

if ($statement->execute()) {
    echo 'aluno incluido';
};