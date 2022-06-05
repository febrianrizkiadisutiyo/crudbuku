<?php
$dbserver = 'localhost';
$dbname = 'crudbuku';
$dbuser = 'root';
$dbpassword = '';
$dsn ="mysql:host={$dbserver};dbname={$dbname}";

$connection = null;
try{
    $connection = new PDO($dsn, $dbuser, $dbpassword);
}catch(Exception $exception) {
    die("terjadi eror: {$exception->getMessage()}");
}



