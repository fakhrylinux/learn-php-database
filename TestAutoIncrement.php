<?php

require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$connection->exec("INSERT INTO comments(email, comment) VALUES ('fakhry2@test.com', 'hi 2')");
$id = $connection->lastInsertId();

echo $id . PHP_EOL;

$connection = null;