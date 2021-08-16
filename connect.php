<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'pdo';
$chrs = 'utf8mb4';
$attr = "mysql:host=$host;dbname=$database;charset=$chrs";
$opts = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,

];

try {
    $conn = new PDO($attr, $user, $pass, $opts);
    //echo "Database connection successfull";
} catch (PDOException $e) {
    throw new PDOException($e->getMessage(), (int)$e->getCode());
}
