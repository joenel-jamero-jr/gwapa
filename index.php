<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubuntu-Server-PHP-Deployment</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <p style="font-weight: bold; text-align: center;">My First Ubuntu Server PHP Deployment - Joenel Jamero Jr.</p>
        <h1>Registration Form</h1>
        <form action="process_registration.php" method="post">
            <label for="firstname">First Name:</label>
            <input type="text" id="firstname" name="firstname" required>

            <label for="middlename">Middle Name:</label>
            <input type="text" id="middlename" name="middlename">

            <label for="lastname">Last Name:</label>
            <input type="text" id="lastname" name="lastname" required>

            <label for="age">Age:</label>
            <input type="number" id="age" name="age" min="1" required>

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>

            <label for="course_section">Course Section:</label>
            <input type="text" id="course_section" name="course_section" required>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
