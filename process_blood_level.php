<?php
// Include database connection
include 'db_connect.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check which button is clicked
    if (isset($_POST['increase'])) {
        // Increase blood level
        $action = 'increase';
    } elseif (isset($_POST['decrease'])) {
        // Decrease blood level
        $action = 'decrease';
    }

    // Get form data
    $blood_group = $_POST['blood_group'];
    $blood_level = $_POST['blood_level'];

    // Query to check if blood group already exists
    $check_query = "SELECT * FROM blood_management WHERE blood_group = '$blood_group'";
    $check_result = mysqli_query($conn, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
        // Blood group exists, update blood level
        if ($action == 'increase') {
            $query = "UPDATE blood_management SET blood_level = blood_level + $blood_level WHERE blood_group = '$blood_group'";
        } elseif ($action == 'decrease') {
            $query = "UPDATE blood_management SET blood_level = blood_level - $blood_level WHERE blood_group = '$blood_group'";
        }
    } else {
        // Blood group does not exist, insert new record
        $query = "INSERT INTO blood_management (blood_group, blood_level) VALUES ('$blood_group', $blood_level)";
    }

    // Execute query
    if (mysqli_query($conn, $query)) {
        // Redirect to blood management page with success message
        header('Location: blood_management.php?status=success');
        exit;
    } else {
        // Redirect to blood management page with error message
        header('Location: blood_management.php?status=error');
        exit;
    }
} else {
    // Redirect to blood management page if form is not submitted
    header('Location: blood_management.php');
    exit;
}
?>
