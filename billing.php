<?php
error_reporting(0);
$conn=mysqli_connect('localhost','root','','jewelleryshop');

 if(!$conn ) {
      die('Could not connect');
   }

   $sql= " SELECT * FROM rate  WHERE id = 1 ";


   $retval = mysqli_query( $conn, $sql );
   $row = mysqli_fetch_array($retval, MYSQLI_BOTH);
$Rgold=$row[1];
$Rsilver=$row[2];
$Rplatinum=$row[3];

?>
<?php
  $Cid;
  $Cname;
  $Caddress;
  $Cphoneno;
  $Cdate;

if(isset($_POST["Custid"])){
$Custid=$_POST["Custid"];
$conn=mysqli_connect('localhost','root','','jewelleryshop');
 if(!$conn ) {
      die('Could not connect');
   }
   $sql0=" SELECT  Cid,Cname,Caddress,Cphoneno,Cdate FROM customerdetails WHERE Cid=$Custid ";
   $result = mysqli_query( $conn, $sql0 );
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
    $Cdate=$retval1['Cdate'];
  }

}
?>
<?php
  $Iid1;
  $Iweight1;
  $Itype1;
  $Icategory1;
  $Icopies1;
  $Imc1;
  $Iprice1;
  $Iamt1;

if(isset($_POST["Itemid1"])){
$Itemid1=$_POST["Itemid1"];
   $sql1=" SELECT Iid,Iweight,Itype,Icategory,Imc,Icopies,Idate FROM itemdetails WHERE Iid=$Itemid1 ";
   $result1 = mysqli_query( $conn, $sql1 );
  if(!$result1)
  {
    echo("Failed");
  }
   $retval1=mysqli_fetch_assoc($result1);
   if( $retval1 < 1){
    echo "No item found ";
   }
  else{
    $Iid1=$retval1['Iid'];
    $Iweight1=$retval1['Iweight'];
    $Itype1=$retval1['Itype'];
    $Icategory1=$retval1['Icategory'];
    $Icopies1=$retval1['Icopies'];

    $Imc1=$retval1['Imc'];

    if ($Itype1=='gold') {
   $Iprice1=$Rgold * $Iweight1;
} elseif ($Itype1=='silver') {
   $Iprice1=$Rsilver * $Iweight1;
} else {
    $Iprice1=$Rplatinum * $Iweight1;
}


    $Iamt1=$Imc1 + $Iprice1;
  }

}

?>
<?php
  $Iid2;
  $Iweight2;
  $Itype2;
  $Icategory2;
  $Icopies2;
  $Iprice2;
  $Imc2;
  $Iamt2;

if(isset($_POST["Itemid2"])){
$Itemid2=$_POST["Itemid2"];
   $sql2=" SELECT Iid,Iweight,Itype,Icategory,Imc,Icopies,Idate FROM itemdetails WHERE Iid=$Itemid2 ";
   $result2 = mysqli_query( $conn, $sql2 );
  if(!$result2)
  {
    echo("Failed");
  }
   $retval2=mysqli_fetch_assoc($result2);
   if( $retval2 < 1){
    echo "No item found ";
   }
  else{
    $Iid2=$retval2['Iid'];
    $Iweight2=$retval2['Iweight'];
    $Itype2=$retval2['Itype'];
    $Icategory2=$retval2['Icategory'];
    $Icopies2=$retval2['Icopies'];
    $Imc2=$retval2['Imc'];

     if ($Itype2=='gold') {
   $Iprice2=$Rgold * $Iweight2;
} elseif ($Itype2=='silver') {
   $Iprice2=$Rsilver * $Iweight2;
} else {
    $Iprice2=$Rplatinum * $Iweight2;
}
     $Iamt2=$Imc2 + $Iprice2;
  }

}

?>
<?php
  $Iid3;
  $Iweight3;
  $Itype3;
  $Icategory3;
  $Icopies3;
  $Iprice3;
  $Imc3;
  $Iamt3;

if(isset($_POST["Itemid3"])){
$Itemid3=$_POST["Itemid3"];
   $sql3=" SELECT Iid,Iweight,Itype,Icategory,Imc,Icopies,Idate FROM itemdetails WHERE Iid=$Itemid3 ";
   $result3 = mysqli_query( $conn, $sql3 );
  if(!$result3)
  {
    echo("Failed");
  }
   $retval3=mysqli_fetch_assoc($result3);
   if( $retval3 < 1){
    echo "No item found ";
   }
  else{
    $Iid3=$retval3['Iid'];
    $Iweight3=$retval3['Iweight'];
    $Itype3=$retval3['Itype'];
    $Icategory3=$retval3['Icategory'];
    $Icopies3=$retval3['Icopies'];
     $Imc3=$retval3['Imc'];

         if ($Itype3=='gold') {
   $Iprice3=$Rgold * $Iweight3;
} elseif ($Itype3=='silver') {
   $Iprice3=$Rsilver * $Iweight3;
} else {
    $Iprice3=$Rplatinum * $Iweight3;
}

     $Iamt3=$Imc3 + $Iprice3;
  }

}

?>
<?php
  $Iid4;
  $Iweight4;
  $Itype4;
  $Icategory4;
  $Icopies4;
  $Iprice4;
  $Imc4;
  $Iamt4;

if(isset($_POST["Itemid4"])){
$Itemid4=$_POST["Itemid4"];
   $sql4=" SELECT Iid,Iweight,Itype,Icategory,Imc,Icopies,Idate FROM itemdetails WHERE Iid=$Itemid4 ";
   $result4 = mysqli_query( $conn, $sql4 );
  if(!$result4)
  {
    echo("Failed");
  }
   $retval4=mysqli_fetch_assoc($result4);
   if( $retval4 < 1){
    echo "No item found ";
   }
  else{
    $Iid4=$retval4['Iid'];
    $Iweight4=$retval4['Iweight'];
    $Itype4=$retval4['Itype'];
    $Icategory4=$retval4['Icategory'];
    $Icopies4=$retval4['Icopies'];
    $Imc4=$retval4['Imc'];

         if ($Itype4=='gold') {
   $Iprice4=$Rgold * $Iweight4;
} elseif ($Itype4=='silver') {
   $Iprice4=$Rsilver * $Iweight4;
} else {
    $Iprice4=$Rplatinum * $Iweight4;
}


     $Iamt4=$Imc4 + $Iprice4;
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
            <li class="nav-item active"><a href="supplier.php" class="nav-link">Billing</a></li>
            <li class="nav-item"><a href="items.php" class="nav-link">Items</a></li>
            <li class="nav-item"><a href="customer.php" class="nav-link">Customer</a></li>
            <li class="nav-item"><a href="supplier.php" class="nav-link">Suppliers</a></li>
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


<form method="post" action="add_bill.php">
  </br>
  <table>
    <tr>
      <td colspan="6">Bill no :- <input type="text" name="bid"> </td>
      <td align="right" colspan="2">Bill Date :-  <input type="date" name="bdate">   </td>
    </tr>
    <tr>
      <td colspan="5">Customer id :- <input type="text" name="bcid" value="<?php if(isset($_POST["Custid"])){ echo "$Cid"; } ?>"></td>
      <td colspan="3">Customer Phone no:-  <input type="text" name="cphone" value="<?php if(isset($_POST["Custid"])){ echo "$Cphoneno"; } ?>"></td>
    </tr>
    <tr>
      <td colspan="5">Customer Name :- <input type="text" name="cname" value="<?php if(isset($_POST["Custid"])){ echo "$Cname"; } ?>"></td>
      <td colspan="3">Customer address :- <input type="text" name="caddress" value="<?php if(isset($_POST["Custid"])){ echo "$Caddress"; } ?>"></td>
    </tr>
    <tr>
      <td>Sr no</td>
      <td>Item id</td>
      <td>Item Weight</td>
      <td>Item Type</td>
      <td>Item Category</td>
      <td>Making Charges</td>
      <td>Item Price</td>
      <td>Amount</td>
    </tr>
    <tr>
      <td>1</td>
      <td><input type="text" name="Iid1" value="<?php if(isset($_POST["Itemid1"])){ echo "$Iid1"; } ?>"></td>
      <td><input type="text" name="Iweight1" value="<?php if(isset($_POST["Itemid1"])){ echo "$Iweight1"; } ?>"></td>
      <td><input type="text" name="Itype1" value="<?php if(isset($_POST["Itemid1"])){ echo "$Itype1"; } ?>"></td>
      <td><input type="text" name="Icategory1" value="<?php if(isset($_POST["Itemid1"])){ echo "$Icategory1"; } ?>"></td>
      <td><input type="text" name="Imc1" value="<?php if(isset($_POST["Itemid1"])){ echo "$Imc1"; } ?>"></td>
      <td><input type="text" name="Iprice1" value="<?php if(isset($_POST["Itemid1"])){ echo "$Iprice1"; } ?>"></td>
      <td><input type="text" name="Iamt1" value="<?php if(isset($_POST["Itemid1"])){ echo "$Iamt1"; } ?>"></td>
    </tr>
    <tr>
      <td>2</td>
      <td><input type="text" name="Iid2" value="<?php if(isset($_POST["Itemid2"])){ echo "$Iid2"; } ?>"></td>
      <td><input type="text" name="Iweight2" value="<?php if(isset($_POST["Itemid2"])){ echo "$Iweight2"; } ?>"></td>
      <td><input type="text" name="Itype2" value="<?php if(isset($_POST["Itemid2"])){ echo "$Itype2"; } ?>"></td>
      <td><input type="text" name="Icategory2" value="<?php if(isset($_POST["Itemid2"])){ echo "$Icategory2"; } ?>"></td>
      <td><input type="text" name="Imc2" value="<?php if(isset($_POST["Itemid2"])){ echo "$Imc2"; } ?>"></td>
      <td><input type="text" name="Iprice2" value="<?php if(isset($_POST["Itemid2"])){ echo "$Iprice2"; } ?>"></td>
      <td><input type="text" name="Iamt2" value="<?php if(isset($_POST["Itemid2"])){ echo "$Iamt2"; } ?>"></td>
    </tr>
    <tr>
      <td>3</td>
      <td><input type="text" name="Iid3" value="<?php if(isset($_POST["Itemid3"])){ echo "$Iid3"; } ?>"></td>
      <td><input type="text" name="Iweight3" value="<?php if(isset($_POST["Itemid3"])){ echo "$Iweight3"; } ?>"></td>
      <td><input type="text" name="Itype3" value="<?php if(isset($_POST["Itemid3"])){ echo "$Itype3"; } ?>"></td>
      <td><input type="text" name="Icategory3" value="<?php if(isset($_POST["Itemid3"])){ echo "$Icategory3"; } ?>"></td>
      <td><input type="text" name="Imc3" value="<?php if(isset($_POST["Itemid3"])){ echo "$Imc3"; } ?>"></td>
      <td><input type="text" name="Iprice3" value="<?php if(isset($_POST["Itemid3"])){ echo "$Iprice3"; } ?>"></td>
      <td><input type="text" name="Iamt3" value="<?php if(isset($_POST["Itemid3"])){ echo "$Iamt3"; } ?>"></td>
    </tr>
    <tr>
      <td>4</td>
      <td><input type="text" name="Iid4" value="<?php if(isset($_POST["Itemid4"])){ echo "$Iid4"; } ?>"></td>
      <td><input type="text" name="Iweight4" value="<?php if(isset($_POST["Itemid4"])){ echo "$Iweight4"; } ?>"></td>
      <td><input type="text" name="Itype4" value="<?php if(isset($_POST["Itemid4"])){ echo "$Itype4"; } ?>"></td>
      <td><input type="text" name="Icategory4" value="<?php if(isset($_POST["Itemid4"])){ echo "$Icategory4"; } ?>"></td>
      <td><input type="text" name="Imc4" value="<?php if(isset($_POST["Itemid4"])){ echo "$Imc4"; } ?>"></td>
      <td><input type="text" name="Iprice4" value="<?php if(isset($_POST["Itemid4"])){ echo "$Iprice4"; } ?>"></td>
      <td><input type="text" name="Iamt4" value="<?php if(isset($_POST["Itemid4"])){ echo "$Iamt4"; } ?>"></td>
    </tr>
    <tr>
      <td colspan="6"></td>
      <td>Total Amount :-</td>
      <td><input type="text" name="total_amt" value="<?php if(isset($_POST["Itemid1"])){$total_amt=$Iamt4 + $Iamt3 + $Iamt2 + $Iamt1; echo "$total_amt"; } ?>"></td>
    </tr>
  <tr>
    <td colspan="7"></td>
    <td><input type="submit" value="Submit"></td>
  </tr>
  </table>
</form>
<br>

</table><!-- ss="container"> -->
        <div class="row align-items-center justify-content-center text-center site-vh-100">
        </div>
  </div>
</section>

</div>
</body>
</html>
