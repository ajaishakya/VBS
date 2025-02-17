<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="image/logo-icon.jpg">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>VenueMenu - About Us</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="css/Main.css">
    <link rel="stylesheet" href="css/about-us.css">
</head>

<body>

<section class="header">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="header-box">
          <div class="header-img">
            <a class="" href="index.php" target="_self"><img class="header-logo" src="image/venuemenu-logo.png"
                alt=""></a>
          </div>
          <ul class="header-nav">
            <li class="header-item">
              <a class="header-link" href="index.php">Home</a>
            </li>
            <li class="header-item">
              <a class="header-link active" href="#">About Us</a>
            </li>
            <li class="header-item">
              <a class="header-link" href="gallery.php">Gallery</a>
            </li>
            <li class="header-item">
              <a class="header-link header-link-btn" href="login.php" id="open-form"><span>Profile</span></a>
            </li>
          </ul>

          <div class="header-toggel" id="collapes-btn">
            <i class="bi bi-list"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="">
  <div class="container">
    <div class="about-section">
      <h1>About Us</h1>
      <p>VenueMenu  was born out of the frustration of booking a venue online for an event.<br>
      We are established to provide the best venue for all kinds of events for you. <br>
      Here you can book and confirm the venue online as your requirements.</p>
    </div>
  </div>

  <div class="container mb-4">
    <div class="row">
      <div class="column">    
          <div class="row-container">
            <h2>Goal</h2>
            <br>
            <p>Our core objective is to meet the expectation of yours on our services. We all are dedicated to serving the quality 
            service on the venue booking system for all kinds of events.</p>      
          </div>
      </div>

      <div class="column">
          <div class="row-container">
            <h2>Mission</h2>
            <br>
            <p>We are on a mission to provide the best venue with great services on time being for all kinds of events. 
            We are endlessly giving the best experience to our consumers.</p>
          </div>    
      </div>
      
      <div class="column">   
          <div class="row-container">
            <h2>Vision</h2>
            <br>
            <p>Our reason for being here is to connect with you, build trust and maintain transparency to the people and find 
            the best venue for eventing.</p>
          </div>    
      </div>
    </div>
  </div>
</section>

<?php include "footer.php"; ?>

<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script src="js/about-us.js"></script>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0&appId=261511167721195&autoLogAppEvents=1" nonce="S0AlvOga"></script>
</body>
</html>