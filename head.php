<!DOCTYPE html>
<html>
<head>
<style>
/* General styles */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: Arial, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #333;
  width: 100%;
  padding: 10px 5px;
  color: #FF0404;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.header a {
  text-decoration: none;
  color: #f2f2f2;
  padding: 10px 20px;
  border-radius: 8px;
  transition: background-color 0.3s, color 0.3s, transform 0.3s, margin 0.2s; /* Added margin transition */
  position: relative;
  display: inline-block; /* Ensuring inline-block for the transform */
  margin-right: 10px; /* Adding margin between links */
}

.header a.logo {
  font-size: 20px; /* Reduced font size for smaller logo */
  font-weight: bold;
  color: white; /* Changed logo color to a green shade */
  padding: 6px 12px; /* Adjusted padding for the smaller size */
  border-radius: 8px;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  text-decoration: none;
  background: #CC528F;
  box-shadow: 0 0 6px rgba(0, 0, 0, 0.3);
}

.header a:hover {
  background-color: #ddd;
  color: black;
  transform: scale(1.05); /* Added scale on hover */
  margin-bottom: 5px; /* Added space at the bottom on hover */
}

.header-right {
  display: flex;
  align-items: center;
}

@media screen and (max-width: 500px) {
  .header {
    flex-direction: column;
    align-items: flex-start;
  }
  .header a {
    display: block;
    width: 100%;
    text-align: left;
    margin-bottom: 5px; /* Added space between links in mobile view */
  }
  .header-right {
    display: block;
    width: 100%;
    text-align: left;
    margin-top: 10px;
  }
}

/* Active link styles */
a.act {
  background: #CC528F;
  color: white;
  border-radius: 30px;
}

a.logo2 {
  background-color: #CC528F;
}

/* Animation */
.header a::after {
  content: "";
  position: absolute;
  top: 50%;
  left: 50%;
  width: 0;
  height: 0;
  background: rgba(255, 255, 255, 0.2);
  border-radius: 50%;
  transition: width 0.3s, height 0.3s, opacity 0.3s;
  transform: translate(-50%, -50%);
  z-index: -1;
}

.header a:hover::after {
  width: 120%;
  height: 120%;
  opacity: 0;
}

.header a.logo:hover {
  transform: scale(1.05);
  box-shadow: 0 0 8px rgba(0, 0, 0, 0.3);
}

</style>
</head>

<body>
  <div class="header">
    <a href="home.php" class="logo"<?php if($active=='home') echo " class='logo2'"; ?>>HOME</a>
    <div class="header-right">
      <a href="about_us.php"<?php if($active=='about') echo " class='act'"; ?>>About Us</a>
      <a href="why_donate_blood.php"<?php if($active=='why') echo " class='act'"; ?>>Why Donate Blood</a>
      <a href="donate_blood.php"<?php if($active=='donate') echo " class='act'"; ?>>Become A Donor</a>
      <a href="need_blood.php"<?php if($active=='need') echo " class='act'"; ?>>Need Blood</a>
      <a href="contact_us.php"<?php if($active=='contact') echo " class='act'"; ?>>Contact Us</a>
      <a href="hospital_login.php" class="hospital-login"<?php if($active=='hospital') echo " class='act'"; ?>>Hospital Login</a>
      
    </div>
  </div>
</body>
</html>
