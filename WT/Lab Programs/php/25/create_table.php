<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$createDbQuery = "CREATE DATABASE IF NOT EXISTS student";

if ($conn->query($createDbQuery) === TRUE) {
    echo "Database 'student' created successfully<br>";

    $conn->select_db("student");

    $createQuery = "CREATE TABLE std1 (
        sno INT(5) PRIMARY KEY,
        name VARCHAR(20) NOT NULL,
        gender VARCHAR(10) NOT NULL
    )";

    if ($conn->query($createQuery) === TRUE) {
        echo "Table 'std1' created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>
