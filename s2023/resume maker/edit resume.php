<!-- edit_resume.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Edit Resume</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Edit Resume</h1>
    <?php
        include 'includes/db_connection.php';

        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            // Fetch resume data from the database
            $query = "SELECT * FROM resumes WHERE id = $id";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                // Display the resume data in an editable form
            } else {
                echo "Resume not found.";
            }
        } else {
            echo "Invalid resume ID.";
        }

        mysqli_close($conn);
    ?>
</body>
</html>
