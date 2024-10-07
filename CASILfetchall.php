<?php


// ALWAYS Include the database configuration file
include 'dbconfig.php';

//TO Prrepare and execute the query to fetch all users
$stmt = $pdo->prepare("SELECT * FROM Users");
$stmt->execute();

// Fetch ALL records and print them using print_r()
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
print_r($users);
echo "</pre>";


?>
