<?php

$pathDatabase = __DIR__ . '/database.sqlite';
$pdo = new PDO('sqlite:' . $pathDatabase);

echo 'conected';