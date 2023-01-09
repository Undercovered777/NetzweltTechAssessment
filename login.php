<?php
session_start();

	include("connection.php");
	include("functions.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{
			//read from the database
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
						header("Location: index2.php");
						die;
					}
				}
			}

			echo "Invalid username or password!";
		} else
		{
			echo "Invalid username or password!";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	<title>Login</title>
	<style type="text/css">
		#box {
			border-style: solid;
			padding: 5px;
			text-align: center;
			margin-top: 50px;
			background-color: #769898 ;
			border-color: #bda28d;
		}
		h1 {
			font-style: italic;
			color: #d9dbe7;
		}
		body {
			background-color: #f9e8ce;
		}
	</style>
</head>
<body>
	<div class="col-sm-4.5"></div>
	<div id="box" class="container-fluid col-sm-3">
		<h1>Netzwelt</h1>
		<h2 style="color: #d9dbe7;">Login</h2>
		<form method="post">
			<input type="text" name="user_name" placeholder="Enter your Username" size="50" class="container-fluid"><br>
			<input type="password" name="password" placeholder="Enter your Password" size="50" class="container-fluid"><br><br>
			<input type="submit" value="Login" class="btn btn-secondary">
			<a href="signup.php">Sign up</a>
		</form>
	</div>
	<div class="col-sm-4.5"></div>
</body>
</html>