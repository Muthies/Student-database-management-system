<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "database_stu";

// Create connection
$conn = new mysqli($servername, $username, $password, $database_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$username = $_POST['username'];
$id = $_POST['id'];
$dob = $_POST['dob'];

// Insert data into students table
$sql = "INSERT INTO students (username, id, dob) VALUES ('$username', '$id', '$dob')";

if ($conn->query($sql) === TRUE) {
    echo "Student added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
