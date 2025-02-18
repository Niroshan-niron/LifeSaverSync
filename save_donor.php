<?php
// Start session and include necessary files
session_start();
include('db_connect.php');

// Process form submission and save donor data to the database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $blood_group = $_POST['blood_group'];
    $age = $_POST['age'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];

    // Perform SQL query to insert donor data into the database
    $query = "INSERT INTO donors (fullname, blood_group, age, phone_number, address) 
              VALUES ('$fullname', '$blood_group', '$age', '$phone_number', '$address')";
    
    if (mysqli_query($conn, $query)) {
        // If insertion is successful, redirect to the success page
        header("Location: add_donor_success.php");
        exit(); // Make sure to exit after redirection
    } else {
        // If insertion fails, display an error message
        $error_message = "Error: " . mysqli_error($conn);
    }
}
?>
