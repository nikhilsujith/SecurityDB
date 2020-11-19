<?php
$servername = "security.cspylg0mkver.us-east-2.rds.amazonaws.com";
$user="nikhil";
$password="securitydb*123";
$dbname="SECURITY4";

// Create connection
$conn = new mysqli($servername, $user, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
