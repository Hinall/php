<!-- save_resume.php -->
<?php
    include 'includes/db_connection.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        
        // Retrieve other fields from the form and save them as well

        // Save the resume data into the database
        $query = "INSERT INTO resumes ('name') VALUES ('$name')";
        // Add other fields to the query

        if (mysqli_query($conn, $query)) {
            echo "Resume saved successfully!";
         
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
    }

    mysqli_close($conn);
?>
