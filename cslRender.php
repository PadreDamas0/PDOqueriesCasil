<?php

include 'dbconfig.php';

$stmt = $pdo->prepare("SELECT * FROM Users");
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

//This table displays the UserID, Username, FirstName, LastName, and DateOfBirth fields from the Users table
echo "<table border='1'>";

echo "<tr><th>UserID</th><th>Username</th><th>FirstName</th><th>LastName</th><th>DateOfBirth</th></tr>";

foreach ($users as $user) {

    echo "<tr>";
    echo "<td>" . htmlspecialchars($user['UserID']) . "</td>";
    echo "<td>" . htmlspecialchars($user['Username']) . "</td>";
    echo "<td>" . htmlspecialchars($user['FirstName']) . "</td>";
    echo "<td>" . htmlspecialchars($user['LastName']) . "</td>";
    echo "<td>" . htmlspecialchars($user['DateOfBirth']) . "</td>";
    echo "</tr>";

    // also used htmlspecialchars to convert special chars to an html entiity
}
echo "</table>";

?>
