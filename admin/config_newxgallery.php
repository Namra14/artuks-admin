<?php
$host = 'localhost';
$username = 'root'; // Your MySQL username
$password = ''; // Your MySQL password
$database = 'boxes';

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>