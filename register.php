<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" href="style4.css">

</head>
<body>
<!DOCTYPE html>
<html>
<head>
<title>Creative Colorlib SignUp Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style6.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
  <!-- main -->
  <div class="header">
    <h2></h2>
  </div>
  <div class="main-w3layouts wrapper">
    <h1>Creative SignUp Form</h1>
    <div class="main-agileinfo">
      <div class="agileits-top">
        <form action="register.php" method="post">
          <?php include('errors.php'); ?>
          <input class="text" type="text" name="username" placeholder="username" required="">
          <input class="text email" type="email" name="email" placeholder="email" required="">
          <input class="text" type="password" name="password_1" placeholder="Password" required="">
          <input class="text w3lpass" type="password" name="password_2" placeholder="Confirm Password" required="">
          <div class="wthree-text">
            <label class="anim">
              <input type="checkbox" class="checkbox" required="">
              <span>I Agree To The Terms & Conditions</span>
            </label>
            <div class="clear"> </div>
          </div>
          <div class="input-group">
     
          <input type="submit" value="SIGNUP"class="btn"name="reg_user">
        </form>
        <p>you have an Account? <a href="login.php"> Login Now!</a></p>
      </div>
    </div>
    
    <ul class="colorlib-bubbles">
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
  </div>

</body>
</html>

  
</body>
</html>