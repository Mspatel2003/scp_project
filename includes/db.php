<?php
// Database connection details
$servername = "localhost";  // The server where MySQL is hosted (use "localhost" for most shared hosting)
$username = "a30080294_scp";  // Your database username
$password = "mayankpatel";  // Your database password
$dbname = "a30080294_db";  // The database name you created

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
