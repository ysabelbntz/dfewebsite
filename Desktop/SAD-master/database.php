<?php
$servername = "localhost";
$username = "root";
$password = "sasabenitez";

$conn = new mysqli($servername, $username, $password, "mega");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>