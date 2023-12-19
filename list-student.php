<?php

use AdautoDCJunior\SamplePhpPdoSqlite\Domain\Model\Student;

require_once './vendor/autoload.php';

$databasePath = __DIR__ . '/database.sqlite';
$pdo = new PDO('sqlite:' . $databasePath);

$statement = $pdo->query('SELECT * FROM students');
$studentsDataList = $statement->fetchAll(PDO::FETCH_ASSOC);

$students = [];
foreach ($studentsDataList as $studentData) {
    $students[] = new Student(
        $studentData['id'],
        $studentData['name'],
        new \DateTimeImmutable($studentData['birth_date'])
    );
}

var_dump($students);