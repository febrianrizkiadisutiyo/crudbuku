<?php
require_once 'test.php';
header("Content-Type: application/json; charset=UTF-8");


$isbn = $_POST['isbn'];
$jumlah = $_POST['jumlah'];


$query = "UPDATE  buku set jumlah='$jumlah' where isbn='$isbn'";

$statement = $connection->query($query);
$statement->setFetchMode(PDO::FETCH_ASSOC);
$results = $statement->fetchAll();

header('Contet-Type: application/json');
echo json_encode($results);

//$execute = mysqli_query($connection, $query);
//$response = [];
//
//if ($execute) {
//	$response['status']='berhasil update data';
//}
//else {
//	$response['status']='gagal update data';
//
//}
//$json = json_encode($response, JSON_PRETTY_PRINT);
//echo $json;