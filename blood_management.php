<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Management</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Blood Level Management</h1>
        <form action="process_blood_level.php" method="POST">
            <div class="form-group">
                <label for="blood_group">Select Blood Group:</label>
                <select class="form-control" id="blood_group" name="blood_group">
                    <option id="Aplus" value="A+">A+</option>
                    <option id="Aminus" value="A-">A-</option>
                    <option id="Bplus" value="B+">B+</option>
                    <option id="Bminus" value="B-">B-</option>
                    <option id="ABplus" value="AB+">AB+</option>
                    <option id="ABminus" value="AB-">AB-</option>
                    <option id="Oplus" value="O+">O+</option>
                    <option id="Ominus" value="O-">O-</option>
                </select>
            </div>
            <div class="form-group">
                <label for="blood_level">Enter Blood Level (in units):</label>
                <input type="number" class="form-control" id="blood_level" name="blood_level" required>
            </div>
            <button type="submit" class="btn btn-primary" name="increase">Increase</button>
            <button type="submit" class="btn btn-primary" name="decrease">Decrease</button>
            <!-- Add the button for checking current blood level -->
            <a href="current_blood_level.php" class="btn btn-primary">Check Current Blood Level</a>
        </form>
    </div>
</body>
</html>
