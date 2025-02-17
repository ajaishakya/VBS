<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="image/logo-icon.jpg">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>VenueMenu - Gallery</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-ns/fontico/bootstrap-icons.css">
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="css/Main.css">
    <link rel="stylesheet" href="css/gallery.css">
</head>

<body>

  <section class="header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="header-box">
            <div class="header-img">
              <a class="" href="index.php" target="_self"><img class="header-logo" src="image/venuemenu-logo.png" alt=""></a>
            </div>
            <ul class="header-nav">
              <li class="header-item">
                <a class="header-link" href="index.php" >Home</a>
              </li>
              <li class="header-item">
                <a class="header-link " href="about-us.php" >About Us</a>
              </li>
              <li class="header-item">
                <a class="header-link active" href="#">Gallery</a>
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

<div style="height: 20px"></div>
<section class="container">
  <div class="wrapper">
    <div class="gallery">
      <div class="image"><span><img src="image/img-1.jpg" alt=""></span></div>
      <div class="image"><span><img src="image/img-2.jpg" alt=""></span></div>
      <div class="image"><span><img src="image/img-3.jpg" alt=""></span></div>
      <div class="image"><span><img src="image/img-4.jpg" alt=""></span></div>
      <div class="image"><span><img src="image/img-5.jpg" alt=""></span></div>
      <div class="image"><span><img src="image/img-6.jpg" alt=""></span></div>
    </div>
  </div>
  <div class="preview-box">
    <div class="details">
      <span class="title">Image <p class="current-img"></p> of <p class="total-img"></p></span>
      <span class="icon fas fa-times"></span>
    </div>
    <div class="image-box">
      <div class="slide prev"><i class="fas fa-angle-left"></i></div>
      <div class="slide next"><i class="fas fa-angle-right"></i></div>
      <img src="" alt="">
    </div>
  </div>
  <div class="shadow"></div>
</section>
<div style="height: 40px"></div>

<?php include "footer.php"; ?>

<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script src="js/gallery.js"></script>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0&appId=261511167721195&autoLogAppEvents=1" nonce="S0AlvOga"></script>
</body>
</html>