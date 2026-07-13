<?php
// Name: Bailey Sipes
// Date: July 13, 2026
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Building a Dynamic Form with PHP</title>
    <link rel="stylesheet" href="styles/main.css">
</head>
<body>

    <div class="container">

        <h1>Building a Dynamic Form with PHP</h1>

        <p><strong>Name:</strong> Bailey Sipes</p>

        <p><strong>Date:</strong> <?php echo date("F j, Y"); ?></p>

        <form action="confirm.php" method="post">

            <label for="name">Name</label>
            <input
                type="text"
                id="name"
                name="name"
                required
            >

            <label for="email">Email</label>
            <input
                type="email"
                id="email"
                name="email"
                required
            >

            <label for="message">Message</label>
            <textarea
                id="message"
                name="message"
                rows="5"
                required
            ></textarea>

            <input type="submit" value="Submit">

        </form>

    </div>

</body>
</html>