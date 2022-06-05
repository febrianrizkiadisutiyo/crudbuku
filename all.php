<?php
include 'test.php';
/**
 * @var $connection PDO
 */
$query = "Select * from buku";
$statement = $connection->query($query);
$statement->setFetchMode(PDO::FETCH_ASSOC);

$results = $statement->fetchAll();

header('Content-Type: application/json');
echo json_encode($results);


	



