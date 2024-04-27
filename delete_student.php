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

// Check if student ID is set in the URL
if(isset($_GET['id'])) {
    $student_id = $_GET['id'];

    // SQL to delete student from the database
    $sql = "DELETE FROM students WHERE id=$student_id";

    if ($conn->query($sql) === TRUE) {
        echo "Student deleted successfully.";
    } else {
        echo "Error deleting student: " . $conn->error;
    }
} else {
    echo "Student ID not provided.";
}

// Close connection
$conn->close();
?>
