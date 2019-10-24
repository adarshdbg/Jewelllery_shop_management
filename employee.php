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
<html>
<head>
  <title></title>
  <style type="text/css">
/* Add a black background color to the top navigation */
.topnav {
    background-color: #fc4503;
    overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
}
/* Change the color of links on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
    background-color: #4CAF50;
    color: white;
}

td{
  color:  white;
}
.colors{
  color:#05f569;
}
#back{
  margin-left: 1200px;
}


</style>
</head>
<body background="Images/Jewellery_M_pf.jpg">
<div>
<font color="orange" size="10"><b align="margin-left"><pre>A D A R S H    J E W E L L E R S</pre></b></font>
</div>
<div class="topnav" id="myTopnav">

  <!-- <a href="rates.php">Rates</a> -->
  <a href="billing.php">Billing</a>
  <a href="items.php">Items</a>
  <a href="customer.php">Customer</a>
  <a href="supplier.php">Suppliers</a>
  <a href="employee.php">Employee</a>
  <!-- <a href="aboutus.php">AboutUs</a> -->
  <div id="back">
    <a href="index.php">Back</a>
  </div>
</div>
<form method="post" action="add_employee.php">
  <h3 class="colors">Add Employee Information :-</h3>
<br>
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
    <!-- <tr> -->
      <!-- <td>Customer Date</td>
      <td><input type="date" name="Cdate" placeholder="" required></td>
    </tr> -->
  </table>
  <input type="submit" value="submit">
</form>

<form method="post" action="employee.php">
<h2 class="colors">  Check Employee Details :- <input type="text" name="Custid" placeholder="Employee ID"><input type="submit" value="submit"></h2>
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

</table>

</body>
</html>
