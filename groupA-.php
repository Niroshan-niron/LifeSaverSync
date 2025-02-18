<?php
// Include your database connection file here
include 'db_connect.php';

// Query to retrieve blood level for blood group A+
$query = "SELECT blood_level FROM blood_management WHERE blood_group = 'A-'";

$result = mysqli_query($conn, $query);

// Check if query was successful
if ($result) {
    // Fetch the blood level value
    $row = mysqli_fetch_assoc($result);
    $blood_level_Aminus = $row['blood_level'];
} else {
    // Error handling
    $error_message = "Failed to retrieve blood level for blood group A-";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Group A- Blood Level</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Blood Group A- Blood Level</h1>
        <?php if (isset($blood_level_Aminus)) : ?>
            <p>The current blood level for blood group A- is: <?php echo $blood_level_Aminus; ?> units</p>
        <?php elseif (isset($error_message)) : ?>
            <p style="color: red;"><?php echo $error_message; ?></p>
        <?php else : ?>
            <p>No blood level data available for blood group A-</p>
        <?php endif; ?>
    </div>
</body>
</html>
