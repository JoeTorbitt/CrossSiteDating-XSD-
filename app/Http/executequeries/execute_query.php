<?php
// Set up your database connection
$servername = "localhost";
$username = "c3625505";
$password = "MyDB56174732";
$dbname = "c3625505-dev";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the SQL query from the message field
$query = file_get_contents('php://input');

// Execute the query
if ($result = $conn->query($query)) {
    echo "Query executed successfully.";
} else {
    echo "Error executing query: " . $conn->error;
}

// Close the database connection
$conn->close();
?>