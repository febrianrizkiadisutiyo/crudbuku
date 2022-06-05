<?php
include "test.php";

$isbn = $_POST['isbn'];
$jumlah = $_POST['jumlah'];

$query = "UPDATE  buku set jumlah = '$jumlah' where isbn='$isbn'";

$statement = $connection->query($query);
$results = $statement->fetchAll();

if(false){
    echo "gagal update data";
}else
    echo"berhasil update data";

header('Content-Type: application/json');
echo json_encode($results);




