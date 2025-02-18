<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
<style>
#page-container {
  background: #CC2E76;
  font-family: Arial, sans-serif; 
  margin-top: 0px important; 
  animation: fadeIn 1s ease-in-out;
}

@keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}

h1, h2, h3, h4, h5, h6 {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
  text-align: center;
}

.carousel-inner {
  border-radius: 10px; 
  overflow: hidden;
}

.card {
  background-color: rgba(255, 255, 255, 0.8); 
  border-radius: 10px; 
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
  transition: transform 0.3s ease-in-out; 
}

.card:hover {
  transform: scale(1.05);
}

.btn {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
  font-weight: bold;
  background-image: #CC2E76;
  border: none;
}

.card-img-top {
  border-top-left-radius: 10px; 
  border-top-right-radius: 10px;
}

.img-fluid {
  width: 100%;
  height: auto;
  border-radius: 10px; 
}

.blood-group-section {
            background-color: #fff; 
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 20px;
            animation: fadeIn 1s ease-in-out;
        }
        .percentage-circle {
            position: relative;
            width: 120px;
            height: 120px;
            background-color: #2DECBD;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .percentage-circle span {
            position: absolute;
            font-size: 24px;
            font-weight: bold;
        }
        .carousel-inner {
          margin-top: 30px;
        }
        .blood-group-section {
          background-color: #CC528F;
        }
        
        .blue {
    background: #C00C70;
}

.news {
    box-shadow: inset 0 -15px 30px rgba(10,4,60,0.4), 0 5px 10px rgba(10,20,100,0.5);
       width: 100%;
       height:50px;
    margin-top:0px;
    overflow: hidden;
    padding: 1px;
}

.news span {
    float: left;
    color: #E6F3EE;
    padding: 9px;
    position: relative;
    top: 1%;
    box-shadow: inset 0 -15px 30px rgba(0,0,0,0.4);
    font: 16px 'Raleway', Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    
    cursor: pointer;
}

.text1{
	box-shadow:none !important;
  position:relative;
    width:90%
}
        .percentage-bar {
            margin-bottom: 20px;
    
        }

        h4 {
            margin-bottom: 5px; 
            color: #273746;
        }
</style>
</head>
<body>
<div class="header">
<?php
$active="home";
include('head.php'); ?>
</div>
<div class="news blue">
<span style="background-color:#1F2A8D;width:125px;height:50px">Latest Updates</span><span class="text1" ><marquee>First blood donation camp to be organised in Colombo By Nizam in collabration with  Bee for You Bloodon <b>01/09/2024 at FOT University of Colombo.</b> Come and Be a Part of Bee family </marquee></span>
</div>
<div id="page-container" style="margin-top:0px; position: relative; min-height: 84vh;">
        <div class="container">
            <div id="content-wrap" style="padding-bottom:75px;">
  <div id="demo" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" >
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
      <div class="carousel-item active">
        <img src="front.jpg" alt="Loading" width="100%" height="500" >
      </div>
      <div class="carousel-item">
        <img src="front2.jpg" alt="Loading" width="100%" height="500">
      </div>
      <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
    </ul>
    </div>
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
<br>
        <h1 style="text-align:center;font-size:45px;">Welcome to LifeSaverSync</h1>
<br>
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header card bg-info text-white" >The need for blood</h4>
                        <p class="card-body overflow-auto" style="padding-left:2%;height:120px;text-align:left;">
                        There are many reasons patients need blood. A common misunderstanding about blood usage is that accident victims are the patients who use the most blood. Actually, people needing the most blood include those:</br>
                        1.Being treated for cancer </br>
                        2.Undergoing orthopedic surgeries</br>
                        3.Undergoing cardiovascular surgeries</br>
                        4.Being treated for inherited blood disorders</br>
                         </p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header card bg-info text-white">Blood Tips</h4>
                    <p class="card-body overflow-auto" style="padding-left:2%;height:120px;text-align:left;">
1.You must be in good health.</br>
2.Hydrate and eat a healthy meal before your donation.</br>
3.You’re never too old to donate blood.</br>
4.Rest and relaxed.</br>
5.Don’t forget your FREE post-donation snack.</br>
                     </p>
                        </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header card bg-info text-white" >Who you could Help</h4>
                    <p class="card-body overflow-auto" style="padding-left:2%;height:120px;text-align:left;">
                    Every 2 seconds, someone in the World needs blood. Donating blood can help:</br>
1.People who go through disasters or emergency situations.</br>
2.People who lose blood during major surgeries.</br>
3.People who have lost blood because of a gastrointestinal bleed.</br>
4.Women who have serious complications during pregnancy or childbirth.</br>
5.People with cancer or severe anemia sometimes caused by thalassemia or sickle cell disease.
                     </p>
                </div>
            </div>
</div>
<br> 
        <div class="row">
            <div class="col-lg-6">
                <h2>BLOOD GROUPS</h2>
                <p>
Blood group of any human being will mainly fall in any one of the following groups.</br></br> <b>
1.A positive or A negative</br>
2.B positive or B negative</br>
3.O positive or O negative</br>
4.AB positive or AB negative.</br></br></br></b>
Your blood group is determined by the genes you inherit from your parents.
A healthy diet helps ensure a successful blood donation, and also makes you feel better!</p>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid rounded" src="asd.gif" alt="loading"  >
            </div>
        </div>
        <hr>
        <div class="row mb-4">
            <div class="col-md-8">
            <h4>UNIVERSAL DONORS AND RECIPIENTS</h4></br>
            <p>
            The most common blood type is O, followed by type A. Type O individuals are often called "universal donors" since their blood can be transfused into persons with any blood type. Those with type AB blood are called "universal recipients" because they can receive blood of any type.</br></br>
For emergency transfusions, blood group type O negative blood is the variety of blood that has the lowest risk of causing serious reactions for most people who receive it. Because of this, it's sometimes called the universal blood donor type. 
          </p>
              </div>
            <div class="col-md-4">
                <a class="btn btn-lg btn-secondary btn-block" href="donate_blood.php" style="-align:center; background-color:#7FB3D5;color:#273746 ">Become a Donor </a>
            </div>
        </div> 
    </div>
  </div>
  <?php include('footer.php');?>
</div>
</body>
</html>
