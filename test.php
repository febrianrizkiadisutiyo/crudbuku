<?php
$dbserver = 'localhost';
$dbname = 'crudbuku';
$dbuser = 'root';
$dbpassword = '';
$dsn ="mysql:host={$dbserver};dbname={$dbname}";

$connection = null;
try{
    $connection = new PDO($dsn, $dbuser, $dbpassword);
    echo("koneksi berhasil");
}catch(Exception $exception) {
    die("terjadi eror: {$exception->getMessage()}");
}


// $server = "localhost";
// $username = "root";
// $password = "";
// $db = "crudbuku";

// $koneksi =  new mysqli($server, $username, $password, $db);
 
// // Check connection
// if (!$koneksi){
// 	die("gagal terkoneksi ke database ");
// }
// else {
// 	echo "Koneksi Berhasil";
// }
