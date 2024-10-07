<?php

//Again, include dbconfig
include 'dbconfig.php';


$stmt = $pdo->prepare("SELECT * FROM Users WHERE UserID = :userID");
$stmt->execute(['userID' => 1]);

// Fetch a single record
$user = $stmt->fetch(PDO::FETCH_ASSOC);
echo "<pre>";
print_r($user);
echo "</pre>";
?>

