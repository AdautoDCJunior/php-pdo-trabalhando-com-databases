<?php

use AdautoDCJunior\SamplePhpPdoSqlite\Domain\Model\Student;

require_once './vendor/autoload.php';

$student = new Student(
    null,
    'Estudante 01',
    new \DateTimeImmutable('1998-06-23')
);

echo $student->getAge();