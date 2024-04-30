<?php
// Check if form is submitted
include('dbcon.php');
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["image"])) {    
    
    // Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }
    
    // Prepare and bind parameters
    $stmt = $connection->prepare("INSERT INTO users (name, data) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $data);
    
    // Assign variables and execute
    $name = $_FILES["image"]["name"];
    $data = file_get_contents($_FILES["image"]["tmp_name"]);
    $stmt->execute();
    
    // Close statement and connection
    $stmt->close();
    $connection->close();
    
    header("location:login_pic.php?Image uploaded successfully!");
} else {
    header("location:login_pic.php?Error uploading image.");
}
?>