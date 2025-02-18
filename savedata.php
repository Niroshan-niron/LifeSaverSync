<?php
// Establish connection to the database
include 'db_connect.php';

// Check if the form is submitted
if(isset($_POST['submit'])) {
    // Retrieve form data
    $fullname = $_POST['fullname'];
    $mobileno = $_POST['mobileno'];
    $emailid = $_POST['emailid'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $blood = $_POST['blood'];
    $address = $_POST['address'];

    // Sanitize the data
    $fullname = mysqli_real_escape_string($conn, $fullname);
    $mobileno = mysqli_real_escape_string($conn, $mobileno);
    $emailid = mysqli_real_escape_string($conn, $emailid);
    $age = mysqli_real_escape_string($conn, $age);
    $gender = mysqli_real_escape_string($conn, $gender);
    $blood = mysqli_real_escape_string($conn, $blood);
    $address = mysqli_real_escape_string($conn, $address);

    // Insert data into the database
    $query = "INSERT INTO donor (fullname, mobileno, emailid, age, gender, blood, address) 
              VALUES ('$fullname', '$mobileno', '$emailid', '$age', '$gender', '$blood', '$address')";

    if(mysqli_query($conn, $query)) {
        // Data inserted successfully
        echo "Data inserted successfully!";
    } else {
        // Error inserting data
        echo "Error: " . mysqli_error($conn);
    }
} else {
    // Form not submitted
    echo "Form not submitted!";
}

// Close database connection
mysqli_close($conn);
?>
