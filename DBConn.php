<?php
	//Connecting to the database
	$con = mysqli_connect('localhost','root','','Bookstore');
	
// check connection
	if (!$con) {
		echo "The connection failed!";
	}	
?>