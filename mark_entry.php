<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mark Entry</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <h2>Mark Entry</h2>
    <div class="form-container">
        <form action="mark_entry_process.php" method="post">
            <input type="text" name="student_id" placeholder="Student ID" required><br>
            <input type="number" name="subject1" placeholder="Subject 1 Mark" required><br>
            <input type="number" name="subject2" placeholder="Subject 2 Mark" required><br>
            <input type="number" name="subject3" placeholder="Subject 3 Mark" required><br>
            <input type="number" name="subject4" placeholder="Subject 4 Mark" required><br>
            <input type="number" name="subject5" placeholder="Subject 5 Mark" required><br>
            <button type="submit">Submit Marks</button>
        </form>
    </div>
</body>
</html>
