<!-- index.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Resume Maker</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Resume Maker</h1>
    <a href="create_resume.php">Create New Resume</a>
     <?php
        include 'includes/db_connection.php';

        // Fetch all resumes from the database
        $query = "SELECT * FROM resume.resumes";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            echo "<ul>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<li><a href='view_resume.php?id=".$row['id']."'>".$row['name']."</a> | <a href='edit_resume.php?id=".$row['id']."'>Edit</a></li>";
            }
            echo "</ul>";
        } else {
            echo "No resumes found.";
        }

        mysqli_close($conn);
    ?> 
</body>
</html>
