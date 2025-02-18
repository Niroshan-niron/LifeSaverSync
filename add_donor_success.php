<?php $active = 'add_donor'; include('head.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Include necessary meta tags, CSS, and JS libraries -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
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
        }

        .content-wrap {
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #007bff;
            margin-bottom: 20px;
        }

        p {
            margin-bottom: 30px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 0 10px;
            border-radius: 5px;
            text-decoration: none;
            color: #fff;
            transition: background-color 0.3s;
        }

        .btn-primary {
            background-color: #007bff;
            border: 1px solid #007bff;
        }

        .btn-secondary {
            background-color: #6c757d;
            border: 1px solid #6c757d;
        }

        .btn:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>
<body>
    <div id="page-container">
        <div class="container">
            <div class="content-wrap">
                <h1>Donor Added Successfully</h1>
                <p>Your donor information has been successfully submitted.</p>
                <a href="add_donor.php" class="btn btn-primary">Add Another Donor</a>
                <a href="donor_list.php" class="btn btn-secondary">View Donor List</a>
            </div>
        </div>
    </div>
</body>
</html>
