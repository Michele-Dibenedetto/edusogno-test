<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "edu_test";
// Connect
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn && $conn->connect_error) {
echo "Connection failed: " . $conn->connect_error;
}