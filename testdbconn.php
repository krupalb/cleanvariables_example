<?php
// Connect to the database
$host = $_ENV['MYSQL_HOST'];
$user = $_ENV['MYSQL_USER'];
$password = $_ENV['MYSQL_PASSWORD'];
$dbname = $_ENV['MYSQL_DATABASE'];

// Print the values?
echo "Host: " . $host . "<br>";
echo "User: " . $user . "<br>";
echo "Password: " . $password . "<br>";
echo "Database name: " . $dbname . "<br>";

if (!extension_loaded('mysqli')) {
    die('mysqli extension is not installed or enabled');
}

// Create connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
