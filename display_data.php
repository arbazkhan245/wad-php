<?php
$conn = new mysqli('localhost', 'username', 'password', 'database_name');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM your_table";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<p>" . $row["column_name"] . "</p>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
