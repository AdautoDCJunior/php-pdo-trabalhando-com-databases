<?php

$pathDatabase = __DIR__ . '/database.sqlite';
$pdo = new PDO('sqlite:' . $pathDatabase);

echo 'conected';

$pdo->exec('CREATE TABLE students (id INTEGER PRIMARY KEY, name TEXT, birth_date TEXT)');