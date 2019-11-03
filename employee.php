<?php
  $Cid;
  $Cname;
  $Caddress;
  $Cphoneno;
  // $Cdate;

if(isset($_POST["Custid"])){

echo $_POST["Custid"];

$Custid=$_POST["Custid"];
$conn=mysqli_connect('localhost','root','','jewelleryshop');
 if(!$conn ) {
      die('Could not connect');
   }
   // $sql1=" SELECT  Cid,Cname,Caddress,Cphoneno FROM customerdetails WHERE Cid='12' ";
   $result = mysqli_query( $conn, " SELECT  Cid,Cname,Caddress,Cphoneno FROM customerdetails WHERE Cid='$Custid' ");
  if(!$result)
  {
    echo("Failed");
  }
   $retval1=mysqli_fetch_assoc($result);
   if( $retval1 < 1){
    echo "No item found ";
   }
  else{
     $Cid=$retval1['Cid'];
    $Cname=$retval1['Cname'];
    $Caddress=$retval1['Caddress'];
    $Cphoneno=$retval1['Cphoneno'];
    // $Cdate=$retval1['Cdate'];
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
            <li class="nav-item"><a href="supplier.php" class="nav-link">Billing</a></li>
            <li class="nav-item"><a href="items.php" class="nav-link">Items</a></li>
            <li class="nav-item"><a href="customer.php" class="nav-link">Customer</a></li>
            <li class="nav-item"><a href="supplier.php" class="nav-link">Suppliers</a></li>
            <li class="nav-item active"><a href="employee.php" class="nav-link">Employee</a></li>
           
             
    <li class="nav-item"><a href="index.html" class="nav-link">Back</a></li>
  
        </div>
      </div>
    </nav>
    <!-- END nav -->

    <section class="site-cover" style="background-image: url(images/bg-01.jpg);" id="section-home">
     
    
<br>
<hr>
<br>
<form method="post" action="add_employee.php">
</br>
<h3 class="navbar-brand">Add Employee Information :-</h3>
 <table>
      <tr>
      <td>Employee id</td>
      <td><input type="text" name="Cid" placeholder="Employee Id" required></td>
    </tr>
      <tr>
      <td>Employee Name</td>
      <td><input type="text" name="Cname"  placeholder="" required></td>
    </tr>
    <tr>
      <td>Employee Address</td>
      <td><input type="text" name="Caddress"   placeholder="" required></td>
    </tr>
    <tr>
      <td>Employee Phone no</td>
      <td><input type="text" name="Cphoneno" placeholder="" required></td>
    </tr>
  </table>
  <input type="submit" value="submit">
</form>
<table>
  <form method="post" action="employee.php">
<h2 class="navbar-brand">  Check Employee Details :- <input type="text" name="Custid" placeholder="Employee ID"><input type="submit" value="submit"></h2>
</form>
  </form>
<table>
   <tr>
    <td>Employee id</td>
    <td> Name</td>
    <td> Address</td>
    <td> Phone no</td>
    <!-- <td> Date</td> -->
  </tr>
  <tr>
   <td><input type="text" name="Cid" value="<?php if(isset($_POST["Custid"])){ echo "$Cid"; } ?>" ></td>
    <td><input type="text" name="Cname" value="<?php if(isset($_POST["Custid"])){ echo "$Cname"; } ?>" ></td>
    <td><input type="text" name="Caddress" value="<?php if(isset($_POST["Custid"])){ echo "$Caddress"; }?>"></td>
    <td><input type="text" name="Cphoneno" value="<?php if(isset($_POST["Custid"])){ echo "$Cphoneno"; }?>"></td>

  </tr>

</table>ss="container">
        <div class="row align-items-center justify-content-center text-center site-vh-100">
        </div>
  </div>
</section>




</body>
</html>
