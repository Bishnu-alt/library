<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "database_lib"; 

$dbconn = mysqli_connect($hostname, $username, $password, $dbname);

if (!$dbconn) {
    die("Database connection failed: " . mysqli_connect_error());
} else {
    // For testing purposes only
    // echo "Database connection successful";
    // Uncomment the line above to test the connection
    // Remove it in production for security reasons
}
?>
