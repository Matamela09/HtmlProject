<?php
	if(isset($message)){
		foreach($message as $message){
			echo '
				<div class="message">
				<span>'.$message.'</span>
				<i class="fas fa-times" onclick="this.parentElement.remove();"></i>
				</div>
		';
		}
	}
?>

<header class="header">
	<div class="header-2">
		<div class="flex">
			<!-- Adds the logo picture -->
			<div class="logo">
				<img src="images/icon.jpg" width="125px">
			</div>
			
			<!-- Navigation for switching pages -->
			<nav class="navbar">
				<a href="home.php">Home</a>
				<a href="shop.php">Books</a>
				<a href="about.php">About Us</a>
				<a href="Register.php">Account</a>
			</nav>

			<!-- Add the icons -->
			<div class="icons">
				<div id="menu-btn" class="fas fa-bars"></div>
				
			<!-- Shows how many items are in the cart -->
            <?php
				$select_cart_number = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
				$cart_rows_number = mysqli_num_rows($select_cart_number); 
            ?>
			<!-- When cart is pressed, switch to the cart page -->
			<a href="cart.php"> <i class="fas fa-shopping-cart"></i> <span>(<?php echo $cart_rows_number; ?>)</span> </a>
			</div>
		</div>
	</div>
</header>