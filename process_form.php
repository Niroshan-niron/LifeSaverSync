<?php
session_start();
include 'db_connect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $fullname = $_POST['fullname'];
    $contactno = $_POST['contactno'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Connect to database
    $conn = mysqli_connect("localhost", "root", "", "hospital db");

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare and execute SQL INSERT statement
    $sql = "INSERT INTO contact_messages (fullname, contactno, email, message) VALUES ('$fullname', '$contactno', '$email', '$message')";
    if (mysqli_query($conn, $sql)) {
        // Redirect to success page
        header("Location: contact_us.php?success=true");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);
}
?>
