<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve input values from the form
    $email = $_POST["email"];
    $password = $_POST["password"];

   
    require "database.php"; 

  
    $conn = new mysqli($hostname, $username, $password, $database_name);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    
    $stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $email, $password);
    if ($stmt->execute()) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . $stmt->error;
    }


    $stmt->close();
    $conn->close();
} else {
    header("Location: index.html");
    exit();
}
?>
