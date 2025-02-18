<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
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

    h1 {
      font-size: 2.5rem;
      margin-bottom: 30px;
      text-transform: uppercase;
    }

    h4 {
  color: white;
  /* Add any additional styles as needed */
}

    .form-control,
    .btn-primary {
      border-radius: 5px;
    }

    .portfolio-item {
      animation: fadeInUp 1s ease-in-out;
      margin-bottom: 20px;
    }

    @keyframes fadeInUp {
      0% {
        opacity: 0;
        transform: translateY(20px);
      }

      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Additional Styles */
    .blood-group-section {
      padding: 20px;
      background-color: rgba(117, 28, 74, 0.8);
      border-radius: 10px;
    }

    .percentage-bar {
      margin-bottom: 20px;
    }

    .progress-bar {
      border-radius: 5px;
      background-color: #1a2a6c;
    }

    .card {
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Animations */
    @keyframes fadeInUp {
      0% {
        opacity: 0;
        transform: translateY(20px);
      }

      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>
<body>
<?php 
  $active ='need';
  include('head.php') ?>
    </div>
    <div id="page-container" style="margin-top:0px; position: relative; min-height: 84vh;">
        <div class="container">
            <div id="content-wrap" style="padding-bottom:75px;">
    <div class="blood-group-section">
                    <h2 style="text-align: center; font-size: 30px;">Total Blood Group Availability</h2>
                    <div class="row">
                    <div class="col-md-6 percentage-bar">
            <a href="groupA+.php">
                <h4>Blood Group A+</h4>
                <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                </div>
            </a>
        </div>

        <div class="col-md-6 percentage-bar">
            <a href="groupA-.php">
                <h4>Blood Group A-</h4>
                <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                </div>
            </a>
        </div>

        <div class="col-md-6 percentage-bar">
            <a href="groupB+.php">
                <h4>Blood Group B+</h4>
                <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                </div>
            </a>
        </div>

        <div class="col-md-6 percentage-bar">
            <a href="groupB-.php">
                <h4>Blood Group B-</h4>
                <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                </div>
            </a>
        </div>

        <div class="col-md-6 percentage-bar">
            <a href="groupAB+.php">
                <h4>Blood Group AB+</h4>
                <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                </div>
            </a>
        </div>

        <div class="col-md-6 percentage-bar">
            <a href="groupAB-.php">
                <h4>Blood Group AB-</h4>
                <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                </div>
            </a>
        </div>

        <div class="col-md-6 percentage-bar">
            <a href="groupO+.php">
                <h4>Blood Group O+</h4>
                <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                </div>
            </a>
        </div>

        <div class="col-md-6 percentage-bar">
            <a href="groupO-.php">
                <h4>Blood Group O-</h4>
                <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                </div>
            </a>
        </div>
</div>
</div>
</div>
</div>
  

  <div id="page-container">
    <div class="container">
      <div id="content-wrap">
        <h1 class="mt-4 mb-3">Need Blood</h1>
        <form name="needblood" action="" method="post">
  <div class="row">
  <div class="col-lg-4 mb-4">
  <div class="font-italic">Blood Group<span style="color:red">*</span></div>
  <div><select name="blood" class="form-control" required>
    <option value=""selected disabled>Select</option>
    <?php
      include 'conn.php';
      $sql= "select * from blood";
      $result=mysqli_query($conn,$sql) or die("query unsuccessful.");
    while($row=mysqli_fetch_assoc($result)){
     ?>
     <option value=" <?php echo $row['blood_id'] ?>"> <?php echo $row['blood_group'] ?> </option>
    <?php } ?>
</select>
</div>
</div>

<div class="col-lg-4 mb-4">
<div class="font-italic">Reason, why do you need blood?<span style="color:red">*</span></div>
<div><textarea class="form-control" name="address" required></textarea></div></div>
</div>
<div class="row">
<div class="col-lg-4 mb-4">
<div><input type="submit" name="search" class="btn btn-primary" value="Search" style="cursor:pointer"></div>
</div>

</div><div class="row">
<?php if(isset($_POST['search'])){

  $bg=$_POST['blood'];
  $sql= "select * from donor_details join blood where donor_details.donor_blood=blood.blood_id AND donor_blood='{$bg}' order by rand() limit 5";
  $result=mysqli_query($conn,$sql) or die("query unsuccessful.");
    if(mysqli_num_rows($result)>0)   {
    while($row = mysqli_fetch_assoc($result)) {
      ?>

      <div class="col-lg-4 col-sm-6 portfolio-item" ><br>
      <div class="card" style="width:300px">
          <img class="card-img-top" src="image\blood_drop_logo.jpg" alt="Card image" style="width:100%;height:300px">
          <div class="card-body">
            <h3 class="card-title"><?php echo $row['donor_name']; ?></h3>
            <p class="card-text">
              <b>Blood Group : </b> <b><?php echo $row['blood_group']; ?></b><br>
              <b>Mobile No. : </b> <?php echo $row['donor_number']; ?><br>
              <b>Gender : </b><?php echo $row['donor_gender']; ?><br>
              <b>Age : </b> <?php echo $row['donor_age']; ?><br>
              <b>Address : </b> <?php echo $row['donor_address']; ?><br>
            </p>

          </div>
        </div>
  </div>

  <?php
    }
  }
    else
    {

        echo '<div class="alert alert-danger">No Donor Found For your search Blood group </div>';

    }
} ?>
</div>
</div>
      </div>
    </div>
    <?php include 'footer.php' ?>

    <?php 
    if(isset($_POST['search'])){
      $bg=$_POST['blood'];
      $sql= "select * from donor_details join blood where donor_details.donor_blood=blood.blood_id AND donor_blood='{$bg}' order by rand() limit 5";
      $result=mysqli_query($conn,$sql) or die("query unsuccessful.");
      if(mysqli_num_rows($result) > 0) {
    ?>
    <!-- Donor Cards -->
    <div class="container">
      <div class="row">
        <?php 
          while($row = mysqli_fetch_assoc($result)) {
        ?>
        <!-- Example Card -->
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <br>
          <div class="card" style="width:300px">
            <img class="card-img-top" src="image\blood_drop_logo.jpg" alt="Card image" style="width:100%;height:300px">
            <div class="card-body">
              <h3 class="card-title"><?php echo $row['donor_name']; ?></h3>
              <p class="card-text">
                <b>Blood Group : </b> <b><?php echo $row['blood_group']; ?></b><br>
                <b>Mobile No. : </b> <?php echo $row['donor_number']; ?><br>
                <b>Gender : </b><?php echo $row['donor_gender']; ?><br>
                <b>Age : </b> <?php echo $row['donor_age']; ?><br>
                <b>Address : </b> <?php echo $row['donor_address']; ?><br>
              </p>
            </div>
          </div>
        </div>
        <!-- End of Example Card -->
        <?php 
          } // End of while loop
        ?>
      </div>
    </div>
    <?php 
      } else {
        echo '<div class="alert alert-danger">No Donor Found For your search Blood group </div>';
      }
    }
    ?>
  </div>
</body>
</html>