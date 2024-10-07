<?php


include 'dbconfig.php';


$stmt = $pdo->prepare("DELETE FROM Users WHERE UserID = :userID");
$stmt->execute(['userID' => 9]);

echo "Record deleted successfully.";
?>
