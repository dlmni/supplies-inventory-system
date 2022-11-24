<?php 
session_start();
include('login/connection.php');
include('login/functions.php');

$user_data = check_login($con);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
	<link rel="stylesheet" href="css/home.css">
	<!--fontawesome-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
	<div class="wrapper">
		<div class="sidebar">
			<img src="img/logo.png" alt="brgy logo">
			<ul>
				<li><a href="navigation/item.php">Item</a></li>
				<li><a href="#">Inventory</a></li>
				<li><a href="#">Reports</a></li>
				<li><a href="#">Supplier Profile</a></li>
				<li><a href="login/logout.php">Logout</a></li>
			</ul>
		</div>
		<div class="main_content">
			<div class="header">Welcome Admin! This is the Supplies Inventory System</div>
			<div class="info">
			</div>
		</div>
	</div>
</body>
</html>

			