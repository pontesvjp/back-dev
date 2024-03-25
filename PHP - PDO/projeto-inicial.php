<?php

use Alura\Pdo\Domain\Model\Student;


require_once 'PHP - PDO\vendor\autoload.php';

$student = new Student(
    null,
    'Vinicius Pontes',
    new \DateTimeImmutable('2003-07-11')
);

echo $student->age();