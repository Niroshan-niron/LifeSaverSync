<?php $active = 'add_donor'; include('head.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Include necessary meta tags, CSS, and JS libraries -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        #page-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            width: 80%;
            max-width: 600px;
            text-align: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #007bff;
            margin-bottom: 20px;
        }

        form {
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #333;
        }

        input[type="text"],
        input[type="number"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"],
        .btn {
            width: 100%;
            background-color: #007bff;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover,
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div id="page-container">
        <div class="container">
            <h1>Add Donor</h1>
            <form action="save_donor.php" method="POST">
                <label for="fullname">Full Name:</label>
                <input type="text" id="fullname" name="fullname" required><br>
                
                <label for="blood_group">Blood Group:</label>
                <select id="blood_group" name="blood_group" required>
                    <option value="">Select Blood Group</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                </select><br>
                
                <label for="age">Age:</label>
                <input type="number" id="age" name="age" required><br>
                
                <label for="phone_number">Phone Number:</label>
                <input type="text" id="phone_number" name="phone_number" required><br>
                
                <label for="address">Address:</label>
                <textarea id="address" name="address" required></textarea><br>
                
                <input type="submit" value="Submit" class="btn">
            </form>
            <br>
            <a href="donor_list.php" class="btn">Show the donor list</a>
        </div>
    </div>
</body>
</html>
