<?php
$servername = "192.168.20.56";
$username = "root";
$password = "";
$database = "blog";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

//Query the database
$sql = "SELECT id, date_published, title, content FROM posts WHERE id=$id";
$result = $conn->query($sql);

if (!$result) {
  die("Query failed: " . $conn->error . "<br> SQL = " . $sql);
}

$row = $result->fetch_assoc();




?>
