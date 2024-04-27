<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Page</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="add_student.php">Add Student</a></li>
            <li><a href="mark_entry.php">Mark Entry</a></li>
        </ul>
    </nav>
    <div class="content">
        <h2>Students List</h2>
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

        // Query to retrieve student information from the database
        $sql = "SELECT * FROM students";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "* Student ID: " . $row["id"]. "<br>";
                echo "Student Name: " . $row["username"]. "<br>";
                echo "Date of Birth: " . $row["dob"]. "<br>";
                // Add a delete link for each student
                echo "<a href='delete_student.php?id=".$row["id"]."'>Delete Student</a><br><br>";
            }
        } else {
            echo "No students found.";
        }

        // Close connection
        $conn->close();
        ?>
    </div>
</body>
</html>
