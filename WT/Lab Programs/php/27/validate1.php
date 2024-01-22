<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cbitmca001";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user = $_POST['u'];
$password = $_POST['p'];

$stmt = $conn->prepare("SELECT * FROM login WHERE Username=? AND Passcode=?");
$stmt->bind_param("ss", $user, $password);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    echo "Username/Password is valid";
} else {
    echo "Invalid Username/Password";
}

$stmt->close();
$conn->close();
?>
