<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      font-family: 'Arial', sans-serif;
      color: #333;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      margin: 0;
      background: linear-gradient(135deg, #1a2a6c, #b21f1f, #fdbb2d); /* Changed background color */
    }
    h1 {
      font-family: 'Arial', sans-serif;
      color: #fff; /* Changed heading color */
    }
    .content {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px; /* Added padding */
      margin-bottom: 100px;
    }
    .paragraph-section {
      padding: 20px;
      border-radius: 10px;
      font-family: 'Arial', sans-serif;
      font-size: 18px;
      line-height: 1.6;
      background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); /* Added a subtle shadow */
      /* Adjusted margin */
    }
    /* Adjusted column width */
    .paragraph-column {
      display: flex;
      flex-direction: column;
      justify-content: right;
    }

    /* Adjusted image position */
    .image-container {
      display: flex;
      justify-content: right;
    }

    /* Rest of your existing styles... */

  </style>
</head>
<body>

<?php 
$active ='about';
include('head.php');
?>

<div id="page-container">
  <div class="container content">
    <div class="row">
      <div class="col-lg-7 paragraph-column"> <!-- Adjusted column width -->
        <h1 class="mt-4 mb-3">About Us</h1>
        <div class="paragraph-section">
          <div class="paragraph-container">
            <p>Welcome to LifeSaverSync, your one-stop solution for blood donation and blood bank management.</p>
          </div>
          <div class="paragraph-container">
            <p>At LifeSaverSync, we are dedicated to creating a connected network that facilitates easy access to blood resources across the country, saving lives one donation at a time.</p>
          </div>
          <div class="paragraph-container">
            <p>Our Mission</p>
            <p>Our mission is simple yet profound: to bridge the gap between blood donors, hospitals, and patients in need.</p>
          </div>
          <!-- Other paragraph containers... -->
        </div>
      </div>
      <div class="col-lg-5">
        <div class="image-container">
          <img class="img-fluid rounded" src="image/pngwing.com2.png" style="height :410px; " alt="error">
        </div>
      </div>
    </div>
  </div>
  <?php include('footer.php') ?>
</div>
</body>
</html>
