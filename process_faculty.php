<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css"><?php
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
$name = $_POST['name'];
$username = $_POST['username'];
$id = $_POST['id'];
$dob = $_POST['dob'];
$department = $_POST['department'];
$position = $_POST['position'];

// Insert faculty details into the faculty table
$sql = "INSERT INTO faculty (name, username, id, dob, department, position) 
        VALUES ('$name', '$username', '$id', '$dob', '$department', '$position')";

if ($conn->query($sql) === TRUE) {
    // Display success message
    echo "<div style='text-align: center;'>";
    echo "<h2 style='color: green;'>Faculty added successfully!</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Username:</strong> $username</p>";
    echo "<p><strong>ID:</strong> $id</p>";
    echo "<p><strong>Date of Birth:</strong> $dob</p>";
    echo "<p><strong>Department:</strong> $department</p>";
    echo "<p><strong>Position:</strong> $position</p>";
    echo "<button style='margin-top: 20px;' onclick=\"window.location.href='index.html'\">Return to Login</button>";
    echo "</div>";
} else {
    // Error in adding faculty, display an error message
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
</html>