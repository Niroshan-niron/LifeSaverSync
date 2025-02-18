<?php
include('db_connect.php'); // Include your database connection file

// Retrieve contact messages from the database
$query = "SELECT * FROM contact_messages ORDER BY created_at DESC";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Message Notification</title>
    <!-- Include necessary CSS styles -->
</head>
<body>
    <h1>Contact Message Notification</h1>

    <div class="messages-container">
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <div class="message">
                <p><strong>Name:</strong> <?php echo $row['fullname']; ?></p>
                <p><strong>Email:</strong> <?php echo $row['email']; ?></p>
                <p><strong>Message:</strong> <?php echo $row['message']; ?></p>
                <p><strong>Received At:</strong> <?php echo $row['created_at']; ?></p>
            </div>
        <?php endwhile; ?>
    </div>

    <!-- Additional HTML content and styling as needed -->
</body>
</html>
