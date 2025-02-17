<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="image/logo-icon.jpg">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>VenueMenu - Get the best venue for your event</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="css/Main.css">
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
              <a class="header-link active" href="#" >Home</a>
            </li>
            <li class="header-item">
              <a class="header-link " href="about-us.php" >About Us</a>
            </li>
            <li class="header-item">
              <a class="header-link " href="gallery.php">Gallery</a>
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

<section class="banner" style="background-image: url(image/Bg_image.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <h1 class="head">Book venue at VenueMenu</h1>
        <a class="para2 no-link-banner" href="login.php">Book Now</a>
      </div>
    </div>
  </div>
</section>

<section class="set" id='services'>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <img class="set-img" src="image/food-service.jpg" alt="">
      </div>
      <div class="col-md-6">
        <div class="set-info">
          <p class="number">Food</p>
          <p class="head">We serve the best food to meet your expectation</p>
          <p class="para">Conclusion of every event is the food. So that we provide the best hygenic and organic foods. </p>
        </div>
      </div>
    </div>
  </div>
</section>

<hr>

<section class="set">
  <div class="container">
    <div class="row">
      <div class="col-md-6 order-md-0 order-1">
        <div class="set-info">
          <p class="number">Hospitality</p>
          <p class="head"> "Atithi Devo: Bhava" is our Mantra </p>
          <p class="para">We love our Mantra and we do what we love. Our reality always starts from your service.</p>
        </div>
      </div>
      <div class="col-md-6 order-md-1 order-0">
        <img class="set-img" src="image/hospitality.jpg" alt="">
      </div>
    </div>
  </div>
</section>

<hr>

<section class="set" >
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <img class="set-img" src="image/luxury.jpg" alt="">
      </div>
      <div class="col-md-6">
        <div class="set-info">
          <p class="number">Luxury</p>
          <p class="head">Our designs and management makes you feel better</p>
          <p class="para">Best quality of management gives you the high level of luxurious feel.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<hr>

<section>
  <div class="container  d-flex justify-content-center" style="height: 300px;">
    <div style="width:450px;" class=''> 
    <h2 class="text-center mt-4 mb-5" >Check Availability</h2>
      <form action="" method="POST" id="form-available">
        <div class="row">
          <div class="col-3 text-center mt-2">
            <label for="">Date:</label>
          </div>
          <div class="col"> 
            <input type="date" class="form-control" name="date" id="date">
            <div id="invaliddate" class="text-danger"></div>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col d-flex justify-content-end">
            <input type="submit" value="Check" class="btn btn-primary">
          </div>
        </div>
      </form>
      <div id="alertcheck" class="text-center mt-4"></div>
    </div>
  </div>
</section>

<section class="why-with-us" id='why-with-us' style="background-image: url('image/Bg_images.jpg');">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class=" why-us">
          <h1 class="why-us-text">Why with us?</h1>
          <p class="info">Our venues and event management team have the best experience in related fields by serving the quality 
          services over quantity. We have the best composition of good and hygienic food, best hospitality, and luxurious infrastructures. 
          We provide a real time booking system for any kind of event at a reasonable price.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Testomonials Starts-->

  <div class="testomonials"><h1>testomonials</h1></div>
  <div class="slider">
    <input type="radio" name="slider" title="slide0" checked="checked" class="slider__nav"/>
    <input type="radio" name="slider" title="slide1" class="slider__nav"/>
    <input type="radio" name="slider" title="slide2" class="slider__nav"/>
    <input type="radio" name="slider" title="slide3" class="slider__nav"/>
    
    <div class="slider__inner">
      <div class="slider__contents">
        <h2 class="slider__caption">Ishwor Shrestha</h2>
        <p class="slider__txt">Get the best venue for your event Get the best venue for your event,Get the best venue for your event !</p>
      </div>
      <div class="slider__contents">
        <h2 class="slider__caption">Manish Chaulagain</h2>
        <p class="slider__txt">Get the best venue for your event Get the best venue for your event,Get the best venue for your event !</p>
      </div>
      <div class="slider__contents">
        <h2 class="slider__caption">Anish Kayastha</h2>
        <p class="slider__txt">Get the best venue for your event Get the best venue for your event,Get the best venue for your event !</p>
      </div>
      <div class="slider__contents">
        <h2 class="slider__caption">Ajai Shakya</h2>
        <p class="slider__txt">Get the best venue for your event Get the best venue for your event,Get the best venue for your event !</p>
      </div>
    </div>
  </div>

<!--Testomonials Ends-->

<?php include "footer.php"; ?>

<script>
  $(document).ready(function(){
    $("#form-available").submit(function(e){
      e.preventDefault()
      
      function valid()
      {
        var date = document.getElementById("date").value;

        //For Date Variable
        var insertedDate = new Date(date).getTime();
        var currentDate = new Date().getTime();

        // Reset alert Values
        document.getElementById("invaliddate").innerHTML="";

        // Date Validation
        if(date=="")
        {
            document.getElementById("invaliddate").innerHTML="Date is empty";
            document.getElementById("date").setAttribute("class","form-control border border-danger");
            return false;
        }
        else if(insertedDate<currentDate)
        {
            document.getElementById("invaliddate").innerHTML="Booking should be made from next day";
            document.getElementById("date").setAttribute("class","form-control border border-danger");
            return false;
        }
        else{
            document.getElementById("date").setAttribute("class","form-control border border-success");
            return true;
        }
      }

      if(valid())
      {
        var formValues = $(this).serialize();
        $.ajax({
            type: 'post',
            url: 'available.php',
            data: {val: formValues},
            success: function(data){
                $("#alertcheck").html(data);
                $("#alertcheckk").fadeOut(3000);
            }
        });
      }

    });
  });
</script>

<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0&appId=261511167721195&autoLogAppEvents=1" nonce="S0AlvOga"></script>
</body>
</html>