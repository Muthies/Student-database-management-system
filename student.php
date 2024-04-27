<?php
// Start the session
session_start();

// Check if 'username' session variable is set
if(isset($_SESSION['username'])) {
    // Database connection
    // Replace 'localhost', 'username', 'password', and 'database_name' with your actual database credentials
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

    // Retrieve student information from database
    $username = $_SESSION['username'];
    $sql = "SELECT * FROM students WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output student information and marks
        $row = $result->fetch_assoc();
        echo "<h2>Student Information</h2>";
        echo "Student ID: " . $row["id"]. "<br>";
        echo "Student Name: " . $row["username"]. "<br>";
        echo "Date of Birth: " . $row["dob"]. "<br>";
        echo "<h2>Marks</h2>";
        echo "Subject 1 Mark: " . $row["subject1"]. "<br>";
        echo "Subject 2 Mark: " . $row["subject2"]. "<br>";
        echo "Subject 3 Mark: " . $row["subject3"]. "<br>";
        echo "Subject 4 Mark: " . $row["subject4"]. "<br>";
        echo "Subject 5 Mark: " . $row["subject5"]. "<br>";
        echo "Total Mark: " . $row["total_mark"]. "<br>";
    } else {
        echo "No data found for the student.";
    }

    // Close connection
    $conn->close();
} else {
    // Redirect to login page if 'username' session variable is not set
    header("Location: index.php");
    exit();
}
?>
