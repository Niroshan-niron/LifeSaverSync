<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animations/2.1/js/animations.min.js"
    integrity="sha512-Jb1xPasilz4CRWpHF6CQPrVq8ar/oOGD+IYRc02srqssq/X4jdGb4tEq2mklHHiS3SKpFzU8RerqdbGhQGFomQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <style>
    body {
      background: linear-gradient(135deg, #1a2a6c, #b21f1f, #fdbb2d);
      color: #fff;
      font-family: 'Roboto', sans-serif;
    }

    /* Additional CSS for margin-bottom and animation */
    #additional-content {
      margin-bottom: 50px;
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .animated-content {
      opacity: 0;
      animation: fadeInUp 1s ease forwards;
    }

    /* Added styles for improved appearance */
    h2 {
      color: #fdbb2d;
    }

    p {
      font-size: 18px;
    }

    .rounded-image {
      max-height: 400px;
      width: auto;
      margin-left: auto;
      margin-right: 0;
    }
  </style>
</head>

<body>

  <?php
  $active = 'why';
  include('head.php');
  ?>

  <div id="page-container" style="margin-top:50px; position: relative;min-height: 84vh;">
    <div class="container">
      <div id="content-wrap" style="padding-bottom:50px;">
        <div class="row">
          <div class="col-lg-6 order-lg-2">
            <div id="additional-content" class="animated-content">
              <h2>Why Should I Donate Blood?</h2>
              <p>Donating blood saves lives by providing essential support for medical treatments, emergency situations, and serious medical conditions. It also supports medical research, offers health benefits for donors, and strengthens communities. By donating blood, you contribute directly to improving the well-being of others and raising awareness about the importance of blood donation.</p>
            </div>
          </div>
          <div class="col-lg-6 order-lg-1">
            <img class="img-fluid rounded rounded-image"
              src="jk.jpg" alt="error">
          </div>
        </div>
      </div>
    </div>
    <?php include('footer.php'); ?>
</body>

</html>
