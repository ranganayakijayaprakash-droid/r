<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "inventory_db";

$conn = new mysqli(
    $servername,
    $username,
    $password,
    $database
);

if ($conn->connect_error) {
    die("Database Connection Failed");
}

echo "Database Connected Successfully";

?>
