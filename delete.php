<?php
require_once 'test.php';
header("Content-Type: application/json; charset=UTF-8");


$isbn = $_GET['isbn'];

$query = "DELETE FROM BUKU WHERE isbn ='$isbn'";

$statement = $connection->query($query);
$results = $statement->fetchAll();
if(false){
    echo "gagal menghapus data";
}else
    echo"berhasil menghapus  data";

header('Contet-Type: application/json');
echo json_encode($results);

