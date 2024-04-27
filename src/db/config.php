<?php
function db_connect(){
// Database connection parameters
$host = 'db';
$user = 'USER'; // Get the value of MYSQL_USER environment variable
$pass = 'PASS'; // Get the value of MYSQL_PASSWORD environment variable
$conn = new mysqli($host, $user, $pass);
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
} else {
   //echo "Connected to MySQL server successfully!";
   return $conn;
}
}

// Function to close database connection
function db_close($conn) {
    $conn->close();
}
?>