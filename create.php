<?php
include 'test.php';

$isbn = $_POST['isbn'];
$judul = $_POST[ 'judul'];
$pengarang = $_POST['pengarang'];
$jumlah = $_POST['jumlah'];
$tanggal = $_POST['tanggal'];
$abstrak = $_POST['abstrak'];


$query = "INSERT INTO buku (isbn ,judul, pengarang, jumlah, tanggal, abstrak) 
VALUES ('$isbn', '$judul', '$pengarang','$jumlah','$tanggal','$abstrak')";

$statement = $connection->query($query);
$results = $statement->fetchAll();

if(false){
    echo "gagal menambahkan data";
}else
    echo"berhasil menambahkan  data";

header('Content-Type: application/json');
echo json_encode($results);











