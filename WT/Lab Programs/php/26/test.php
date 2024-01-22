<?php
// Create a connection
$conn = new mysqli("localhost", "root", "", "student");

// Check connection
if ($conn->connect_error) {
    die("Unable to connect to the database: " . $conn->connect_error);
}

$query = "SELECT * FROM std1";
$result = $conn->query($query);

if ($result) {
    $rowCount = $result->num_rows;

    if ($rowCount > 0) {
        echo "<table border='1' width='30%' height='30%' style='font-size:20pt;'>";
        echo "<tr><th>SNo</th><th>Name</th><th>Gender</th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['sno'] . "</td><td>" . $row['name'] . "</td><td>" . $row['gender'] . "</td></tr>";
        }

        echo "</table>";
    } else {
        echo "Records not found in the table";
    }

    $result->free(); // Free result set
} else {
    die("Unable to execute query: " . $conn->error);
}

// Close connection
$conn->close();
?>