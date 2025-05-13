<?php
$host = 'localhost';
$user = 'root';
$password = ''; // use your MySQL root password if any
$database = 'user_database';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
