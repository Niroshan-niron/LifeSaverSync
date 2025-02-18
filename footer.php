<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    #content {
      flex: 1;
    }

    #footer {
      flex-shrink: 0;
      background-color: #222;
      color: white;
      text-align: center;
      padding: 20px;
      box-sizing: border-box;
    }

    .footer-content {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
      align-items: flex-start;
      margin-bottom: 20px;
    }

    .footer-section {
      flex: 1;
      margin: 10px;
      padding: 20px;
      box-sizing: border-box;
      border-radius: 8px;
      transition: background-color 0.3s ease;
    }

    .footer-section:hover {
      background-color: #444;
    }

    .footer-section h3 {
      font-size: 18px;
      margin-bottom: 15px;
      color: #fff;
      text-transform: uppercase;
    }

    .social-icons {
      list-style-type: none;
      padding: 0;
      display: flex;
      justify-content: center;
      margin-bottom: 20px;
    }

    .social-icons li {
      margin: 0 8px;
    }

    .social-icons a {
      color: white;
      font-size: 24px;
      text-decoration: none;
    }

    .tags-widget a {
      color: #ccc;
      text-decoration: none;
      margin-right: 8px;
    }

    .tags-widget a:hover {
      color: white;
    }

    .important-links a {
      color: #ccc;
      display: block;
      margin-bottom: 10px;
      text-decoration: none;
    }

    .important-links a:hover {
      color: white;
    }

    .blog-title {
      color: #fff;
      font-size: 18px;
      margin-bottom: 5px;
    }

    .blog-date {
      color: #ccc;
      font-size: 14px;
      margin-bottom: 10px;
    }

    .quick-contact {
      color: #ccc;
      font-size: 14px;
      margin-bottom: 20px;
    }

    .latest-works img {
      max-width: 100%;
      height: auto;
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
  <div id="content">
    <!-- Your page content goes here -->
  </div>

  <div id="footer">
    <div class="footer-content">
      <div class="footer-section">
        <h3><i class="fa-regular fa-heart"></i>About Us</h3>
        <p>
       LifeSaverSync,only network that facilitates easy access to blood resources across the country, saving lives one donation at a time.
        </p>
      </div>
      <div class="footer-section">
        <h3>Social Links</h3>
        <ul class="social-icons">
          <li><a href="#"><i class="fab fa-facebook"></i></a></li>
          <li><a href="#"><i class="fab fa-twitter"></i></a></li>
          <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
          <li><a href="#"><i class="fab fa-youtube"></i></a></li>
          <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
        </ul>
        <div class="tags-widget">
          <a href="#">Classy</a>
          <a href="#">Blog</a>
          <a href="#">Creative</a>
          <a href="#">One Page</a>
          <a href="#">Multipurpose</a>
          <a href="#">Minimal</a>
          <a href="#">Classic</a>
          <a href="#">Medical</a>
        </div>
      </div>
      <div class="footer-section">
        <h3>Important Links</h3>
        <a href="#">Terms & Conditions</a>
        <a href="#">About Licences</a>
        <a href="#">Help & Support</a>
        <a href="#">Careers</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Community & Forum</a>
      </div>
      <div class="footer-section">
        <h3>Latest News</h3>
        <div class="blog-item">
          <p class="blog-title">Your Blog Title Goes Here</p>
          <p class="blog-date">21 Jan 2018</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="footer-section">
        <h3>Quick Contact</h3>
        <p class="quick-contact">
          Phone:<br>
          +255 255 54 53 52<br>
          +255 255 53 52 51
        </p>
        <p class="quick-contact">
          Email:<br>
          support@email.com<br>
          company@email.com
        </p>
      </div>
      <div class="footer-section">
        <h3>Latest Works</h3>
        <div class="latest-works">
          <img src="hg.jpg" alt="Work 1">
          
        </div>
      </div>
    </div>
  </div>

  <!-- Link Font Awesome for icons -->
  <script src="https://kit.fontawesome.com/your-font-awesome-kit-id.js" crossorigin="anonymous"></script>
</body>
</html>
