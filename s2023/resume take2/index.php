<!-- - index.php
- style.css
- db_connection.php
- resume_template.html
- resume_generator.php
- assets/
  - logo.png (sample image for the resume) -->
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="style.css">

    <title>first php</title>
</head>
<body>
<div class="div2">
<h1>Resume Generator</h1>
</div>
<div>
<form action="resume_generator.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <!-- Add other fields here based on your resume template -->
        <button type="submit">Generate Resume</button>
    </form>

</div>
</body>
</html>