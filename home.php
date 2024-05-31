<?php
	include 'DBConn.php';

	session_start();

	$user_id = $_SESSION['user_id'];

	if(!isset($user_id)){
		header('location:login.php');
	}

	if(isset($_POST['add_to_cart'])){
		$product_name = $_POST['product_name'];
		$product_price = $_POST['product_price'];
		$product_image = $_POST['product_image'];
		$product_quantity = $_POST['product_quantity'];

	$check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

	if(mysqli_num_rows($check_cart_numbers) > 0){
		$message[] = 'Already added to the cart!';
	}else{
		mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, quantity, image) VALUES('$user_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
		$message[] = 'product added to cart!';
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HOME</title>

	<!-- font awesome cdn link  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

	<!-- custom css file link  -->
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php include 'header.php'; ?>

	<section class="home">
		<div class="content">
			<h3>Buy and Sell textbooks!</h3>
			<p>Don't go any further, buy and sell textbooks right here, right now!</p>
			<a href="shop.php" class="white-btn">Shop Now!</a>
		</div>
	</section>

	<section class="products">
		<h1 class="title">Featured Products</h1>
		<div class="box-container">
			<div class="box">
				<img src="images/book1.jpg">
				<h4>Effective Commmunication</h4>
				<p>R252.00</p>
			</div>
			<div class="box">
				<img src="images/book2.jpg">
				<h4>Introduction To Business Management</h4>
				<p>R446.00</p>
			</div>
			<div class="box">
				<img src="images/book3.jpg">
				<h4>Contemporary Issues In Human Resources</h4>
				<p>R460.00</p>
			</div>
			<div class="box">
				<img src="images/book4.jpg">
				<h4>General Principles of Commercial Law</h4>
				<p>R486.00</p>
			</div>
		</div>
	</section>

	<?php include 'footer.php'; ?>

	<!-- custom js file link  -->
	<script src="js/script.js"></script>
</body>
</html>