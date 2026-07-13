<?php
// Name: Bailey Sipes
// Date: July 13, 2026
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Confirmation</title>
    <link rel="stylesheet" href="styles/main.css">
</head>
<body>

<div class="container">

<h1>Form Confirmation</h1>

<?php

// Check that the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get the submitted values
    $name = trim($_POST["name"]);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]);

    // Check for empty fields
    if (empty($name) || empty($email) || empty($message)) {

        echo "<p class='error'>Error: Please complete all fields.</p>";

    } else {

        echo "<p class='success'>Thank you! Your form was submitted successfully.</p>";

        echo "<h2>Your Information</h2>";

        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Message:</strong><br>$message</p>";

    }

} else {

    echo "<p class='error'>This page can only be accessed after submitting the form.</p>";

}

?>

<p><a href="index.php">Return to Form</a></p>

</div>

</body>
</html>