<?php
// Include database connection file
include('db_connect.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $fullname = $_POST['fullname'];
    $blood_group = $_POST['blood_group'];
    $age = $_POST['age'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];

    // Prepare and execute SQL query to insert data into donors table
    $sql = "INSERT INTO donors (fullname, blood_group, age, phone_number, address)
            VALUES ('$fullname', '$blood_group', '$age', '$phone_number', '$address')";
    
    if (mysqli_query($conn, $sql)) {
        // Data inserted successfully
        echo "Donor added successfully!";
    } else {
        // Error handling
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close database connection
    mysqli_close($conn);
}
?>
