<?php

include 'dbconfig.php';

// updating the Username field of the Users tablefor a specific UserID.
$stmt = $pdo->prepare("UPDATE Users SET Username = :username WHERE UserID = :userID");
$stmt->execute([
    'username' => 'UpdatedUser',
    'userID' => 1
]);

echo "Record updated successfully.";

?>
