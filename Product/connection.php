<?php

$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "product_db";

$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>