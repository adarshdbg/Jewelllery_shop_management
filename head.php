<?php
include('config1.php');
session_start();
?>
<div id="headdown">
	<div class="logo"><a href="index4.php">CART</a></div>
		<br>
		</div>

	<div class="acount">
		<div class="aclogo"><i class="fa fa-user" style="color:#fff; font-size:15px; margin-top:2px"></i></div>
		<div class="actext"><a href="cart.php">My Account</a></div>

	</div>

    	<a href="cart1.php"><div class="cart">
			<i class="fa fa-shopping-cart"></i>
		    <p class="cart-e">Cart</p>
    		<p class="cart-f">
           


	            <?php
					if(isset($_SESSION["cartshop"])){
						$s=count($_SESSION["cartshop"]);
					}
					else{
						$s=0;
						}
					echo $s;
				?>
            </p>
		</div></a>

</div>


		<div class="button"><i class="" style="color:#fff; font-size:15px; margin-top:2px"></i></div>
		<div class="actext"><a href="login.php">LOGOUT</a></div>

	</div>


