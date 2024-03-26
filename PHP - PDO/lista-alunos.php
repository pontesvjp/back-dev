<?php

use Alura\Pdo\Domain\Model\Student;

require_once  'PHP - PDO\vendor\autoload.php';

$dataBasePath = __DIR__ . 'banco.sqlite';
$pdo = new PDO('sqlite:' . $dataBasePath);

$statement = $pdo->query('SELECT * FROM students');
$studentDataList = $statement->fetchAll(PDO::FETCH_ASSOC);
$studentList = [];

foreach ($studentDataList as $studentData) {
    $studentList[] = new Student(
        $studentData['id'],
        $studentData['name'],
        new DateTimeImmutable($studentData['birth_date'])
    );
}
var_dump($studentList);