<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "users_db";

$conn = new mysqli($host, $username, $password, $database);

if (scan->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>