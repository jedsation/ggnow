<?php
ob_start();//returns all the data from the database at once
session_start();


	$conn = mysqli_connect("localhost", "root", "","registration");//change parameters

	if(mysqli_connect_errno()){
		echo "Failed to connect: " . mysqli_connect_errno();
	}
?>