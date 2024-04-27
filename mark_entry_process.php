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
$student_id = $_POST['student_id'];
$subject1 = $_POST['subject1'];
$subject2 = $_POST['subject2'];
$subject3 = $_POST['subject3'];
$subject4 = $_POST['subject4'];
$subject5 = $_POST['subject5'];

// Calculate total mark
$total_mark = $subject1 + $subject2 + $subject3 + $subject4 + $subject5;

// Update marks for the student
$sql = "UPDATE students SET student_id='$student_id',subject1 = '$subject1', subject2 = '$subject2', subject3 = '$subject3', 
        subject4 = '$subject4', subject5 = '$subject5', total_mark = '$total_mark' WHERE id = '$student_id'";

if ($conn->query($sql) === TRUE) {
    echo "Marks updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
