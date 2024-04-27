<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <h2>Add Student</h2>
    <div class="form-container">
        <form action="add_student_process.php" method="post">
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="text" name="id" placeholder="ID" required><br>
            <input type="date" name="dob" required><br>
            <button type="submit">Add Student</button>
        </form>
    </div>
</body>
</html>
