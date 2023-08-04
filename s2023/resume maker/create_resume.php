<!-- create_resume.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Create Resume</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Create Resume</h1>
    <form action="save_resume.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        <!-- Add other fields for resume data -->
        <input type="submit" value="Save">
    </form>
</body>
</html>
