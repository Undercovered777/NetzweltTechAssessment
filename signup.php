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
			//save to database
			$user_id = random_num(21);
			$query = "insert into users (user_id, user_name, password) values ('$user_id', '$user_name', '$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		} else
		{
			echo "Please enter some valid information!";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<title>Signup</title>
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
<body bgcolor="#f9e8ce">
	<div class="col-sm-4.5"></div>
	<div id="box" class="container-fluid col-sm-3">
		<h1>Netzwelt</h1>
		<h2 style="color: #d9dbe7;">Sign up</h2>
		<form method="post">
			<input type="text" name="user_name" placeholder="Enter your Username" class="container-fluid"><br>
			<input type="password" name="password" placeholder="Enter your Password" class="container-fluid"><br><br>
			<input type="submit" value="Sign up" class="btn btn-secondary">
			<a href="login.php">Click to Login</a>
		</form>
	</div>
	<div class="col-sm-4.5"></div>
</body>
</html>