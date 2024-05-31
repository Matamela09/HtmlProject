<?php
	include 'DBConn.php';

	session_start();

	$user_id = $_SESSION['user_id'];

	if(!isset($user_id)){
		header('location:login.php');
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>About Us</title>

	<!-- font awesome cdn link  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

	<!-- custom css file link  -->
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php include 'header.php'; ?>

	<section class="about">
		<div class="flex">
			<div class="image">
				<img src="images/about.jpg" alt="">
			</div>
			<div class="content">
				<h3>About Us</h3>
				<p>TEDEK was created by students who look forward to for helping students sell their used book.
				They understood the value of not having to afford and also making money of your books.
				The business has been making money and we are expanding to other buying and selling range of books in order to fulfill the students needs.</p>
			</div>
		</div>
	</section>

	<section class="authors">
		<h1 class="title">Authors</h1>
		<div class="box-container">
			<div class="box">
				<img src="images/author2.jpeg" alt="">
				<div class="share">
					<a href="#"class="fab fa-facebook-f"></a>
					<a href="#"class="fab fa-twitter"></a>
					<a href="#"class="fab fa-instagram"></a>
				</div>
				<h3>Bokang Letuba</h3>
			</div>
			
			<div class="box">
				<img src="images/author1.jpeg" alt="">
				<div class="share">
					<a href="#"class="fab fa-facebook-f"></a>
					<a href="#"class="fab fa-twitter"></a>
					<a href="#"class="fab fa-instagram"></a>
				</div>
				<h3>Sonia Matamela</h3>
			</div>
			
		</div>
	</section>

	<?php include 'footer.php'; ?>

	<!-- custom js file link  -->
	<script src="js/script.js"></script>
</body>
</html>