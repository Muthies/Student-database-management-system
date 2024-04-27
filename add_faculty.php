<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Faculty</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <center>
    <h1>Add Faculty</h1>
    <div class="add-faculty-container">
        <h2>Fill in the details</h2>
        <form action="process_faculty.php" method="post">
            <input type="text" name="name" placeholder="Name" required><br>
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="text" name="id" placeholder="ID" required><br>
            <input type="date" name="dob" required><br>
            <input type="text" name="department" placeholder="Department" required><br>
            <input type="text" name="position" placeholder="Position" required><br>
            <button type="submit">Add Faculty</button>
        </form>
    </div>
    </center>
</body>
</html>
