<?php
$servername = "localhost";
$username = "root";
$password = "root";   // just set this
$dbname = "club_management";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
