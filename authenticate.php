<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <?php
// Start the session
session_start();

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
$user_type = $_POST['user_type'];
$username = $_POST['username'];
$id = $_POST['id'];
$dob = $_POST['dob'];

// Perform SQL query based on user type
if ($user_type == 'student') {
    // Query to check if student exists in database
    $sql = "SELECT * FROM students WHERE username = '$username' AND id = '$id' AND dob = '$dob'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Student exists, set session variable and redirect to student page
        $row = $result->fetch_assoc();
        $_SESSION['student_id'] = $row['id'];
        
        // Display student details
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
        
        // You may include additional logic here if needed
        
        exit();
    } else {
        // Student does not exist, redirect back to login page with error message
        header("Location: index.html?error=invalid_student");
        exit();
    }
} elseif ($user_type == 'faculty') {
    // Query to check if faculty exists in database
    $sql = "SELECT * FROM faculty WHERE username = '$username' AND id = '$id' AND dob = '$dob'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Faculty exists, redirect to faculty page
        header("Location: faculty.php");
        exit();
    } else {
        // Faculty does not exist, redirect back to login page with error message
        header("Location: index.html?error=invalid_faculty");
        exit();
    }
} elseif ($user_type == 'admin') {
    // Assuming you have a hardcoded admin username and ID for simplicity
    $admin_username = 'admin';
    $admin_id = '123'; // Assuming admin's ID
    $admin_dob = '1990-01-01'; // Assuming admin's date of birth

    // Check if the provided username, ID, and date of birth match the admin credentials
    if ($username === $admin_username && $id === $admin_id && $dob === $admin_dob) {
        // Redirect to the page where admin can add faculty
        header("Location: add_faculty.php");
        exit();
    } else {
        // Incorrect admin credentials, redirect back to login page with error message
        header("Location: index.php?error=invalid_admin");
        exit();
    }
}

// Close connection
$conn->close();
?>
