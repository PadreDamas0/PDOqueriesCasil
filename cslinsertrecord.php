<?php

include 'dbconfig.php';

// prepare insert query
$stmt = $pdo->prepare("INSERT INTO Users (UserID, Username, FirstName, LastName, DateOfBirth, Password) VALUES (:userID, :username, :firstName, :lastName, :dateOfBirth, :password)");
$stmt->execute([
    'userID' => 9,
    'username' => 'Astro22',
    'firstName' => 'Butiking',
    'lastName' => 'Balbon',
    'dateOfBirth' => '1998-04-12',
    'password' => 'butikingbalbon'
]);

echo "Record inserted successfully.";
?>
