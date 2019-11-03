<?php
         session_start();

      $con=mysqli_connect("localhost","root","","jewelleryshop");

         if(isset($_POST["add"])){
           if(isset($_SESSION["cart"])){
             $item_array_id = array_column($_SESSION["cart"], 1);
             if(! in_array($_GET["id"],$item_array_id)){
               $count = count($_SESSION["cart"]);
               $item_array = array(
                 'product_id' => $_GET["id"],
                 'item_name' => $_POST["hidden_name"],
                 'product_price' => $_POST["hidden_price"],
                 'item_quantity' => $_POST["quantity"],
               );
               $_SESSION["cart"][$count] = $item_array;
               echo  '<script>window.location="Cart.php"</script>';
             }else{
                     echo '<script>alert("Product is already Added to Cart")</script>';
                     echo '<script>window.location="Cart.php"</script>';
             }
           }else{
             $item_array = array(
               'product_id' => $_GET["id"],
               'item_name' => $_POST["hidden_name"],
               'product_price' => $_POST["hidden_price"],
               'item_quantity' => $_POST["quantity"],
             );
             $_SESSION["cart"][0] = $item_array;
           }
         }
         if(isset($_GET["action"])){
           if($_GET["action"] == "delete"){
             foreach($_SESSION["cart"] as $keys => $value){
               if($value["product_id"] == $_GET["id"]){
                 unset($_SESSION["cart"][$keys]);
                 echo '<script>alert("Product has been Removed...!")</script>';
                    echo '<script>window.location="Cart.php"</script>';
               }
             }
           }
         }
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>JewelStore</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700|Raleway" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style9.css">

    <link rel="stylesheet" href="helo/css/main.css" />

  
  </head>
  <body>
      <div class="bgimage">
      <div class="menu">
  </head>

  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark site_navbar bg-dark site-navbar-light" id="site-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html">Jewellery Store</a>
        

        <div class="collapse navbar-collapse" id="site-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="index1.html" class="nav-link">GALLERY</a></li>
            <li class="nav-item"><a href="index4.php" class="nav-link">PRODUCT</a></li>
            <li class="nav-item"><a href="login.php" class="nav-link">LOGOUT</a></li>

           
        </div>
      </div>
    </nav>
    <!-- END nav -->

    <section class="banner full">
        <article>
          <img src="images/beautiful-jewellery-wallpapers.jpg" alt="" />
          <div class="inner">
            <header>
              <p>A piece of jewelry is often a piece of art. But it only becomes valuable when emotions are added to it<a href="https://templated.co"></a></p>
              <h2>JEWELLERY STORE</h2>
            </header>
          </div>
        </article>
        <article>
          <img src="images/6976744-pendant-peace-leaves-autumn.jpg" alt="" />
          <div class="inner">
            <header>
              <p>My favorite thing in wardrobe is my jewelry</p>
              <h2>JEWELLERY STORE</h2>
            </header>
          </div>
        </article>
        <article>
          <img src="images/slide03.jpg"  alt="" />
          <div class="inner">
            <header>
              <p>I love jewelry - gold and diamonds. I'm a woman</p>
              <h2>JEWELLERY STORE</h2>
            </header>
          </div>
        </article>
        <article>
          <img src="images/slide04.jpg"  alt="" />
          <div class="inner">
            <header>
              <p>I like for jewelry to tell a story and to be able to talk about what I'm wearing.</p>
              <h2>JEWELLERY STORE</h2>
            </header>
          </div>
        </article>
        <article>
          <img src="images/105122-full_free-download-chinese-new-year-wallpaper-hd-1920x1080-for.jpg"  alt="" />
          <div class="inner">
            <header>
              <p>I wear girls' jeans, a lot of black, and I wear a lot of jewelry. I'm a wacky person!</p>
              <h2>JEWELLERY STORE</h2>
            </header>
          </div>
        </article>
      </section>

      <!-- Scripts -->
      <script src="helo/js/jquery.min.js"></script>
      <script src="helo/js/jquery.scrollex.min.js"></script>
      <script src="helo/js/skel.min.js"></script>
      <script src="helo/js/util.js"></script>
      <script src="helo/js/main.js"></script>
</body>
</html>
