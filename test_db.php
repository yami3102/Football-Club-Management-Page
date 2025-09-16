<?php
include 'db.php';

$result = $conn->query("SELECT * FROM users");

echo "<h2>Users Table</h2>";
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row['id'] . " | Username: " . $row['username'] . " | Password: " . $row['password_hash'] . "<br>";
    }
} else {
    echo "No users found.";
}
?>
