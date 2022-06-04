<?php
include 'test.php';

/**
 * @var $connection PDO
 */

$isbn = $_POST['isbn'];
$judul = $_POST[ 'judul'];
$pengarang = $_POST['pengarang'];
$jumlah = $_POST['jumlah'];
$tanggal = $_POST['tanggal'];
$abstrak = $_POST['abstrak'];


$query = "INSERT INTO buku (isbn ,judul, pengarang, jumlah, tanggal, abstrak) 
VALUES ('$isbn', '$judul', '$pengarang','$jumlah','$tanggal','$abstrak')";

$statement = $connection->query($query);
$statement->setFetchMode(PDO::FETCH_ASSOC);
$results = $statement->fetchAll();

header('Contet-Type: application/json');
echo json_encode($results);

// $execute = mysqli_query($connection, $query);
// $response = [];

// if ($execute) {
// 	$response['status']='sukses menambahkan data buku';	
// }
// else {
// 	$response['status']='gagal menambahkan data buku';

// }
// $json = json_encode($response, JSON_PRETTY_PRINT);
// echo $json;









