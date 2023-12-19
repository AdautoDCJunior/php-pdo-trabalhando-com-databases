<?php

use AdautoDCJunior\SamplePhpPdoSqlite\Domain\Model\Student;

require_once './vendor/autoload.php';

$databasePath = __DIR__ . '/database.sqlite';
$pdo = new PDO('sqlite:' . $databasePath);

$student = new Student(null, 'Adauto Júnior', new \DateTimeImmutable('1998-06-23'));

$stmt = "INSERT INTO students (name, birth_date) VALUES ('{$student->getName()}', '{$student->getBirthDate()->format('Y-m-d')}')";
var_dump($pdo->exec($stmt));