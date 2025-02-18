
<?php
include('db_connect.php'); // Include your database connection file

if (isset($_POST['submit'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Insert data into the contact_messages table
    $query = "INSERT INTO contact_messages (fullname, email, message) VALUES ('$fullname', '$email', '$message')";
    mysqli_query($conn, $query);

    // Redirect to the notification page after submission
    header("Location: notification_page.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    body {
      background: linear-gradient(135deg, #1a2a6c, #b21f1f, #fdbb2d);
      color: #fff;
      font-family: 'Roboto', sans-serif;
    }

    #page-container {
      margin-top: 50px;
      position: relative;
      min-height: 84vh;
    }

    .container {
      padding-bottom: 50px;
    }

    h1 {
      font-size: 3rem;
      margin-bottom: 30px;
      text-transform: uppercase;
      font-weight: 700;
      color: #fdbb2d;
    }

    .form-control {
      border-radius: 5px;
      font-size: 16px;
    }

    .btn-primary {
      border-radius: 5px;
      font-size: 18px;
      background-color: #fdbb2d;
      border: none;
    }

    .btn-primary:hover {
      background-color: #e69500;
    }

    /* Styles for the right-side image */
    .contact-image {
      display: flex;
      justify-content: flex-end;
      align-items: center;
      height: 100%;
      position: relative;
      overflow: hidden;
    }

    .contact-image img {
      width: 80%; /* Adjust the width as needed */
      height: auto;
      position: absolute;
      right: -100px;
      top: 50%; /* Center the image vertically */
      transform: translateY(-50%);
      animation: slideRight 4s infinite alternate;
    }

    @keyframes slideRight {
      from {
        right: -100px;
      }
      to {
        right: 0;
      }
    }

    /* Additional Styling for Contact Details */
    .contact-details h2 {
      font-size: 2rem;
      color: #fdbb2d;
      margin-bottom: 20px;
    }

    .contact-details p {
      font-size: 16px;
      margin-bottom: 15px;
    }

    .contact-details h4 {
      color: #fdbb2d;
      margin-bottom: 5px;
    }

    .contact-details a {
      color: #fff;
      text-decoration: none;
    }

    .contact-details a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <?php $active ='contact'; include 'head.php'; ?>
  <form action="process_form.php" method="post">

  <div id="page-container">
    <div class="container">
      <div id="content-wrap">
        <h1 class="mt-4 mb-3">Contact US</h1>
        <div class="row">
          <div class="col-lg-8 mb-4">
          <form name="sentMessage"  method="post">
            <div class="control-group form-group">
                <div class="controls">
                    <label>Full Name:</label>
                    <input type="text" class="form-control" id="name" name="fullname" required>
                    <p class="help-block"></p>
                </div>
            </div>
            <div class="control-group form-group">
                <div class="controls">
                    <label>Phone Number:</label>
                    <input type="tel" class="form-control" id="phone" name="contactno"  required >
                </div>
            </div>
            <div class="control-group form-group">
                <div class="controls">
                    <label>Email Address:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
            </div>
            <div class="control-group form-group">
                <div class="controls">
                    <label>Message:</label>
                    <textarea rows="10" cols="100" class="form-control" id="message" name="message" required  maxlength="999" style="resize:none"></textarea>
                </div>
            </div>
            <button type="submit" name="send"  class="btn btn-primary">Send Message</button>
        </form>
        </div>
          <div class="col-lg-4 mb-4">
            <div class="container contact-details">
              <h2>Contact Details</h2>
              <p><h4>Address :</h4>123 Main Street, Cityville</p>
              <p><h4>Contact Number :</h4>+1 (555) 123-4567</p>
              <p><h4>Email: </h4><a href="mailto:info@example.com">info@example.com</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include 'footer.php'; ?>

    <!-- Image on the right side -->
    <div class="contact-image">
      <img class="img-fluid rounded" src="image/pngwing.com2.png" alt="error">
    </div>
  </div>
</body>
</html>
