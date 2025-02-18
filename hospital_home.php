<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Home Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom styles */
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
        }

        .container {
            padding-top: 50px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .btn-block {
            border-radius: 30px;
        }

        h1 {
            color: #007bff;
            text-align: center;
            font-weight: bold;
            font-size: 3rem;
            margin-bottom: 40px;
        }

        .row {
            margin-bottom: 20px;
        }

        .btn {
            font-size: 1.2rem;
            padding: 15px 40px;
            letter-spacing: 1px;
            text-transform: uppercase;
            border-radius: 8px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Hospital Home Page</h1>
        <div class="row">
            <div class="col-lg-3 mb-3">
                <a href="donor_requests.php" class="btn btn-primary btn-block">Donor Requests</a>
            </div>
            <div class="col-lg-3 mb-3">
                <a href="add_donor.php" class="btn btn-primary btn-block">Add Donor</a>
            </div>
            <div class="col-lg-3 mb-3">
                <a href="blood_management.php" class="btn btn-primary btn-block">Blood Level Management</a>
            </div>
            <div class="col-lg-3 mb-3">
                <a href="notification_page.php" class="btn btn-primary btn-block">Contact Message</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <a href="logout.php" class="btn btn-danger btn-block">Logout</a>
            </div>
        </div>
    </div>
</body>
</html>
