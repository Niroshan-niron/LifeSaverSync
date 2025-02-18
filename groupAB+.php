<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            margin-bottom: 100px;
        }

        .container {
    margin-top: 20px;
    margin-bottom: 400px; /* Adjust the margin-bottom value to add space between container and footer */
}

        .blood-group-container {
            display: flex;
            justify-content: space-between;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            overflow: hidden;
            border-radius: 8px;
        }

        .hospital-container,
        .donors-container {
            flex-grow: 1;
            padding: 20px;
        }

        .hospital-container {
            background-color: #f8d7da; /* Light red background for hospital container */
        }

        .donors-container {
            background-color: #d4edda; /* Light green background for donors container */
        }

        .hospital-name {
            font-size: 1.5em;
            color: #dc3545; /* Red color for emphasis */
        }

        .donor-list {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .donor-list-item {
            margin-bottom: 8px;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .animated {
            animation: fadeIn 0.5s ease-in-out;
        }
    </style>
    <title>Blood Group A</title>
</head>
<body>
<?php
$active="home";
include('head.php'); ?>
<div class="container">
    <div class="blood-group-container animated">
        <div class="hospital-container">
            <h2 class="hospital-name">Hospital Name (Blood Group A+)</h2>
            <?php
                // PHP code to fetch and display hospital details
                $hospitalDetails = "Hospital details and information about Blood Group A.";
                echo "<p>$hospitalDetails</p>";
            ?>
        </div>
        <div class="donors-container">
            <h2>Donors List (Blood Group A+)</h2>
            <ul class="donor-list">
                <?php
                    // PHP code to fetch and display the list of donors
                    $donors = ["Donor 1", "Donor 2", "Donor 3"]; // Replace with actual donor data
                    foreach ($donors as $donor) {
                        echo "<li class='donor-list-item'>$donor</li>";
                    }
                ?>
            </ul>
        </div>
    </div>
</div>

<script>
    // JavaScript code can be added here for further interactions or animations
</script>
<?php include('footer.php');?>
</body>
</html>
