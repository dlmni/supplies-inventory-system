<?php 
session_start();
	include("login/connection.php");
	include("login/functions.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{

		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
	
	
		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{
	
	
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);
	
			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{
	
					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{
	
						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo '<script>alert("Wrong Username or Password")</script>';

		}
		
		else
		{
			echo '<script>alert("Wrong Username or Password")</script>';

		}
	}
	?>



<!DOCTYPE html>
<html>
<title>Inventory System</title>

<head>
	<title>Supplies Inventory System</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
</head>


<body>

<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="logo">
						<img src="img/logo.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form action="#" method="Post">
                        <div class="header">
                            <h1>Admin Login</h1>
                        </div>
                        <!--username-->
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input id="text" type="text" name="user_name" placeholder="Username"><br><br>
						</div>
                        <!--password-->
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input id="pSassword" type="password" name="password" placeholder="Password"><br><br>
						</div>
                        <!--login button-->
							<div class="d-flex justify-content-center mt-3 login_container">
				 	<button type="submit" name="button" class="btn login_btn">Login</button>
				   </div>
					</form>
				</div>
				</div>
			</div>
		</div>
	</div>


</form>
</body>
</html>

