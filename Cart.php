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

  
</head>
<body>
  <div class="bgimage">
    <div class="menu">
      </head>
  <body header id="main-header" data-spy="scroll" data-target="#site-navbar" data-offset="200">
    
    <nav class="navbar navbar-expand-lg navbar-dark site_navbar bg-dark site-navbar-light" id="site-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html">Jewellery Store</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#site-nav" aria-controls="site-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="site-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="index1.html" class="nav-link">GALLERY</a></li>
            <li class="nav-item"><a href="login.php" class="nav-link">LOGOUT</a></li>
           
        </div>
      </div>
    </nav>
    <!-- END nav -->

    <section class="site-cover" style="background-image: url(images/bg-01.jpg);" id="section-home">

      <div class="leftmenu">
        <h4> SHOPPING CART </h4>
      </div>

      <div class="rightmenu">
        <ul>
          <li id="fisrtlist"> <!-- HOME --> </li>
         <!--  <li > <a href="index1.html" style="text-decoration: none; text-color:blue;">GALLERY </a></li>
          <li><a href="login.php" style="text-decoration: none; text-color:white;">LOGOUT </a></li> -->
          <!-- <li><a href="contact.php" style="text-decoration: none; text-color:white;">CONTACT US </a></li> -->


        </ul>
      </div>
    </section>
</div>
 
<div class="text">
 <!--  <h2> DESIGN • DEVELOPMENT • BRANDING </h2>
  <h1> SHOPPING CART  </h1> -->
  <h2> WELCOME TO JEWELLERY SHOPPING</h2>
 <!--  <button id="buttonone"> like share </button>
  <button id="buttontwo"> Subscribe </button> -->
</div>
<section class="site-cover" style="background-image: url(images/bg-01.jpg);" id="section-home">
    </div>


            <?php
                     $query = "SELECT * FROM itemdetails ORDER BY Iid ASC";
                     $result = mysqli_query($con,$query);
                     if(mysqli_num_rows($result) > 0) {

                       while ($row = mysqli_fetch_array($result)) {
            ?>
      <div class="col-sm-12">

                  <form method="post"  action="Cart.php?action=add&id=<?php echo $row["id"]; ?>">

                    <div class="product col-sm-6/2">
                      <div class="zoomImage">


                        <a href="index4.php">
                          <img class="pic" src="<?php echo $row["image"]; ?>" class="img-responsive" height="200px" width="200px">
                            <img class="picbig" src="<?php echo $row["image"]; ?>" class="img-responsive" height="200px" width="200px">
                        </a>


                      </div>
                             <h5 class="text-info"><?php echo $row["Icategory"]; ?></h5>
                            <h5 class="text-danger"> &#8377 <?php echo $row["price"]; ?> </h5>
                            <h5 class="badge badge-success"> 4.4 <i class="fa fa-star"> </i> </h5>
                            <input type="text" name="quantity" class="form-control" value="1" >
                            <input type="hidden" name="hidden_name" value="<?php echo $row["Icategory"]; ?>">
                              <input type="hidden" name="hidden_price" value=" <?php echo $row["price"]; ?>">
                             <!--  <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success" value="DEMO Cart"> -->
                              <a href="checkout.php" style="margin-top: 10px;" class="btn btn-success">BUY NOW</a>
                        </div>
                 </form>
      </div>
               <?php
             }
        }

     ?>
     <!-- <div style="clear: both"></div>
     <h3 class="title2">Shopping Cart Details</h3>
     <div class="table-responsive">
             <table class="table table-bordered">
              <tr>
                    <th width="30%">Product Name</th>
                    <th width="10%">Quantity</th>
                    <th width="13%">Price Details</th>
                    <th width="10%">Total Price</th>
                    <th width="17%">Remove Item</th>
              </tr> -->
              <?php
                      if(!empty($_SESSION["cart"])) {
                              $total = 0;
                              foreach($_SESSION["cart"] as $key => $value){
                                    ?>
                    <tr>
                               <td><?php echo $value["item_name"]; ?></td>
                               <td><?php echo $value["item_quantity"]; ?></td>
                               <td>&#8377 <?php echo $value["product_price"]; ?></td>

                               <td><a href="Cart.php?action=delete&id=<?php echo $value["product_id"]; ?>"><span class="text-danger">Remove Item</span></a></td>

                    </tr>
                    <?php
                          //   $total = $total + ($value["item_quantity"] * $value["product_price"]);
                           }
                     ?>
                     <tr>
                            <!-- <td colspan="3" align="right">Total</td> -->

                            <td></td>

                     </tr>
                     <?php
                   }
                      ?>
                    </table>
      </div>

          </div>
        </section>
</body>
</html>
