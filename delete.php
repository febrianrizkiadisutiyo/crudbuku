<?php
require_once 'test.php';
header("Content-Type: application/json; charset=UTF-8");


$isbn = $_GET['isbn'];

$query = "DELETE FROM BUKU WHERE isbn ='$isbn'";

$statement = $connection->query($query);
$statement->setFetchMode(PDO::FETCH_ASSOC);
$results = $statement->fetchAll();

header('Contet-Type: application/json');
echo json_encode($results);

//$execute = mysqli_query($connection, $query);
//$response = [];

//if ($execute) {
//	$response['status']='berhasil menghapus data';
//
//}
//else {
//	$response['status']='gagal menghapus data';
//
//}
//$json = json_encode($response, JSON_PRETTY_PRINT);
//echo $json;
