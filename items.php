<?php
  $Iid;
  $Iweight;
  $Itype;
  $Icategory;
  $Icopies;
  $Idate;

if(isset($_POST["Itemid"])){
$Itemid=$_POST["Itemid"];
// echo "$Itemid";
$conn=mysqli_connect('localhost','root','','jewelleryshop');
 if(!$conn ) {
      die('Could not connect');
   }
   // $sql1="SELECT Iid,Iweight,Itype,Icategory,Icopies,Idate FROM itemdetails WHERE Iid=$Itemid";
   $sql1 = "SELECT * FROM itemdetails WHERE Iid=$Itemid;";
   $result = mysqli_query( $conn, $sql1 );
  if(!$result)
  {
    echo("Failed");
  }
   $retval1=mysqli_fetch_assoc($result);
   if( $retval1 < 1){
    echo "No item found ";
   }
  else{
    $Iid=$retval1['Iid'];
    $Iweight=$retval1['Iweight'];
    $Itype=$retval1['Itype'];
    $Icategory=$retval1['Icategory'];
    $no_of_items=$retval1['no_of_items'];
    $date=$retval1['date'];
    $pro_image=$retval1['pro_image'];
    $price = $retval1['price'];
  }
mysqli_close($conn);

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
  <body header id="main-header" data-spy="scroll" data-target="#site-navbar" data-offset="200">
    
    <nav class="navbar navbar-expand-lg navbar-dark site_navbar bg-dark site-navbar-light" id="site-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html">Jewellery Store</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#site-nav" aria-controls="site-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="site-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="billing.php" class="nav-link">Billing</a></li>
            <li class="nav-item"><a href="items.php" class="nav-link">Items</a></li>
            <li class="nav-item"><a href="customer.php" class="nav-link">Customer</a></li>
            <li class="nav-item"><a href="supplier.php" class="nav-link">Suppliers</a></li>
            <li class="nav-item"><a href="employee.php" class="nav-link">Employee</a></li>
           
             <div id="back">
    <li class="nav-item"><a href="index.html" class="nav-link">Back</a></li>
  </div>
        </div>
      </div>
    </nav>
    <!-- END nav -->

    <section class="site-cover" style="background-image: url(images/bg-01.jpg);" id="section-home">
     
    
<br>
<hr>
<br>
<form method="post" action="add_item.php">
</br>
<h2 class="navbar-brand">Add Items :-</h2>
<table>
  <tr>
    <td>Item id</td>
    <td>Weight</td>
    <td>Item Type</td>
    <td>Item Category</td>
    <td>No of Items</td>
    <td>Date</td>
    <td>Image Name</td>
    <td>Price</td>
  </tr>
  <tr>
    <td><input type="text" name="Iid"></td>
    <td><input type="text" name="Iweight"></td>
    <td><input list="ItemType" name="Itype"><datalist id="ItemType"><option value="gold"><option value="silver"><option value="platinum"></datalist></td>
    <td><input list="ItemCategory" name="Icategory"><datalist id="ItemCategory">
        <option value="ring"><option value="pendant"><option value="chain">
        <option value="earring"><option value="payal"><option value="braclet">  </td>
    <td><input type="text" name="Icopies"></td>
    <td><input type="date" name="Idate"></td>
    <td><input type="text" name="pro_image"></td>
      <td><input type="text" name="price"></td>
  </tr>
</table>
<input type="submit" value="Submit">
</form>
<table>
  <form method="post" action="items.php">
<h2 class="navbar-brand"> Check Item : [ Enter Item Id ] <input type="text" name="Itemid"><input type="submit" value="submit"></h2>
</form>
  <tr>
    <td>Item id</td>
    <td>Weight</td>
    <td>Item Type</td>
    <td>Item Category</td>
    <td>No of Items</td>
    <td>Date</td>
    <td>Image</td>
    <td>Price</td>
  </tr>
  <tr>
    <td><input type="text" name="Iid" value="<?php if(isset($_POST["Itemid"])){ echo "$Iid"; } ?>" ></td>
    <td><input type="text" name="Iweight" value="<?php if(isset($_POST["Itemid"])){ echo "$Iweight"; } ?>" ></td>
    <td><input type="text" name="Itype" value="<?php if(isset($_POST["Itemid"])){ echo "$Itype"; }?>"></td>
    <td><input type="text" name="Icategory" value="<?php if(isset($_POST["Itemid"])){ echo "$Icategory"; }?>"></td>
    <td><input type="text" name="Icopies" value="<?php if(isset($_POST["Itemid"])){ echo "$no_of_items"; }?>"></td>
    <td><input type="date" name="Idate" value="<?php if(isset($_POST["Itemid"])){ echo "$date"; }?>"></td>
    <td><input type="text" name="Icopies" value="<?php if(isset($_POST["Itemid"])){ echo "$pro_image"; }?>"></td>
    <td><input type="text" name="Idate" value="<?php if(isset($_POST["Itemid"])){ echo "$price"; }?>"></td>
  </tr>

</table>
 <div class="container">
        <div class="row align-items-center justify-content-center text-center site-vh-100">
        </div>
  </div>
</section>




</body>
</html>
