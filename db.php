<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db_name = 'university_app';

$conn = new mysqli($host, $user, $password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
