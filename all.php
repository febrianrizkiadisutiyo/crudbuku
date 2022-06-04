<?php
include 'test.php';
$query = "Select * from buku";

/**
 * @var $connection PDO
 */

$statement = $connection->query($query);
$statement->setFetchMode(PDO::FETCH_ASSOC);

$results = $statement->fetchAll();

header('Contet-Type: application/json');
echo json_encode($results);


	



