<?php

      include("config1.php");
      //$note=$_POST['note'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>JewelStore | Contact</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main1.css">
  <link rel="stylesheet" href="css/style9.css">

<!--===============================================================================================-->
</head>
<body>
  <header id="main-header">
  <nav class="navbar navbar-expand-lg navbar-dark site_navbar bg-dark site-navbar-light" id="site-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html">Jewellery Store</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#site-nav" aria-controls="site-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="site-nav">
          <ul class="navbar-nav ml-auto">
           <!--  <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li> -->

            <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
            <li class="nav-item"><a href="login.php" class="nav-link">SignIn / SignUp</a></li>
           <!--  <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li> -->
        </div>
      </div>
    </nav>

<form action="contact2.php" method="POST">
  <div class="container-contact100">
    <div class="wrap-contact100">
      <form class="contact100-form validate-form">
        <span class="contact100-form-title">
          Say Hello!
        </span>
                  
        <div class="wrap-input100 validate-input" data-validate="Name is required">
          <span class="label-input100">Your Name</span>
          <input class="input100" type="text" name="name" placeholder="Enter your name">
          <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
          <span class="label-input100">Email</span>
          <input class="input100" type="text" name="email" placeholder="Enter your email addess">
          <span class="focus-input100"></span>
        </div>
                
                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
          <span class="label-input100">City</span>
          <input class="input100" type="text" name="city" placeholder="Enter your city">
          <span class="focus-input100"></span>
        </div>
    
        <div class="wrap-input100 validate-input" data-validate = "Message is required">
          <span class="label-input100">Message</span>
          <textarea class="input100" name="message" placeholder="Your message here..."></textarea>
          <span class="focus-input100"></span>
        </div>

        <div class="container-contact100-form-btn">
          <div class="wrap-contact100-form-btn">
            <div class="contact100-form-bgbtn"></div>
            <button class="contact100-form-btn">
              <span>
                Submit
                <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
              </span>
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</form>


  <div id="dropDownSelect1"></div>



<!--===============================================================================================-->
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
  <script>
    $(".selection-2").select2({
      minimumResultsForSearch: 20,
      dropdownParent: $('#dropDownSelect1')
    });
  </script>
<!--===============================================================================================-->
  <script src="vendor/daterangepicker/moment.min.js"></script>
  <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="js/main.js"></script>

  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
