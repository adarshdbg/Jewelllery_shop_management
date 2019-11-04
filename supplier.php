<?php
  $Sid;
  $Sname;
  $Saddress;
  $Sphoneno;
  $Sdate;

if(isset($_POST["suppid"])){
$suppid=$_POST["suppid"];
$conn=mysqli_connect('localhost','root','','jewelleryshop');
 if(!$conn ) {
      die('Could not connect');
   }
   //$sql1=" SELECT Sid,Sname,Saddress,Sphoneno,Sdate FROM supplierdetails WHERE Sid=$suppid ";
   $result = mysqli_query( $conn, " SELECT Sid,Sname,Saddress,Sphoneno,Sdate FROM supplierdetails WHERE Sid='$suppid' " );

  if(!$result)
  { echo "<h4>Error</h4>";
    echo("Failed");
  }
   $retval1=mysqli_fetch_assoc($result);
   if( $retval1 < 1){
    echo "No item found ";
     echo "<h4>Error 2</h4>";
   }
  else
  {
    $Sid=$retval1['Sid'];
    $Sname=$retval1['Sname'];
    $Saddress=$retval1['Saddress'];
    $Sphoneno=$retval1['Sphoneno'];
    $Sdate=$retval1['Sdate'];
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
            <li class="nav-item"><a href="billing.php" class="nav-link">Billing</a></li>
            <li class="nav-item"><a href="items.php" class="nav-link">Items</a></li>
            <li class="nav-item"><a href="customer.php" class="nav-link">Customer</a></li>
            <li class="nav-item active"><a href="supplier.php" class="nav-link">Suppliers</a></li>
            <li class="nav-item"><a href="employee.php" class="nav-link">Employee</a></li>
           
             
    <li class="nav-item"><a href="index.html" class="nav-link">Back</a></li>
  
        </div>
      </div>
    </nav>
    <!-- END nav -->

    <section class="site-cover" style="background-image: url(images/bg-01.jpg);" id="section-home">
     
    
<br>
<hr>
<br>
<form method="post" action="add_supplier.php">
</br>
<h3 class="navbar-brand">Add Supplier Information :-</h3>
 <table>
       <tr>
      <td>supplier id</td>
      <td><input type="text" name="Sid" placeholder="Supplier Id" required></td>
    </tr>
      <tr>
      <td>supplier Name</td>
      <td><input type="text" name="Sname"  placeholder="" required></td>
    </tr>
    <tr>
      <td>supplier Address</td>
      <td><input type="text" name="Saddress"   placeholder="" required></td>
    </tr>
    <tr>
      <td>supplier Phone no</td>
      <td><input type="text" name="Sphoneno" placeholder="" required></td>
    </tr>
    <tr>
      <td>supplier Date</td>
      <td><input type="date" name="Sdate" placeholder="" required></td>
    </tr>
  </table>
  <input type="submit" value="submit">
</form>
<table>
  <form method="post" action="supplier.php">
<h2 class="navbar-brand">  Check supplier Details :- <input type="text" name="suppid" placeholder="Supplier ID"><input type="submit" value="submit"></h2>
</form>
 
<table>
  <tr>
    <td>Supplier id</td>
    <td>Supplier Name</td>
    <td>Supplier Address</td>
    <td>Supplier Phone no</td>
    <td>Supplier Date</td>
  </tr>
  <tr>
    <td><input type="text" name="Sid" value="<?php if(isset($_POST["suppid"])){ echo "$Sid"; } ?>" ></td>
    <td><input type="text" name="Sname" value="<?php if(isset($_POST["suppid"])){ echo "$Sname"; } ?>" ></td>
    <td><input type="text" name="Saddress" value="<?php if(isset($_POST["suppid"])){ echo "$Saddress"; }?>"></td>
    <td><input type="text" name="Sphoneno" value="<?php if(isset($_POST["suppid"])){ echo "$Sphoneno"; }?>"></td>
    <td><input type="date" name="Sdate" value="<?php if(isset($_POST["suppid"])){ echo "$Sdate"; }?>"></td>
  </tr>

</table>
<!-- ss="container"> -->
        <div class="row align-items-center justify-content-center text-center site-vh-100">
        </div>
  </div>
</section>




</body>
</html>
