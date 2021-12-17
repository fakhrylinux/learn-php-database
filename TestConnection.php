<?php

$host = "localhost";
$port = 3306;
$database = "learn_php_database";
$username = "root";
$password = "";

try {
    $connection = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
    echo "Success connected to MySQL database" . PHP_EOL;

    // close connection
    $connection = null;
} catch (PDOException $exception) {
    echo "Fail connected to MySQL database: " . $exception->getMessage() . PHP_EOL;
}